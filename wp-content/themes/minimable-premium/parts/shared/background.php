<?php if (get_post_meta($post->ID, 'fw_select_bg', true) == 'video') {  ?>
	<?php if (get_post_meta($post->ID, 'fw_select_video', true) == 'self-hosted') {  ?>
	<video loop="1" class="video-bg" <?php if(get_post_meta($post->ID, 'fw_bg_attachment',true)) {?>style="position:fixed"<?php }?> preload muted autoplay>
		<source type="video/mp4" src="<?php echo get_post_meta($post->ID, 'fw_mp4_video', true) ?>">
		<source type="video/webm" src="<?php echo get_post_meta($post->ID, 'fw_webm_video', true) ?>">
	</video>
	<?php } ?>
	<?php if (get_post_meta($post->ID, 'fw_select_video', true) == 'youtube') {  ?>
	<div id="bgndVideo" class="player" <?php if(get_post_meta($post->ID, 'fw_bg_attachment',true)) {?>style="position:fixed"<?php }?> data-property="{videoURL:'<?php echo get_post_meta($post->ID, 'fw_youtube_url_video', true) ?>',containment:'#<?php if (get_post_meta($post->ID, 'fw_page_link_alternative', true)) { echo get_post_meta($post->ID, 'fw_page_link_alternative', true); } else { echo the_fw_title(); } ?>',autoPlay:true, mute:true, startAt:0, opacity:1,showControls:false, showYTLogo:false, loop: true }">My video</div>
	<?php if (get_post_meta($post->ID, 'fw_bg_attachment',true)) { ?>
	<style>
	.mbYTP_wrapper {
		position: fixed!important;
	}
	</style>
	<?php } ?>
	<?php } ?>
	<?php } ?>
	<?php
	if ( ( has_post_thumbnail() && get_post_meta($post->ID, 'fw_select_overlay', true) == 'color' ) ||
			 ( get_post_meta($post->ID, 'fw_select_bg', true) == 'slideshow'  && get_post_meta($post->ID, 'fw_select_overlay', true) == 'color' ) ||
			 ( get_post_meta($post->ID, 'fw_select_bg', true) == 'video'  && get_post_meta($post->ID, 'fw_select_overlay', true) == 'color' )
		 ) {
	?>
	<div class="color-overlay"></div>
	<?php }
	else if ( ( has_post_thumbnail() && get_post_meta($post->ID, 'fw_select_overlay', true) == 'pattern' ) ||
			 ( get_post_meta($post->ID, 'fw_select_bg', true) == 'slideshow'  && get_post_meta($post->ID, 'fw_select_overlay', true) == 'pattern' ) ||
			 ( get_post_meta($post->ID, 'fw_select_bg', true) == 'video'  && get_post_meta($post->ID, 'fw_select_overlay', true) == 'pattern' )
		 ) {
 	?>
	<div class="pattern-overlay"></div>
	<?php } ?>

	<?php if (get_post_meta($post->ID, 'fw_select_bg', true) == 'particles') {  ?>
	<div id="particles-js"></div>
	<?php } ?>
	<?php if (get_post_meta($post->ID, 'fw_select_bg', true) == 'slideshow') {  ?>
	<div class="fw-slider">
	<?php
		$post_meta_data = get_post_custom($atts['id']);
		$custom_repeatable = unserialize($post_meta_data['fw_slider_field'][0]);
		foreach ( $custom_repeatable as $slider_image ) {
			$image = $slider_image[1];
			$image_url = wp_get_attachment_image_src($image, 'full')[0]; ?>
			<div class="slider-item" style="background:url(<?php echo ''. $image_url .'' ?>);background-size: cover; background-position:50% 50%;"></div>
			<?php
		}
	?>
	</div>
<?php } ?>