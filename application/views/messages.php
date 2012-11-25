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
		<h2>Internpost</h2>
	</div><!-- /header -->

	<div data-role="content">	

		<div class="content-primary">

		<a href="<?php echo site_url('messages/compose'); ?>" data-role="button" data-icon="plus">Nytt brev</a>
		
		<ul data-role="listview" data-inset="true" data-icon="star" data-split-icon="gear" data-split-theme="d">
			<li data-role="list-divider">Mappar</li>
			
<?php
foreach ($MailFolders as $row)
{
	echo '<li><a href="messages/folder/' . $row['id'] . '"><h3>' . $row['name'] . '</h3><p>' . $row['messages'] . '</p></a><!--<a href="#folder_options" data-rel="popup" data-position-to="window" data-transition="pop">Alternativ</a>--></li>';
}
?>
				
		</ul>

<!--		<div data-role="popup" id="folder_options" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px;">
			<h3>Alternativ för mapp</h3>
<fieldset data-role="controlgroup">
	<legend>Töm mappen och ...</legend>
     	<input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" checked="checked" />
     	<label for="radio-choice-1">Radera alla mail</label>

     	<input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2"  />
     	<label for="radio-choice-2">Dog</label>

     	<input type="radio" name="radio-choice" id="radio-choice-3" value="choice-3"  />
     	<label for="radio-choice-3">Hamster</label>

     	<input type="radio" name="radio-choice" id="radio-choice-4" value="choice-4"  />
     	<label for="radio-choice-4">Lizard</label>
</fieldset>
			<a href="index.html" data-role="button" data-rel="back" data-theme="b" data-icon="check" data-inline="true" data-mini="true">Ok</a>
			<a href="index.html" data-role="button" data-rel="back" data-inline="true" data-mini="true">Avbryt</a>	
		</div>
		-->
		
		</div>
			
	</div><!-- /content -->
	
</div><!-- /page -->

<!--<div data-role="page" id="compose">

	<div data-role="header">
		<a href="#" data-rel="back" data-icon="back" class="ui-btn-left">Tillbaka</a>
		<h1>SVM Mobile</h1>
	</div>

	<a href="menu.php">
		<div style=" text-align:center">
			<img style="width: 100%; height: 100%; display: block;" src="http://svm.hellforge.net/logo.jpg" />
		</div>
	</a>
	
	<div data-role="header" data-theme="c">
		<h2>Nytt brev</h2>
	</div>

	<div data-role="content">	

		<div class="content-primary">
		
	<form>
		<ul data-role="listview">
			<li data-role="fieldcontain">
	        	<label for="recipent">Till:</label>
	        	<input type="text" name="recipent" id="recipent" value="" placeholder="AnvÃ¤ndarnamn"  />
			</li>
			<li data-role="fieldcontain">
	        	<label for="subject">Rubrik:</label>
	        	<input type="text" name="subject" id="subject" value=""  />
			</li>
			<li data-role="fieldcontain">
	        	<label for="textarea">Text:</label>
				<textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
			</li>
			<li data-role="fieldcontain">
				<input type="checkbox" name="checkbox-1" id="checkbox-1" class="custom" checked="checked" />
				<label for="checkbox-1">Spara kopia i skickat</label>
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