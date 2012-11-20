<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */