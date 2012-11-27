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
		<h1>SVM Mobile</h1>
	</div><!-- /header -->

	<a href="<?php echo site_url('menu'); ?>">
		<div style=" text-align:center">
			<img style="width: 100%; display: block;" src="http://svm.hellforge.net/assets/img/header.png" />
		</div>
	</a>

	<div data-role="header" data-theme="c">
		<h2>Logga in</h2>
	</div><!-- /header -->

<?php
if ($login_failed)
{
	echo '<div data-role="header" data-theme="e"><h2>Inloggningen misslyckades</h2></div>';
}
?>

	<div data-role="content">
		<form method="post" action="<?php echo site_url('start/dologin'); ?>" data-ajax="false">
			<ul data-role="listview">
				<li data-role="fieldcontain">
					<label for="username">Användarnamn:</label>
					<input type="text" name="username" id="username" value=""  />
				</li>
				<li data-role="fieldcontain">
					<label for="password">Lösenord:</label>
					<input type="password" name="password" id="password" value=""  />
				</li>
				<li data-role="fieldcontain">
					<input type="checkbox" name="rememberme" id="rememberme" class="custom" />
					<label for="rememberme">Kom ihåg mig</label>
				</li>
				<li class="ui-body ui-body-b">
					<button type="submit" data-theme="b">Logga in</button>
				</li>
			</ul>
		</form>
		
		
	</div><!-- /content -->
	
</div><!-- /page -->

</body>
</html>