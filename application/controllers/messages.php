<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {

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
			'MailFolders' => $this->svm->MailFolders()

		);

		$this->load->view('messages', $data);
	}
	
	public function compose()
	{
		if ($this->svm->Authenticated != true)
		{
			redirect('/start/', 'refresh');
			die();
		}

		$this->load->view('messages_compose');
	}
	
	public function Folder($id)
	{
		if ($this->svm->Authenticated != true)
		{
			redirect('/start/', 'refresh');
			die();
		}

		$data = array(
			'mail' => $this->svm->MailByFolder($id)
		);

		$this->load->view('messages_folder', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */