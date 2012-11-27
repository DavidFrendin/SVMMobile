<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller
{
	public function index()
	{
		if ($this->svm->Authenticated != true)
		{
			redirect('/start/', 'refresh');
			die();
		}

		$data = array(
			'news_list' => $this->svm->ListNews()
		);

		$this->load->view('news', $data);
	}
	
	public function view($id)
	{
		if ($this->svm->Authenticated != true)
		{
			redirect('/start/', 'refresh');
			die();
		}

		$data = array(
			'news' => $this->svm->NewsById($id)
		);

		$this->load->view('news_view', $data);
	}
}
