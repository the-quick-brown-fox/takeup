<?php
/**
 * Template Name: Takeup Page
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-12">
		<main id="main" class="site-main" role="main">
			<div><?php echo do_shortcode('[smartslider3 slider=1]'); ?></div>
			<div class="spacer"></div>
			<div class="row text-center">
				<div class="col-lg-4"><?php echo do_shortcode('[listmenu menu="Test Menu"]'); ?></div>
				<div class="col-lg-4"><?php echo do_shortcode('[listmenu menu="Test Menu"]'); ?></div>
				<div class="col-lg-4"><?php echo do_shortcode('[listmenu menu="Test Menu"]'); ?></div>
			</div>
		</main>
	</section>

<?php
get_sidebar();
get_footer();
