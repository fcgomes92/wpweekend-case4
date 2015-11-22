<?php
/**
 * The template for displaying Category Archive pages
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
		<h2 class="section-title <?php if (get_option('fw_remove_sidebar')) {?>center <?php } ?>">Category: <?php single_cat_title(); ?></h2>
		<div class="row">	
		<?php if ( have_posts() ): ?>
			<div class="span8 <?php if (get_option('fw_remove_sidebar')) {?> offset2 <?php }?>">
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="blog-article">
					<header class="header-post">
						<a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail('wide'); ?></a>
						<?php if (!get_option('fw_hide_date')) {?>
							<div class="date-post">
								<time datetime="<?php the_time(get_option('date_format')); ?>" pubdate><?php the_time(get_option('date_format')); ?></time> 
							</div>
						<?php } ?>
					</header>
					<section class="excerpt-meta row">
						<div class="excerpt <?php if (get_option('fw_hide_author') && get_option('fw_hide_tag') && get_option('fw_hide_comments')) {?>span8 no-border<?php } else {?>span6<?php } ?>">
							<h2>
								<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php
								$thetitle = $post->post_title; /* or you can use get_the_title() */
								$getlength = strlen($thetitle);
								$thelength = 85;
								echo substr($thetitle, 0, $thelength);
								if ($getlength > $thelength) echo "...";
								?></a>
							</h2>
							<?php if(!get_option('fw_show_excerpt')) { ?>
								<p><?php echo fw_excerpt() ?></p>
							<?php } else { ?>
								<?php the_content() ?>
							<?php } ?>
						</div>
						<?php if (get_option('fw_hide_author') && get_option('fw_hide_tag') && get_option('fw_hide_comments')) { ?>
						<?php } else { ?>
							<ul class="meta-info span2 unstyled">
							<?php if (!get_option('fw_hide_author')) {?>
							<li class="author"><span class="fa fa-user"></span><span class="label-meta">Author:</span><?php echo get_the_author() ; ?></li>
							<?php } ?>
							<?php if (!get_option('fw_hide_tag')) {?>
							<li class="tags"><span class="fa fa-tags"></span><span class="label-meta">Tags:</span><?php if (has_tag() ) { ?><?php the_tags(''); ?><?php } else {?> No tags <?php } ?></li>
							<?php } ?>
							<?php if (!get_option('fw_hide_comments')) {?>
							<li class="comments"><span class="fa fa-comment"></span><span class="label-meta">Comments:</span><?php comments_popup_link('0', '1', '%','','Off'); ?></li>
							<?php } ?>
						</ul>
						<?php } ?>
					</section>
				</article>
			<?php endwhile; ?>
			<?php if (function_exists("pagination")) {
		    pagination($additional_loop->max_num_pages);
			} ?>
			<?php else: ?>
				<h2>No posts to display</h2>
			<?php endif; ?>
		
			</div>
			<?php if (!get_option('fw_remove_sidebar')) {?>
			<div class="span4" id="sidebar">
				<?php dynamic_sidebar('blog-sidebar'); ?>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>