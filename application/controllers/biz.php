<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Biz extends CI_Controller
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
		
		//$this->set('recentevents', $svm->RecentEvents());
		//$this->set('cntmessages', $svm->NewMessages());
		//$this->set('cntFriendsOnline', $svm->FriendsOnline());
		
		$data = array(
               'mybiz' => $this->svm->MyBiz()
          );

		$this->load->view('biz', $data);
	}
}
