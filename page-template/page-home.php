<?php
/**
 * Template Name: Home
 *
 * @package C&W
 */
get_header(); ?>

<div id="content" class="site-content full-width">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			
			<section class="container slider-contents">
				<div class="row">
					<div class="col-xs-12">
						<div class="slider-inner">
							<?php echo do_shortcode( '[masterslider id="1"]') ?>
						</div>
					</div>
				</div>
			</section><!-- .slider-contents -->

			<section class="container get-started">
				<div class="row content-holder">
					<div class="col-xs-12">
						<h2>GET STARTED</h2>
						<div class="feature">
							<div class="blooks">
								<div class="feature-icons feature-car">

								</div>
								<div class="feature-text">
									Auto
								</div>
							</div>
							<div class="blooks">
								<div class="feature-icons feature-home">

								</div>
								<div class="feature-text">
									Home
								</div>
							</div>
							<div class="blooks">
								<div class="feature-icons feature-life">

								</div>
								<div class="feature-text">
									Life
								</div>
							</div>
							<div class="blooks">
								<div class="feature-icons feature-commercial">

								</div>
								<div class="feature-text">
									Commercial
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- .get-started -->

			<section class="container affiliation-logos">
				<div class="row content-holder">
					<div class="col-xs-12">
						<h2>OUR AFFILIATIONS</h2>
						<?php echo do_shortcode( '[company_logo]') ?>
					</div>
				</div>
			</section><!-- .affiliation-logos -->

			<section class="container page-contents">
				<div class="row content-holder">
					<div class="col-xs-12">
						<?php //the_content(); ?>
					</div>
				</div>
			</section><!-- .page-contents -->

		<?php endwhile; // end of the loop. ?>
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>