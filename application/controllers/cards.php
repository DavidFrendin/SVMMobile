<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cards extends CI_Controller
{
	public function index()
	{
		$this->load->view('cards');
	}

	public function expansion($expansion)
	{
		$data['expansion_name'] = urldecode($expansion);
		$doc = file_get_contents('http://www.svenskamagic.com/svmapp_cardfinder.php?type=cards&s_exp=' . $expansion);
		$array = json_decode($doc);
		$data['cards'] = $array;

		$this->load->view('cards_expansion', $data);
	}

	public function view($cardname)
	{
		$doc = file_get_contents('http://www.svenskamagic.com/svmapp_cardfinder.php?type=cards&s_name=' . $cardname);
		$array = json_decode($doc);

		$data['card'] = $array[0];
		$this->load->view('cards_view', $data);
	}

	public function viewpic($cardname)
	{
		$doc = file_get_contents('http://www.svenskamagic.com/svmapp_cardfinder.php?type=cards&s_name=' . $cardname);
		$array = json_decode($doc);

		$data['card'] = $array[0];
		$this->load->view('cards_viewpic', $data);
	}
}
