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
		<h2>Internpost</h2>
	</div><!-- /header -->

	<div data-role="content">	

		<div class="content-primary">

			<h3><?php echo $mail['subject']; ?></h3>
			<table>
				<tr>
					<td>Från</td>
					<td><a href="<?php echo site_url('profile/view/' . $mail['from']['id']); ?>"><?php echo $mail['from']['name']; ?></a></td>
				</tr>
			</table>
			
			<h4>Meddelande</h4>
			<p><?php echo $mail['body']; ?></p>
		
			<a href="<?php echo site_url('messages/compose/' . $mail['from']['name']); ?>" data-role="button" data-icon="plus">Svara</a>
		
		</div>
			
	</div><!-- /content -->
	
</div><!-- /page -->

</body>
</html>