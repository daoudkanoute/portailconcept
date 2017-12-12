	<!-- /container -->
	<!-- Flickity v1.0.0 http://flickity.metafizzy.co/ -->
		<script type='text/javascript'>
/* <![CDATA[ */
var ajaxpagination = {"ajaxurl":"<?php echo site_url(); ?>\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
	
	<script src="<?php echo get_template_directory_uri();?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/async.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/flickity.pkgd.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/smoothscroll.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>

	<script type="text/javascript">
		$('.carousel').carousel({
			interval:2600
		});
	</script>
</body>
</html>