<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller
{
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
	
	public function compose($recipient = '')
	{
		if ($this->svm->Authenticated != true)
		{
			redirect('/start/', 'refresh');
			die();
		}
		
		if ((isset($_POST['recipient'])) && (isset($_POST['subject'])) && (isset($_POST['text'])) && (isset($_POST['save'])))
		{
			$recipient = $_POST['recipient'];
			$subject = $_POST['subject'];
			$text = $_POST['text'];
			$save = ($_POST['save'] == 'on');
			
			$this->svm->SendInternMessage($recipient, $subject, $text, $save);
		}

		$data['recipient'] = $recipient;
		$this->load->view('messages_compose', $data);
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

	public function View($MessageId)
	{
		if ($this->svm->Authenticated != true)
		{
			redirect('/start/', 'refresh');
			die();
		}

		$data = array(
			'mail' => $this->svm->GetUniqueMail($MessageId)
		);

		$this->load->view('messages_view', $data);
	}
}
