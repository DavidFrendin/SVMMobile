<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function index()
	{
		if ($this->svm->Authenticated != true)
		{
			redirect('/start/', 'refresh');
			die();
		}

		//if ($requestURI[1] == 'remove_notifications')
		//{
			//$svm->RemoveNotifications();
		//}
		
		$data = array(
               'recentevents' => $this->svm->RecentEvents()
               , 'cntmessages' => $this->svm->NewMessages()
               , 'cntFriendsOnline' => $this->svm->FriendsOnline()
          );

		$this->load->view('menu', $data);
	}
}
