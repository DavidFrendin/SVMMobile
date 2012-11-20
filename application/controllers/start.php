<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ((isset($_COOKIE['svmobile1'])) && (isset($_COOKIE['svmobile2'])))
		{
			$this->load->library('AntiMcrypt');

			$_POST['password'] = $this->antimcrypt->decrypt($_COOKIE['svmobile1']);
			$_POST['username'] = $this->antimcrypt->decrypt($_COOKIE['svmobile2']);
			$_POST['rememberme'] = 'on';
		}

		if ($this->svm->Authenticated === true)
		{
			redirect('/menu/', 'refresh');
			//header('Location: menu');
			die();
		}
		else
		{
			//print_r($svm);
			//die();
		}
		
		$data = array(
               'login_failed' => false
          );

		$this->load->view('login', $data);
	}
	
	public function dologin()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		if (isset($_POST['rememberme']))
		{
			$rememberme = $_POST['rememberme'];
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
				setcookie ("svmobile_un", "", time() - 3600);
				setcookie ("svmobile_pw", "", time() - 3600);
			}
			redirect('/menu/', 'refresh');
			//header('Location: menu');
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
		setcookie ("svmobile1", "", time() - 3600);
		setcookie ("svmobile2", "", time() - 3600);

		redirect('/start/', 'refresh');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */