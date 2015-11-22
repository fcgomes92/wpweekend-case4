<?php

$customization_fields = array(
	array(
		'label' => 'General Settings',
		'id' => $prefix.'section_general_settings',
		'type' => 'section'
		),
	array(
		'label' => 'Hide Title',
		'desc' => 'Remove the title page',
		'id' => $prefix.'remove_title',
		'type' => 'checkbox',
		'std'  => ''
	),
	array(
		'label' => 'Enable Custom Height Section',
		'desc' => "Set a custom minimum height for this section",
		'id' => $prefix.'enable_custom_height',
		'type' => 'checkbox-show',
		'el-to-show' => 'custom_height_container',
		'std'  => ""
	),
	array(
    "id" => "custom_height_container",
    "type" => "subsection"
	),
	array(
		'label' => 'Set a custom height',
		'desc' => 'Enable customization style for this section',
		'id' => $prefix.'custom_height',
		'type' => 'select-size',
		'std'  => "400"
	),
	array(
		'type' => 'end-subsection'
	),
	array(
		'label' => 'Enable custom color',
		'desc' => 'Enable customization style for this section',
		'id' => $prefix.'enable_custom',
		'type' => 'checkbox-show',
		'el-to-show' => 'custom_colors_container',
		'std'  => ""
		),
	array(
    "id" => "custom_colors_container",
    "type" => "subsection"
	),
	array(
		'label' => 'Background color',
		'desc' => 'Set the background color for this section',
		'id' => $prefix.'background_section',
		'type' => 'color',
		'std'  => '#f9f9f9'
		),
	array(
		'label' => 'Main color',
		'desc' => 'Set the main color for this section',
		'id' => $prefix.'main_color_section',
		'type' => 'color',
		'std'  => get_option('fw_main_color')
		),
	array(
		'label' => 'Secondary color',
		'desc' => 'Set the secondary color for this section',
		'id' => $prefix.'secondary_color_section',
		'type' => 'color',
		'std'  => get_option('fw_secondary_color')
	),
	array(
		'label' => 'Text color',
		'desc' => 'Set the text color for this section',
		'id' => $prefix.'text_section',
		'type' => 'color',
		'std'  => '#2d2d2d'
	),
	array(
    "id" => "bubbles_color_container",
    "type" => "subsection"
	),
	array(
		'label' => 'Odd Bubbles Background Color',
		'desc' => 'Set the background color of odd bubbles for this section',
		'id' => $prefix.'odd_bubbles_bgcolor_section',
		'type' => 'color',
		'std'  => get_option('fw_odd_bubbles_bgcolor')
	),
	array(
		'label' => 'Odd Bubbles Text Color',
		'desc' => 'Set the text color for odd bubbles for this section',
		'id' => $prefix.'odd_bubbles_color_section',
		'type' => 'color',
		'std'  => get_option('fw_odd_bubbles_color')
	),
	array(
		'label' => 'Even Bubbles Background Color',
		'desc' => 'Set the background color of even bubbles for this section',
		'id' => $prefix.'even_bubbles_bgcolor_section',
		'type' => 'color',
		'std'  => get_option('fw_even_bubbles_bgcolor')
	),
	array(
		'label' => 'Even Bubbles Text Color',
		'desc' => 'Set the text color for even bubbles for this section',
		'id' => $prefix.'even_bubbles_color_section',
		'type' => 'color',
		'std'  => get_option('fw_even_bubbles_color')
	),
	array(
		'type' => 'end-subsection'
	),
	array(
		'type' => 'end-subsection'
	),
	array(
    "type" => "end-section"
	),
	array(
		'label' => 'Background Settings',
		'id' => $prefix.'section_background_settings',
		'type' => 'section',
	),
	array(
		'label' => 'Background attachment',
		'desc' => 'Chek it if you want to set the background of the image or video as fixed',
		'id' => $prefix.'bg_attachment',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label' => 'Parallax background',
		'desc' => 'Chek it if you want to set the parallax effect for the image',
		'id' => $prefix.'bg_parallax',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label' => 'Select the type of overlay',
		'desc'  => 'Select between a pattern or a dark color',
		'id'    => $shortname.'_select_overlay',
		'type'  => 'select',
		'options' => array (
			'one' => array (
				'label' => 'None',
				'value' => 'none'
				),
			'two' => array (
				'label' => 'Pattern',
				'value' => 'pattern'
				),
			'three' => array (
				'label' => 'Color',
				'value' => 'color'
			)
		)
	),
	array(
		'label' => 'Select the type of background',
		'desc'  => 'Select between video background, particles or slideshow. You can have particles over the background image.',
		'id'    => $shortname.'_select_bg',
		'type'  => 'select',
		'options' => array (
			'one' => array (
				'label' => 'None',
				'value' => 'none'
			),
			'two' => array (
				'label' => 'Video',
				'value' => 'video'
			),
			'three' => array (
				'label' => 'Particles',
				'value' => 'particles'
			),
			'four' => array (
				'label' => 'Slideshow',
				'value' => 'slideshow'
			)
		)
	),
	array(
		'id' => $prefix.'video_settings',
		'type' => 'subsection',
		'class' => 'bg-sub-section'
	),
	array(
		'label' => 'Video Background',
		'desc' => "Add self hosted or Youtube video background"
	),
	array(
		'label' => 'Video Background Source',
		'desc'  => 'Add self hosted or Youtube video background',
		'id'    => $shortname.'_select_video',
		'type'  => 'select',
		'options' => array (
			'one' => array (
				'label' => 'Self Hosted',
				'value' => 'self-hosted'
			),
			'two' => array (
				'label' => 'Youtube',
				'value' => 'youtube'
			)
		)
	),
	array(
		'id' => $prefix.'self_hosted_video',
		'type' => 'subsection',
		'class' => 'bg-sub-section'
	),
	array(
		'label' => 'MP4 video',
		'desc' => 'Copy and paste the URL of the MP4 video from the Media Library',
		'id' => $prefix.'mp4_video',
		'type' => 'text',
		'std'  => ""
	),
	array(
		'label' => 'WEBM video',
		'desc' => 'Copy and paste the URL of the WEBM video from the Media Library',
		'id' => $prefix.'webm_video',
		'type' => 'text',
		'std'  => ""
	),
	array(
    "type" => "end-subsection"
	),
	array(
		'id' => $prefix.'youtube_video',
		'type' => 'subsection',
		'class' => 'bg-sub-section'
	),
	array(
		'label' => 'Youtube video',
		'desc' => 'Copy and paste the video url from Youtube',
		'id' => $prefix.'youtube_url_video',
		'type' => 'text',
		'std'  => ""
	),
	array(
    "type" => "end-subsection"
	),
	array(
    "type" => "end-subsection"
	),
	array(
		'id' => $prefix.'particles_settings',
		'type' => 'subsection',
		'class' => 'bg-sub-section'
	),
	array(
		'label' => 'Particles Background',
		'desc' => "You can add background particles and combine theme with a background image (featured image)"
	),
	array(
		'label' => 'Particles Dots Color',
		'desc' => 'Set the color of dots',
		'id' => $prefix.'particles_dots_color',
		'type' => 'color',
		'std'  => "#ffffff"
	),
	array(
		'label' => 'Particles Lines Color',
		'desc' => 'Set the color of particles lines',
		'id' => $prefix.'particles_lines_color',
		'type' => 'color',
		'std'  => "#ffffff"
	),
	array(
		'label' => 'Particles Speed',
		'desc' => 'Set the particles Speed',
		'id' => $prefix.'particles_speed',
		'type' => 'select-size',
		'std'  => "3"
	),
	array(
    "type" => "end-subsection"
	),
	array(
		'id' => $prefix.'slider_bg',
		'type' => 'subsection',
		'class' => 'bg-sub-section'
	),
	array(
		'label' => 'Slideshow Background',
		'desc' => "You can add a slideshow as background. You can add one slideshow per single page"
	),
	array(
		'id' => $prefix.'slider_settings',
		'type' => 'subsection'
	),
	array(
		'label' => 'Autoplay',
		'id'    => $prefix.'slider_autoplay',
		'type'  => 'select',
		'options' => array (
			'one' => array (
				'label' => 'None',
				'value' => false
			),
			'two' => array (
				'label' => 'Slow',
				'value' => '6000'
			),
			'three' => array (
				'label' => 'Medium',
				'value' => '4000'
			),
			'four' => array (
				'label' => 'Fast',
				'value' => '2000'
			)
		)
	),
	array(
		'label' => 'Effect',
		'id'    => $prefix.'slider_effects',
		'type'  => 'select',
		'options' => array (
			'two' => array (
				'label' => 'Fade',
				'value' => 'fade'
			),
			'three' => array (
				'label' => 'Back Slide',
				'value' => 'backSlide'
			),
			'four' => array (
				'label' => 'Go Down',
				'value' => 'goDown'
			),
			'five' => array (
				'label' => 'Fade Up',
				'value' => 'fadeUp'
			)
		)
	),
	array(
		'label' => 'Navigation Arrows',
		'id' => $prefix.'slider_navigation',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label' => 'Pagination (bullets)',
		'id' => $prefix.'slider_pagination',
		'type' => 'checkbox',
		'std'  => ""
	),

	array(
    "type" => "end-subsection"
	),
	array(
		'id' => $prefix.'slider_images',
		'type' => 'subsection'
	),
	array(
    'id'    => $prefix.'slider_field',
    'type'  => 'slider',
    'slider_fields' => array(
    	array(
        'id' => $prefix.'slider_image',
        'label' => 'Image',
        'type' => 'image',
        'desc' => 'Select the background image',
        'order' => '1'
      )

    )
  ),
  array(
    "type" => "end-subsection"
	),
  array(
    "type" => "end-subsection"
	),
	array(
    "type" => "end-section"
	)
);

