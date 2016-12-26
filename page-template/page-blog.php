<?php
/**
 * Template Name: Blog/News
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

		<section class="container blog-content">
			<div class="row content-holder">
				<div id="filters-dropdown" class="select-filter">
					<select class="filtering">
						<option value=".all">All Categories</option>
						<option value=".cat-1">cat-1</option>
						<option value=".cat-2">cat-2</option>
					</select>    
				</div>

				<div class="col-sm-12 blog-content">
					<div class="row" id="post-listing-isotope">
						<?php 
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 20,
							'paged' => $paged
							);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); 

						$terms = get_the_terms( $post->ID, 'category' );           
						if ( $terms && ! is_wp_error( $terms ) ) : 

							$links = array();

						foreach ( $terms as $term ) {
							$links[] = $term->name;
						}

						$tax_links = join( " ", str_replace(' ', '-', $links));          
						$tax = strtolower($tax_links);
						else :  
							$tax = '';          
						endif; ?>

						<?php
						$post_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'cw_blog_listing');

						$thumb_url	= $post_thumb[0];
						$post_url	= get_permalink();
						$content 	= get_the_content();
						?>

						<div class="all post-item 

						<?php if ( has_post_thumbnail() ) {
							echo "col-xs-12 col-sm-6";

						} else {
							echo "col-xs-6 col-sm-3";

						} ?>
						<?php echo $tax; ?> ">

						<?php if( has_post_thumbnail() ): ?>
							<div class="thumbnail thumbnail-hover">
								<div class="blog-img">
									<img class="img-responsive" src="<?php echo $thumb_url; ?>" >
								</div>
								<a href="<?php echo $post_url ?>" title="<?php  the_title_attribute() ?>" class="overlay"></a>
							</div>
						<?php else : ?>
							<!--    NO THUMBNAIL -->
						<?php endif; ?>

						<div class="entry" style="
						<?php if( has_post_thumbnail() ): ?>
						width: 50%;
					<?php else : ?>
					width: 100%;
				<?php endif; ?>

				">
				<h3><a href="<?php echo $post_url ?>"> <?php the_title() ?> </a></h3>
				<div class="entry-content"><?php echo wp_trim_words( $content , '27' ) ?></div>
				<div class="entry-footer">
					<span class="date"> <i class="fa fa-clock-o"></i> <?php the_time(get_option('date_format')) ?></span>
				</div>
			</div>


		</div>
	<?php endwhile; ?>
</div>

<div class="row">
	<div class="col-xs-12">
		<?php if (function_exists("pagination")) {
			pagination($loop->max_num_pages);
		} ?>
	</div>
</div>

</div>
</section>

<?php //endwhile; // end of the loop. ?>

</main><!-- #main -->
</div><!-- .container -->

<?php get_footer(); ?>