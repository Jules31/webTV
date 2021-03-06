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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/css/style.css'; ?>">
	<script type="text/javascript" src="<?php echo base_url().'/js/mon.js'; ?>"></script>
	<style>
	p.news{
		text-align: justify;
	}
	</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="<?php echo $streamer['theme']; ?>">
<?php include('menu.php'); ?>
<br/><br/><br/><br/><br/><br/>
	<div class="container">
		<div class="row contenu">
			<div class="col-md-12">
				<div class="row titre padding-left">
				<?php if($streamer): ?>
					WebTV / Live de <?php echo $streamer['nom']; ?>
				</div>
				<div class="row">
					<div class="col-md-8">
					<div id="contentStream" class="container">
						<div class="titre">Live</div>
						<script src="http://player.twitch.tv/js/embed/v1.js"></script>
						<div id="<?php echo $streamer['nom']; ?>"></div>
						<script id="live" type="text/javascript">
							var options = {
								width: 750,
								height: 450,
								channel: "<?php echo $streamer['lien']; ?>",
								//video: "{VIDEO_ID}"
							};
							var player = new Twitch.Player("<?php echo $streamer['nom']; ?>", options);
							player.setVolume(0.5);
						</script>
					</div>
					</div>
					<div class="col-md-4">
						<div class="titre">Chat</div>
						<iframe frameborder="0" scrolling="no" id="chat_embed" src="http://www.twitch.tv/<?php echo $streamer['lien']; ?>/chat" height="450" width="360"></iframe>
					</div>

					<!-- Ceci est le mode théatre -->
                	<button id="th" class="btn btn-success toglleTheater" onclick="agrandir();"> Théatre</button>
					<div class="row">
						<div class="col-md-10 col-md-offset-1 description">
							<hr class="line">
							<div class="titre">Description</div>
							<?php
							echo $streamer['description'];
								?>
								<hr class="line">
						</div>
					</div>
				</div>
				<div class="row social">
					<div class="col-md-12">
						<ul class="social-liste">
							<li class="titre icon-social">Follow us on : </li>
							<li class="facebook icon-social"><a href="<?php echo $streamer['linkFb']; ?>" target="_blank"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a></li>
							<li class="twitter icon-social"><a href="<?php echo $streamer['linkTwitter']; ?>" target="_blank"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a></li>
							<li class="twitch icon-social"><a href="<?php echo $streamer['linkTwitch']; ?>" target="_blank"><i class="fa fa-twitch fa-3x" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php else: ?>
	<div class="row">
	<h1> Liste des news : </h1>
	<?php foreach ($news as $key => $new): ?>
		<div class="col-md-6">
			<h2><?php echo $new['titre']; ?></h2>
			<p class="news"><?php echo $new['article']; ?></p>
		</div>
	<?php endforeach; ?>
	</div>
	<?php endif; ?>
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

<script>
function agrandir() {
    if ($("#contentStream").hasClass("container")) {
        $('#contentStream').removeClass("container");
        $('#contentStream').addClass("container-fluid");
        $("#live").animate({ width: "102%", height: "820px" }, "slow");
       // $("#live").animate({ height: "820px"}, "slow");
        $("#tchat").animate({ width: "102%" }, "slow");
        $("#tchat").animate ({ height: 820}, "slow");
    } else if ($("#contentStream").hasClass("container-fluid")) {
        $('#contentStream').removeClass("container-fluid");
        $('#contentStream').addClass("container");
        $("#live").animate({ width: "100%" });
        $("#live").animate({ height: 500}, "slow");
        $("#tchat").animate({ width: "100%" }, "slow");
        $("#tchat").animate ({ height: 500}, "slow");        
    }
}
</script>