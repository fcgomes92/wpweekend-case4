<?php

$themename = "Minimable";
$shortname = "fw";
$options = array (
    array( "name" => $themename." Options",
           "type" => "title"),
    array( "type" => "open"),

    /* General Settings */

    array( "name" => "General Settings",
    		   "id" => "sec-general",
           "type" => "section"),

    array( "name" => "Favicon",
           "desc" => "Upload the image. Then copy and paste the image url in the field on top.",
           "id" => $shortname."_favicon",
           "type" => "image",
           "std" => ''.get_bloginfo('template_directory').'/img/favicon.ico'),

    array( "name" => "Number of Pages",
           "desc" => "How many pages do you use in your site?",
           "id" => $shortname."_page_number",
           "type" => "input-slider",
           "std" => '6'),

    array( "name" => "Number of Products per Page",
           "desc" => "Set the number of products to show per page",
           "id" => $shortname."_products_per_page",
           "type" => "select-size",
           "std" => '8'),

    array( "name" => "Empy Cart Button Url",
           "desc" => "Check it to on if you want the user go back to the home page instead to the shop",
           "id" => $shortname."_return_home",
           "type" => "checkbox",
           "std" => ''),

    array( "name" => "Speed scroll",
           "desc" => "Set the scroll speed (in ms)",
           "id" => $shortname."_speed",
           "type" => "text",
           "std" => '3000'),

		array( "name" => 'Label for "All" category in the Portfolio Section',
           "desc" => "Insert the label for the All category in the filters",
           "id" => $shortname."_label_all_category",
           "type" => "text",
           "std" => 'All'),

    array( "name" => "Label for More Details Button in the Portfolio Section",
           "desc" => "Insert the label for the More Details",
           "id" => $shortname."_label_more_link",
           "type" => "text",
           "std" => 'More details'),

   	array( "name" => "Label for Portfolio Link",
           "desc" => "Insert the label for the Portfolio link",
           "id" => $shortname."_label_portfolio_link",
           "type" => "text",
           "std" => 'Go to work'),

	  array( "name" => "Remove Home Page Full height",
           "desc" => "If you don't want a full height home page, check it",
           "id" => $shortname."_full",
           "type" => "checkbox",
           "std" => ''),

    array( "name" => "Enable/Disable Spin Effect",
           "desc" => "If you check it, it removes the spin effect from Home Bubbles",
           "id" => $shortname."_spin_effect",
           "type" => "checkbox",
           "std" => ''),

    array( "name" => "Enable/Disable Scrollorama",
           "desc" => "Enable transitions while you scroll the page.",
           "id" => $shortname."_onoff_scrollorama",
           "type" => "checkbox",
           "std" => 'checked'),

    array( "name" => "Enable/Disable Animation Big Title",
           "desc" => "If you don't like animation text effect, you can disable it.",
           "id" => $shortname."_onoff_animation_title",
           "type" => "checkbox",
           "std" => 'checked'),

		array( "name" => "Enable/Disable Custom Css",
           "desc" => "If you want to add some extra style, enable custom css and edit custom.css file.",
           "id" => $shortname."_onoff_custom_css",
           "type" => "checkbox",
           "std" => 'checked'),

    array( "name" => "Enable/Disable Custom Javascript",
           "desc" => "If you want to add some extra javascript function, enable custom javascriot and edit custom.js file, in js directory.",
           "id" => $shortname."_onoff_custom_js",
           "type" => "checkbox",
           "std" => 'checked'),

    array( "type" => "submit"),

    array( "type" => "end-section"),

    /* Preloader settings */
    array( "name" => "Preloader Settings",
           "id" => "sec-preloader",
           "type" => "section"),

    array( "name" => "Add preloader Text",
           "desc" => "Check it if you want to add a text before the percentage",
           "id" => $shortname."_preloader_text",
           "type" => "text",
           "std" => ''),

    array( "name" => "Preloader Bar Width",
           "desc" => "Set the with of the preloader bar. Default 100%",
           "id" => $shortname."_preloader_bar_width",
           "type" => "select-size",
           "std" => '100'),

    array( "name" => "Preloader Bar Height",
           "desc" => "Set the with of the preloader bar. Default 100%",
           "id" => $shortname."_preloader_bar_height",
           "type" => "select-size",
           "std" => '2'),

    array( "name" => "Background Preloader",
           "desc" => "Set the background color of the preloader screen",
           "id" => $shortname."_bg_preloader",
           "type" => "color",
           "std" => '#fff'),

    array( "name" => "Bar and text preloader color",
           "desc" => "Set the color of the bar preloader and text",
           "id" => $shortname."_color_preloader",
           "type" => "color",
           "std" => '#000'),

    array( "type" => "submit"),

    array( "type" => "end-section"),

    /* Header settings */
    array( "name" => "Header Settings",
           "id" => "sec-header",
           "type" => "section"),

    array( "name" => "Logo",
           "desc" => "Upload your logo image or copy and paste its image url if you have just uploaded it.",
           "id" => $shortname."_logo",
           "type" => "image",
           "std" => ''.get_bloginfo('template_directory').'/img/logo.png'),

    array( "name" => "Logo Retina",
           "desc" => "Upload your retina logo image or copy and paste its image url if you have just uploaded it. It's important its name finishes with @2x. For example logo@2x.png. It must be placed in the same folder of normal logo ",
           "id" => $shortname."_logo_retina",
           "type" => "image",
           "std" => ''),

    array( "name" => "Light Logo",
           "desc" => "Upload your logo image or copy and paste its image url if you have just uploaded it. This logo is suitable for dark background",
           "id" => $shortname."_light_logo",
           "type" => "image",
           "std" => ''.get_bloginfo('template_directory').'/img/logo_light.png'),

    array( "name" => "Light Logo Retina",
           "desc" => "Upload your retina logo image or copy and paste its image url if you have just uploaded it. It's important its name finishes with @2x. For example logo@2x.png. It must be placed in the same folder of normal logo ",
           "id" => $shortname."_light_logo_retina",
           "type" => "image",
           "std" => ''),

    array( "name" => "Menu Bar Height",
           "desc" => "Set the height of menu bar. Default 40px",
           "id" => $shortname."_nav_height",
           "type" => "select-size",
           "std" => '40'),

    array( "name" => "Logo Image Height",
           "desc" => "Set the height of logo image. Default 14px",
           "id" => $shortname."_logo_height",
           "type" => "select-size",
           "std" => '14'),

    array( "name" => "Logo Menu Bar",
           "desc" => "Upload your mini logo image that appears on sticky menu.",
           "id" => $shortname."_logo_mini",
           "type" => "image",
           "std" => ''.get_bloginfo('template_directory').'/img/logo-mini.png'),

    array( "name" => "Logo Menu Bar Retina",
           "desc" => "Upload your mini logo retina image that appears on sticky menu. It's important its name finishes with @2x. For example logo-mini@2x.png. It must be placed in the same folder of normal logo",
           "id" => $shortname."_logo_mini_retina",
           "type" => "image",
           "std" => ''),
    array( "type" => "submit"),

    array( "type" => "end-section"),



    /* Color settings */
    array( "name" => "Color Settings",
           "id" => "sec-colors",
           "type" => "section"),

    array( "name" => "Main Color",
           "desc" => "Set the main color of your site",
           "id" => $shortname."_main_color",
           "type" => "color",
           "std" => '#01a3b2'),

    array( "name" => "Secondary Color",
           "desc" => "Set the secondary color of your site",
           "id" => $shortname."_secondary_color",
           "type" => "color",
           "std" => '#000000'),

    array( "name" => "Odd Bubbles Background Color",
           "desc" => "Set the background color of odd bubbles",
           "id" => $shortname."_odd_bubbles_bgcolor",
           "type" => "color",
           "std" => '#01a3b2'),

    array( "name" => "Odd Bubbles Text Color",
           "desc" => "Set the text color for odd bubbles",
           "id" => $shortname."_odd_bubbles_color",
           "type" => "color",
           "std" => '#fff'),

    array( "name" => "Even Bubbles Background Color",
           "desc" => "Set the background color of even bubbles",
           "id" => $shortname."_even_bubbles_bgcolor",
           "type" => "color",
           "std" => '#000000'),

    array( "name" => "Even Bubbles Text Color",
           "desc" => "Set the text color for even bubbles",
           "id" => $shortname."_even_bubbles_color",
           "type" => "color",
           "std" => '#fff'),

    array( "name" => "Background",
           "desc" => "Set the background color of the site",
           "id" => $shortname."_background",
           "type" => "color",
           "std" => '#f9f9f9'),

    array( "name" => "Blog/External Pages Background",
           "desc" => "Set the background color of the blog",
           "id" => $shortname."_background_blog",
           "type" => "color",
           "std" => '#f9f9f9'),

    array( "name" => "Header Menu Background",
           "desc" => "Set the background color for the menu header",
           "id" => $shortname."_header_background",
           "type" => "color",
           "std" => '#000000'),

    array( "name" => "Header Menu Color",
           "desc" => "Set the color for the links in the menu",
           "id" => $shortname."_header_color",
           "type" => "color",
           "std" => '#999999'),

		array( "name" => "Header Menu Hover and Active Color",
           "desc" => "Set the color for the hover and active links in the menu",
           "id" => $shortname."_header_hover_color",
           "type" => "color",
           "std" => '#ffffff'),

    array( "name" => "Mini Slogan Color",
           "desc" => "Set the color for mini slogan (in the demo is: One Page Responsive Wordpress Theme)",
           "id" => $shortname."_minislogan_color",
           "type" => "color",
           "std" => '#999999'),

    array( "type" => "submit"),

    array( "type" => "end-section"),

    /* Typography settings */
    array( "name" => "Typography Settings",
           "id" => "sec-type",
           "type" => "section"),

    array("name" => "Home Slogan Font",
          "desc" => "Set the font size (default 50px). If you want to change the Font Family, turn on the checkbox.",
    			"type" => "subsection"),

    array( "name" => "Title font size",
					 "desc" => "",
					 "id" => $shortname."_font_size_slogan",
					 "std" => "50",
					 "type" => "font-size"),

    array( "name" => "Font Family Home Slogan",
					 "desc" => "",
					 "id" => $shortname."_google_font_slogan",
					 "std" => "",
					 "type" => "select-google-font"),

    array("name" => "",
          "desc" =>"",
          "id" => $shortname."_enable_custom_slogan",
          "std" => "",
          "type" => "checkbox"),

	 	array( "type" => "end-subsection"),

	 	array("name" => "Home Bubbles Font",
          "desc" => "Set the font size (default 16px). If you want to change the Font Family, turn on the checkbox.",
    			"type" => "subsection"),

    array( "name" => "Bubbles font size",
					 "desc" => "",
					 "id" => $shortname."_font_size_bubbles",
					 "std" => "16",
					 "type" => "font-size"),

    array( "name" => "Font Family Bubbles",
					 "desc" => "",
					 "id" => $shortname."_google_font_bubbles",
					 "std" => "",
					 "type" => "select-google-font"),

    array("name" => "",
          "desc" =>"",
          "id" => $shortname."_enable_custom_bubbles",
          "std" => "",
          "type" => "checkbox"),

	 	array( "type" => "end-subsection"),

    array("name" => "Section Title Font",
          "desc" => "Set the font size (default 50px). If you want to change the Font Family, turn on the checkbox.",
    			"type" => "subsection"),

    array( "name" => "Title font size",
					 "desc" => "",
					 "id" => $shortname."_font_size_heading",
					 "std" => "50",
					 "type" => "font-size"),

    array( "name" => "Heading font",
					 "desc" => "",
					 "id" => $shortname."_google_font_heading",
					 "std" => "",
					 "type" => "select-google-font"),

	 	array( "name" => "",
           "desc" =>"",
           "id" => $shortname."_enable_custom_heading",
           "std" => "",
           "type" => "checkbox"),

	 	array( "type" => "end-subsection"),

		array("name" => "Body Font",
          "desc" => "Set the font size (default 13px). If you want to change the Font Family, turn on the checkbox.",
    			"type" => "subsection"),

    array( "name" => "Body font size",
					 "desc" => "",
					 "id" => $shortname."_font_size_body",
					 "std" => "13",
					 "type" => "font-size"),

    array( "name" => "Font Family Body",
					 "desc" => "",
					 "id" => $shortname."_google_font_body",
					 "std" => "",
					 "type" => "select-google-font"),

    array("name" => "",
          "desc" =>"",
          "id" => $shortname."_enable_custom_body",
          "std" => "",
          "type" => "checkbox"),

    array( "type" => "end-subsection"),

    array("name" => "Headings Font",
          "desc" => "Set the font family to use for heading titles (H1,H2,H3, etc.). If you want to change the Font Family, turn on the checkbox.",
          "type" => "subsection"),

    array( "name" => "Heading font",
           "desc" => "",
           "id" => $shortname."_google_font_heading_body",
           "std" => "",
           "type" => "select-google-font"),

    array( "name" => "",
           "desc" =>"",
           "id" => $shortname."_enable_custom_heading_body",
           "std" => "",
           "type" => "checkbox"),

    array( "type" => "end-subsection"),

    array( "type" => "submit"),

    array( "type" => "end-section"),

    /* Blog settings */
		array( "name" => "Blog Settings",
           "id" => "sec-blog",
           "type" => "section"),

		array( "name" => "Check to remove the sidebar",
           "desc" => "Remove the sidebar.",
           "id" => $shortname."_remove_sidebar",
           "type" => "checkbox",
           "std" => ''),

   	array( "name" => "Check to show the entire content instead of the excerpt in the blog page and archives",
           "desc" => "If you turn it on, it shows the content.",
           "id" => $shortname."_show_excerpt",
           "type" => "checkbox",
           "std" => ''),

   	array( "name" => "Check to hide date from post",
           "desc" => "Hide date from post.",
           "id" => $shortname."_hide_date",
           "type" => "checkbox",
           "std" => ''),

    array( "name" => "Check to hide author from post",
           "desc" => "Hide author from post.",
           "id" => $shortname."_hide_author",
           "type" => "checkbox",
           "std" => ''),

    array( "name" => "Check to hide comments from post",
           "desc" => "Hide comments from post.",
           "id" => $shortname."_hide_comments",
           "type" => "checkbox",
           "std" => ''),

		array( "name" => "Check to hide tag from post",
           "desc" => "Hide tag from post.",
           "id" => $shortname."_hide_tag",
           "type" => "checkbox",
           "std" => ''),

    array( "name" => "Share posts on Facebook",
           "desc" => "",
           "id" => $shortname."_social_face",
           "type" => "checkbox",
           "std" => ''),

    array( "name" => "Share posts on Twitter",
           "desc" => "",
           "id" => $shortname."_social_twitter",
           "type" => "checkbox",
           "std" => ''),

    array( "name" => "Share posts on Google Plus",
           "desc" => "",
           "id" => $shortname."_social_google",
           "type" => "checkbox",
           "std" => ''),

    array( "name" => "Share posts on Pinterest",
           "desc" => "",
           "id" => $shortname."_social_pinterest",
           "type" => "checkbox",
           "std" => ''),
    array( "name" => "Label for Read More Button in the Blog Page",
           "desc" => "Insert the label for the Read More button",
           "id" => $shortname."_read_more_post",
           "type" => "text",
           "std" => 'Read more'),

    array( "name" => "Label for the search form",
           "desc" => "",
           "id" => $shortname."_placeholder_sf",
           "type" => "text",
           "std" => 'Search this site'),

   	array( "type" => "submit"),

   	array( "type" => "end-section"),

    /* Social Settings */
    array( "name" => "Footer Settings",
           "id" => "sec-social",
           "type" => "section"),

    array( "name" => "Footer text",
           "desc" => "Enter text used in the right side of the footer. It can be HTML.",
           "id" => $shortname."_footer_text",
           "type" => "text",
           "std" => ""),

    /* Analytics Code */
		array( "name" => "Google Analytics Code",
           "desc" => "Paste your Google Analytics or other tracking code in this box.",
           "id" => $shortname."_ga_code",
           "type" => "textarea",
           "std" => ""),
    array( "type" => "submit"),
    array( "type" => "end-section"),
    array( "type" => "close"));


