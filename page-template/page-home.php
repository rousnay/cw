<?php
/**
 * Template Name: Home
 *
 * @package CW
 */
get_header(); ?>

<div id="content" class="site-content full-width">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post();  the_content();  endwhile; ?>
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>