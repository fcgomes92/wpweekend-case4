<?php
function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
	?>
	<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
		<div class="comment-author vcard">
			<?php if ($args['avatar_size'] != 0) ?> <div class="bg-avatar"><?php echo get_avatar( $comment, 60 ); ?></div>
			<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
		</div>
		<?php if ($comment->comment_approved == '0') : ?>
			<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
			<br />
		<?php endif; ?>
		<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
			<?php
			/* translators: 1: date, 2: time */
			printf( __('%1$s'), get_comment_date()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
			?>
		</div>
		<div class="comment-text">
			<?php comment_text() ?>
			<div class="reply">
				<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>
		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
		</div>
	<?php endif; ?>
	<?php
}

add_filter('get_avatar','change_avatar_css');
function change_avatar_css($class) {
	$class = str_replace("class='avatar", "class='avatar img-circle ", $class) ;
	return $class;
}
?>