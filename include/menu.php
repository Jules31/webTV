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
								echo '<li><a  href=?stream='.$data['lien'].'>'.$data['nom'].'</a></li>';
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