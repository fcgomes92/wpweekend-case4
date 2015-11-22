<?php
/**
 * Template Name: One Page - Template Full Width
 *
 */?>
	<section <?php if (!wp_is_mobile() && get_post_meta($post->ID, 'fw_bg_parallax', true)) {?> data-type="background" data-speed="10"<?php } ?> id="<?php if (get_post_meta($post->ID, 'fw_page_link_alternative', true)) { echo get_post_meta($post->ID, 'fw_page_link_alternative', true); } else { echo the_fw_title(); } ?>" class="section-page <?php echo the_slug(); ?>">
		<?php Starkers_Utilities::get_template_parts(array( 'parts/shared/background' )); ?>
		<div class="container full-width">
			<?php if (!get_post_meta($post->ID, 'fw_remove_title')) { ?>
				<h2 class="section-title"><?php the_title(); ?></h2>
			<?php } ?>
			<div class="full-width-container">
				<?php the_content(); ?>
			</div>
		</div>
	</section>