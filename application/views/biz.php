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
		<h2>Mina bizzar</h2>
	</div><!-- /header -->
			<div data-role="navbar">
				<ul>
					<li><a href="<?php echo site_url('biz'); ?>" class="ui-btn-active ui-state-persist">Aktiva</a></li>
					<li><a href="<?php echo site_url('biz/history'); ?>">Avslutade</a></li>
					<li><a href="<?php echo site_url('biz/new'); ?>">Skapa</a></li>
				</ul>
			</div><!-- /navbar -->

	<div data-role="content">	

		<div class="content-primary">

		<ul data-role="listview" data-inset="true" data-theme="c" data-divider-theme="a">
			<li data-role="list-divider"><h3>Aktiva bizzar</h3></li>
			<li>
				<a>
					<h3>Rejzijel</h3>
					<p>14/11</p>
					<p style="margin-top: 20px;"><img src="http://www.svenskamagic.com/bilder/coins_20x20.png" style="vertical-align: text-bottom;" /> Jag har inte skickat</p>
					<p style="margin-top: 10px;"><img src="http://www.svenskamagic.com/bilder/envelope_20x20.png" style="vertical-align: text-bottom;" /> Han/hon har inte skickat</p>
					<p style="margin-top: 10px;"><img src="http://www.svenskamagic.com/bilder/ref_20x20.png" style="vertical-align: text-bottom;" /> Jag har inte reffat</p>
					<p style="margin-top: 10px;"><img src="http://www.svenskamagic.com/bilder/ref_20x20.png" style="vertical-align: text-bottom;" /> Han/hon har inte reffat</p>
				</a>
			</li>
			<li>
				<a>
					<h3>Rejzijel</h3>
					<p>14/11</p>
					<p style="margin-top: 20px;"><img src="http://www.svenskamagic.com/bilder/coins_20x20.png" style="vertical-align: text-bottom;" /> Jag har inte skickat</p>
					<p style="margin-top: 10px;"><img src="http://www.svenskamagic.com/bilder/envelope_20x20.png" style="vertical-align: text-bottom;" /> Han/hon har inte skickat</p>
					<p style="margin-top: 10px;"><img src="http://www.svenskamagic.com/bilder/ref_20x20.png" style="vertical-align: text-bottom;" /> Jag har inte reffat</p>
					<p style="margin-top: 10px;"><img src="http://www.svenskamagic.com/bilder/ref_20x20.png" style="vertical-align: text-bottom;" /> Han/hon har inte reffat</p>
				</a>
			</li>

			<li data-role="list-divider"><h3>Bizzar jag ska svara på</h3></li>
<?php
	foreach ($mybiz['i_have_not_answered'] as $biz)
	{
?>
			<li><a><h3><?php echo $biz['text']; ?></h3><p><?php echo $biz['date']; ?></p></a></li>
<?php
	}
	
	if (isset($mybiz['you_have_not_answered']))
	{
?>
			<li data-role="list-divider"><h3>Bizzar jag väntar svar på</h3></li>
<?php
		foreach ($mybiz['you_have_not_answered'] as $biz)
		{
?>
			<li><a><h3><?php echo $biz['text']; ?></h3><p><?php echo $biz['date']; ?></p></a></li>
<?php
		}
	}
?>
		</ul>

			
		</div>
			
	</div><!-- /content -->
	
</div><!-- /page -->

</body>
</html>