<?php
class Svm extends CI_Model {

	private $base_html;
	public $Authenticated = false;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
		libxml_use_internal_errors(true); //html is commonly malformed, disable errors
		
		$this->FetchBaseHTML();
    }
    
	public function UserId()
	{
		if (!$this->Authenticated)
		{
			return false;
		}
		$doc = new DOMDocument();
		$doc->loadHTML($this->base_html);
		$xpath = new DOMXPath($doc);
		$query = "//a[@id='jagsommedlem']";
		$entries = $xpath->query($query);
		$el = $entries->item(0);
		$href = $el->getAttribute("href");
		$href_array = explode('=',$href);
		return (int)$href_array[1];
	}

	public function NewMessages()
	{
		if ($this->Authenticated == false)
		{
			return false;
		}

		$doc = new DOMDocument();
		$doc->loadHTML($this->base_html);
		$xpath = new DOMXPath($doc);
		$query = "//div[@id='new_mail']/a";
		$entries = $xpath->query($query);
		$el = $entries->item(0);
		if (!$el)
		{
			return 0;
		}
		$nodeValue = $el->nodeValue;
		$nodeValue_array = explode(' ', $nodeValue);
		return (int)$nodeValue_array[0];
	}

	public function RecentEvents()
	{
		if ($this->Authenticated == false)
		{
			return false;
		}

		$doc = new DOMDocument();
		$doc->loadHTML($this->base_html);
		$xpath = new DOMXPath($doc);
		$query = "//div[@id='nyamess']//a[@class='noline text_rod']";
		$entries = $xpath->query($query);
		
		if (!$entries)
		{
			return false;
		}
		
		$recentevents = array();
		foreach ($entries as $entry)
		{
			$recentevents[] = $entry->nodeValue;
		}
		return $recentevents;
	}
	
	public function FriendsOnline()
	{
		if ($this->Authenticated == false)
		{
			return false;
		}

		$doc = new DOMDocument();
		$doc->loadHTML($this->base_html);
		$xpath = new DOMXPath($doc);
		$query = "//div[@id='vanneronline']//b[@class='text_gron']";
		$entries = $xpath->query($query);
		$el = $entries->item(0);
		if (!$el)
		{
			return 0;
		}
		$nodeValue = $el->nodeValue;
		$nodeValue_array = explode(' ', $nodeValue);
		return (int)$nodeValue_array[0];
	}
	
	private function FetchBaseHTML()
	{
		$this->base_html = $this->curl_fetch('http://www.svenskamagic.com/');
		
		//Authenticated
		$doc = new DOMDocument();
		$doc->loadHTML($this->base_html);
		
		$xpath = new DOMXPath($doc);
		$query = "count(//div[@id='loginbox'])";
		$result = $xpath->evaluate($query);
		
		if ($result == '1')
		{
			$this->Authenticated = false;
		}
		else
		{
			$this->Authenticated = true;
		}

	}
	
	function curl_fetch($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $this->CookieFile());
		curl_setopt($ch, CURLOPT_USERAGENT, "SVMobile");
		curl_setopt($ch, CURLOPT_URL, $url);
		ob_start();      // prevent any output
		$result = curl_exec($ch);
		if($result === false)
		{
			die('Curl error: ' . curl_error($ch));
		}
		$result2 = ob_get_clean();
		curl_close ($ch);
		unset($ch);    
		return $result;
	}

	function Logout()
	{
		$this->curl_fetch('http://www.svenskamagic.com/login.php?action=logout&requested_url=/index.php');

		$this->FetchBaseHTML();
		
		if ($this->Authenticated)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	function CookieFile()
	{
		$curl_cookie_path = $this->config->item('curl_cookie_path');
		if (isset($_SESSION['cookie']))
		{
			$filename = $_SESSION['cookie'];
		}
		else
		{
			$filename = md5(uniqid());
			$_SESSION['cookie'] = $filename;
		}
		$fullpath = $curl_cookie_path . $filename;
		return $fullpath;
	}
	
	private function CurlPost($url, $data)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_COOKIEJAR, $this->CookieFile());
		curl_setopt($ch, CURLOPT_COOKIEFILE, $this->CookieFile());
		curl_setopt($ch, CURLOPT_USERAGENT, "SVMobile");
		curl_setopt($ch, CURLOPT_TIMEOUT, 40);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, TRUE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		ob_start();      // prevent any output
		$result = curl_exec($ch);
		if($result === false)
		{
			die('Curl error: ' . curl_error($ch));
		}
		$result2 = ob_get_clean();
		curl_close ($ch);
		unset($ch);
		
		return $result;
	}
	
	function Login($username, $password)
	{
		$url = 'http://www.svenskamagic.com/login.php?requested_url=/index.php';
		$data = "loginusername=$username&password=$password&action=process_login_attempt";
		//die($data);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_COOKIEJAR, $this->CookieFile());
		curl_setopt($ch, CURLOPT_COOKIEFILE, $this->CookieFile());
		curl_setopt($ch, CURLOPT_USERAGENT, "SVMobile");
		curl_setopt($ch, CURLOPT_TIMEOUT, 40);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, TRUE);
		//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		ob_start();      // prevent any output
		$result = curl_exec($ch);
		//print_r($result);
		//die();
		if($result === false)
		{
			die('Curl error: ' . curl_error($ch));
		}
		$result2 = ob_get_clean();
		curl_close ($ch);
		unset($ch);
		
		//Check if login was successfull
		$this->FetchBaseHTML();
		//echo $this->base_html;
		//die();
		return $this->Authenticated;
	}
	
	public function AddFriend($username, $message, $groupid)
	{
		$result = $this->CurlPost("http://www.svenskamagic.com/profile/vanner.php", "invite_user=$username&message=$message&group=$groupid&action=send_friendinvite");
	}
	
	public function RemoveNotifications()
	{
		$this->curl_fetch('http://www.svenskamagic.com/do_mess.php?empty=true&requested_url=/');
		$this->FetchBaseHTML();
	}
	
	function ListNews()
	{
		$news_html = $this->curl_fetch('http://www.svenskamagic.com/');
		
		$doc = new DOMDocument();
		$doc->loadHTML($news_html);
		
		$xpath = new DOMXPath($doc);
		$query = "//td[@id='news-list']/div/a[@class='litenrubrik']";
		$entries = $xpath->query($query);
		$news_captions = array();
		$news_id = array();
		foreach ($entries as $entry)
		{
			$news_captions[] = $entry->textContent;
			
			$href = $entry->getAttribute("href");
			$href_array = explode('=', $href);
			$news_id[] = $href_array[1];
		}

		$xpath = new DOMXPath($doc);
		$query = "//td[@id='news-list']/div/a[@class='noline']";
		$entries = $xpath->query($query);
		$news_authors = array();
		foreach ($entries as $entry)
		{
			$news_authors[] = $entry->textContent;
		}

		$xpath = new DOMXPath($doc);
		$query = "//td[@id='news-list']/div/p";
		$entries = $xpath->query($query);
		$news_bodies = array();
		foreach ($entries as $entry)
		{
			$news_bodies[] = $entry->textContent;
		}
		
		$news[] = array('caption'=>$news_captions[0], 'body'=>$news_bodies[0], 'author'=>$news_authors[0], 'id'=>$news_id[0]);
		$news[] = array('caption'=>$news_captions[1], 'body'=>$news_bodies[1], 'author'=>$news_authors[1], 'id'=>$news_id[1]);
		$news[] = array('caption'=>$news_captions[2], 'body'=>$news_bodies[2], 'author'=>$news_authors[2], 'id'=>$news_id[2]);
		$news[] = array('caption'=>$news_captions[3], 'body'=>$news_bodies[3], 'author'=>$news_authors[3], 'id'=>$news_id[3]);
		$news[] = array('caption'=>$news_captions[4], 'body'=>$news_bodies[4], 'author'=>$news_authors[4], 'id'=>$news_id[4]);
		$news[] = array('caption'=>$news_captions[5], 'body'=>$news_bodies[5], 'author'=>$news_authors[5], 'id'=>$news_id[5]);
		$news[] = array('caption'=>$news_captions[6], 'body'=>$news_bodies[6], 'author'=>$news_authors[6], 'id'=>$news_id[6]);
		$news[] = array('caption'=>$news_captions[7], 'body'=>$news_bodies[7], 'author'=>$news_authors[7], 'id'=>$news_id[7]);
		$news[] = array('caption'=>$news_captions[8], 'body'=>$news_bodies[8], 'author'=>$news_authors[8], 'id'=>$news_id[8]);
		$news[] = array('caption'=>$news_captions[9], 'body'=>$news_bodies[9], 'author'=>$news_authors[9], 'id'=>$news_id[9]);
		
		return $news;
	}

	function MyBiz()
	{
		$html = $this->curl_fetch('http://www.svenskamagic.com/marketplace/index.php?what=biz');
		
		$doc = new DOMDocument();
		$doc->loadHTML($html);

		$xpath = new DOMXPath($doc);
		$query = "//div[@class='box morkrod']//a";
		$entries = $xpath->query($query);
		foreach ($entries as $entry)
		{
			$biztext[] = $entry->textContent;
		}

		$xpath = new DOMXPath($doc);
		$query = "//div[@class='box morkrod']//div";
		$entries = $xpath->query($query);
		$cnt = 0;
		foreach ($entries as $entry)
		{
			$date = $entry->textContent;
			$date = str_replace(trim($biztext[$cnt]), '', $date);
			$bizdate[] = trim($date);
			$cnt++;
		}
		
		$cnt = 0;
		foreach ($biztext as $text)
		{
			$mybiz['i_have_not_answered'][] = array('text'=>$text, 'date'=>$bizdate[$cnt]);
			$cnt++;
		}
		
		$xpath = new DOMXPath($doc);
		$query = "//div[@class='box gron']//a";
		$entries = $xpath->query($query);
		$biztext = array();
		foreach ($entries as $entry)
		{
			$biztext[] = $entry->textContent;
		}

		$xpath = new DOMXPath($doc);
		$query = "//div[@class='box morkrod']//div";
		$entries = $xpath->query($query);
		$cnt = 0;
		$bizdate = array();
		foreach ($entries as $entry)
		{
			$date = $entry->textContent;
			$date = str_replace(trim($biztext[$cnt]), '', $date);
			$bizdate[] = trim($date);
			$cnt++;
		}
		
		$cnt = 0;
		foreach ($biztext as $text)
		{
			$mybiz['you_have_not_answered'][] = array('text'=>$text, 'date'=>$bizdate[$cnt]);
			$cnt++;
		}
		
		return $mybiz;
	}

	function innerXML($node)
{
    $doc  = $node->ownerDocument;
    $frag = $doc->createDocumentFragment();
    foreach ($node->childNodes as $child)
    {
        $frag->appendChild($child->cloneNode(TRUE));
    }
    return $doc->saveXML($frag);
	}
	
	function NewsById($id)
	{
		$result = array();
		$news_html = $this->curl_fetch('http://www.svenskamagic.com/news/index.php?ID=' . $id);
		
		$doc = new DOMDocument();
		$doc->loadHTML($news_html);
		
		$xpath = new DOMXPath($doc);
		$query = "//span[@class='rubrik']";
		$entries = $xpath->query($query);
		$el = $entries->item(0);
		$result['caption'] = $el->textContent;

		$xpath = new DOMXPath($doc);
		$query = "//p[@id='textas']";
		$entries = $xpath->query($query);
		$el = $entries->item(0);
		$result['body'] = $this->innerXML($el);
		
		$result['body'] = str_replace('/medlem/?ID=', site_url('profile/view') . '/', $result['body']);

		$xpath = new DOMXPath($doc);
		$query = "//td[@id='content']//form/table[@width='100%']/tr/td/b";
		$entries = $xpath->query($query);
		$news_comments_users = array();
		foreach ($entries as $entry)
		{
			$query2 = "";
			//$entries2 = $xpath->query("//td[@class='brodtext']", $entry);
			$news_comments_users[] = $entry->nodeValue;
		}

		$xpath = new DOMXPath($doc);
		$query = "//td[@id='content']//form/table[@width='100%']/tr/td/img";
		$entries = $xpath->query($query);
		$news_comments_users_images = array();
		foreach ($entries as $entry)
		{
			$query2 = "";
			//$entries2 = $xpath->query("//td[@class='brodtext']", $entry);
			$news_comments_users_images[] = $entry->getAttribute("src");
		}

		$xpath = new DOMXPath($doc);
		$query = "//td[@id='content']//form/table[@width='100%']/tr/td/table/tr/td[@class='brodtext']";
		$entries = $xpath->query($query);
		$news_comments_body = array();
		foreach ($entries as $entry)
		{
			$query2 = "";
			//$entries2 = $xpath->query("//td[@class='brodtext']", $entry);
			$news_comments_body[] = $this->innerXML($entry);
		}

		$xpath = new DOMXPath($doc);
		$query = "//td[@id='content']//form/table[@width='100%']/tr/td/table/tr/td[@class='mini']";
		$entries = $xpath->query($query);
		$news_comments_time = array();
		foreach ($entries as $entry)
		{
			$query2 = "";
			//$entries2 = $xpath->query("//td[@class='brodtext']", $entry);
			$news_comments_time[] = $entry->nodeValue;
		}

		$cnt = 0;
		foreach ($news_comments_users as $comment_user)
		{
			$newarr['username'] = $comment_user;
			$newarr['image'] = $news_comments_users_images[$cnt];
			$newarr['body'] = $news_comments_body[$cnt];
			$newarr['time'] = str_replace('| Radera?', '', $news_comments_time[$cnt]);
			
			$comments[] = $newarr;
			$cnt++;
		}
		if (!isset($comments))
		{
			return false;
		}
		
		$result['comments'] = $comments;
		
		return $result;
	}
	
	public function MailFolders()
	{
		if ($this->Authenticated == false)
		{
			return false;
		}

		$html = $this->curl_fetch('http://www.svenskamagic.com/mail/mappar.php?mapp=n/a');
		
		$doc = new DOMDocument();
		$doc->loadHTML($html);
		
		$xpath = new DOMXPath($doc);
		$query = "//div[contains(@class, 'list_tabell')]//b";
		$entries = $xpath->query($query);
		foreach ($entries as $entry)
		{
			$names[] = $entry->nodeValue;
		}

		$xpath = new DOMXPath($doc);
		$query = "//div[contains(@class, 'list_tabell')]";
		$entries = $xpath->query($query);
		foreach ($entries as $entry)
		{
			$val = $entry->nodeValue;
			$arr1 = explode('(', $val);
			$arr2 = explode(')', $arr1[1]);
			$messages[] = $arr2[0];
		}

		$xpath = new DOMXPath($doc);
		$query = "//div[contains(@class, 'list_tabell')]//a";
		$entries = $xpath->query($query);
		foreach ($entries as $entry)
		{
			$href = $entry->getAttribute("href");
			if (strpos($href,'index.php?mail') === false)
			{
				$array = explode('=', $href);
				$links[] = $array[1];
			}
		}
		
		$cnt = 0;
		$result = array();
		foreach ($names as $name)
		{
			$result[] = array('name'=>$name, 'id'=>$links[$cnt], 'messages'=>$messages[$cnt]);
			$cnt++;
		}
		return $result;
	}

	public function MailByFolder($FolderId)
	{
		if ($this->Authenticated == false)
		{
			return false;
		}

		$html = $this->curl_fetch('http://www.svenskamagic.com/mail/index.php?folder=' . $FolderId);
		
		$doc = new DOMDocument();
		$doc->loadHTML($html);
		
		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]//span[@class='formtext']/b";
		$entries = $xpath->query($query);
		
		foreach ($entries as $entry)
		{
			$subjects[] = $entry->nodeValue;

		}

		$xpath = new DOMXPath($doc);
		$query = "//a[contains(@href, 'newmail=reply#nyttbrev')]";
		$entries = $xpath->query($query);
		$el = $entries->item(0);
		$href = $el->getAttribute("href");
		$arr1 = explode('mail=', $href);
		$arr2 = explode('&', $arr1[1]);
		$id = $arr2[0];
		$messageids[] = $id;

		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]//span[@class='formtext']/a";
		$entries = $xpath->query($query);
		
		foreach ($entries as $entry)
		{
			$subjects[] = $entry->nodeValue;
			$href = $entry->getAttribute("href");
			$arr1 = explode('=', $href);
			$arr2 = explode('&', $arr1[1]);
			$id = $arr2[0];
			$messageids[] = $id;
		}

		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]//span[@class='formtext']";
		$entries = $xpath->query($query);
		
		foreach ($entries as $entry)
		{
			$val = $entry->nodeValue;
			$val_array = explode('från', $val);
			$who[] = $val_array[1];
		}
		
		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]//i";
		$entries = $xpath->query($query);
		
		foreach ($entries as $entry)
		{
			$when[] = $entry->nodeValue;

		}

		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]//img[@height='27']";
		$entries = $xpath->query($query);
		
		foreach ($entries as $entry)
		{
			$src = $entry->getAttribute("src");
			if (stristr($src, 'mail_0000.gif'))
			{
				$image[] = 'http://svm.hellforge.net/assets/img/icons/email_open.png';
			}
			elseif (stristr($src, 'mail_0100.gif'))
			{
				$image[] = 'http://svm.hellforge.net/assets/img/icons/email_send_receive.png';
			}
			else
			{
				$image[] = 'http://www.svenskamagic.com/t/' . $src;
			}

		}
		
		$cnt = 0;
		$result = array();
		foreach ($subjects as $subject)
		{
			$result[] = array('subject'=>$subject, 'from'=>$who[$cnt], 'time'=>$when[$cnt], 'image'=>$image[$cnt], 'id'=>$messageids[$cnt]);
			$cnt++;
		}
		return $result;
	}
	
	public function SendInternMessage($recipient, $subject, $message, $save)
	{
		$save = true;
		if ($save)
		{
			$postdata = "mottagare[1]=$recipient&sel=&rubrik[1]=$subject&meddelande[1]=$message&spara[1]=false&spara_location[1]=&newmail=&mail=&p=1&action=send_mail";
		}
		else
		{
			$postdata = "mottagare[1]=$recipient&sel=&rubrik[1]=$subject&meddelande[1]=$message&spara_location[1]=out&newmail=&mail=&p=1&action=send_mail";
		}
		$result = $this->CurlPost("http://www.svenskamagic.com/mail/index.php", $postdata);
	}
	
	public function GetUniqueMail($MessageId)
	{
		if ($this->Authenticated == false)
		{
			return false;
		}

		$html = $this->curl_fetch('http://www.svenskamagic.com/mail/index.php?mail=' . $MessageId . '&p=1');
		
		$doc = new DOMDocument();
		$doc->loadHTML($html);
		
		$xpath = new DOMXPath($doc);
		$query = "//table//tr//td//table//tr//td//table//tr//td//table//tr//td//p";
		$entries = $xpath->query($query);
		$el = $entries->item(0);
		$message['subject'] = $el->nodeValue;

		$xpath = new DOMXPath($doc);
		$query = "//table//tr/td/table//tr/td//table//tr/td/table//tr/td/span//b/a";
		$entries = $xpath->query($query);
		$el = $entries->item(0);
		$message['from']['name'] = $el->nodeValue;
		
		$href = $el->getAttribute("href");
		$arr1 = explode('=', $href);
		$arr2 = explode('&', $arr1[1]);
		$id = $arr2[0];
		$message['from']['id'] = $id;

		$xpath = new DOMXPath($doc);
		$query = "//*[@id='content']/table[2]/tr/td/table/tr/td[3]/table/tr/td/table[3]/tr/td";
		$entries = $xpath->query($query);
		$el = $entries->item(0);
		$message['body'] = $this->innerXML($el);

		return $message;
	}
	
	public function ListFriends()
	{
		if ($this->Authenticated == false)
		{
			return false;
		}

		$html = $this->curl_fetch('http://www.svenskamagic.com/profile/vanner.php');
		
		$doc = new DOMDocument();
		$doc->loadHTML($html);
		
		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]/a/b";
		$entries = $xpath->query($query);
		
		foreach ($entries as $entry)
		{
			$friends[]['name'] = $entry->nodeValue;

		}

		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]/img";
		$entries = $xpath->query($query);
		
		$cnt = 0;
		foreach ($entries as $entry)
		{
			$src = $entry->getAttribute("src");
			$friends[$cnt]['image'] = $src;
			$friends[$cnt]['id'] = 11;
			$cnt++;
		}
		
		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]/a";
		$entries = $xpath->query($query);

		$cnt = 0;
		foreach ($entries as $entry)
		{
			$href = $entry->getAttribute("href");
			if (stristr($href, 'medlemsinfo'))
			{
				$friendsarray1 = explode('=', $href);
				$friendsarray2 = explode('&', $friendsarray1[1]);
				$friends[$cnt]['id'] = $friendsarray2[0];
				$cnt++;
			}
		}
		
		
		$xpath = new DOMXPath($doc);
		$query = "//div[@id='vanneronline']//td[@class='mini']//a";
		$entries = $xpath->query($query);
		foreach ($entries as $entry)
		{
			$friends_online[] = trim(strtolower($entry->nodeValue));
		}
		
		foreach ($friends as &$friend)
		{
			if (in_array(trim(strtolower($friend['name'])), $friends_online))
			{
				$friend['online'] = true;
			}
			else
			{
				$friend['online'] = false;
			}
		}
		
		/*foreach ($friends as $friend)
		{

			$friend_result[$friend['name']] = $friend;
		}*/

		$price = array();
		foreach ($friends as $key => $row)
		{
			$price[$key] = strtolower($row['name']);
		}
		array_multisort($price, SORT_ASC, $friends);

		
		return $friends;
		
		print_r($imgs);
		die('');

		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]//span[@class='formtext']/a";
		$entries = $xpath->query($query);
		
		foreach ($entries as $entry)
		{
			$subjects[] = $entry->nodeValue;

		}

		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]//span[@class='formtext']";
		$entries = $xpath->query($query);
		
		foreach ($entries as $entry)
		{
			$val = $entry->nodeValue;
			$val_array = explode('	från ', $val);
			$who[] = $val_array[1];

		}

		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]//i";
		$entries = $xpath->query($query);
		
		foreach ($entries as $entry)
		{
			$when[] = $entry->nodeValue;

		}

		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]//img[@height='27']";
		$entries = $xpath->query($query);
		
		foreach ($entries as $entry)
		{
			$src = $entry->getAttribute("src");
			$image[] = $src;

		}
		
		$cnt = 0;
		$result = array();
		foreach ($subjects as $subject)
		{
			$result[] = array('subject'=>$subject, 'from'=>$who[$cnt], 'time'=>$when[$cnt], 'image'=>$image[$cnt]);
			$cnt++;
		}
		return $result;
	}

	public function ListFriendGroups()
	{
		if ($this->Authenticated == false)
		{
			return false;
		}

		$html = $this->curl_fetch('http://www.svenskamagic.com/profile/vanner.php');
		
		$doc = new DOMDocument();
		$doc->loadHTML($html);
		
		$xpath = new DOMXPath($doc);
		$query = "//select[@name='group']/option";
		$entries = $xpath->query($query);
		
		foreach ($entries as $entry)
		{
			$group['name'] = $entry->nodeValue;
			$group['id'] = $entry->getAttribute("value");
			$groups[] = $group;
		}

		return $groups;
	}
	
	public function ListFriendRequests()
	{
		if ($this->Authenticated == false)
		{
			return false;
		}

		$html = $this->curl_fetch('http://www.svenskamagic.com/profile/vanner.php');
		
		$doc = new DOMDocument();
		$doc->loadHTML($html);
		
		$xpath = new DOMXPath($doc);
		$query = "//td[(@class='brodtext') and (@width='300')]//p//a";
		$entries = $xpath->query($query);
		
		for ($index = 0; $index < $entries->length; $index++)
		{
			$href = $entries->item($index)->getAttribute("href");
			
			if (stristr($href, 'medlemsinfo'))
			{
				$arr1 = explode('../medlemsinfo.php?ID=', $href);
				$id = $arr1[1];
				$name = $entries->item($index)->nodeValue;
				$index++;
				$arr2 = explode('vanner.php?avbryt=', $entries->item($index)->getAttribute("href"));
				$removalid = $arr2[1];
				$friends[$id]['id'] = $id;
				$friends[$id]['name'] = $name;
				$friends[$id]['removalid'] = $removalid;
			}
		}

		return $friends;
	}
	
	public function CancelFriendRequest($CancelId)
	{
		if ($this->Authenticated == false)
		{
			return false;
		}

		$html = $this->curl_fetch('http://www.svenskamagic.com/profile/vanner.php?avbryt=' . $CancelId);
	}

	public function FetchUserProfile($UserId)
	{
		if ($this->Authenticated == false)
		{
			return false;
		}

		$html = $this->curl_fetch('http://www.svenskamagic.com/medlem/?ID=' . $UserId);
		
		$doc = new DOMDocument();
		$doc->loadHTML($html);
		
		$xpath = new DOMXPath($doc);
		$query = "//div[@id='user-pres']";
		$entries = $xpath->query($query);
		
		$el = $entries->item(0);
		$result['body'] = $this->innerXML($el);
		$result['body'] = str_replace('&#13;', '', $result['body']);

		$xpath = new DOMXPath($doc);
		$query = "//p[@class='rubrik']";
		$entries = $xpath->query($query);
		
		$el = $entries->item(0);
		$result['username'] = $el->nodeValue;
		$result['username'] = trim(str_replace('ONLINE', '', $result['username']));
		$result['username'] = trim(str_replace('OFFLINE', '', $result['username']));

		$xpath = new DOMXPath($doc);
		$query = "//p[@class='rubrik']/img";
		$entries = $xpath->query($query);
		
		$el = $entries->item(0);
		$result['userimg'] = 'http://www.svenskamagic.com/img/' . $el->getAttribute("src");

		$result['userid'] = $UserId;

		$xpath = new DOMXPath($doc);
		$query = "//td[@class='brodtext']//div[contains(@class, 'list_tabell')]";
		$entries = $xpath->query($query);
		
		$el = $entries->item(0);
		$result['irl']['name'] = trim($el->nodeValue);

		$el = $entries->item(1);
		$result['irl']['age'] = trim($el->nodeValue);

		$el = $entries->item(2);
		$result['irl']['address'] = explode('<br/>', $this->innerXML($el));
		$result['irl']['address'][0] = trim($result['irl']['address'][0]);
		$result['irl']['address'][1] = strip_tags(trim($result['irl']['address'][1]));
		$result['irl']['address'][2] = trim($result['irl']['address'][2]);

		$el = $entries->item(3);
		$result['irl']['phone'] = trim($el->nodeValue);

		$el = $entries->item(4);
		$result['contact']['email'] = trim($el->nodeValue);

		$el = $entries->item(5);
		$result['contact']['msn'] = trim($el->nodeValue);

		$el = $entries->item(6);
		$result['contact']['skype'] = trim($el->nodeValue);

		$el = $entries->item(7);
		$result['contact']['icq'] = trim($el->nodeValue);

		$el = $entries->item(8);
		$result['contact']['modo'] = trim($el->nodeValue);

		$el = $entries->item(9);
		$result['contact']['website'] = trim($el->nodeValue);

		return $result;
	}

}