<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="css/scrolling-nav.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../style.css">
	</script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Afficher le menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#">WebTV</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="hidden">
						<a class="page-scroll" href="#page-top"></a>
					</li>
					<li>
						<a href="news.php">News</a>
					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Live <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li> Streamer</li>
							<li role="separator" class="divider"></li>
							<?php
									foreach($streamersAfficher as $streamer) {
										echo '<li><a  href=?stream='.$streamer->lien.' onclick="">'.$streamer->nom.'</a></li>';
									}
								?>
								<li role="separator" class="divider"></li>
								<li> Jeux</li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Jeux 1</a></li>
						</ul>
					</li>
					<li>
						<a class="page-scroll" href="video.php">Vidéo</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<div class="container">
		<div class="row contenu">
			<div class="col-md-12">
				<div class="row titre padding-left">
					WebTV / Live /
					<?php if (isset($_GET['stream'])) { echo $_GET['stream']; } ?>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="titre">Live</div>
						<script src="http://player.twitch.tv/js/embed/v1.js"></script>
						<div id="<?php echo $_GET['stream']?>"></div>
						<script id="live" type="text/javascript">
							var options = {
								width: 750,
								height: 450,
								channel: "<?php echo $_GET['stream']?>",
								//video: "{VIDEO_ID}"
							};
							var player = new Twitch.Player("<?php echo $_GET['stream']?>", options);
							player.setVolume(0.5);
						</script>
					</div>
					<div class="col-md-4">
						<div class="titre">Chat</div>
						<iframe frameborder="0" scrolling="no" id="chat_embed" src="http://www.twitch.tv/<?php echo $_GET['stream']?>/chat" height="450" width="360"></iframe>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1 description">
							<hr class="line">
							<div class="titre">Description</div>
							<?php
									foreach($streamers as $streamer) {
										echo ':' . $streamer->description;
									}
								?>
								<hr class="line">
						</div>
					</div>
				</div>
				<div class="row social">
					<div class="col-md-12">
						<ul class="social-liste">
							<li class="titre icon-social">Follow us on : </li>
							<li class="facebook icon-social"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></li>
							<li class="twitter icon-social"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></li>
							<li class="twitch icon-social"><i class="fa fa-twitch fa-3x" aria-hidden="true"></i></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="footer row">
			<div class="col-md-8 col-md-offset-2 center">
				Nom de la webTV - propuslé par MyWebTV &copy;
			</div>
		</div>
	</div>
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Scrolling Nav JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/scrolling-nav.js"></script>
</body>

</html>