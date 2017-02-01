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
									$base = mysql_connect ('localhost', 'root', '');
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
				<div class="row titre padding-left">WebTV / News</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-8 col-md-offset-2">
							<?php
							$base = mysql_connect ('localhost', 'root', '');
							mysql_select_db ('webtv', $base) ;
							$sql = 'SELECT * FROM news';
							$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
							while ($data = mysql_fetch_array($req)) {
								echo '<div class="titre">'.$data['titre'].'</div>';
								echo '<p style="text-align: justify;">'.$data['article'].'</p><br />';
								echo '<p style="color: grey; text-transformation: italic;">Ecrit par : '.$data['auteur'].' le '.$data['date'].'</p>';
								echo '<hr class="line">';
							}
						?>
						</div>
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