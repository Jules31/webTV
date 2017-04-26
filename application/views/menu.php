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
									foreach($streamers as $key => $linkStream) {
										echo '<li><a  href='.site_url('index/').$linkStream['nom'].' onclick="">'.$linkStream['nom'].'</a></li>';
									}
								?>
								<li role="separator" class="divider"></li>
								<li> Jeux</li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Jeux 1</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vidéo <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li> Par Streamer</li>
							<li role="separator" class="divider"></li>
							<?php
									foreach($streamers as $key => $video) {
										echo '<li><a  href='.site_url('video/').$video['nom'].' onclick="">'.$video['nom'].'</a></li>';
									}
								?>
						</ul>

                        
                        <?php if($this->session->userdata('logged_in')): ?> 
                        <li class="pull-right">
                        <a href="">Bienvenue <?php echo $username; ?></a>
                        </li>
                        <li class="pull-right">
                        <a href="<?php echo site_url('logout'); ?>" class="lien footer"> Déconexion </a>
                        </li>
                        <?php else: ?>
                        <li class="pull-right">
				        <a href="<?php echo site_url('login'); ?>" class="lien footer"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</a>
			           </li>
                        <?php endif; ?>

                    
			
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>