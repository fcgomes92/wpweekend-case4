<?php
/**
 * Empty cart page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

wc_print_notices();

?>

<p class="cart-empty"><?php _e( 'Your cart is currently empty.', 'woocommerce' ) ?></p>

<?php do_action( 'woocommerce_cart_is_empty' ); ?>

<?php if ( get_option('fw_return_home') ) { ?>
	<p class="return-to-shop"><a class="button wc-backward" href=" <?php echo site_url(); ?> "><?php _e( 'Return to home', 'woocommerce' ) ?></a></p>
<?php } else { ?>
	<p class="return-to-shop"><a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>"><?php _e( 'Return To Shop', 'woocommerce' ) ?></a></p>
<? } ?>