<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
{
	public function index()
	{
		if ($this->svm->Authenticated != true)
		{
			redirect('/start/', 'refresh');
			die();
		}

		$data = array(
			'profile' => $this->svm->FetchUserProfile($this->svm->UserId())
		);

		$this->load->view('profile', $data);
	}
	
	public function view($userid)
	{
		if ($this->svm->Authenticated != true)
		{
			redirect('/start/', 'refresh');
			die();
		}

		$data = array(
			'profile' => $this->svm->FetchUserProfile($userid)
		);

		$this->load->view('profile', $data);
	}
}
