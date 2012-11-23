﻿<!DOCTYPE html> 
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
					<li><a href="<?php echo site_url('friends'); ?>" data-role="button" data-transition="flip" data-inline="true">Lista</a></li>
					<li><a href="<?php echo site_url('friends/add'); ?>" data-role="button" data-transition="flip" data-inline="true">Ny vän</a></li>
					<li><a href="<?php echo site_url('friends/status'); ?>" data-role="button" data-transition="flip" data-inline="true" class="ui-btn-active ui-state-persist">Status</a></li>
				</ul>
			</div><!-- /navbar -->

<?php
if ($message)
{
	echo '<div data-role="header" data-theme="e">' . $message . '</div>';
}
?>

			
	<div data-role="content">	

		<div class="content-primary">
		

		<ul data-role="listview" data-inset="true" data-split-icon="delete" data-split-theme="d" data-divider-theme="a">
			<li data-role="list-divider"><h2>Nya vänförfrågningar</h2></li>
			<li><a href="index.html">
				<h3>DavidF</h3>
				</a><a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Neka/avbryt</a>
			</li>
			<li data-role="list-divider"><h2>Du väntar svar från</h2></li>
			<li><a href="index.html">
				<h3>Broken Bells</h3>
				</a><a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Neka/avbryt</a>
			</li>
		</ul>
		
		<div data-role="popup" id="purchase" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px;">
			<h3>Purchase Album?</h3>
			<p>Your download will begin immediately on your mobile device when you purchase.</p>
			<a href="index.html" data-role="button" data-rel="back" data-theme="b" data-icon="check" data-inline="true" data-mini="true">Buy: $10.99</a>
			<a href="index.html" data-role="button" data-rel="back" data-inline="true" data-mini="true">Cancel</a>	
		</div>

		
		</div>
			
	</div><!-- /content -->
	
</div><!-- /page -->

</body>
</html>