<?php
/**
 * Template Name: Template External Page
 *
 */?>
 <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
 <?php global $options;
 foreach ($options as $value) {
 	if ((isset($value['id'])) && (isset($value['std']))) {
 		if (FALSE === get_option( $value['id'])) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); }
 	}
 }
 ?>
 <?php the_post();
 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
 ?>
 <section class="section-page">
 	<?php if ( $image ) { ?>
 	<div class="top-bg" style="background-image: url( <?php echo $image[0] ?> )">
 	<?php if ( get_post_meta($post->ID, 'fw_bg_overlay', true) ) { ?>
	<div class="color-overlay"></div>
	<?php } ?>
 		<div class="container">
 			<h2 class="section-title <?php if ( get_post_meta($post->ID, 'fw_white_title', true) ) { ?>white-title<?php } ?>"><?php the_title(); ?></h2>
 		</div>
 	</div>
 	<?php } ?>
 	<div class="container" id="full-width">
 		<?php if ( !$image ) { ?>
 		<h2 class="section-title"><?php the_title(); ?></h2>
 		<?php } ?>
 		<div class="full-width-container">
 			<?php the_content(); ?>
 		</div>
 	</div>
 </section>
 <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>