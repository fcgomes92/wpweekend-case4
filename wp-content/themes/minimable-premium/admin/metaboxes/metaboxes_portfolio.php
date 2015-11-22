<?php

// General portfolio page
$portfolio_general_fields = array(
	array(
		'label'=> 'Category (Group) to show',
		'desc'  => 'Choose the category group to show in this page',
		'id'    => $prefix.'taxonomy_select',
		'type'  => 'select-taxonomy',
		'tax' => 'portfolio-categories'
	),
	array(
		'label'=> 'Items order',
		'desc'  => 'Set the order of portfolio items (ascendent or descendent)',
		'id'    => $prefix.'order_select',
		'type'  => 'select',
		'options' => array (
	    	'one' => array (
	            'label' => 'Ascendent',
	            'value' => 'ASC'
	       	),
        	'two' => array (
            'label' => 'Descendent',
            'value' => 'DESC'
        )
	    )
	),
	array(
		"label" => 'Label for "All" category in the Portfolio Section',
		"desc" => "Insert the label for the All category in the filters",
		"id" => $prefix."meta_all_category",
		"type" => "text",
		"std" => get_option('fw_label_all_category')
	),
	array(
		"label" => 'Label for More Details Button in the Portfolio Section',
		"desc" => "Insert the label for the More Details",
		"id" => $prefix."meta_more_link",
		"type" => "text",
		"std" => get_option('fw_label_more_link')
	),
	array(
		"label" => 'Label for Portfolio Link',
		"desc" => "Insert the label for the Portfolio link",
		"id" => $prefix."meta_portfolio_link",
		"type" => "text",
		"std" => get_option('fw_label_portfolio_link')
	)
);

// Single item

$portfolio_item_fields = array(
	array(
		"label" => "Layout settings",
		"id" => $prefix.'section_layout_settings',
		"type" => "section"
	),
	array(
		'label' => 'Enable more details button',
		'desc' => 'If you have chosen the "Template Portfolio", without the thumbs, it adds the "more details" button.',
		'id' => $prefix.'enable_more_detail',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label' => 'Disable overlay description',
		'desc' => 'Disable the overlay description. If you turn it on the description will placed under the images or the video',
		'id' => $prefix.'disable_lightbox_description',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label' => 'Use a full width featured image',
		'desc' => "If you want to use a full width image check the field. (max width 1170px)",
		'id' => $prefix.'enable_full_featured',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label' => 'Show the link as button',
		'desc' => 'If you want to show the link as button (not as rounded arrow), check it',
		'id' => $prefix.'enable_link_button',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label'=> 'Link',
		'desc'  => 'Link for the portfolio work',
		'id'    => $prefix.'link_portfolio',
		'type'  => 'text'
	),
	array(
		'label'=> 'Open the link in a new tab',
		'desc'  => 'Check this option if you want to open the link in a new tab',
		'id'    => $prefix.'target_blank_portfolio',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
    "type" => "end-section"
	),
	array(
		"label" => "Type of content",
		"id" => $prefix.'section_type_content',
		"type" => "section"
	),

	array(
		'label' => 'Enable carousel',
		'desc' => 'Enable carousel',
		'id' => $prefix.'enable_carousel',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label' => 'Remove the featured image in the item details',
		'desc' => "If you don't want to show the featured image, check it",
		'id' => $prefix.'enable_featured',
		'type' => 'checkbox',
		'std'  => ""
	),

	array(
		'label' => 'Add the featured image to the carousel',
		'desc' => "If you want to show the featured image in the carousel, check it",
		'id' => $prefix.'enable_featured_carousel',
		'type' => 'checkbox',
		'std'  => ""
	),

	array(
		'label'=> 'Video',
		'desc'  => 'Use a shortcode for insert a video (ex. [vid site="youtube" id="dQw4w9WgXcQ" w="600" h="340"])',
		'id'    => $prefix.'video_portfolio',
		'type'  => 'text'
		),
	array(
		'label'=> 'Soundcloud',
		'desc'  => 'Use a shortcode for insert a sound. Install the plugin you can find in the documentation.',
		'id'    => $prefix.'soundcloud_portfolio',
		'type'  => 'text'
	),
	array(
    "type" => "end-section"
	)
);

$image_portfolio_field = array (

);

?>