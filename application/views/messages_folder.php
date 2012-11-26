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
		<a href="<?php echo site_url('messages'); ?>" data-icon="back" data-iconpos="notext" data-rel="back" class="ui-btn-left"></a>
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

			<ul data-role="listview" data-inset="true" data-icon="star">
			<li data-role="list-divider">Mapnamn</li>
<?php
	foreach ($mail as $row)
	{
?>
			<li>
				<a href="<?php echo site_url('messages/view/' . $row['id']); ?>">
				<img src="http://www.svenskamagic.com/t/<?php echo $row['image']; ?>" style="padding-left: 30px; padding-top: 30px;" />
				<h3><?php echo $row['subject']; ?></h3>
				<p style="white-space: normal;">Från: <?php echo $row['from']; ?></p>
				<p style="white-space: normal;"><i><?php echo $row['time']; ?></i></p>
				</a>
			</li>
<?php
}
?>
			</ul>
			</div>

	
</div><!-- /page -->

</body>
</html>