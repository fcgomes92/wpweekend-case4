<?php

$home_metaboxes = array(
	array(
		"label" => "Top Header and Slogan",
		"id" => "home_metabox_top_header",
		"type" => "section"
	),
	array(
		'label'=> 'Big Title One',
		'desc'  => 'Insert the first big title.',
		'id'    => $prefix.'big_one',
		'type'  => 'text'
	),
	array(
		'label'=> 'Big Title Two',
		'desc'  => 'Insert the second big title.',
		'id'    => $prefix.'big_two',
		'type'  => 'text'
	),
	array(
		'label'=> 'Big Title Three',
		'desc'  => 'Insert the third big title.',
		'id'    => $prefix.'big_three',
		'type'  => 'text'
	),
	array(
		"label" => "Top Header and Slogan End",
    "id" => "home_metabox_top_header_end",
		"type" => "end-section"
	),
	array(
		"label" => "Bubbles",
    "id" => "home_metabox_bubbles",
    "type" => "section"
	),
	array(
		'label' => 'Enable bubbles links',
		'desc' => "Enable navigation links on the top of the page",
		'id' => $prefix.'enable_nav_links',
		'type' => 'checkbox-show',
		'el-to-show' => 'home_metabox_bubbles_container',
		'std'  => ""
		),
	array(
    "id" => "home_metabox_bubbles_container",
    "type" => "subsection"
	),
	array(
		'label'=> 'Bubbles two rows',
		'desc'  => 'Bubbles two rows',
		'id'    => $prefix.'bubbles_two_row',
		'type' => 'checkbox'
	),
	array(
		'label'=> 'Label Link First Bubble',
		'desc'  => 'Label link for the first bubble. Leave it blank to remove the bubbles',
		'id'    => $prefix.'label_one',
		'type'  => 'text'
	),
	array(
		'label'=> 'Link First Bubble',
		'desc'  => 'Link for the first bubble (you can find it in the page to link)',
		'id'    => $prefix.'bubble_link_one',
		'type'  => 'text'
	),
	array(
		'label' => 'External link',
		'desc' => "If it isn't an anchor turn it on",
		'id' => $prefix.'enable_external_one',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label'=> 'Label Link Second Bubble',
		'desc'  => 'Label link for the second bubble',
		'id'    => $prefix.'label_two',
		'type'  => 'text'
	),
	array(
		'label'=> 'Link Second Bubble',
		'desc'  => 'Link for the second bubble (you can find it in the page to link)',
		'id'    => $prefix.'bubble_link_two',
		'type'  => 'text'
	),
	array(
		'label' => 'External link',
		'desc' => "If it isn't an anchor turn it on",
		'id' => $prefix.'enable_external_two',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label'=> 'Label Link Third Bubble',
		'desc'  => 'Label link for the third bubble',
		'id'    => $prefix.'label_three',
		'type'  => 'text'
	),
	array(
		'label'=> 'Link Third Bubble',
		'desc'  => 'Link for the third bubble (you can find it in the page to link)',
		'id'    => $prefix.'bubble_link_three',
		'type'  => 'text'
	),
	array(
		'label' => 'External link',
		'desc' => "If it isn't an anchor turn it on",
		'id' => $prefix.'enable_external_three',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label'=> 'Label Link Fourth Bubble',
		'desc'  => 'Label link for the fourth bubble',
		'id'    => $prefix.'label_four',
		'type'  => 'text'
	),
	array(
		'label'=> 'Link Fourth Bubble',
		'desc'  => 'Link for the fourth bubble (you can find it in the page to link)',
		'id'    => $prefix.'bubble_link_four',
		'type'  => 'text'
	),
	array(
		'label' => 'External link',
		'desc' => "If it isn't an anchor turn it on",
		'id' => $prefix.'enable_external_four',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label'=> 'Label Link Fifth Bubble',
		'desc'  => 'Label link for the fifth bubble',
		'id'    => $prefix.'label_five',
		'type'  => 'text'
	),
	array(
		'label'=> 'Link Fifth Bubble',
		'desc'  => 'Link for the fifth bubble (you can find it in the page to link)',
		'id'    => $prefix.'bubble_link_five',
		'type'  => 'text'
	),
	array(
		'label' => 'External link',
		'desc' => "If it isn't an anchor turn it on",
		'id' => $prefix.'enable_external_five',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label'=> 'Label Link Sixth Bubble',
		'desc'  => 'Label link for the sixth bubble',
		'id'    => $prefix.'label_six',
		'type'  => 'text'
	),
	array(
		'label'=> 'Link Sixth Bubble',
		'desc'  => 'Link for the sixth bubble (you can find it in the page to link)',
		'id'    => $prefix.'bubble_link_six',
		'type'  => 'text'
	),
	array(
		'label' => 'External link',
		'desc' => "If it isn't an anchor turn it on",
		'id' => $prefix.'enable_external_six',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'type' => 'end-subsection'
	),
	array(
		"label" => "Bubbles End",
    "id" => "home_metabox_bubbles_end",
    "type" => "end-section"
	),
	array(
		"label" => "Settings",
		"id" => "home_metabox_settings",
		"type" => "section"
	),
	array(
		'label'=> 'Remove Home Page Full height',
		'desc'  => "If you don't want a full height home page, check it",
		'id'    => $prefix.'full',
		'type'  => 'checkbox'
	),
	array(
		'label'=> 'Logo position (centered or not?)',
		'desc'  => "If you want to put the logo in the middle, check it.",
		'id'    => $prefix.'logo_center',
		'type'  => 'checkbox'
	),
	array(
		'label'=> 'Use Light Logo',
		'desc'  => "If you want to use the light logo uploaded in Theme Options, check it",
		'id'    => $prefix.'use_light_logo',
		'type'  => 'checkbox'
	),
	array(
		'label'=> 'Hide the top header',
		'desc'  => 'Hide the big logo and the mini slogano on the right',
		'id'    => $prefix.'hide_logo',
		'type'  => 'checkbox'
	),
	array(
		"label" => "Settings End",
    "type" => "end-section"
	)
);
?>