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
					<li><a href="<?php echo site_url('friends'); ?>">Lista</a></li>
					<li><a href="<?php echo site_url('friends/add'); ?>" class="ui-btn-active ui-state-persist">Ny vän</a></li>
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
		
	<form method="post" data-ajax="false">
		<ul data-role="listview">
			<li data-role="fieldcontain">
	        	<label for="username">Medlem:</label>
	        	<input type="text" name="username" id="username" value="<?php echo $username; ?>" placeholder="Användarnamn"  />
			</li>
			<li data-role="fieldcontain">
	        	<label for="message">Meddelande:</label>
				<textarea cols="40" rows="8" name="message" id="message"></textarea>
			</li>
			<li data-role="fieldcontain">
				<label for="group" class="select">Grupp:</label>
				<select name="group" id="group">
				   <option value="0">Mina vänner</option>
				   <option value="0">Grupp 2</option>
				   <option value="0">Grupp 3</option>
				   <option value="0">Grupp 4</option>
				</select>
			</li>
			<li class="ui-body ui-body-b">
				<fieldset class="ui-grid-a">
						<div class="ui-block-a"><button type="submit" data-theme="b">Skicka</button></div>
						<div class="ui-block-b"><button type="button" data-theme="d" onclick="window.location ='<?php echo site_url('friends'); ?>';">Avbryt</button></div>
			    </fieldset>
			</li>
			
		</ul>
		
		</form>
		
		</div>
			
	</div><!-- /content -->
	
</div><!-- /page -->

</body>
</html>