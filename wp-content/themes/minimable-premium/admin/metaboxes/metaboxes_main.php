<?php
$page_single_fields = array(
	array(
		'label' => 'Page name',
		'desc' => 'Select the name for this single page (default: page).',
		'id' => $prefix.'main_name',
		'type' => 'text',
		'std' => 'page'
	),
	array(
		'label' => 'Number of pages',
		'desc' => 'How many sections do you use for this page?',
		'id' => $prefix.'section_number',
		'type' => 'input-slider',
		'std' => '6'
	),
	array(
		'label' => 'Select menu',
		'desc' => 'How many sections do you use for this page?',
		'id' => $prefix.'select_menu',
		'type' => 'select-menu',
		'std' => ''
	),
	array(
		"label" => "Show the menu bar from the top of the page",
		"desc" => "If you want to show the menu bar from the top of this page, check it",
		"id" => $prefix."single_nav_menu",
		"type" => "checkbox",
		"std" => ''
	),
	array(
		"label" => "Menu bar transparent background ",
		"desc" => "If you want a transparent background and white links, check it. Ideal when you have background images",
		"id" => $prefix."transparent_bar",
		"type" => "checkbox",
		"std" => ''
	),
	array(
		"label" => "Remove cart icon",
		"desc" => "You can remove the cart icon from this page",
		"id" => $prefix."remove_cart_icon",
		"type" => "checkbox",
		"std" => ''
	)
);
