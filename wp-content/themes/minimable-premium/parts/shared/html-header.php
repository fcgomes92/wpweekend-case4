<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php
			global $options;
			foreach ($options as $value) {
				if ((isset($value['id'])) && (isset($value['std']))) {
					if (FALSE === get_option( $value['id'])) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); }
				}
			}
		?>
		<link rel="shortcut icon" href="<?php echo $fw_favicon; ?>"/>
		<?php if (get_option('fw_enable_custom_heading') || get_option('fw_enable_custom_slogan') || get_option('fw_enable_custom_bubbles') || get_option('fw_enable_custom_body') || get_option('fw_enable_custom_heading_body') ) {
			$heading_font = str_replace(" ", "+", $fw_google_font_heading);
			$slogan_font = str_replace(" ", "+", $fw_google_font_slogan);
			$bubble_font = str_replace(" ", "+", $fw_google_font_bubbles);
			$body_font = str_replace(" ", "+", $fw_google_font_body);
			$heading_body_font = str_replace(" ", "+", $fw_google_font_heading_body);?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $heading_font ?>|<?php echo $slogan_font ?>|<?php echo $bubble_font ?>|<?php echo $heading_body_font ?>|<?php echo $body_font ?>&subset=latin,latin-ext,cyrillic,cyrillic-ext,greek-ext,greek,vietnamese">
		<?php } ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >
		<?php if (is_page_template('main-template.php')) { ?>
			<div id="prepage"></div>
		<?php } ?>
