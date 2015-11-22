jQuery(document).ready(function($) {

// ------ SLIDER ADD IMAGE ----- //

	jQuery('.add_slider_image__button').click(function(e) {
		var random = Math.floor((Math.random() * 10000000) + 10000001);
		field = jQuery(this).parent().parent().find('.slider_image:last').clone(true);
		fieldLocation = jQuery(this).parent().parent().find('.slider_image:last');
		jQuery('.slider_field', field).attr('name', function(index, name) {
			return name.replace(/(\d+)/, function(fullMatch, n) {
				return random;
			});
		});
		jQuery('.slider_field', field).attr('id', function(index, id) {
			return id.replace(/(\d+)/, function(fullMatch, n) {
				return random;
			});
		});
		jQuery('.slider_field', field).val('');
		jQuery('.custom_preview_image', field).val('').attr('src', function(index, src) {
			return '';
		});
		field.find('.slider_image__item').removeClass('image-added');
		field.insertAfter(fieldLocation, jQuery(this).closest('div'));
		e.preventDefault();
		return false;
	});
	$('.slider_image__item').each(function() {
		var sliderImageAttr = $(this).find('img').attr('src');
		if (!sliderImageAttr == '') {
			$(this).addClass('image-added');
		}
	});

	$('.slider_container').sortable({
  	containment: "parent",
  	tolerance: "pointer",
  	items: "> .slider_image"
	});
	$( ".slider_container" ).disableSelection();

	jQuery('.slider-remove').click(function(){

		var numItems = $(this).parent().parent().find('.slider_image').length;
		if (numItems > 1) {
	  	jQuery(this).parent().remove();
		}
	  return false;
	});

});