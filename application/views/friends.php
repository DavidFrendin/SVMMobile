<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>SVM Mobile</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 

<body> 

<div data-role="page">

	<div data-role="header">
		<a href="<?php echo site_url('menu'); ?>" data-icon="home" class="ui-btn-left">Meny</a>
		<h1>SVM Mobile</h1>
	</div><!-- /header -->

	<a href="<?php echo site_url('menu'); ?>">
		<div style=" text-align:center">
			<img style="width: 100%; display: block;" src="http://svm.hellforge.net/assets/img/header.png" />
		</div>
	</a>
	
	<div data-role="header" data-theme="c">
		<h2>Vänner</h2>
	</div><!-- /header -->

			<div data-role="navbar">
				<ul>
					<li><a href="<?php echo site_url('friends'); ?>" class="ui-btn-active ui-state-persist">Lista</a></li>
					<li><a href="<?php echo site_url('friends/new'); ?>">Ny vän</a></li>
				</ul>
			</div><!-- /navbar -->

	<div data-role="content">	

		<div class="content-primary">
		
		<ul data-role="listview" data-divider-theme="a">
<?php
	$lastletter = '';
	foreach ($friends as $friend)
	{
		if (strtoupper(substr($friend['name'], 0, 1)) != $lastletter)
		{
			echo '<li data-role="list-divider">' . strtoupper(substr($friend['name'], 0, 1)) . '</li>';
		}
		$lastletter = strtoupper(substr($friend['name'], 0, 1));
		
		if ($friend['online'])
		{
			echo '<li data-theme="e">';
		}
		else
		{
			echo '<li>';
		}
?>

				<a href="index.html">
					<img src="http://www.svenskamagic.com/t/<?php echo $friend['image']; ?>" width="50" height="50" style="padding-left: 20px; padding-top: 20px;" />
					<h3><?php echo $friend['name']; ?></h3>
					<p>Senaste forumrubrik: -</p>
					<p>Senaste forumsvar: -</p>
<?php
	if ($friend['online'])
	{
					echo '<p><b>Online</b></p>';
	}
?>
					
				</a>
			</li>
<?php
	}
?>
		</ul>
			
		</div>
			
	</div><!-- /content -->
	
</div><!-- /page -->

</body>
</html>