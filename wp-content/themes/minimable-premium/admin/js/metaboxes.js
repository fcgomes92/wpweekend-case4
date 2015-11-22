jQuery(document).ready(function($) {
	$('.settings-btn-mbox .btn-mbox a').click(function(e) {
		$(this).parent().parent().parent().find('.tab-pane').hide();
 		$(this.hash).show();
 		$(this).parent().parent().find('.btn-mbox').removeClass('active');
 		$(this).parent().addClass('active');
 		e.preventDefault();
	});

	$('.change-color').each(function() {
		var divPicker = $(this).find('.color-picker');
		var inputPicker = $(this).find('input[type=text]');
		divPicker.farbtastic(inputPicker);
		divPicker.hide();

        $('.pickcolor', this).click(function(){
           divPicker.slideToggle('fast');
        });
	});
	var $template_select = jQuery('select#page_template'),
		$template_box = jQuery('#normal-sortables');

	$template_select.change(function() {
		var this_value = jQuery(this).val();
		$('#main_content').css('display','none');
		$('#bubbles_content').css('display','none');
		$('#staff_content').css('display','none');
		$('#staff_item_content').css('display','none');
		$('#contact_content').css('display','none');
		$('#social_link').css('display','none');
		$('#postdivrich').css('height','0');
		$('#postdivrich').css('visibility','hidden');
		$('#portfolio_content').css('display','none');
		$('#portfolio_item_content').css('display','none');
		$('#staff_selector').css('display','none');
		$('#product_content').css('display','none');
		$('#bubbles_color_container').css('display','none');
		$('#custom_section').css('display','none');
		$('#custom_external_page').css('display','none');
		$('#link_page').css('display','none');
		$('.settings-btn-mbox .btn-mbox a').parent().removeClass('active');
		$('.settings-btn-mbox .btn-mbox:first-child a').parent().addClass('active');
		$('.tab-pane').hide();
		$('.group-field .tab-pane:first-child').show();

		switch ( this_value ) {
			case 'default':
				$('#postdivrich').css('height','auto');
				$('#postdivrich').css('visibility','visible');
				$('#custom_external_page').css('display','block');
				break;
			case 'main-template.php':
				$('#main_content').css('display','block');
				$('#link_page').css('display','none');
				$('#custom_section').css('display','none');
				break;
			case 'templates/template-home.php':
				$('#bubbles_content').css('display','block');
				$('#custom_section').css('display','block');
				$('#bubbles_color_container').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-staff.php':
				$('#staff_content').css('display','block');
				$('#postdivrich').css('height','auto');
				$('#postdivrich').css('visibility','visible');
				$('#staff_selector').css('display','block');
				$('#custom_section').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-portfolio-thumb.php':
				$('#portfolio_content').css('display','block');
				$('#custom_section').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-portfolio.php':
				$('#portfolio_content').css('display','block');
				$('#custom_section').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-contact.php':
				$('#contact_content').css('display','block');
				$('#social_link').css('display','block');
				$('#custom_section').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-gallery.php':
				$('#postdivrich').css('height','auto');
				$('#postdivrich').css('visibility','visible');
				$('#custom_section').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-fullwidth.php':
				$('#postdivrich').css('height','auto');
				$('#postdivrich').css('visibility','visible');
				$('#custom_section').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-product.php':
				$('#postdivrich').css('height','auto');
				$('#postdivrich').css('visibility','visible');
				$('#product_content').css('display','block');
				$('#custom_section').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/blog-template.php':
				$('#custom_section').css('display','none');
				break;
			case 'templates/template-page-fullwidth.php':
				$('#postdivrich').css('height','auto');
				$('#postdivrich').css('visibility','visible');
				$('#custom_external_page').css('display','block');
				break;
		}
	});

	$template_select.trigger('change');
	jQuery('.custom_upload_image_button').click(function() {
        formfield = jQuery(this).siblings('.custom_upload_image');
        preview = jQuery(this).siblings('.custom_preview_image');
        tb_show('', 'media-upload.php?type=image&TB_iframe=true');
        window.send_to_editor = function(html) {
            imgurl = jQuery('img',html).attr('src');
            classes = jQuery('img', html).attr('class');
            id = classes.replace(/(.*?)wp-image-/, '');
            formfield.val(id);
            preview.attr('src', imgurl);
            preview.parent().addClass('image-added');
            tb_remove();
        }
        return false;
    });
    jQuery('.custom_clear_image_button').click(function() {
        var defaultImage = jQuery(this).parent().siblings('.custom_default_image').text();
        jQuery(this).parent().siblings('.custom_upload_image').val('');
        jQuery(this).parent().siblings('.custom_preview_image').attr('src', defaultImage);
        jQuery(this).parent().parent().removeClass('image-added');
        return false;
    });
    var $bg_select = jQuery('#fw_select_bg');
    $bg_select.change(function() {
		var this_value = jQuery(this).val();
		switch ( this_value ) {
			case 'none':
				$('#fw_video_settings').css('display','none');
				$('#background_image_settings').css('display','none');
				$('#fw_particles_settings').css('display','none');
				$('#fw_slider_bg').css('display','none');

			break;
			case 'image':
				$('#fw_video_settings').css('display','none');
				$('#background_image_settings').css('display','block');
				$('#fw_particles_settings').css('display','none');
				$('#fw_slider_bg').css('display','none');

			break;
			case 'video':
				$('#fw_video_settings').css('display','block');
				$('#background_image_settings').css('display','none');
				$('#fw_particles_settings').css('display','none');
				$('#fw_slider_bg').css('display','none');

			break;
			case 'particles':
				$('#fw_video_settings').css('display','none');
				$('#background_image_settings').css('display','none');
				$('#fw_particles_settings').css('display','block');
				$('#fw_slider_bg').css('display','none');

			break;
			case 'slideshow':
				$('#fw_video_settings').css('display','none');
				$('#background_image_settings').css('display','none');
				$('#fw_particles_settings').css('display','none');
				$('#fw_slider_bg').css('display','block');

			break;
			}
		});
	$bg_select.trigger('change');

	var $video_select = jQuery('#fw_select_video');
  $video_select.change(function() {
		var this_value = jQuery(this).val();
		switch ( this_value ) {

			case 'self-hosted':
				$('#fw_self_hosted_video').css('display','block');
				$('#fw_youtube_video').css('display','none');

			break;
			case 'youtube':
				$('#fw_self_hosted_video').css('display','none');
				$('#fw_youtube_video').css('display','block');

			break;
			}
		});
	$video_select.trigger('change');

});