<?php get_header(); ?>
<body data-spy="scroll" data-target="#list-example">
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
				<div class="item">
						<div class="item__content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/portail-0.jpg" alt="img01" />
							<h3 class="item__title" style="text-align:center!important;">Decouvrez nos offres habitat</h3>
						</div>
					</div>
					<div class="item">

					<div class="item__content" id="nav-habitat">
						<div class="list-group" style="width:100%">
						  <a href="#" id="h_portail" onclick="return callAsync(this, 'async');" class="list-group-item list-group-item-action active">
						    Découvrez nôtre gamme de portails
						  </a>
						  <a href="#" id="h_cloture" class="list-group-item list-group-item-action" onclick="return callAsync(this, 'asyncCloture');" style="cursor: pointer!important">Découvrez nôtre gamme de clôture</a>
						  <a href="#" id="h_portillons" onclick="return callAsync(this, 'asyncPortillon');" class="list-group-item list-group-item-action">Découvrez notre gamme de Portillons</a>
						  <a href="#" id="h_automatisme" onclick="return callAsync(this, 'asyncAutomatisme');" class="list-group-item list-group-item-action">Découvrez notre gamme de Automatisme</a>
						</div>
					</div>
				</div>
					<div id="habitat" class="item"> 

					</div>
				</div>
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Landscape"><span>Collectivités</span></a></h2>

				</div>
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="Miscellaneous"><span>Maintenance</span></a></h2>
				</div>

			<!-- /stacks-wrapper -->
		</div>
		<!-- /stacks -->
		<img class="loader" src="<?php echo get_template_directory_uri(); ?>/img/three-dots.svg" width="60" alt="Loader image" />
	</div>
<?php get_footer(); ?>