<?php 
get_header();
global $wp_query;
$page_id = $wp_query->get_queried_object_id();
?>
	<div class="container">
		<header class="codrops-header">
			<div class="codrops-links">
				<a class="codrops-icon codrops-icon--prev" href="" title="Previous Demo"><span>Previous Demo</span></a>
				<a class="codrops-icon codrops-icon--drop" href="" title="Back to the article"><span>Back to the Codrops article</span></a>
			</div>
			<h1 class="codrops-title">Portail <span>Concept</span></h1>
			<nav class="menu">
				<a class="menu__item" href="<?php echo site_url();?>"><span>Accueil</span></a>
				<a class="menu__item <?php if($page_id==62) : echo 'menu__item--current'; endif;?>" href="/qui-nous-sommes/"><span>Qui nous sommes</span></a>
				<a class="menu__item <?php if($page_id==65) : echo 'menu__item--current'; endif;?>" href="/contact/"><span>Contact</span></a>
			</nav>
		</header>
<?php 

	$page = get_page($page_id);
	$content = apply_filters('the_content', $page->post_content);
	$title = apply_filters('the_title', $page->post_title);

?>
<?php if ($page_id==65) : ?>
<h3 style="margin:30px auto"><?php echo $title; ?></h3>
<div style="width:390px;margin:auto">
	<?php echo $content; ?>
</div>
<?php endif; ?>

<?php if($page_id==62): ?>
	<div style="max-width: 800px;margin:auto;"><?php echo $content; ?></div>
<?php endif; ?>



<?php get_footer(); ?>