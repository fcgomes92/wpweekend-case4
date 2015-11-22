<script type="text/javascript">
	var speed = <?php echo (get_option('fw_speed') ? get_option('fw_speed') : 3000) ?>;
	var bgPreload = '<?php echo (get_option('fw_bg_preloader') ? get_option('fw_bg_preloader') : '#ffffff') ?>';
	var colorPreload = '<?php echo (get_option('fw_color_preloader') ? get_option('fw_color_preloader') : '#000') ?>';
	var heightPreload = '<?php echo (get_option('fw_preloader_bar_height') ? get_option('fw_preloader_bar_height') : '2') ?>';
	var topOffset;
	$(document).ready(function() {
    // Optimalisation: Store the references outside the event handler:
    var $window = $(window);
    topOffset = 100;

    function checkWidth() {
    	var windowsize = $window.width();
    	if (windowsize > 978) {
            //if the window is greater than 440px wide then turn on jScrollPane..
            topOffset = <?php echo (get_option('fw_nav_height') ? get_option('fw_nav_height') : 40) ?>;
          }
        }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).bind("load resize", function() {
    	checkWidth;
    });
  });

	<?php global $options;
	foreach ($options as $value) {
		if ((isset($value['id'])) && (isset($value['std']))) {
			if (FALSE === get_option( $value['id'])) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); }
		}
	} ?>
	<?php global $post;
	if (get_post_meta($post->ID, 'fw_section_number', true)) {
		$pageNumber = get_post_meta($post->ID, 'fw_section_number', true);
	} else {
		$pageNumber = $fw_page_number;
	}
	if (get_post_meta($post->ID, 'fw_main_name', true)) {
		$myPage = get_post_meta($post->ID, 'fw_main_name', true);
	} else {
		$myPage = 'page';
	}  ?>
	<?php for($i=1;$i<=$pageNumber ;$i++) {
		$pagePosts = new WP_Query();
		$pagePosts->query('pagename='.$myPage.'-'.$i.'');
		while($pagePosts->have_posts()): $pagePosts->the_post();
		$template_file = get_post_meta( get_the_ID(), '_wp_page_template', TRUE );
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		?>
		<?php if ( $image || wp_is_mobile() ) { ?>
			$('.<?php echo $myPage ?>-<?php echo $i ?>').css("background-image","url('<?php echo $image[0] ?>')");
			<?php if (get_post_meta($post->ID, 'fw_bg_attachment',true)) { ?>
				$('.<?php echo $myPage ?>-<?php echo $i ?>').css("background-attachment","fixed");
			<?php } ?>
		<?php } ?>
		<?php if ( get_post_meta($post->ID, 'fw_enable_custom_height', true) ) { ?>
			$('.<?php echo $myPage ?>-<?php echo $i ?>').css("min-height","<?php echo get_post_meta($post->ID, 'fw_custom_height', true) ?>px");
		<?php } ?>
	</script>

<?php if (get_post_meta($post->ID, 'fw_select_bg', true) == 'particles') { ?>

<script>
var particlesDotsColor = '<?php echo (get_post_meta($post->ID, 'fw_particles_dots_color', true) ? get_post_meta($post->ID, 'fw_particles_dots_color', true) : '#ffffff') ?>';
var particlesLinesColor = '<?php echo (get_post_meta($post->ID, 'fw_particles_lines_color', true) ? get_post_meta($post->ID, 'fw_particles_lines_color', true) : '#ffffff') ?>';
var particlesSpeed = '<?php echo (get_post_meta($post->ID, 'fw_particles_speed', true) ? get_post_meta($post->ID, 'fw_particles_speed', true) : '3') ?>';

var particlesOn = 1;
</script>
<?php } ?>
<?php if (get_post_meta($post->ID, 'fw_select_bg', true) == 'slideshow') { ?>
<script>
var sliderEffect = '<?php echo (get_post_meta($post->ID, 'fw_slider_effects', true) ? get_post_meta($post->ID, 'fw_slider_effects', true) : '') ?>';
var sliderAutoplay = <?php echo (get_post_meta($post->ID, 'fw_slider_autoplay', true) ? get_post_meta($post->ID, 'fw_slider_autoplay', true) : 'false') ?>;
var sliderNavigation = <?php echo (get_post_meta($post->ID, 'fw_slider_navigation', true) ? 'true' : 'false') ?>;
var sliderPagination = <?php echo (get_post_meta($post->ID, 'fw_slider_pagination', true) ? 'true' : 'false') ?>;
</script>
<?php } ?>
<script>
<?php if ( $template_file=='templates/template-home.php' )  {	?>
	var full = '<?php echo (get_post_meta($post->ID, 'fw_full', true) ? 1 : 0) ?>';
	<?php } ?>
	<?php if (get_post_meta($post->ID, 'fw_enable_custom',true)) {	?>
		$('.<?php echo $myPage ?>-<?php echo $i?>').css(
			"background-color","<?php echo get_post_meta($post->ID, 'fw_background_section', true);?>");
		$('.<?php echo $myPage ?>-<?php echo $i?> .section-title').css(
			"color","<?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>");
		$('.<?php echo $myPage ?>-<?php echo $i?> h1 span,.<?php echo $myPage ?>-<?php echo $i?> h2 span, .<?php echo $myPage ?>-<?php echo $i?> .color').css(
			"color","<?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>");
		$('.<?php echo $myPage ?>-<?php echo $i?> p, .<?php echo $myPage ?>-<?php echo $i?> h3,.<?php echo $myPage ?>-<?php echo $i?> table,.<?php echo $myPage ?>-<?php echo $i?> ul,.<?php echo $myPage ?>-<?php echo $i?> ol ').css(
			"color","<?php echo get_post_meta($post->ID, 'fw_text_section', true);?>");
		$('.<?php echo $myPage ?>-<?php echo $i?> p, .<?php echo $myPage ?>-<?php echo $i?> h3  ').css(
			"color","<?php echo get_post_meta($post->ID, 'fw_text_section', true);?>");
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .fa {color: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-tabs li.active a:after {border-top-color: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );

	<?php } if (get_post_meta($post->ID, 'fw_enable_custom',true) && $template_file=='templates/template-home.php'){ ?>
		$('.<?php echo $myPage ?>-<?php echo $i?> h1 span').css(
			"color","<?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>");
		$('.<?php echo $myPage ?>-<?php echo $i?> h1').css(
			"color","<?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>");
		$('.<?php echo $myPage ?>-<?php echo $i?> .circle-menu').css(
			"background","<?php echo get_post_meta($post->ID, 'fw_even_bubbles_bgcolor_section', true);?>");
		$('.<?php echo $myPage ?>-<?php echo $i?> .circle-menu .label-link').css(
			"color","<?php echo get_post_meta($post->ID, 'fw_even_bubbles_color_section', true);?>");
		$('.<?php echo $myPage ?>-<?php echo $i?> .circle-black').css(
			"background","<?php echo get_post_meta($post->ID, 'fw_odd_bubbles_bgcolor_section', true);?>");
		$('.<?php echo $myPage ?>-<?php echo $i?> .circle-black .label-link').css(
			"color","<?php echo get_post_meta($post->ID, 'fw_odd_bubbles_color_section', true);?>");
		$('.<?php echo $myPage ?>-<?php echo $i?> .big-title span').css(
			"background","<?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>");

	<?php } if (get_post_meta($post->ID, 'fw_enable_custom',true) && $template_file=='templates/template-staff.php'){  ?>
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-tabs li.active a { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-tabs li.current a { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-tabs li a:hover, .<?php echo $myPage ?>-<?php echo $i?> .sc-btn:hover  { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-tabs li a, .<?php echo $myPage ?>-<?php echo $i?> .sc-btn { background: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .social li a span { color: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .social li a span:hover { color: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );

	<?php } if (get_post_meta($post->ID, 'fw_enable_custom',true) && $template_file=='templates/template-portfolio.php'){  ?>
		$('.<?php echo $myPage ?>-<?php echo $i?> .border').css(
			"border-color","<?php echo get_post_meta($post->ID, 'fw_text_section', true);?>");
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> #portfolio a.link-portfolio { background: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> #portfolio a.link-portfolio:hover  { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .filter li.current a, .<?php echo $myPage ?>-<?php echo $i?> .filter li a:hover  { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .filter li a { background: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-control { border-color: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; color: <?php echo get_post_meta($post->ID, 'fw_text_section', true);?> }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-control:hover { background: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .portfolio-item .portfolio-title, .portfolio-item .description-item .content-item a { color: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );

	<?php } if (get_post_meta($post->ID, 'fw_enable_custom',true) && $template_file=='templates/template-portfolio-thumb.php'){  ?>
		$('.<?php echo $myPage ?>-<?php echo $i?> #portfolio a.link-portfolio').css(
			"background","<?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>");
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> #portfolio a.link-portfolio { background: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> #portfolio a.link-portfolio:hover  { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .filter li.current a, .<?php echo $myPage ?>-<?php echo $i?> .filter li a:hover { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .filter li a, .<?php echo $myPage ?>-<?php echo $i?> .info-wrapper, .<?php echo $myPage ?>-<?php echo $i?> .piu { background: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-control { border-color: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; color: <?php echo get_post_meta($post->ID, 'fw_text_section', true);?> }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-control:hover { background: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .portfolio-item .portfolio-title, .portfolio-item .description-item .content-item a { color: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .portfolio-item .content-item { color: <?php echo get_post_meta($post->ID, 'fw_text_section', true);?>; }</style>" ).appendTo( "head" );

	<?php } if (get_post_meta($post->ID, 'fw_enable_custom',true) && $template_file=='templates/template-contact.php'){  ?>
		$('.<?php echo $myPage ?>-<?php echo $i?> input[type="submit"]').css(
			"background","<?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>");
		$('.<?php echo $myPage ?>-<?php echo $i?> input[type="text"], .<?php echo $myPage ?>-<?php echo $i?> input[type="email"], .<?php echo $myPage ?>-<?php echo $i?> .wpcf7-list-item-label, .<?php echo $myPage ?>-<?php echo $i?> textarea, .<?php echo $myPage ?>-<?php echo $i?> input[type="submit"], .<?php echo $myPage ?>-<?php echo $i?> #find-us h3,.<?php echo $myPage ?>-<?php echo $i?> #contact-info h3, .<?php echo $myPage ?>-<?php echo $i?> #find-us ul li, .<?php echo $myPage ?>-<?php echo $i?> #find-us ul li a').css(
			"color","<?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>");
		$('.<?php echo $myPage ?><?php echo $i?>, .<?php echo $myPage ?>-<?php echo $i?> input[type="text"], .<?php echo $myPage ?>-<?php echo $i?> input[type="email"], .<?php echo $myPage ?>-<?php echo $i?> textarea').css(
			"border-color","<?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>");
		$( '<style>.<?php echo $myPage ?>-<?php echo $i?> input[type="submit"]:hover { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>!important; } .<?php echo $myPage ?>-<?php echo $i?> input[type="submit"]:hover { color: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>!important; }</style>' ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> ul.social li a span { color: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> ul.social li a span:hover { color: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> #more-contact-information { color: <?php echo get_post_meta($post->ID, 'fw_text_section', true);?>; }</style>" ).appendTo( "head" );

	<?php } if (get_post_meta($post->ID, 'fw_enable_custom',true) && $template_file=='templates/template-fullwidth.php'){  ?>
		$('.<?php echo $myPage ?>-<?php echo $i?> a').css(
			"color","<?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>");
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .posts h3 a  { color: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .posts .moretag a, .<?php echo $myPage ?>-<?php echo $i?> .sc-btn  { background: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; } .<?php echo $myPage ?>-<?php echo $i?> .posts .moretag a:hover  { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-tabs li.active a { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-tabs li.current a { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-tabs li a:hover,.<?php echo $myPage ?>-<?php echo $i?> .sc-btn:hover  { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-tabs li a, .<?php echo $myPage ?>-<?php echo $i?> ul.products li.product .button { background: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style> { background: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .full-width { color: <?php echo get_post_meta($post->ID, 'fw_text_section', true);?>; }</style>" ).appendTo( "head" );

	<?php } if (get_post_meta($post->ID, 'fw_enable_custom',true) && $template_file=='templates/template-product.php'){  ?>
		$('.<?php echo $myPage ?>-<?php echo $i?> a').css(
			"color","<?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>");
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-tabs li.current a { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-tabs li a:hover,.<?php echo $myPage ?>-<?php echo $i?> .sc-btn:hover,.<?php echo $myPage ?>-<?php echo $i?> .add_to_cart_button:hover  { background: <?php echo get_post_meta($post->ID, 'fw_secondary_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .nav-tabs li a { background: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .full-width { color: <?php echo get_post_meta($post->ID, 'fw_text_section', true);?>; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .add_to_cart_button { color: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; border: 1px solid <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?> }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .add_to_cart_button:hover { background: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>; color: #fff!important; }</style>" ).appendTo( "head" );
		$( "<style>.<?php echo $myPage ?>-<?php echo $i?> .added_to_cart { color: <?php echo get_post_meta($post->ID, 'fw_main_color_section', true);?>;</style>" ).appendTo( "head" );
		<?php } ?>
	<?php endwhile;?>
	<?php } ?>
</script>