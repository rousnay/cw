<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package C&W
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="row">
		<div class="col-sm-6 informations">
			<div class="row content-holder-half">
				<div class="col-sm-12">
					<div class="contact-info">
						<h4>CONTACT INFORTAMTION</h4>
						<p>555 Poynts Avenue <br> 
							Manhattan, KS 66502</p>
							<br>
							<p>Phone: (785) 537-1600 <br>
								Fax: (785) 537-1657</p>
								<br>
								<button>CONTACT US</button>
							</div>

							<div class="quick-links">
								<ul>
									<h4>QUICK LINKS</h4>
									<li>Affiliations</li>
									<li>Forms</li>
									<li>News</li>
									<li>Blog</li>
								</ul>
							</div>

						</div>
					</div>
				</div>


				<div class="col-sm-6 location-map">
					<div class="row content-holder-half">
						<div class="col-sm-12">

<iframe width="1000" height="350" frameborder="0" scrolling="no" marginheight="0" src="https://maps.google.com/maps?q=555 Poynts Avenue  Manhattan, KS 66502, &t=&z=17&ie=UTF8&iwloc=&output=embed" marginwidth="0"><a class="addmaps" href="http://www.map-embed.com"id="get-map-data" mce_href="http://maps.google.com/maps/api/js?sensor=false">555 Poynts Avenue  Manhattan, KS 66502, </a><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></iframe>
						</div>
					</div>
				</div>

			</div>
		</footer><!-- footer -->
	</div><!-- #page -->

	<button id="mm-menu-toggle" class="mm-menu-toggle">Toggle Menu</button>
	<!-- MENU FOR SMALL SCREEN -->
	<nav id="mm-menu" class="mm-menu">
		<div class="mm-menu__header">
			<h2 class="mm-menu__title">C&W</h2>
		</div>
		<?php cw_header_menu(); ?>
	</nav><!-- nav -->
	<?php wp_footer(); ?>

	<script type="text/javascript">
	//Fix the position of toggle menu icon
	function fixed_header_with_adminBar() {
		var adminBarHeight	= jQuery('#wpadminbar').height();
		var menuToggleTop 	= 22;
		var topTotal 		= adminBarHeight + menuToggleTop;
		//jQuery('#masthead').css('top',adminBarHeight);
		jQuery('#mm-menu-toggle').css('top',topTotal)
	}
	fixed_header_with_adminBar();
	jQuery( window ).resize(function() {
		fixed_header_with_adminBar();
	});

	//Google Analytics Codes

</script>

</body>
</html>