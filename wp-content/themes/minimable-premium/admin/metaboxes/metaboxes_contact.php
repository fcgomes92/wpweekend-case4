<?php

$contact_fields = array(
	array(
		"label" => "Contact Top Information",
    "id" => "contact_info_section",
    "type" => "section"
	),
	array(
		'label'=> 'Contact Info Title',
		'desc'  => 'Title of the contact informations',
		'id'    => $prefix.'contact_info_title',
		'type'  => 'text'
	),
	array(
		'label'=> 'Contact Form Title',
		'desc'  => 'Title of the contact form',
		'id'    => $prefix.'contact_form_title',
		'type'  => 'text'
	),
	array(
		'label'=> 'Address Label',
		'desc'  => 'Name of the address field',
		'id'    => $prefix.'address_label',
		'type'  => 'text'
	),
	array(
		'label'=> 'Address Field',
		'desc'  => 'Insert your address',
		'id'    => $prefix.'address_field',
		'type'  => 'text'
	),
	array(
		'label'=> 'Phone Label',
		'desc'  => 'Name of the phone field',
		'id'    => $prefix.'phone_label',
		'type'  => 'text'
	),
	array(
		'label'=> 'Phone Field',
		'desc'  => 'Insert the Phone Number',
		'id'    => $prefix.'phone_field',
		'type'  => 'text'
	),
	array(
		'label'=> 'Fax Label',
		'desc'  => 'Name of the fax field',
		'id'    => $prefix.'fax_label',
		'type'  => 'text'
	),
	array(
		'label'=> 'Fax Field',
		'desc'  => 'Insert the Fax Number',
		'id'    => $prefix.'fax_field',
		'type'  => 'text'
	),
	array(
		'label'=> 'Email Label',
		'desc'  => 'Name of the email field',
		'id'    => $prefix.'email_label',
		'type'  => 'text'
	),
	array(
		'label'=> 'Email Field',
		'desc'  => 'Insert the Email',
		'id'    => $prefix.'email_field',
		'type'  => 'text'
	),
	array(
		'label'=> 'More information',
		'desc'  => 'Insert more informations if you need them',
		'id'    => $prefix.'more_information',
		'type'  => 'wysiwyg'
	),
	array(
		"type" => "end-section"
	),
	array(
		"label" => "Social Link",
    "id" => "contact_social_link_section",
    "type" => "section"
	),
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
	),
	array(
		"type" => "end-section"
	),
	array(
		"label" => "Contact Form Section",
    "id" => "contact_form_section",
    "type" => "section"
	),
	array(
		'label'=> 'Contact Form',
		'desc'  => 'Insert Contact Form Shortcode',
		'id'    => $prefix.'contact_form',
		'type'  => 'text'
	),
	array(
		"type" => "end-section"
	)
);
?>