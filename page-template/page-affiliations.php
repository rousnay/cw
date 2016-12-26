<?php
/**
 * Template Name: Affiliations
 *
 * @package C&W
 */
get_header(); ?>
<div id="content" class="site-content full-width">
	<main id="main" class="site-main" role="main">
		
		<?php //while ( have_posts() ) : the_post(); ?>
		<section class="container page-header">
			<div class="row content-holder">
				<div class="col-xs-12">
					<div class="header-text-holder">
						<p class="cls">
							“I always found shopping insurance to be stressful, but my C&W agent helped me find the best plan for me and now I feel well covered and at ease.”
						</p>
						<h3 class="cls">
							- Jack Doe, Young Professional
						</h3>
					</div>
				</div>
			</div>
		</section>

		<section class="container affiliation-contents">
			<div class="row content-holder">

				<div class="col-xs-12">
					<h2>OUR AFFILIATIONS</h2>
					<p class="pera-text">
						Whether you are searching for Personal or Business Insurance, we are free to shop multiple insurance carriers on your behalf. More freedom means more options and more savings for you.
					</p>
				</div>

				<div class="col-xs-12 affiliation-logo-area">
					<div id="logo-listing-isotope" class="row">
						<?php if( have_rows('company_logo', 'option') ): ?> <!-- START company_logo query -->
							<?php while( have_rows('company_logo', 'option') ): the_row(); 
							$logo_url = get_sub_field('logo');
							$company_link = get_sub_field('link');
							?>
							<div class="all isotope-item col-xs-6 col-sm-4">
								<div class="thumbnail thumbnail-hover">
									<div class="logo-img">
										<img class="img-responsive" src="<?php echo $logo_url; ?>" >
									</div>
									<a href="<?php echo $company_link ?>" class="overlay"></a>
								</div>
							</div>
						<?php endwhile; ?> <!-- END #logo-listing-isotope -->
					<?php endif; ?> <!-- END company_logo query -->

					<div class="all isotope-item col-xs-6 col-sm-4">
						<div class="thumbnail thumbnail-hover">
							<div class="logo-img">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/get-ready.png">
							</div>
							<a href="" class="overlay"></a>
						</div>
					</div>

				</div>
			</div> <!-- END affiliation-logo-area -->
		</div>
	</section>
	<?php //endwhile; // end of the loop. ?>

</main><!-- #main -->
</div><!-- .container -->

<?php get_footer(); ?>