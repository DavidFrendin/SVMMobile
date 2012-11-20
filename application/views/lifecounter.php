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
		<h2>Livräknare</h2>
	</div><!-- /header -->

	<div data-role="content">	

		<div class="content-primary">

			<div class="ui-grid-a">
				<div class="ui-block-a">
					<div class="ui-grid-a">
						<div class="ui-block-a">
							<div class="ui-bar"><a data-role="button" data-icon="arrow-u" data-iconpos="bottom" onclick="player1 = player1 + 1; $('#p1val').html(player1); var audio = $('#beep')[0]; audio.play();" style="width: 100%;">+1</a></div>
						</div>
						<div class="ui-block-b">
							<div class="ui-bar"><a data-role="button" data-icon="arrow-u" data-iconpos="bottom" onclick="player1 = player1 + 5; $('#p1val').html(player1); var audio = $('#beep')[0]; audio.play();" style="width: 100%;">+5</a></div>
						</div>
					</div>
				</div>
				<div class="ui-block-b">
					<div class="ui-grid-a">
						<div class="ui-block-a">
							<div class="ui-bar"><a data-role="button" data-icon="arrow-u" data-iconpos="bottom" onclick="player2 = player2 + 1; $('#p2val').html(player2); var audio = $('#beep')[0]; audio.play();" style="width: 100%;">+1</a></div>
						</div>
						<div class="ui-block-b">
							<div class="ui-bar"><a data-role="button" data-icon="arrow-u" data-iconpos="bottom" onclick="player2 = player2 + 5; $('#p2val').html(player2); var audio = $('#beep')[0]; audio.play();" style="width: 100%;">+5</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="ui-grid-a">
				<div class="ui-block-a">
					<div class="ui-bar" style="height:120px"><div id="p1val" style="width: 100%; height: 100%; font-size: 600%; text-align:center">20</div></div>
				</div>
				<div class="ui-block-b">
					<div class="ui-bar" style="height:120px"><div id="p2val" style="width: 100%; height: 100%; font-size: 600%; text-align:center">20</div></div>
				</div>
			</div>
			<div class="ui-grid-a">
				<div class="ui-block-a">
					<div class="ui-grid-a">
						<div class="ui-block-a">
							<div class="ui-bar"><a data-role="button" data-icon="arrow-d" data-iconpos="bottom" onclick="player1--; $('#p1val').html(player1); var audio = $('#beep')[0]; audio.play();" style="width: 100%;">-1</a></div>
						</div>
						<div class="ui-block-b">
							<div class="ui-bar"><a data-role="button" data-icon="arrow-d" data-iconpos="bottom" onclick="player1 = player1 - 5; $('#p1val').html(player1); var audio = $('#beep')[0]; audio.play();" style="width: 100%;">-5</a></div>
						</div>
					</div>
				</div>
				<div class="ui-block-b">
					<div class="ui-grid-a">
						<div class="ui-block-a">
							<div class="ui-bar"><a data-role="button" data-icon="arrow-d" data-iconpos="bottom" onclick="player2--; $('#p2val').html(player2); var audio = $('#beep')[0]; audio.play();" style="width: 100%;">-1</a></div>
						</div>
						<div class="ui-block-b">
							<div class="ui-bar"><a data-role="button" data-icon="arrow-d" data-iconpos="bottom" onclick="player2 = player2 - 5; $('#p2val').html(player2); var audio = $('#beep')[0]; audio.play();" style="width: 100%;">-5</a></div>
						</div>
					</div>
				</div>
			</div><!-- /grid-c -->

			<audio id="beep" preload="auto">
				<source src="assets/audio/beep.mp3"></source>
				<source src="assets/audio/beep.ogg"></source>
			</audio>
			
			<script type="text/javascript">
			var player1 = 20;
			var player2 = 20;
			</script>
			
		</div>
			
	</div><!-- /content -->
	
</div><!-- /page -->

</body>
</html>