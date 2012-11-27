<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Friends extends CI_Controller
{
	public function index()
	{
		if ($this->svm->Authenticated != true)
		{
			redirect('/start/', 'refresh');
			die();
		}

		$data = array(
			'friends' => $this->svm->ListFriends()
		);

		$this->load->view('friends', $data);
	}

	public function add($username)
	{
		if ($this->svm->Authenticated != true)
		{
			redirect('/start/', 'refresh');
			die();
		}
		
		$data['message'] = false;
		$data['username'] = $username;
		
		if ((isset($_POST['username'])) && (isset($_POST['message'])) && (isset($_POST['group'])))
		{
			$username = $_POST['username'];
			$message = $_POST['message'];
			$group = $_POST['group'];
			$this->svm->AddFriend($username, $message, $group);
			
			$data['message'] = "<h2>Skickat</h2>";
		}
		
		$data['groups'] = $this->svm->ListFriendGroups();

		$this->load->view('friends_add', $data);
	}

	public function status($action = false, $removalid = false)
	{
		if ($this->svm->Authenticated != true)
		{
			redirect('/start/', 'refresh');
			die();
		}
		
		if ($action == 'remove')
		{
			$this->svm->CancelFriendRequest($removalid);
		}

		$data['message'] = false;
		$data['activerequests'] = $this->svm->ListFriendRequests();

		$this->load->view('friends_status', $data);
	}
}
