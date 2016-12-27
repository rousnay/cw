<?php
/**
 * Template Name: Contact
 *
 * @package C&W
 */
get_header(); ?>
<div id="content" class="site-content full-width">
	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); //START the_post query
		$thumb_feature = wp_get_attachment_image_src( get_post_thumbnail_id(), 'cw_feature_img');
		$url_feature = $thumb_feature[0];
		?>

		<section class="container page-banner" style="background-image: url('<?php echo $url_feature; ?>');">
			<div class="row content-holder">
				<div class="col-xs-12">
					<div class="banner-card">
						<p class="cls">
							“I always found shopping insurance to be stressful, but my C&W agent helped me find the best plan for me and now I feel well covered and at ease.”
						</p>
						<h3 class="cls">
							- Jack Doe, Young Professional
						</h3>
					</div>
				</div>
			</div>
		</section><!--  END .page-banner -->

		<section class="container page-header">
			<div class="row">
				<div class="col-xs-12">
					<h1>OUR AFFILIATIONS</h1>
					<h4>Whether you are searching for Personal or Business Insurance, we are free to shop multiple insurance carriers on your behalf. More freedom means more options and more savings for you.</h4>
				</div>
			</div>
		</section><!--  END .page-header -->

		<section class="container page-contents">
			<div class="row content-holder">
				<div class="col-xs-12">
					<?php the_content(); ?>
				</div>
			</div>
		</section><!--  END .page-contents -->


		<?php endwhile; // END of the loop. ?>

	</main><!-- #main -->
</div><!-- .container -->

<?php get_footer(); ?>