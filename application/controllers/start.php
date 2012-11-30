<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller
{
	public function index()
	{
		if ((isset($_COOKIE['svmobile1'])) && (isset($_COOKIE['svmobile2'])))
		{
			$this->load->library('AntiMcrypt');

			$password = $this->antimcrypt->decrypt($_COOKIE['svmobile1']);
			$username = $this->antimcrypt->decrypt($_COOKIE['svmobile2']);
			
			if ($this->svm->Login($username, $password))
			{
				$this->load->library('AntiMcrypt');
				setcookie("svmobile1", $this->antimcrypt->encrypt($password), time() + 630720000);
				setcookie("svmobile2", $this->antimcrypt->encrypt($username), time() + 630720000);
				redirect('/menu/', 'refresh');
				die();
			}
		}

		if ($this->svm->Authenticated === true)
		{
			redirect('/menu/', 'refresh');
			die();
		}
		
		$data = array(
               'login_failed' => false
          );

		$this->load->view('login', $data);
	}
	
	public function dologin()
	{
		$this->load->library('AesCtr');

		$decrypted = $this->aesctr->decrypt($_POST['jCryption'], $_SESSION["key"], 256);
		parse_str($decrypted, $decrypted_array);

		$username = $decrypted_array['username'];
		$password = $decrypted_array['password'];
		if (isset($decrypted_array['rememberme']))
		{
			$rememberme = $decrypted_array['rememberme'];
		}
		else
		{
			$rememberme = false;
		}

		if ($this->svm->Login($username, $password))
		{
			if ($rememberme == 'on')
			{
				$this->load->library('AntiMcrypt');
				setcookie("svmobile1", $this->antimcrypt->encrypt($password), time() + 630720000);
				setcookie("svmobile2", $this->antimcrypt->encrypt($username), time() + 630720000);
			}
			else
			{
				setcookie ("svmobile_un");
				setcookie ("svmobile_pw");
			}
			redirect('/menu/', 'refresh');
			die();
		}
		else
		{
			$data = array(
				   'login_failed' => true
			  );

			$this->load->view('login', $data);
		}
	}
	
	public function logout()
	{
		$this->svm->Logout();
		setcookie ("svmobile1");
		setcookie ("svmobile2");

		redirect('/start/', 'refresh');

	}
}
