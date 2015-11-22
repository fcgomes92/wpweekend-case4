<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php global $options;
	foreach ($options as $value) {
		if ((isset($value['id'])) && (isset($value['std']))) {
			if (FALSE === get_option( $value['id'])) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); }
		}
	}
?>
<section class="section-page" id="blog">
	<div class="container">
		<div class="row">	
		<?php if ( have_posts() ): ?>
			<div class="span8 <?php if (get_option('fw_remove_sidebar')) {?> offset2 <?php }?>">
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="single-post">
					<header class="header-post">
						<div class="row <?php if (get_option('fw_hide_author') && get_option('fw_hide_comments') && get_option('fw_hide_date')) { ?>no-data<?php } ?>" id="image-data">
							<?php if (get_option('fw_hide_author') && get_option('fw_hide_comments') && get_option('fw_hide_date')) { ?>
							<div class="span8">
								<?php the_post_thumbnail('single-post-big'); ?>
							</div>
							<?php } else { ?>
							<div class="span6">
								<?php the_post_thumbnail('single-post'); ?>
							</div>
							<div class="span2 meta-info">
								<ul>
									<?php if (!get_option('fw_hide_date')) {?>
									<li><time datetime="<?php the_time(get_option('date_format')); ?>" pubdate><span class="fa fa-calendar"></span><?php the_time(get_option('date_format')); ?></time></li> 
									<?php } ?>
									<?php if (!get_option('fw_hide_author')) {?>
									<li class="author"><span class="fa fa-user"></span><span class="label-meta">Author:</span><?php echo get_the_author() ; ?></li>
									<?php } ?>
									<?php if (!get_option('fw_hide_comments')) {?>
									<li class="comments"><span class="fa fa-comment"></span><span class="label-meta">Comments:</span><?php comments_popup_link('0', '1', '%','','Off'); ?></li>
									<?php } ?>
								</ul>
							</div>
							<?php } ?>
						</div>
						<h2 class="article-title <?php if (get_option('fw_remove_sidebar')) {?>center <?php } ?> "><?php the_title(); ?></h2>
					</header>
					<section class="content">
						<?php the_content() ?>
						<div id="meta-bottom">
							<?php if (!get_option('fw_hide_tag')) {?>
								<p class="single-tags"> <span class="fa fa-tags"></span><?php if (has_tag() ) { ?><?php the_tags(); ?><?php } else {?> No tags <?php } ?></p>
							<?php } ?>
							<ul class="social-post">
								<?php if (get_option('fw_social_face')) {?>
								<li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink() ?>&amp;t=<?php the_title() ?>" target="_blank"><span class="fa fa-facebook fa-2x"></span></a></li>
								<?php } ?>
								<?php if (get_option('fw_social_twitter')) {?>
								<li><a href="http://twitter.com/home?status=<?php the_title() ?> <?php the_permalink() ?>" target="_blank"><span class="fa fa-twitter fa-2x"></span></a></li>
								<?php } ?>
								<?php if (get_option('fw_social_google')) {?>
								<li><a href="https://plusone.google.com/_/+1/confirm?hl=en&amp;url=<?php the_permalink() ?>&amp;title=<?php the_title() ?>" target="_blank"><span class="fa fa-google-plus fa-2x"></span></a></li>
								<?php } ?>
								<?php if (get_option('fw_social_pinterest')) {?>
								<li><?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
									<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>" class="pin-it-button" count-layout="vertical"><span class="fa fa-pinterest fa-2x"></span></a></li>
								<?php } ?>	
							</ul>
						</div>
					</section>
				</article>
				<?php comments_template( '/comments.php'); ?>
			<?php endwhile; ?>
			<?php else: ?>
				<h2>No posts to display</h2>
			<?php endif; ?>
			</div>
			<?php if (!get_option('fw_remove_sidebar')) {?>
			<div class="span4" id="sidebar">
				<?php dynamic_sidebar('single-sidebar'); ?>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>