$link_field = array (
	array(
		'label' => 'Page link for the menu',
		'desc' => 'This is the link you have to add in the menu',
		'id' => $prefix.'page_link',
		'type' => 'label',
		'std'  => ""
		),
	array(
		'label' => 'Page link alternative',
		'desc' => "If you don't like the page link or it has some special chars, you can write yours without space and any type of special chars, like this: the-anchor (without the '#' character). Then in the menu you need to write #the-anchor ",
		'id' => $prefix.'page_link_alternative',
		'type' => 'text',
		'std'  => ""
		)
	);
$bg_common_field =  array (
	array(
		'label' => 'Background attachment',
		'desc' => 'Chek it if you want to set the background of the image or video as fixed',
		'id' => $prefix.'bg_attachment',
		'type' => 'checkbox',
		'std'  => ""
		),
	array(
		'label' => 'Overlay',
		'desc' => 'Add the overlay pattern to the video',
		'id' => $prefix.'overlay',
		'type' => 'checkbox-show',
		'std'  => ""
		),
	array (
		'label' => 'Select the type of overlay',
		'desc'  => 'Select between a pattern or a dark color',
		'id'    => $shortname.'_select_overlay',
		'type'  => 'select',
		'options' => array (
			'one' => array (
				'label' => 'Pattern',
				'value' => 'pattern'
				),
			'two' => array (
				'label' => 'Color',
				'value' => 'color'
				)
			)
		)
	);
$background_field = array (
	array (
		'label' => 'Select the bg',
		'desc'  => 'Select the type of background. You can have particles over the background image.',
		'id'    => $shortname.'_select_bg',
		'type'  => 'select',
		'options' => array (
			'one' => array (
				'label' => 'None',
				'value' => 'none'
				),
			'two' => array (
				'label' => 'Video',
				'value' => 'video'
				),
			'three' => array (
				'label' => 'Particles',
				'value' => 'particles'
				)
			)
		)
	);
?>