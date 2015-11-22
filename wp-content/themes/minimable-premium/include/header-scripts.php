<?php
if ((get_post_meta($post->ID, 'fw_transparent_bar', true))) { ?>
<script type="text/javascript">
	var stickyHeaderTop = 500;
	$(window).bind('scroll', function() {
		if( jQuery(window).scrollTop() > stickyHeaderTop) {
			jQuery('#menu-top').addClass('fixed');
		} else {
			jQuery('#menu-top').removeClass('fixed');
		}
	});
</script>
<?php } ?>
<?php
if ( !(is_front_page()) && (has_nav_menu('primary'))) { ?>
<script type="text/javascript">
	$('.top-nav a').each(function() {
		var _href = $(this).parent().not('.custom-link').children().attr("href");
		$(this).parent().not('.custom-link').children().attr("href", '<?php bloginfo('wpurl')?>/' + _href);
	});
</script>
<?php } ?>