<?php
/**
 * Template Name: One Page - Template Product
 *
 */?>
	<section <?php if (!wp_is_mobile() && get_post_meta($post->ID, 'fw_bg_parallax', true)) {?> data-type="background" data-speed="10"<?php } ?> id="<?php if (get_post_meta($post->ID, 'fw_page_link_alternative', true)) { echo get_post_meta($post->ID, 'fw_page_link_alternative', true); } else { echo the_fw_title(); } ?>" class="section-page <?php echo the_slug(); ?>">
		<?php Starkers_Utilities::get_template_parts(array( 'parts/shared/background' )); ?>
		<div class="container full-width">
			<?php if (!get_post_meta($post->ID, 'fw_remove_title')) { ?>
			<h2 class="section-title"><?php the_title(); ?></h2>
			<?php } ?>
			<div class="product-container" style="max-width:<?php echo get_post_meta($post->ID, 'fw_width_product_content',true); ?>px;">
				<?php if (get_post_meta($post->ID, 'fw_image_right')) { ?>
				<div class="product-content left-product">
					<?php the_content(); ?>
				</div>
				<div class="product-image right-product">
					<?php $post_meta_data = get_post_custom($post->ID); ?>
					<?php
					$custom_image = $post_meta_data['fw_image'][0];
					echo wp_get_attachment_image($custom_image, 'full'); ?>
				</div>
				<?php } else { ?>
				<div class="product-image left-product">
					<?php $post_meta_data = get_post_custom($post->ID); ?>
					<?php
					$custom_image = $post_meta_data['fw_image'][0];
					echo wp_get_attachment_image($custom_image, 'full'); ?>
				</div>
				<div class="product-content right-product">
					<?php the_content(); ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>