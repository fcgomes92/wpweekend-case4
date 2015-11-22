<?php
$staff_fields = array(
	array(
		'label'=> 'Staff Category',
		'desc'  => 'Choose the staff itmes category to show in this page',
		'id'    => $prefix.'staff_select',
		'type'  => 'select-taxonomy',
		'tax' => 'staff-categories'
	),
	array(
		'label'=> 'Title Left Column',
		'desc'  => 'Title for the left column.',
		'id'    => $prefix.'title_left',
		'type'  => 'text'
	)
);

/* Single Item */

$staff_item_fields = array(
	array(
		'label' => 'Open links in a new window',
		'desc' => "Open social links in a new window",
		'id' => $prefix.'enable_target_blank',
		'type' => 'checkbox',
		'std'  => ""
	),
	array(
		'label'=> 'Facebook Link',
		'desc'  => 'Insert the URL of your facebook page',
		'id'    => $prefix.'fb_link',
		'type'  => 'text'
	),
	array(
		'label'=> 'Twitter Link',
		'desc'  => 'Insert the URL of your twitter profile',
		'id'    => $prefix.'tw_link',
		'type'  => 'text'
	),
	array(
		'label'=> 'Google plus Link',
		'desc'  => 'Insert the URL of your google plus profile',
		'id'    => $prefix.'gp_link',
		'type'  => 'text'
	),
	array(
		'label'=> 'Instagram Link',
		'desc'  => 'Insert the URL of your instagram profile',
		'id'    => $prefix.'it_link',
		'type'  => 'text'
	),
	array(
		'label'=> 'Pinterest Link',
		'desc'  => 'Insert the URL of your pinterest page',
		'id'    => $prefix.'pt_link',
		'type'  => 'text'
	),
	array(
		'label'=> 'Linkedin Link',
		'desc'  => 'Insert the URL of your linkedin profile',
		'id'    => $prefix.'ln_link',
		'type'  => 'text'
	),
	array(
		'label'=> 'Youtube Link',
		'desc'  => 'Insert the URL of your youtube channel',
		'id'    => $prefix.'yt_link',
		'type'  => 'text'
	),
	array(
		'label'=> 'Tumblr Link',
		'desc'  => 'Insert the URL of your tumblr page',
		'id'    => $prefix.'tr_link',
		'type'  => 'text'
	),
	array(
		'label'=> 'VK Link',
		'desc'  => 'Insert the URL of your VK profile',
		'id'    => $prefix.'vk_link',
		'type'  => 'text'
	)
);
?>