function mytheme_add_admin() {

	global $themename, $shortname, $options;

	if ( isset( $_GET['page'] ) && $_GET['page'] == basename(__FILE__) ) {
    if ( !empty( $_REQUEST['action'] ) && 'save' == $_REQUEST['action'] ) {
		  if ( 'save' == $_REQUEST['action'] ) {

    		foreach ($options as $value) {
          if ( array_key_exists('id', $value) ) {
    		    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
          }

    		header("Location: themes.php?page=theme-options.php&saved=true");
    		die;

    		} else if( 'reset' == $_REQUEST['action'] ) {

    		foreach ($options as $value) {
    		delete_option( $value['id'] ); }

    		header("Location: themes.php?page=theme-options.php&reset=true");
    		die;
      }
		}
	}
 	add_menu_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
function mytheme_add_init() {
	$file_dir=get_bloginfo('template_directory');
	wp_enqueue_style("functions", $file_dir."/admin/css/theme-option.css", false, "1.0", "all");
}

function mytheme_admin() {

	global $themename, $shortname, $options;

	if(isset($_REQUEST['saved'])) {
    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
  }
  if(isset($_REQUEST['reset'])) {
   if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
  }
?>

	<div class="wrap">
		<h2><?php echo $themename; ?> Settings</h2>
        <p>Read documentation before using the theme. Go to the <a href="http://minimable.fedeweb.net/docs" target="_blank">Minimable Docs</a> Page.</p>
                    <p>There is a demo content file you can import for starting to use the theme in the best way. In the Installation section of the documentation you will find the step for using it.</p>
        <div class="wrap-settings">
            <div class="settings-container">
                <ul class="settings-btn">
                    <li class="btn active">
                        <a href="#sec-general" id="general-btn">General</a>
                    </li>
                    <li class="btn">
                        <a href="#sec-preloader" id="preloader-btn">Preloader</a>
                    </li>
                    <li class="btn">
                        <a href="#sec-header" id="header-btn">Header</a>
                    </li>
                    <li class="btn">
                        <a href="#sec-colors" id="colors-btn">Colors</a>
                    </li>
                    <li class="btn">
                        <a href="#sec-type" id="type-btn">Typography</a>
                    </li>
                    <li class="btn">
                        <a href="#sec-blog" id="blog-btn">Blog</a>
                    </li>
                    <li class="btn">
                        <a href="#sec-social" id="footer-btn">Footer</a>
                    </li>
                </ul>
                <div id="settings-tabs">
            	 	<form method="post">
            		<?php foreach ($options as $value) {
            			switch ( $value['type'] ) {
            				case "open":
            		?>
            			<div style="width:800px">
            		<?php break;
            		 case "close":
            		?>
            		 	</div>

            		<?php break;

            		case "section" :
            		?>
            			<div class="tab-pane" id="<?php echo $value['id']; ?>">
            				<div class="section-header">
                                <h3 class="title-section"><?php echo $value['name']; ?></h3>
                                <input name="save" type="submit" value="Save changes" class="save-btn"/>
                                <input type="hidden" name="action" value="save" />
                            </div>
                            <div id="options-<?php echo $value['id']; ?>" class="options">
            		<?php break;

            		case "end-section" :
            		?>
            				</div>
            			</div>
            		<?php break;

            		case "subsection" :
            		?>
            			<div class="subsection">
            				<div class="field-description">
                        <h4><?php echo $value['name']; ?></h4>
                        <small><?php echo $value['desc']; ?></small>
                    </div>

            		<?php break;
            		case "end-subsection" : ?>
            		</div>
            		<?php break;
            		case 'text':
            		?>
            			<div class="text <?php echo $value['id']; ?>">
                    <div class="field-description">
                        <h4><?php echo $value['name']; ?></h4>
                        <small><?php echo $value['desc']; ?></small>
                    </div>
            				<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( stripslashes(esc_attr(get_option($value['id']))) != "") { echo stripslashes(esc_attr(get_option((esc_attr($value['id']) )))); } else { echo $value['std']; } ?>" /><br/>
            			</div>
            		<?php
            		break;
            		case 'input-slider':
            		?>
            			<div class="text <?php echo $value['id']; ?>">
            				<div class="field-description">
                                <h4><?php echo $value['name']; ?></h4>
                                <small><?php echo $value['desc']; ?></small>
                            </div>
            				<div class="slider-container">
            					<div class="slider"></div>
            				</div>
            				<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( stripslashes(esc_attr(get_option($value['id']))) != "") { echo stripslashes(esc_attr(get_option((esc_attr($value['id']) )))); } else { echo $value['std']; } ?>" /><br/>
            			</div>
            			<script>
            				jQuery(".slider").slider({
            					min: 1, //minimum value
            			    max: 20, //maximum value
            			    range: "min",
            			    value: <?php if ( stripslashes(esc_attr(get_option($value['id']))) != "") { echo stripslashes(esc_attr(get_option((esc_attr($value['id']) )))); } else { echo $value['std']; } ?>, //default value
            			      slide: function(event, ui) {
            			          jQuery("#fw_page_number").val(ui.value);
            			          }
            			      });
              		jQuery("#fw_page_number").val(jQuery(".slider").slider("value"));
              		jQuery( "#fw_page_number" ).change(function() {
                		jQuery( ".slider" ).slider( "value", jQuery(this).val() );
            			});
            			</script>
            		<?php
            		break;

            		case 'color':
            		?>
            			<div class="changecolor" id="<?php echo $value['id']; ?>-pick">
                    <div class="field-description">
                      <h4><?php echo $value['name']; ?></h4>
                      <small><?php echo $value['desc']; ?></small>
                  </div>
            				<input type="text" name="<?php echo $value['id']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" />
            				<input type='button' class='pickcolor button-secondary' value='Select Color' />
            				<div class='colorpicker'></div>

            			</div>
            			<script type="text/javascript">
            				jQuery(document).ready(function($) {
            					$('#<?php echo $value['id']; ?>-pick').each(function() {
            						var divPicker = $(this).find('.colorpicker');
            						var inputPicker = $(this).find('input[type=text]');
            						divPicker.farbtastic(inputPicker);
            						divPicker.hide();
            			        $('.pickcolor', this).click(function(){
            			           divPicker.fadeToggle('fast');
            			        });
            					});
            				});
            			</script>
            			<?php
            		break;

            		case 'image' :
            		?>
            			<div class="fw_upload">
                    <div class="field-description">
                        <h4><?php echo $value['name']; ?></h4>
                        <small><?php echo $value['desc']; ?></small>
                    </div>
            				<input style="width:317px;" class="upload_image" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" />
            				<input class="upload_image_button" type="button" value="Upload Image" />
            			</div>
            		<?php
            		break;

            		case 'textarea':
            		?>
                  <div class="analytics-code">
              			<div class="field-description">
                        <h4><?php echo $value['name']; ?></h4>
                        <small><?php echo $value['desc']; ?></small>
                    </div>
              			<div class="areatesto">
              				<textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( stripslashes(get_option( $value['id'] )) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo $value['std']; } ?></textarea><br/>
              			</div>
                  </div>
            		<?php
            		break;
            		case 'title-font':
            		?>
            		<h4><?php echo $value['name']; ?></h4>
            		<?php
            		break;
            		case 'select-google-font':
            		?>
                  <?php error_reporting(E_ERROR | E_PARSE);
                  $initial = curl_init();
            			curl_setopt($initial, CURLOPT_URL, 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyCy3G6e01tIPse5spXzhvS-r8QrrN7dk_U&sort=alpha');
            			curl_setopt($initial, CURLOPT_RETURNTRANSFER, 1);
            			curl_setopt($initial, CURLOPT_CONNECTTIMEOUT, 5);
            			$fontsSeraliazed = curl_exec($initial);
            			curl_close($initial);
                  $fontArray = json_decode($fontsSeraliazed);
                  $fonts = $fontArray->items;
                  if( !empty( $fonts ) ) { ?>
                  <div class="select-wrapper font-family">
            				<select class="select" name="<?php echo $value['id']; ?>" id="<?php echo $value['id'];?>">
            				<?php
            				foreach ( $fonts as $font )
            					echo '<option value="' . esc_attr( $font->family ) . '"' . selected( get_option($value['id']), $font->family, false ) . '>' . $font->family . '</option>';

            				echo '</select></div>';
            			} else { ?>
            				<div class="select-wrapper">
            					<span style="position:relative;">you must be connect</span>
            				</div>
            			<?php }
            				if ( $desc != '' )
            					echo '<br /><span class="description">' . $desc . '</span>'; ?>
            					<script type="text/javascript">
            						jQuery(document).ready(function($){
            						var select_value = function() {
            			        var value = $(this).children("option:selected").text();

            			        if( value == '' )
            			            value = $(this).children().children("option:selected").text();


            			        if ( $(this).parent().find('span').length <= 0 ) {
            			            $(this).before('<span></span>');
            			        }

            			        $(this).parent().children('span').replaceWith('<span>'+value +'</span>');
            			    };
            			    $('.select-wrapper select').each(select_value).change(select_value);
            				});
            					</script>
            					<?php
            		break;
            		case 'font-size'
            		?>
            		<div class="spinner_container">
                	<input class="number" type="text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id'] ?>-size" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" />
               		<div class="input-controls">
            		    <a href="#" id="<?php echo $value['id']; ?>-up" class="inc">+</a>
            				<a href="#" id="<?php echo $value['id']; ?>-down" class="dec">-</a>
            	    </div>
                </div>

                <script type="text/javascript">
                	jQuery(document).ready( function($) {
            			  var el = $('#<?php echo $value['id'] ?>-size');
            			  function change( amt ) {
            			    el.val( parseInt( el.val(), 10 ) + amt );
            			  }
            			  $('#<?php echo $value['id']; ?>-up').click( function(e) {
            			    change( 1 );
            			    e.preventDefault();
            			  } );
            			  $('#<?php echo $value['id']; ?>-down').click( function(e) {
            			    change( -1 );
            			    e.preventDefault();
            			  } );
            			} );
                </script>
                <?php
                break;
                case 'select-size'
                ?>
                <div class="size-container">
                  <div class="field-description">
                      <h4><?php echo $value['name']; ?></h4>
                      <small><?php echo $value['desc']; ?></small>
                  </div>
                  <div class="spinner_container">
                    <input class="number" type="text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id'] ?>-size" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" />
                    <div class="input-controls">
                      <a href="#" id="<?php echo $value['id']; ?>-up" class="inc">+</a>
                      <a href="#" id="<?php echo $value['id']; ?>-down" class="dec">-</a>
                    </div>
                  </div>
                </div>

                <script type="text/javascript">
                  jQuery(document).ready( function($) {
                    var el = $('#<?php echo $value['id'] ?>-size');
                    function change( amt ) {
                      el.val( parseInt( el.val(), 10 ) + amt );
                    }
                    $('#<?php echo $value['id']; ?>-up').click( function(e) {
                      change( 1 );
                      e.preventDefault();
                    } );
                    $('#<?php echo $value['id']; ?>-down').click( function(e) {
                      change( -1 );
                      e.preventDefault();
                    } );
                  } );
                </script>
                <?php
                break;
            		case 'checkbox'
            		?>
            			<div id="<?php echo $value['id']; ?>-container" class="check">
            				<div class="field-description">
                        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                        <small><?php echo $value['desc']; ?></small>
                    </div>
            				<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" class="on_off" value="1" <?php checked( get_option( $value['id'] ), true ); ?> />
            				<span></span>
            			</div>
            			<script type="text/javascript">
            				jQuery( document ).ready( function( $ ) {
            					$( '#<?php echo $value['id']; ?>-container span' ).click( function() {
            						var input = $( this ).prev( 'input' );
            						var checked = input.attr( 'checked' );
            						if( checked ) {
            							input.attr( 'checked', false ).attr( 'value', 0 ).removeClass('onoffchecked');
            						} else {
            							input.attr( 'checked', true ).attr( 'value', 1 ).addClass('onoffchecked');
            						}
            						input.change();
            					} );
            				} );
            		</script>
            		<?php break;
            		case 'docs' :
            		?>
            			<p>Read documentation before using the theme. Go to the <a href="http://minimable.fedeweb.net/" target="_blank">Minimable</a> Page, login with the data entered during the purchase of the theme and go in the support area.</p>
            		<?php
            		break;
            		case 'submit':
            		?>
            			<p class="submit">
            				<input name="save" type="submit" value="Save changes" class="save-btn"/>
            				<input type="hidden" name="action" value="save" />
            			</p>
            		</form>
            		<?php
            		break;
            		}
            	}
            ?>
                </form>
            </div>
        </div>
    </div>


	<form method="post">
		<p class="submit">
			<input name="reset" type="submit" value="Reset" />
			<input type="hidden" name="action" value="reset" />
		</p>
	</form>
</div>

<?php
}

add_action('admin_menu', 'mytheme_add_admin');
add_action('admin_init', 'mytheme_add_init');
?>