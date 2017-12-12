<?php get_header(); ?>
<body>
	<div class="container">
		<div class="hero">
			<div class="hero__back hero__back--static"></div>
			<div class="hero__back hero__back--mover"></div>
			<div class="hero__front"></div>
		</div>
		<header class="codrops-header">
			<div class="codrops-links">
				<a class="codrops-icon codrops-icon--prev" href="http://tympanus.net/Development/InteractiveColoringcpt/" title="Previous Demo"><span>Previous Demo</span></a>
				<a class="codrops-icon codrops-icon--drop" href="http://tympanus.net/codrops/2015/05/06/photography-website-cpt/" title="Back to the article"><span>Back to the Codrops article</span></a>
			</div>
			<h1 class="codrops-title">Portail <span>Concept</span></h1>
			<nav class="menu">
				<a class="menu__item menu__item--current" href="<?php site_url();?>"><span>Accueil</span></a>
				<a class="menu__item" href="/qui-nous-sommes/"><span>Qui nous sommes</span></a>
				<a class="menu__item" href="/contact/"><span>Contact</span></a>
			</nav>
		</header>
		<div class="stack-slider">
			<div class="stacks-wrapper">
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Habitat"><span>Habitat</span></a></h2>
					<div id="portail" class="item">

					</div>
				
					<!--<div class="item">
						<div class="item__content">
							<div id="carouselIndicators_1" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carouselIndicators_1" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselIndicators_1" data-slide-to="1"></li>
							  </ol>
							  <div class="carousel-inner">
								<div class="carousel-item active">
								  <img src="<?php echo get_template_directory_uri(); ?>/img/type1/4.jpg" alt="image 1">
								  <div class="carousel-caption d-none d-md-block">
								    <h3>Sartorial</h3>
								    <p>Bonjour le premier text exterieur et non exterieur sil n'y avais que l'exterieur qui comptait dans l'interieur des modelle interieur. Bonjour le premier text exterieur et non exterieur sil n'y avais que l'exterieur qui comptait dans l'interieur des modelle interieur.</p>
								  </div>
								</div>
								<div class="carousel-item">
								  <img src="<?php echo get_template_directory_uri(); ?>/img/type1/5.jpg" alt="image 1">
								  <div class="carousel-caption d-none d-md-block">
								    <h3>Retro kanoute</h3>
								    <p>Bonjour le premier text exterieur</p>
								  </div>
								</div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselIndicators_1" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Précedent</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselIndicators_1" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Suivant</span>
							  </a>
							</div>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5 mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>-->
				</div>
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Landscape"><span>Collectivités</span></a></h2>
					<div class="item">
						<div class="item__content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/type3/1.jpg" alt="img01" />
							<h3 class="item__title">Austin flannel salvia <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5 mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item__content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/type3/2.jpg" alt="img02" />
							<h3 class="item__title">Brunch vegan pickled cred <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5 mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item__content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/type3/3.jpg" alt="img03" />
							<h3 class="item__title">Blog dreamcatcher squid  <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5 mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item__content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/type3/4.jpg" alt="img04" />
							<h3 class="item__title">Migas intelligentsia meh <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5 mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item__content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/type3/5.jpg" alt="img05" />
							<h3 class="item__title">Authentic locavore meditation <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5 mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
							<p>Images by <a href="https://www.flickr.com/photos/56218409@N03/">Matthias Ripp</a></p>
						</div>
					</div>
					<div class="item">
						<!-- Related demos -->
						<div class="item__content item__content--related">
							<p>If you enjoyed this demo you might also like:</p>
							<a class="media-item" href="http://tympanus.net/Tutorials/SlidingHeaderLayout/">
								<img class="media-item__img" src="<?php echo get_template_directory_uri(); ?>/img/related/SlidingHeaderLayout.jpg" />
								<h3 class="media-item__title">Sliding Header Layout</h3>
							</a>
							<a class="media-item" href="http://tympanus.net/Development/ScatteredPolaroidsGallery/">
								<img class="media-item__img" src="<?php echo get_template_directory_uri(); ?>/img/related/ScatteredPolaroidGallery.jpg" />
								<h3 class="media-item__title">Scattered Polaroid Gallery</h3>
							</a>
						</div>
					</div>
				</div>
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Miscellaneous"><span>Maintenance</span></a></h2>
					<div class="item">
						<div class="item__content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/type2/1.jpg" alt="img01" />
							<h3 class="item__title">Chambray fingerstache <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5 mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item__content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/type2/2.jpg" alt="img02" />
							<h3 class="item__title">Chia pop-up meh <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5 mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item__content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/type2/3.jpg" alt="img03" />
							<h3 class="item__title">Butcher organic ennui <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5 mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item__content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/type2/4.jpg" alt="img04" />
							<h3 class="item__title">Four loko slow-carb Austin <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5 mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item__content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/type2/5.jpg" alt="img05" />
							<h3 class="item__title">Biodiesel freegan cardigan <span class="item__date">05/05/2015</span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5 mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
								</ul>
							</div>
							<p>Images by <a href="https://www.flickr.com/photos/deanhochman/">Dean Hochman</a></p>
						</div>
					</div>
					<div class="item">
						<!-- Related demos -->
						<div class="item__content item__content--related">
							<p>If you enjoyed this demo you might also like:</p>
							<a class="media-item" href="http://tympanus.net/Tutorials/SlidingHeaderLayout/">
								<img class="media-item__img" src="<?php echo get_template_directory_uri(); ?>/img/related/SlidingHeaderLayout.jpg" />
								<h3 class="media-item__title">Sliding Header Layout</h3>
							</a>
							<a class="media-item" href="http://tympanus.net/Development/ScatteredPolaroidsGallery/">
								<img class="media-item__img" src="<?php echo get_template_directory_uri(); ?>/img/related/ScatteredPolaroidGallery.jpg" />
								<h3 class="media-item__title">Scattered Polaroid Gallery</h3>
							</a>
						</div>
					</div>
				</div>

			<!-- /stacks-wrapper -->
		</div>
		<!-- /stacks -->
		<img class="loader" src="<?php echo get_template_directory_uri(); ?>/img/three-dots.svg" width="60" alt="Loader image" />
	</div>
<?php get_footer(); ?>