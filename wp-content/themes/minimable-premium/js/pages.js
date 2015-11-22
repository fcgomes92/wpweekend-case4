(function($){
	$('.home-link').removeClass('active');
	$('header').removeClass('home-top');
	$('header').addClass('blog-menu');
	$(".nav-tabs li").click(function() {
		$(this).parent().find('.active').removeClass("active");
		$(this).addClass("active");
		$(this).parent().parent().find(".tab-pane").hide();
		var activeTab = $(this).find("a").attr("href");
		$(activeTab).fadeIn(700);
		return false;
	});
	$(".swipebox, .gallery-icon a").swipebox( {
		hideBarsDelay : 0,
		useSVG : false
	});

	$("div.gallery a img").each(function() {
	  var $this = jQuery(this);
	  $this.parent().attr('title', $this.attr('alt'));
	});
	/* Custom Select Woocommerce Shop */


	var select_value = function() {
		var value = $(this).children("option:selected").text();
		if( value == '' )
			value = $(this).children().children("option:selected").text();
		if ( $(this).parent().find('span').length <= 0 ) {
			$(this).before('<span></span>');
		}
		$(this).parent().children('span').replaceWith('<span>'+value +'</span>');
	};
	$('.woocommerce-ordering select').each(select_value).change(select_value);

	/* End Custom Select Woocommerce shop */

	/* Same Height products name shop */

	function equalizeHeights(selector) {
		var heights = new Array();

		// Loop to get all element heights
		$(selector).each(function() {

			// Need to let sizes be whatever they want so no overflow on resize
			$(this).css('min-height', '0');
			$(this).css('max-height', 'none');
			$(this).css('height', 'auto');

			// Then add size (no units) to array
	 		heights.push($(this).height());
		});

		// Find max height of all elements
		var max = Math.max.apply( Math, heights );

		// Set all heights to max height
		$(selector).each(function() {
			$(this).css('height', max + 'px');
		});
	}

	$(window).load(function() {
		// Fix heights on page load
		equalizeHeights('.item-meta-info .item-title-stars');

		// Fix heights on window resize
		$(window).resize(function() {

			// Needs to be a timeout function so it doesn't fire every ms of resize
			setTimeout(function() {
	      		equalizeHeights('.item-meta-info .item-title-stars');
			}, 120);
		});
	});

  var product_thumbnails_swiper = $('.product_thumbnails .product_thumbnails_swiper_container').swiper({
  	slidesPerView: "auto",
  	watchActiveIndex: true,
  	mousewheelControl: true,
  	mode:'vertical',
  	onSlideClick : function(swiper) {
  		owl.goTo(product_thumbnails_swiper.clickedSlideIndex);
  		for (var i = 0; i < product_thumbnails_swiper.slides.length; i++){
  			product_thumbnails_swiper.slides[i].style.opacity = 0.2;
  			product_thumbnails_swiper.slides[i].style.cursor = 'pointer';
  		}
  		product_thumbnails_swiper.slides[product_thumbnails_swiper.clickedSlideIndex].style.opacity = 1;
  		product_thumbnails_swiper.slides[product_thumbnails_swiper.clickedSlideIndex].style.cursor = 'default';

  	}
  });


	//owl

	var curent_dragging_item;

	$(".featured_img_temp").hide();

	$("#product-images-carousel").owlCarousel({
		singleItem : true,
		transitionStyle:"fade",
		lazyLoad : true,
		slideSpeed : 300,
		dragBeforeAnimFinish: false,
		afterAction : afterAction
	});

	//get carousel instance data and store it in variable owl
	var owl = $("#product-images-carousel").data('owlCarousel');

	function afterAction() {
		/*jshint validthis: true */



		if ($(".product_thumbnails").length) {

			for (var i = 0; i < product_thumbnails_swiper.slides.length; i++){
				product_thumbnails_swiper.slides[i].style.opacity = 0.2;
			}
			product_thumbnails_swiper.slides[this.owl.currentItem].style.opacity = 1;

		}
	}
})(jQuery);