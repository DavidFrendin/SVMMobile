<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>SVM Mobile</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src="http://svm.hellforge.net/assets/js/jqm.autoComplete-1.5.0-min.js"></script>
</head> 

<body> 

<div data-role="page">

	<div data-role="header">
		<a href="<?php echo site_url('menu'); ?>" data-icon="back" data-iconpos="notext" data-rel="back" class="ui-btn-left"></a>
		<h1>SVM Mobile</h1>
	</div><!-- /header -->

	<a href="<?php echo site_url('menu'); ?>">
		<div style=" text-align:center">
			<img style="width: 100%; display: block;" src="http://svm.hellforge.net/assets/img/header.png" />
		</div>
	</a>
	
	<div data-role="header" data-theme="c">
		<h2>Profil</h2>
	</div><!-- /header -->

	<div data-role="content">	

		<div class="content-primary">
		
<div data-role="collapsible-set">

		<div data-role="collapsible" data-collapsed="false">
		<h3>Profil</h3>
			<table cellpadding="10">
				<tr>
					<td valign="top">
						<h3><img src="<?php echo $profile['userimg']; ?>" width="55" height="55" /></h3>
					</td>
					<td valign="top">
						<h3><?php echo $profile['username']; ?></h3>
						<p><?php echo $profile['body']; ?></p>
					</td>
				</tr>
			</table>
		</div>
		
		<div data-role="collapsible">
		<h3>IRL</h3>
		<table cellpadding="10">
			<tr>
				<td>
					<p>Namn</p>
				</td>
				<td>
					<p><?php echo $profile['irl']['name']; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p>Ålder</p>
				</td>
				<td>
					<p><?php echo $profile['irl']['age']; ?></p>
				</td>
			</tr>
			<tr>
				<td valign="top">
					<p>Adress</p>
				</td>
				<td>
					<p><?php echo $profile['irl']['address'][0]; ?></p>
					<p><?php echo $profile['irl']['address'][1]; ?></p>
					<p><?php echo $profile['irl']['address'][2]; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p>Telefon</p>
				</td>
				<td>
					<p><a href="tel:<?php echo $profile['irl']['phone']; ?>"><?php echo $profile['irl']['phone']; ?></a></p>
				</td>
			</tr>
		</table>
		</div>
			
		<div data-role="collapsible">
		<h3>Internet</h3>
		<table cellpadding="10">
			<tr>
				<td>
					<p>E-post</p>
				</td>
				<td>
					<p><a href="mailto:<?php echo $profile['contact']['email']; ?>"><?php echo $profile['contact']['email']; ?></a></p>
				</td>
			</tr>
			<tr>
				<td>
					<p>MSN</p>
				</td>
				<td>
					<p><?php echo $profile['contact']['msn']; ?></p>
				</td>
			</tr>
			<tr>
				<td valign="top">
					<p>Skype</p>
				</td>
				<td>
					<p><?php echo $profile['contact']['skype']; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p>IQC</p>
				</td>
				<td>
					<p><?php echo $profile['contact']['icq']; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p>MODO</p>
				</td>
				<td>
					<p><?php echo $profile['contact']['modo']; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p>Web</p>
				</td>
				<td>
					<p><a href="<?php echo $profile['contact']['website']; ?>"><?php echo $profile['contact']['website']; ?></a></p>
				</td>
			</tr>
		</table>
		</div>
		
	</div>

	<div class="ui-grid-a">
	<div class="ui-block-a"><a href="<?php echo site_url('messages/compose/' . $profile['username']); ?>" data-role="button">Skicka meddelande</a></div>
	<div class="ui-block-b"><a href="<?php echo site_url('friends/add/' . $profile['username']); ?>" data-role="button">Lägg till som vän</a></div>
</div><!-- /grid-a -->
				
				
			</div>
			</div>

	
</div><!-- /page -->

</body>
</html>