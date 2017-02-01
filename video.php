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
						<a href="#">News</a>
					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Live <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li> Streamer</li>
							<li role="separator" class="divider"></li>
							<?php
									$base = mysql_connect ('localhost', 'webtv', 'webtv');
									mysql_select_db ('webtv', $base) ;
									$sql = 'SELECT * FROM streamer WHERE afficher=1';
									$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
									while ($data = mysql_fetch_array($req)) {
										echo '<li><a  href=?stream='.$data['lien'].' onclick="">'.$data['nom'].'</a></li>';
									}
								?>
								<li role="separator" class="divider"></li>
								<li> Jeux</li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Jeux 1</a></li>
						</ul>
					</li>
					<li>
						<a class="page-scroll" href="#services">Vidéo</a>
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
				<div class="row titre padding-left">WebTV / Vidéo</div>
				<div class="row">
					<div id='newVideo'>
						<h2 class="titre">A la une</h2>
						<div class="col-md-8">
							<div class="video-container">
								<iframe width="900" height="300" src="https://www.youtube.com/embed/Az0wnUSy2TM" frameborder="10" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-md-4">
							<h3>le titre</h3>
							<p>Deux, trois info au calme, genre le résumé de la vidéo ou de quoi elle parle histoire de mettre l'eau à la bouche de ceux qui son intéresser par la section vidéo</p>
						</div>
					</div>
				</div>

				<h2 class="titre">A Voir</h2>
				<div id="topvideo">
					<ul>

						<li>
							<a href="#">NUMBER 1</a>
						</li>

						<li>
							<a href="#">NUMBER 2</a>
						</li>

						<li>
							<a href="#">NUMBER 3</a>
						</li>

						<li>
							<a href="#">NUMBER 4</a>
						</li>

						<li>
							<a href="#">NUMBER 5</a>
						</li>

					</ul>

				</div>
				<div class="row">
					<h2 class="titre">video</h2>
					<div id='video'>

						<div>
							<iframe width="300" height="150" src="https://www.youtube.com/embed/guSt1Fz06K8" frameborder="0" allowfullscreen></iframe>
							<h2>titre de la video</h2>
							<p>description de la video</p>
						</div>

						<div>
							<iframe width="300" height="150" src="https://www.youtube.com/embed/M5EsPRkCxkI" frameborder="0" allowfullscreen></iframe>
							<h2>titre de la video</h2>
							<p>description de la video</p>
						</div>

						<div>
							<iframe width="300" height="150" src="https://www.youtube.com/embed/guSt1Fz06K8" frameborder="0" allowfullscreen></iframe>
							<h2>titre de la video</h2>
							<p>description de la video</p>
						</div>

						<div>
							<iframe width="300" height="150" src="https://www.youtube.com/embed/Az0wnUSy2TM" frameborder="0" allowfullscreen></iframe>
							<h2>titre de la video</h2>
							<p>description de la video</p>
						</div>

						<div>
							<iframe width="300" height="150" src="https://www.youtube.com/embed/guSt1Fz06K8" frameborder="0" allowfullscreen></iframe>
							<h2>titre de la video</h2>
							<p>description de la video</p>
						</div>

						<div>
							<iframe width="300" height="150" src="https://www.youtube.com/embed/Az0wnUSy2TM" frameborder="0" allowfullscreen></iframe>

							<h2>titre de la video</h2>
							<p>description de la video</p>
						</div>
					</div>
				</div>


				<h2>Categorie</h2>
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


				</div>


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