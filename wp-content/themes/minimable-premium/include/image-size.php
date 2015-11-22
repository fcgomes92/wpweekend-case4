<?php
add_theme_support( 'woocommerce' );
add_theme_support('post-thumbnails');
add_image_size('small',270,270,true);
add_image_size('big',9999,400);
add_image_size('staff',270,270,true);
add_image_size('portfolio',770,9999);
add_image_size('portfolio-full',1170,9999);
add_image_size('portfolio_thumb',770,440,true);
add_image_size('wide',770,346,true);
add_image_size('single-post',570,300,true);
add_image_size('single-post-big',770,346,true);
add_image_size('short-post',400,250,true);
add_filter('image_size_names_choose', 'my_image_sizes');
function my_image_sizes($sizes) {
	$addsizes = array(
	"small" => __( "Circle")
);
$newsizes = array_merge($sizes, $addsizes);
return $newsizes;
}
add_filter('wp_get_attachment_link', 'add_gallery_id_rel');
function add_gallery_id_rel($link) {
	global $post;
	return str_replace('<a href', '<a rel="gallery-'. $post->ID .'" href', $link);
}
?>