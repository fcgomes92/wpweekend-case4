<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php global $options;
	foreach ($options as $value) {
		if ((isset($value['id'])) && (isset($value['std']))) {
			if (FALSE === get_option( $value['id'])) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); }
		}
	}
	?>
	<?php
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_option( 'woocommerce_shop_page_id' ) ), 'full' );
	?>
	<section class="section-page">
		<?php if ( $image && is_shop() ) { ?>
	 	<div class="top-bg" style="background-image: url( <?php echo $image[0] ?> )">
	 		<?php if ( get_post_meta( get_option( 'woocommerce_shop_page_id' ), 'fw_bg_overlay', true) ) { ?>
			<div class="color-overlay"></div>
			<?php } ?>
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
	 		<div class="container">
	 			<h2 class="section-title <?php if ( get_post_meta( get_option( 'woocommerce_shop_page_id' ), 'fw_white_title', true) ) { ?>white-title<?php } ?>"><?php woocommerce_page_title(); ?></h2>
	 		</div>
	 		<?php endif; ?>
	 	</div>
	 	<div class="container" id="full-width">
	 	<?php } elseif ( !$image && is_shop() ) { ?>
	 		<div class="container" id="full-width">
	 			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
	 			<h2 class="section-title"><?php woocommerce_page_title(); ?></h2>
	 			<?php endif; ?>
	 	<?php } else { ?>
	 		<div class="container" id="full-width">
	 			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
	 			<h2 class="section-title"><?php woocommerce_page_title(); ?></h2>
	 			<?php endif; ?>
	 	<?php } ?>
	 	<?php
			/**
			 * woocommerce_archive_description hook
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>
	 	<div class="shop-top-bar">
		 	<div class="row">
				<div class="span7">
					<?php woocommerce_breadcrumb(); ?>
				</div>
				<div class="span5">
					<?php if ( have_posts() ) : ?>
					<div class="product-list-filter pull-right">
					<?php
						/**
						 * woocommerce_before_shop_loop hook
						 *
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );
					?>
					</div>
				</div>
			</div>
		</div>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>


</div>
</section>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
