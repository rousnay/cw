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

		<section class="container page-header">
			<div class="row">
				<div class="col-xs-12">
					<h1>OUR AFFILIATIONS</h1>
					<h4>Whether you are searching for Personal or Business Insurance, we are free to shop multiple insurance carriers on your behalf. More freedom means more options and more savings for you.</h4>
				</div>
			</div>
		</section><!-- .page-header -->

		<section class="container page-contents">
			<div class="row content-holder">
				<div class="col-xs-12">
					<?php the_content(); ?>
				</div>
			</div>
		</section><!-- .page-contents -->

		<?php endwhile; //END the_post query ?>
	</main><!-- #main -->
</div><!-- .container -->

<?php get_footer(); ?>