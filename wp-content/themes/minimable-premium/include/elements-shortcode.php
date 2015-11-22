<?php

/* ---------- color shortcode ------------ */

function fw_color_sc($atts,$content = null) {
	return '<span>'.$content.'</span>';
}
add_shortcode("color", "fw_color_sc");
add_filter( 'the_title', 'do_shortcode' );


/* ---------- video shortcode --------------- */

function fw_vid_sc($atts, $content=null) {
	extract(
		shortcode_atts(array(
			'site' => 'youtube',
			'id' => '',
			'w' => '600',
			'h' => '370'
			), $atts)
		);
	if ( $site == "youtube" ) { $src = 'http://www.youtube-nocookie.com/embed/'.$id; }
	else if ( $site == "vimeo" ) { $src = 'http://player.vimeo.com/video/'.$id; }
	else if ( $site == "dailymotion" ) { $src = 'http://www.dailymotion.com/embed/video/'.$id; }
	else if ( $site == "yahoo" ) { $src = 'http://d.yimg.com/nl/vyc/site/player.html#vid='.$id; }
	else if ( $site == "bliptv" ) { $src = 'http://a.blip.tv/scripts/shoggplayer.html#file=http://blip.tv/rss/flash/'.$id; }
	else if ( $site == "veoh" ) { $src = 'http://www.veoh.com/static/swf/veoh/SPL.swf?videoAutoPlay=0&permalinkId='.$id; }
	else if ( $site == "viddler" ) { $src = 'http://www.viddler.com/simple/'.$id; }
	if ( $id != '' ) {
		return '<div class="video-wrapper"><div class="video-container"><iframe width="'.$w.'" height="'.$h.'" src="'.$src.'" class="vid iframe-'.$site.'"></iframe></div></div>';
	}
}
add_shortcode('vid','fw_vid_sc');


/* ---------- google maps shortcode ----------- */

function fw_googlemap_sc($atts, $content = null) {
	extract(shortcode_atts(array(
		"width" => '940',
		"height" => '300',
		"src" => ''
		), $atts));
	return '<div class="map-wrapper">
	<iframe src="'.$src.'&output=embed" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="'.$width.'" height="'.$height.'"></iframe>
</div>';
}
add_shortcode("googlemap", "fw_googlemap_sc");


/* ---------- Tabs shortcode ------------ */

function fw_tab_group( $atts, $content ){
	extract(shortcode_atts(array(
		'n' => '3',
		'name' =>''
		), $atts));
	$GLOBALS['tab_count'] = 0;
	$GLOBALS['tabs']=array();
	do_shortcode( $content );

	if( is_array( $GLOBALS['tabs'] ) ){
		foreach( $GLOBALS['tabs'] as $tab ){
			if($GLOBALS['tab_count']==$n) {
				$tabs[] = '<li class="active"><a href="#'.$name.'-'.$GLOBALS['tab_count'].'" data-toggle="tab">'.$tab['title'].'</a></li>';
				$panes[] = '<div class="tab-pane fade active in" id="'.$name.'-'.$GLOBALS['tab_count']++.'">'.do_shortcode($tab['content']).'</div>';
			}
			else {
				$tabs[] = '<li><a class="" href="#'.$name.'-'.$GLOBALS['tab_count'].'" data-toggle="tab">'.$tab['title'].'</a></li>';
				$panes[] = '<div class="tab-pane fade" id="'.$name.'-'.$GLOBALS['tab_count']++.'">'.do_shortcode($tab['content']).'</div>';
			}
		}
		$return = '<ul class="nav nav-tabs nav-tab-shortcode">'.implode( "\n", $tabs ).'</ul><div class="tab-content">'.implode( "\n", $panes ).'</div>';
	}
	return $return;
}
add_shortcode("tabgroup","fw_tab_group");

function jqtools_tab( $atts, $content ){
	extract(shortcode_atts(array(
		'title' => 'Tab %d'
		), $atts));

	$x = $GLOBALS['tab_count'];
	$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'content' =>  $content );

	$GLOBALS['tab_count']++;
}
add_shortcode( 'tab', 'jqtools_tab' );


/* ---------- recent posts shortcodes ------------- */

function fw_recent_posts_function($atts){
	extract(shortcode_atts(array(
		'posts' => 1,
		'cat' => 1,
		'excerpt' => on,
		'orientation' => ver,
		'thumb' => off
		), $atts));
	$return_string = '<ul class="posts">';
	query_posts(array('orderby' => 'date', 'order' => 'DESC' , 'showposts' => $posts, 'cat' => $cat));
	if (have_posts()) :
		while (have_posts()) : the_post();
	$short_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'short-post');
	$return_string .= '<li '.($orientation == ver ? '' : 'class="span4"').'>
	<h3><a class="color" href="'.get_permalink().'">'.get_the_title().'</a></h3>
	'.($thumb == on ? '<img src="'.$short_image_url[0].'" />' : '').'
	'.($excerpt == on ? '<p>'.fw_excerpt().'</p>' : '').'</li>';
	endwhile;
	endif;
	$return_string .= '</ul>';
	wp_reset_query();
	return $return_string;
}
add_shortcode('recent-posts', 'fw_recent_posts_function');


/* ---------------- Font Awesome Shortcodes ---------------- */

function fw_font_awesome($atts) {
	extract(shortcode_atts(array(
		'type'  => '',
		'size' => '',
		'rotate' => '',
		'flip' => '',
		'pull' => '',
		'animated' => '',
		'title' => ''
		), $atts));

	$type = ($type) ? 'fa-'.$type. '' : 'fa-star';
	$size = ($size) ? 'fa-'.$size. '' : '';
	$rotate = ($rotate) ? 'fa-rotate-'.$rotate. '' : '';
	$flip = ($flip) ? 'fa-flip-'.$flip. '' : '';
	$pull = ($pull) ? 'pull-'.$pull. '' : '';
	$animated = ($animated) ? 'fa-spin' : '';
	$title = ($title) ? '<span class="title-icon">'.$title. '</span>' : '';

	$theAwesomeFont = '<span class="fa aws-icon '.sanitize_html_class($type).' '.sanitize_html_class($size).' '.sanitize_html_class($rotate).' '.sanitize_html_class($flip).' '.sanitize_html_class($pull).' '.sanitize_html_class($animated).'"></span>'. $title.'';

	return $theAwesomeFont;
}
add_shortcode('icon', 'fw_font_awesome');


/* ---------------- Button shortcode ----------------- */

function fw_link($atts, $content = null) {
	extract(shortcode_atts(array(
		"to" => 'http://minimable.fedeweb.net',
		"width" => '100%',
		"target" => '',
		"pull" => ''
		), $atts));
	$pull = ($pull) ? 'pull-'.$pull. '' : '';
	return '<a href="'.$to.'" class="sc-btn '.sanitize_html_class($pull).'" target="'.$target.'" style="max-width:'.$width.'px;">'.$content.'</a>';
}
add_shortcode("link", "fw_link");
?>