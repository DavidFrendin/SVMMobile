<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller
{
	public function index()
	{
		die('404');
	}
	
	public function searchusername()
	{
		$username = $_GET['term'];
		$doc = file_get_contents('http://www.svenskamagic.com/jqacquery.php?type=member&q=' . urlencode($username) . '&limit=10&timestamp=' . time());
		//$doc = str_replace('/pics/medlemmar/', 'http://www.svenskamagic.com/pics/medlemmar/', $doc);
		$arr = explode("\n", $doc);
		array_pop($arr);
		$arr = array_slice($arr , 0, 5);
		foreach ($arr as &$row)
		{
			$r = explode('>', $row, 2);
			$row = trim($r[1]);
		}
		$json = json_encode($arr);
		die($json);
	}
}
