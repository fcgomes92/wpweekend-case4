<style>
.page-template-main-template {background: transparent;}
.page-template-main-template .section-page {padding:0;}
.page-template-main-template .section-page .container {padding:<?php echo $fw_nav_height +40 ?>px 0;}
.navbar { line-height:<?php echo $fw_nav_height ?>px;}
.sub-menu {top:<?php echo $fw_nav_height +20?>px;}
.navbar .nav > li:hover > .sub-menu {top:<?php echo $fw_nav_height?>px;}
.navbar .collapse #nav-menu,#mini-logo a,.cart-contents,.cart-contents span{ height:<?php echo $fw_nav_height ?>px;}
#mini-logo img { height:<?php echo $fw_logo_height ?>px;}
.fixed .navbar-inverse .navbar-inner {background: <?php echo $fw_header_background ?>!important;}
.navbar .nav > li > a,.cart-contents {line-height: <?php echo $fw_nav_height ?>px;}
.fixed .navbar .nav > li > a, .fixed .cart-contents,.fixed .cart-contents span, .sub-menu li a {color: <?php echo $fw_header_color ?>; }
.fixed .navbar .btn-navbar .icon-bar {background-color: <?php echo $fw_header_color ?>;}
.fixed .navbar .nav > li > a:hover, .fixed .navbar .nav > li.active > a,.fixed .navbar-inverse .nav .active>a:focus, .fixed .navbar .nav > .current-menu-item > a, .cart-contents:hover, .cart-contents span:hover {color: <?php echo $fw_header_hover_color ?>; }
.color, h1 > span, h2 > span, .description-text a, .description-text a:hover,.blog-article a, .article-title, .description-item a, #sidebar a, #comments a, .header-post a, .single-post a, .social a, .fa, .section-page a  { color:<?php echo $fw_main_color ?>;}
.add_to_cart_button { border: 1px solid <?php echo $fw_main_color ?>; color: <?php echo $fw_main_color ?>;}
.add_to_cart_button:hover { background-color: <?php echo $fw_main_color ?>;}
#mini-slogan {color: <?php echo $fw_minislogan_color ?>; }
.circle-menu, .nav-tabs li a, #portfolio a.link-portfolio, input[type="submit"], .moretag a, .date-post,.navigation ul li.active a, .info-wrapper,.piu, .nav-control:hover,.comment-body .bg-avatar,.navigation ul li a:hover, .sc-btn, .woocommerce span.onsale, .woocommerce ul.products li.product .button, .woocommerce button.button.single_add_to_cart_button, .woocommerce #respond input#submit, .woocommerce input.button.alt, .woocommerce .button:hover, .woocommerce a.button:hover, .woocommerce button.button:hover,.woocommerce input.button:hover { background:<?php echo $fw_main_color ?>;}
.circle-menu { background-color: <?php echo $fw_even_bubbles_bgcolor ?>;} .circle-menu .label-link { color: <?php echo $fw_even_bubbles_color ?>;}
.nav-control {border: 2px solid <?php echo $fw_main_color ?>; }
.widget-title {border-left:4px solid <?php echo $fw_main_color ?>;}
.nav-tabs li.active a:hover, .circle-black, .big-title span, .nav-tabs li.active a, .nav-tabs li.current a, .nav-tabs li a:hover, #portfolio a.link-portfolio:hover, .moretag a:hover, input[type="submit"]:hover, .sc-btn:hover, .add_to_cart_button:hover, .woocommerce input.button, .woocommerce button.button, .woocommerce table.my_account_orders .order-actions .button, .woocommerce-page a.wc-backward, .woocommerce button.button.single_add_to_cart_button:hover, .woocommerce #payment #place_order:hover {background: <?php echo $fw_secondary_color ?>; }
.nav-tabs li.active a:after {border-top-color: <?php echo $fw_secondary_color ?>; }
.circle-black { background-color: <?php echo $fw_odd_bubbles_bgcolor ?>;} .circle-black .label-link { color: <?php echo $fw_odd_bubbles_color ?>;}
.woocommerce .button, .woocommerce a.button, .woocommerce button.button {background-color: <?php echo $fw_secondary_color ?>; }
.woocommerce .checkout-button {background: <?php echo $fw_main_color ?>!important; }
.woocommerce .products .item-meta-info .star-rating { color: <?php echo $fw_main_color ?>; }
.tabs-container  ul.tabs li.active a { border-bottom: 2px solid <?php echo $fw_main_color ?>; color: <?php echo $fw_main_color ?>;}
.social-post a span:hover,  ul.social li a span:hover, .big-title, .posts a:hover {color: <?php echo $fw_secondary_color ?>;}
<?php if (get_option('fw_preloader_bar_width')) {?>
#qLoverlay .queryloader__overlay__bar {
	max-width: <?php echo (get_option('fw_preloader_bar_width') ? get_option('fw_preloader_bar_width') : '100') ?>%!important;
	left: 50%!important;
	margin-left: -<?php echo (get_option('fw_preloader_bar_width') ? get_option('fw_preloader_bar_width') / 2 : '100') ?>%!important;
}
<?php } ?>
#qLoverlay .queryloader__overlay__percentage {
	font-size: 20px!important;
	font-weight: 300!important;
}
#qLoverlay .queryloader__overlay__percentage:before {
	content: "<?php echo $fw_preloader_text ?>";
	margin-right: 10px;
}
@media (max-width: 979px) {
	.navbar .collapse {background: <?php echo $fw_header_background ?>!important;}
	.navbar .nav > li > a,.navbar .nav > li > a:hover, .navbar .nav > li.active > a,.navbar-inverse .nav .active>a:focus {color: <?php echo $fw_header_color ?>!important; }
}
<?php if (!get_option('fw_onoff_animation_title')) { ?>.big-title {display:block;} <?php } ?>
.big-title {
<?php if (get_option('fw_enable_custom_slogan')) { ?>
font-family: <?php echo $fw_google_font_slogan ?>, 'sans-serif';
<?php } ?>
font-size: <? echo $fw_font_size_slogan ?>px; line-height: <? echo $fw_font_size_slogan ?>px;
}
.circle-menu {
<?php if (get_option('fw_enable_custom_bubbles')) { ?>
font-family: <?php echo $fw_google_font_bubbles ?>, 'sans-serif';
<?php } ?>
font-size: <? echo $fw_font_size_bubbles ?>px;
}
.section-page .section-title {
<?php if (get_option('fw_enable_custom_heading')) { ?>
font-family: <?php echo $fw_google_font_heading ?>;
<?php } ?>
font-size: <? echo $fw_font_size_heading ?>px; line-height: <? echo $fw_font_size_heading ?>px;
}
<?php if (get_option('fw_enable_custom_heading_body')) { ?>
h1,h2,h3,h4,h5,h6 {
font-family: <?php echo $fw_google_font_heading_body ?>;
}
<?php } ?>
body {font-size: <?php echo $fw_font_size_body ?>px;}
<?php if (get_option('fw_enable_custom_body')) { ?>
body, #reviews h3, #mini-slogan, input, textarea, .woocommerce-tabs #comments h2, .related h2   { font-family: <?php echo $fw_google_font_body ?>; }
<?php } ?>
</style>