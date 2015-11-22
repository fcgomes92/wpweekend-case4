<?php
function the_slug() {
	$post_data = get_page($page->ID, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug;
}

function the_fw_title() {
	$post_data = get_page($page->ID, ARRAY_A);
	$title = $post_data['post_title'];
	$chars = array("[color]","[/color]","<span>","</span>","<br/>","<br>");
	$substitute = array("");
	$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
		'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
		'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
		'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
		'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y','Ğ'=>'G', 'İ'=>'I', 'Ş'=>'S', 'ğ'=>'g', 'ı'=>'i', 'ş'=>'s', 'ü'=>'u',
		'ă'=>'a', 'Ă'=>'A', 'ș'=>'s', 'Ș'=>'S', 'ț'=>'t', 'Ț'=>'T'  );
	$anchor = strtr( $title, $unwanted_array );
	$anchor = str_replace($chars,$substitute,$anchor);
	$anchor = str_replace(" ","-",$anchor);
	$anchor = preg_replace('/[^A-Za-z0-9\-]/', '', $anchor); // Removes special chars.
	$anchor = strtolower($anchor);
	return $anchor;
	}
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => 'Blog Sidebar',
			'id' => 'blog-sidebar',
			'description' => 'Sidebar for the blog, archive, tag and category page',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>' ,
			));
		register_sidebar(array(
			'name' => 'Single post Sidebar',
			'id' => 'single-sidebar',
			'description' => 'Sidebar for the single post',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>' ,
			));
		register_sidebar(array(
			'name' => 'Footer',
			'id' => 'footer-widget',
			'description' => 'Sidebar fot the footer area',
			'before_widget' => '<div class="span4"><div id="%1$s" class="widget %2$s"> ',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			));
	}


	function new_excerpt_more($more) {
		global $post;
		return '<span class="moretag"><a href="'. get_permalink($post->ID) . '"> '. (get_option('fw_read_more_post') ? get_option('fw_read_more_post') : "Read more") .'</a><span>';
	}

	add_filter('excerpt_more', 'new_excerpt_more');

	function fw_excerpt() {
		$excerpt = get_the_excerpt();
		$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, 200);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
		$excerpt = $excerpt.'...<span class="moretag"><a href="'. get_permalink($post->ID) . '"> '. (get_option('fw_read_more_post') ? get_option('fw_read_more_post') : "Read more") .'</a></span>';
		return $excerpt;
	}
	function pagination($pages = '', $range = 4) {
		$showitems = ($range * 2)+1;

		global $paged;
		if(empty($paged)) $paged = 1;

		if($pages == '') {
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if(!$pages) {
				$pages = 1;
			}
		}
		if(1 != $pages) {
			echo "<div class=\"navigation\"><ul>";
			if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class=\"arrow\"><a href='".get_pagenum_link(1)."'><</a></li>";
			if($paged > 1 && $showitems < $pages) echo "<li class=\"arrow\"><a href='".get_pagenum_link($paged - 1)."'><<</a></li>";

			for ($i=1; $i <= $pages; $i++) {
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
					echo ($paged == $i)? "<li class=\"active\"><a href='".get_pagenum_link($i)."'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a></li>";
				}
			}

			if ($paged < $pages && $showitems < $pages) echo "<li class=\"arrow\"><a href=\"".get_pagenum_link($paged + 1)."\">></a></li>";
			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class=\"arrow\"><a href='".get_pagenum_link($pages)."'>>></a></li>";
			echo "</ul></div>\n";
		}
	}

	// Customize the search form
	function style_search_form($form) {
		$form = '<form method="get" id="searchform" action="' . get_option('home') . '/" >
		<div>';
			if (is_search()) {
				$form .='<input type="text" value="' . attribute_escape(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" />';
			} else {
				$form .='<input type="text" value="'. get_option('fw_placeholder_sf') .'" name="s" id="s"  onfocus="if(this.value==this.defaultValue)this.value=\'\';" onblur="if(this.value==\'\')this.value=this.defaultValue;"/>';
			}
			$form .= '<input type="submit" id="searchsubmit" value="'.attribute_escape(__('Go')).'" />

		</div></form>';
		return $form;
	}
	add_filter('get_search_form', 'style_search_form');

	function SearchFilter($query) {
		if ($query->is_search) {
			$query->set('post_type', 'post');
		}
		return $query;
	}

	add_filter('pre_get_posts','SearchFilter');
	function bgmpShortcodeCalled()
	{
		global $post;

		if( ( function_exists( 'is_front_page' ) && is_front_page() ) || ( function_exists( 'is_home_page' ) && is_home_page() ) )
		add_filter( 'bgmp_map-shortcode-called', '__return_true' );
	}
	add_action( 'wp', 'bgmpShortcodeCalled' );

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	add_filter('woocommerce_shortcode_products_query', 'removeAudioTags');

	function removeAudioTags($args){

		$args['tax_query'] = array(array(

			'taxonomy' => 'product_tag',

			'field' => 'slug',

			'terms' => array('xyz'),

			'operator' => 'NOT IN'

			));

		return $args;

	}
	add_filter( 'loop_shop_per_page', create_function( '$cols', 'return '.get_option('fw_products_per_page').';' ), 20 );
?>