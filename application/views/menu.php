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
		<a href="<?php echo site_url('start/logout'); ?>" data-icon="delete" class="ui-btn-right">Logga ut</a>
		<span class="ui-title" />
	</div>
	
	<a href="<?php echo site_url('menu'); ?>">
		<div style=" text-align:center">
			<img style="width: 100%; display: block;" src="http://svm.hellforge.net/assets/img/header.png" />
		</div>
	</a>
	
	<div data-role="header" data-theme="c">
		<h2>Meny</h2>
	</div><!-- /header -->

	<div data-role="content">	

<?php
if ($recentevents)
{
?>
		<ul data-role="listview" data-inset="true" data-theme="d" data-divider-theme="e">
			<li data-theme="e" data-icon="delete">
				<a href="<?php echo site_url('menu/removenotifications'); ?>"><h3>Notifieringar</h3></a>
			</li>
<?php
	foreach ($recentevents as $event)
	{
?>
			<li><?php echo $event; ?></li>
<?php
	}
?>
		</ul>
<?php
}
?>
	
		<ul data-role="listview" data-inset="true" data-divider-theme="a">
			<li data-role="list-divider"><h2>Navigation</h2></li>
			<li><a href="<?php echo site_url('news'); ?>" data-transition="flow" data-inline="true">Nyheter</a></li>
			<li><a href="<?php echo site_url('messages'); ?>" data-transition="flow" data-inline="true">Meddelanden
<?php
if ($cntmessages)
{
	if ((int)$cntmessages == 1)
	{
		echo '<span class="ui-li-count">' . $cntmessages . ' oläst</span>';
	}
	else
	{
		echo '<span class="ui-li-count">' . $cntmessages . ' olästa</span>';
	}
}
?>
			</a></li>
			<li><a href="<?php echo site_url('friends'); ?>" data-transition="flow" data-inline="true">Mina vänner
<?php
if ($cntFriendsOnline)
{
	echo '<span class="ui-li-count">' . $cntFriendsOnline . ' online</span>';
}
?>
			</a></li>
			<li><a href="<?php echo site_url('biz'); ?>" data-transition="flow" data-inline="true">Mina bizzar</a></li>
			<li><a href="<?php echo site_url('profile'); ?>" data-transition="flow" data-inline="true">Min profil</a></li>
			<li data-role="list-divider"><h3>Appar</h3></li>
			<li><a href="<?php echo site_url('lifecounter'); ?>" data-transition="flow" data-inline="true">Livräknare</a></li>
			<li data-theme="b" data-icon="delete"><a href="<?php echo site_url('start/logout'); ?>">Logga ut</a></li>
		</ul>
		

		
	</div><!-- /content -->
	
</div><!-- /page -->

</body>
</html>