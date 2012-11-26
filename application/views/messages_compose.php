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
		<a href="<?php echo site_url('menu'); ?>" data-icon="back" data-iconpos="notext" data-rel="back" class="ui-btn-left"></a>
		<h1>SVM Mobile</h1>
	</div><!-- /header -->

	<a href="<?php echo site_url('menu'); ?>">
		<div style=" text-align:center">
			<img style="width: 100%; display: block;" src="http://svm.hellforge.net/assets/img/header.png" />
		</div>
	</a>
	
	<div data-role="header" data-theme="c">
		<h2>Nytt brev</h2>
	</div>

	<div data-role="content">	

		<div class="content-primary">
		
	<form method="post" data-ajax="false">
		<ul data-role="listview">
			<li data-role="fieldcontain">
	        	<label for="recipient">Till:</label>
	        	<input type="text" name="recipient" id="recipient" value="<?php echo $recipient; ?>" placeholder="Användarnamn"  />
			</li>
			<li data-role="fieldcontain">
	        	<label for="subject">Rubrik:</label>
	        	<input type="text" name="subject" id="subject" value=""  />
			</li>
			<li data-role="fieldcontain">
	        	<label for="text">Text:</label>
				<textarea cols="40" rows="8" name="text" id="text"></textarea>
			</li>
			<li data-role="fieldcontain">
				<input type="checkbox" name="save" id="save" class="custom" checked="checked" />
				<label for="save">Spara kopia i skickat</label>
			</li>
			<li class="ui-body ui-body-b">
				<fieldset class="ui-grid-a">
						<div class="ui-block-a"><button type="submit" data-theme="b">Skicka</button></div>
						<div class="ui-block-b"><button type="button" data-theme="d">Avbryt</button></div>
			    </fieldset>
			</li>
			
		</ul>
		
		</form>
		
		</div>
	
	</div>

</div>-->

</body>
</html>