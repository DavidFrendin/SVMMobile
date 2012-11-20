<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

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

		//if ($requestURI[1] == 'remove_notifications')
		//{
			//$svm->RemoveNotifications();
		//}
		
		//$this->set('recentevents', $svm->RecentEvents());
		//$this->set('cntmessages', $svm->NewMessages());
		//$this->set('cntFriendsOnline', $svm->FriendsOnline());
		
		$data = array(
               'recentevents' => $this->svm->RecentEvents()
               , 'cntmessages' => $this->svm->NewMessages()
               , 'cntFriendsOnline' => $this->svm->FriendsOnline()
          );

		$this->load->view('menu', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */