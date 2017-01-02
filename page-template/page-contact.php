<?php
/**
 * Template Name: Contact
 *
 * @package C&W
 */
get_header(); ?>

<div id="content" class="site-content full-width">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); //START the_post query
		$thumb_feature = wp_get_attachment_image_src( get_post_thumbnail_id(), 'cw_feature_img');
		$url_feature = $thumb_feature[0]; ?>

		<section class="container page-banner" style="background-image: url('<?php echo $url_feature; ?>');">
			<div class="row content-holder">
				<div class="col-xs-12 banner-holder">
					<?php
						if(get_field('banner_card')){
							echo '<div class="banner-card">' . get_field('banner_card') . '</div>';
						}?>
				</div>
			</div>
		</section><!-- .page-banner -->

<!-- 		<section class="container page-header">
			<div class="row">
				<div class="col-xs-12">
				<ul class="form-header">
					<li>
						<h4>General Information</h4>
					</li>
					<li>
						<h4>Incident Information</h4>
					</li>
					<li>
						<h4>Incident Desciption</h4>
					</li>
					<li>
						<h4>Additional information</h4>
					</li>
				</ul>
					
				</div>
			</div>
		</section> --> 

		<!-- .page-header --> 

		<section class="container page-contents">
					<?php the_content(); ?>
		</section><!-- .page-contents -->

		<?php endwhile; //END the_post query ?>
	</main><!-- #main -->
</div><!-- .container -->

<?php get_footer(); ?>