<?php
/**
 * Template Name: Home
 *
 * @package C&W
 */
get_header(); ?>

<div class="container full-width">
	<div class="row">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="sections">
					<?php //the_content(); ?>
					<section class="slider">
						<div class="row">
							<div class="col-xs-12">
								<div class="slider-inner">
									<?php echo do_shortcode( '[masterslider id="1"]') ?>
								</div>
							</div>
						</div>
					</section>

					<section class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="content-header">
									<h2>GET STARTED</h2>
								</div>
							</div>
						</div>
					</section>

					<div class="container member-logo">
						<div class="row">
							<div class="col-xs-12">
							<h2>OUR AFFILIATIONS</h2>
								<?php echo do_shortcode( '[members_logo]') ?>
							</div>
						</div>
					</div>
					
				</div><!-- .sections -->
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>