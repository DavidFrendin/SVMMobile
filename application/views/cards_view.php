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

<div data-role="page" id="cardsPage">

	<div data-role="header">
		<a href="<?php echo site_url('menu'); ?>" data-icon="back" data-iconpos="notext" data-rel="back" class="ui-btn-left"></a>
		<h1>SVM Mobile</h1>
	</div><!-- /header -->

	<a href="<?php echo site_url('menu'); ?>">
		<div style=" text-align:center">
			<img style="width: 100%; display: block;" src="http://svm.hellforge.net/assets/img/header.png" />
		</div>
	</a>
	
	<div data-role="navbar">
		<ul>
			<li><a href="<?php echo site_url('cards/view/' . $card->{'name'}); ?>" data-transition="fade" data-inline="true" class="ui-btn-active ui-state-persist">Text</a></li>
			<li><a href="<?php echo site_url('cards/viewpic/' . $card->{'name'}); ?>" data-transition="fade" data-inline="true">Bild</a></li>
		</ul>
	</div><!-- /navbar -->

	
	<div data-role="header" data-theme="c">
		<h2>Kort</h2>
	</div><!-- /header -->

	<div data-role="content">	

		<div class="content-primary">
			
			<table cellpadding="5">
				<tr>
					<td valign="top">Namn</td>
					<td><?php echo $card->{'name'}; ?></td>
				</tr>
				<tr>
					<td valign="top">Kostnad</td>
					<td><?php echo $card->{'cost'}; ?></td>
				</tr>
				<tr>
					<td valign="top">CMC</td>
					<td><?php echo $card->{'cmcost'}; ?></td>
				</tr>
				<tr>
					<td valign="top">Typ</td>
					<td><?php echo $card->{'cardtype'}; ?></td>
				</tr>
				<tr>
					<td valign="top">P/T</td>
					<td><?php echo $card->{'power'}; ?>/<?php echo $card->{'toughness'}; ?></td>
				</tr>
				<tr>
					<td valign="top">Oracle</td>
					<td><code><?php echo $card->{'oracle'}; ?></code></td>
				</tr>
			</table>
		
		</div>
			
	</div><!-- /content -->
	
</div><!-- /page -->

</body>
</html>