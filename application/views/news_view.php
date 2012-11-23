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
		<a href="<?php echo site_url('news'); ?>" data-icon="back" class="ui-btn-left">Tillbaka</a>
		<h1>SVM Mobile</h1>
	</div><!-- /header -->

	<a href="<?php echo site_url('menu'); ?>">
		<div style=" text-align:center">
			<img style="width: 100%; display: block;" src="http://svm.hellforge.net/assets/img/header.png" />
		</div>
	</a>
	
	<div data-role="header" data-theme="c">
		<h2>Nyhet</h2>
	</div><!-- /header -->

	<div data-role="content">	

		<div class="content-primary">
		
			<h3><?php echo $news['caption']; ?></h3>
			<p><?php echo $news['body']; ?></p>
			
		</div>

	</div><!-- /content -->

	<div data-role="header" data-theme="c">
		<h2>Kommentarer</h2>
	</div><!-- /header -->
	
	<div data-role="content">
			<ul data-role="listview">
<?php
	if ($news['comments'])
	{
		foreach ($news['comments'] as $comment)
		{
?>
			<li>
				<img src="http://www.svenskamagic.com/t/<?php echo $comment['image']; ?>" width="50" height="50" style="padding-left: 20px; padding-top: 20px;" />
				<h3><?php echo $comment['username']; ?></h3>
				<p style="white-space: normal;"><?php echo $comment['body']; ?></p>
				<p style="white-space: normal;"><b><?php echo $comment['time']; ?></b></p>
			</li>
<?php
		}
	}
	else
	{
?>
			<li>
				<h3>Inga kommentarer än</h3>
			</li>
<?php
	}
?>
			</ul>
			</div>

	
</div><!-- /page -->

</body>
</html>