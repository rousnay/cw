( function( $ ) {

	/******************************
	 Header and Menu
	 ******************************/
	 // jQuery('#mm-menu li').addClass("mm-menu__item");
	 // jQuery('#mm-menu a').addClass("mm-menu__link");
	 // jQuery('#mm-menu a span').addClass("mm-menu__link-text");
	 var menu = new Menu;


	/******************************
	 Library: owl.carousel
	 ******************************/

	 $("#company-logo-slider").owlCarousel({
	 	items : 4,
	 	navigation : true,
	 	itemsTablet: [768,4],
	 	itemsTabletSmall: [600,3],
	 	itemsMobile : [400,2],
	 	singleItem : false,
	 	itemsScaleUp : false,
	 	navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	 });

	//
	document.addEventListener("touchstart", function(){}, true);



	/******************************
	 Library: Isotope
	 ******************************/

	 if ($.isFunction($.fn.imagesLoaded) ) {

	 	var container	= '#post-listing-isotope';
	 	var selector	= '.post-item';

	 	$(container).imagesLoaded( function() {
	 		$(container).isotope({
			  // options...
			  itemSelector: selector,
			  masonry: {
			  	columnWidth: selector
			  }
			});
	 	});

		// filter items when filter link is clicked
		$('#filters-link li').click(function(){
			$('#filters-link li.active').removeClass('active');
			var selector = $(this).attr('data-filter');
			$(container).isotope({ filter: selector, animationEngine : "css" });
			$(this).addClass('active');
			return false;

		});

		// filter items when filter link is selected from dropdown
		$select = $('#filters-dropdown select');
		$(container).isotope({
			itemSelector: selector
		});

		$select.change(function() {
			var filters = $(this).val();
			;
			$(container).isotope({
				filter: filters
			});
		});

	};


		// for affiliation logos
		if ($.isFunction($.fn.imagesLoaded) ) {

			var container1	= '#logo-listing-isotope';
			var selector1	= '.isotope-item';

			$(container1).imagesLoaded( function() {
				$(container1).isotope({
					  // options...
					  itemSelector: selector1,
					  getSortData: {
					  	sortBy: 'original-order'
					  },
					  masonry: {
					  	columnWidth: selector1
					  }
					});
			});

		};

	/******************************
	 Library: perfect-scrollbar
	 ******************************/
	 $('#mm-menu').perfectScrollbar();


	/******************************
	 Library: jquery.matchHeight.js
	 ******************************/
	 $('#post-listing-isotope .post-item').matchHeight();


    /******************************
	 Other settings
	 ******************************/

	 $(".remove-link a").removeAttr("href");

	 if ($.isFunction($.fn.imagesLoaded) ) {


		function equal_size() {
			var entryHeight	= $('.page-template-page-blog #post-listing-isotope .post-item .entry').height();
			var totalHeight = entryHeight + 50;
			$('body.page-template-page-blog #post-listing-isotope .post-item .thumbnail').css('height',totalHeight);
		}

		equal_size();

		$( window ).resize(function() {
			equal_size();
		});
	};

    /******************************
	 Accordion Menu
	 ******************************/
	 $('#mm-menu .header-menu-con-cl > ul > li:has(ul)').addClass("has-sub");
	 $('#mm-menu .header-menu-con-cl > ul > li > a').click(function() {
	 	var checkElement = $(this).next();
	 	
	 	$('#mm-menu .header-menu-con-cl > ul > li').removeClass('active');
	 	$(this).closest('li').addClass('active');	
	 	
	 	
	 	if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
	 		$(this).closest('li').removeClass('active');
	 		checkElement.slideUp('normal');
	 	}
	 	
	 	if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
	 		$('#mm-menu .header-menu-con-cl > ul > li > ul:visible').slideUp('normal');
	 		checkElement.slideDown('normal');
	 	}
	 	
	 	if (checkElement.is('ul')) {
	 		return false;
	 	} else {
	 		return true;	
	 	}		
	 });

	 $('#mm-menu .header-menu-con-cl > ul > li > ul > li:has(ul)').addClass("has-sub");
	 $('#mm-menu .header-menu-con-cl > ul > li > ul > li > a').click(function() {
	 	var checkElement = $(this).next();
	 	
	 	$('#mm-menu .header-menu-con-cl > ul > li > ul > li').removeClass('active');
	 	$(this).closest('li').addClass('active'); 
	 	
	 	
	 	if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
	 		$(this).closest('li').removeClass('active');
	 		checkElement.slideUp('normal');
	 	}
	 	
	 	if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
	 		$('#mm-menu .header-menu-con-cl > ul > li > ul > li > ul:visible').slideUp('normal');
	 		checkElement.slideDown('normal');
	 	}
	 	
	 	if (checkElement.is('ul')) {
	 		return false;
	 	} else {
	 		return true;  
	 	}   
	 });

	})(jQuery);