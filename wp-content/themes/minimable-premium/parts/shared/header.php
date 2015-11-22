<?php global $options;
	foreach ($options as $value) {
		if ((isset($value['id'])) && (isset($value['std']))) {
			if (FALSE === get_option( $value['id'])) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); }
		}
	}
?>
<?php $template_file = get_post_meta( get_the_ID(), '_wp_page_template', TRUE );
global $post;?>
<?php if ( has_nav_menu( 'primary' ) ) : ?>
<header id="menu-top" class="home-top <?php if ( !get_post_meta($post->ID, 'fw_single_nav_menu', true) ){ ?>hide-menu<?php }?> <?php if($template_file!=='main-template.php' || !(get_post_meta($post->ID, 'fw_transparent_bar', true))) {?>fixed<?php }?>">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<div id="mini-logo">
					<a href="<?php bloginfo('wpurl') ?>" id="mini-link">
						<img src="<?php echo $fw_logo_mini; ?>" alt="<?php bloginfo('name') ?>"/>
					</a>
				</div>
				<div id="btn-menu-container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<?php
				if ( class_exists('Woocommerce') && !get_post_meta($post->ID, 'fw_remove_cart_icon', true) ) {
				global $woocommerce; ?>
				<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><span class="fa fa-shopping-cart cart-icon"></span> <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></a>
				<?php } ?>
				<div class="nav-collapse collapse">
					<ul class="nav top-nav" id="nav-menu">
						<?php
						global $post;
						if(get_post_meta($post->ID, 'fw_select_menu', true)) {
							wp_nav_menu( array( 'items_wrap' => '%3$s','container' => '','menu' => ''.get_post_meta($post->ID, 'fw_select_menu', true).'' ) );
						} else {
							wp_nav_menu( array( 'theme_location' => 'primary','items_wrap' => '%3$s','container' => ''));
						} ?>
				   </ul>
				</div>
			</div>
		</div>
	</nav>
</header>
<?php endif; ?>