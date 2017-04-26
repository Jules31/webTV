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
	<?php include('menu.php'); ?>
	<div class="container">
		<div class="row contenu" style="padding-top: 60px;">
			<div class="col-md-12">
				<div class="row titre padding-left">WebTV / Vidéo de <?php echo $streamer['nom']; ?></div>
				<div class="row">
					<div id='newVideo'>
						<h2 class="titre">A la une</h2>
						<div class="col-md-8">
							<div class="video-container">
								<iframe width="auto" height="300" src="" frameborder="10" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-md-4">
							<h3>le titre</h3>
							<p>Deux, trois info au calme, genre le résumé de la vidéo ou de quoi elle parle histoire de mettre l'eau à la bouche de ceux qui son intéresser par la section vidéo</p>
						</div>
					</div>
				</div>
				<div class="row">
					<h2 class="titre">video</h2>
					<div id='video'>
                        <?php foreach ($videos as $key => $video): ?>
                        
						<div class="col-md-4">
							<iframe width="300" height="150" src="<?php echo $video['lien']; ?>" frameborder="0" allowfullscreen></iframe>
							<h2><?php echo $video['titre']; ?></h2>
							<p>description de la video</p>
						</div>

                        <?php endforeach; ?>

						
					</div>
				</div>


				<!--<h2>Categorie</h2>
				<div id='image'>

					<div class="col-xs-4 col-sm-3 col-md-2">
						<a href=".html"><img class="images-cat" src="http://www.blogencommun.fr/blog/wp-content/uploads/homer-simpson.jpg" alt="ce que tu vois"></a>
						<h2 class="cat">nom de la catégorie</h2>
					</div>

					<div class="col-xs-4 col-sm-3 col-md-2">
						<a href=".html"><img class="images-cat" src="http://4k.com/wp-content/uploads/2014/06/4k-image-tiger-jumping.jpg" alt="ce que tu vois"></a>
						<h2 class="cat">nom de la catégorie</h2>
					</div>

					<div class="col-xs-4 col-sm-3 col-md-2">
						<a href=".html"><img class="images-cat" src="http://www.blogencommun.fr/blog/wp-content/uploads/homer-simpson.jpg" alt="ce que tu vois"></a>
						<h2 class="cat">nom de la catégorie</h2>
					</div>
					<div class="col-xs-4 col-sm-3 col-md-2">
						<a href=".html"><img class="images-cat" src="http://www.simpsonspark.com/images/persos/contributions/bart-simpson-20516.gif" alt="ce que tu vois"></a>
						<h2 class="cat">nom de la catégorie</h2>
					</div>

					<div class="col-xs-4 col-sm-3 col-md-2">
						<a href=".html"><img class="images-cat" src="http://www.blogencommun.fr/blog/wp-content/uploads/homer-simpson.jpg" alt="ce que tu vois"></a>
						<h2 class="cat">nom de la catégorie</h2>
					</div>
					<div class="col-xs-4 col-sm-3 col-md-2">
						<a href=".html"><img class="images-cat" src="http://www.simpsonspark.com/images/persos/contributions/bart-simpson-20516.gif" alt="ce que tu vois"></a>
						<h2 class="cat">nom de la catégorie</h2>
					</div>

					<div class="col-xs-4 col-sm-3 col-md-2">
						<a href=".html"><img class="images-cat" src="http://www.blogencommun.fr/blog/wp-content/uploads/homer-simpson.jpg" alt="ce que tu vois"></a>
						<h2 class="cat">nom de la catégorie</h2>
					</div>


				</div>-->


				<div id="chat">BlaBla</div>

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