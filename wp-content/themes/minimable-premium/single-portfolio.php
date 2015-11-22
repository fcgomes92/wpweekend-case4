<?php global $options;
	foreach ($options as $value) {
		if ((isset($value['id'])) && (isset($value['std']))) {
			if (FALSE === get_option( $value['id'])) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); }
		}
	}
?>
<?php
	$enable = get_post_meta($post->ID, 'fw_enable_featured_carousel', true);
	$args = array('numberposts' => -1, // Per prendere tutti i post
	'orderby' => 'menu_order', // Utilizzo l'ordine scelto nell'editor
	'order' => 'ASC', //ordine di visualizzzazione delle immagini
	'post_mime_type' => 'image', // Prendo solo immagini, escludendo altri tipi di file
	'post_parent' => $post -> ID,
	//'exclude'     => get_post_thumbnail_id(),
	'exclude' =>  $enable ? '' : get_post_thumbnail_id(),
	'post_status' => null, 'post_type' => 'attachment');
	$attachments = get_children($args);
	?>

<div class="container portfolio-item">
	<h1 class="portfolio-title"><?php the_title(); ?></h1>
	<ul class="button-controls">
		<?php if (get_post_meta($post->ID, 'fw_link_portfolio', true) && !get_post_meta($post->ID, 'fw_enable_link_button', true) ) { ?>
		<li><a href="<?php echo get_post_meta($post->ID, 'fw_link_portfolio', true) ?>" class="visit-link nav-control" <?php if (get_post_meta($post->ID, 'fw_target_blank_portfolio', true)) { ?> target="_blank" <?php } ?>><span class="fa fa-link"></span></a></li>
		<?php } ?>
		<?php if (!get_post_meta($post->ID, 'fw_disable_lightbox_description', true)) { ?>
		<li><a href="#" class="description-btn nav-control"><span class="fa fa-align-left"></span></a></li>
		<?php } ?>
		<li><a href="#" class="close-item nav-control"><span class="fa fa-times"></span></a></li>
	</ul>
	<?php the_post() ?>
	<?php if (get_post_meta($post->ID, 'fw_video_portfolio', true)) { ?>
		<?php echo apply_filters('the_content', get_post_meta($post->ID, 'fw_video_portfolio', true));?>
	<?php } elseif (get_post_meta($post->ID, 'fw_soundcloud_portfolio', true)) { ?>
	<div class="soundcloud-wrapper">
		<?php echo apply_filters('the_content', get_post_meta($post->ID, 'fw_soundcloud_portfolio', true));?>
	</div>
	<?php } else { ?>
	<?php if (get_post_meta($post->ID, 'fw_enable_carousel',true)) {	?>
	<div class="carousel slide portfolio-carousel" id="portfolio-carousel-<?php echo get_the_id(); ?>">
			<!-- Carousel items -->
		<div class="carousel-inner">
    		<?php foreach($attachments as $attachment) {
    			$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
    			$image_big =  wp_get_attachment_image( $attachment->ID, 'portfolio' ); ?>
			<div class="item">
				<?php echo $image_big ?>
			</div>
		<?php } ?>
		</div>
		<!-- Carousel nav -->
		<a class="arrow prev-arrow left nav-control" href="#portfolio-carousel-<?php echo get_the_id(); ?>" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
		<a class="arrow next-arrow right nav-control" href="#portfolio-carousel-<?php echo get_the_id(); ?>" data-slide="next"><span class="fa fa-chevron-right"></span></a>
	</div>
	<?php } else { ?>
	<?php if (!get_post_meta($post->ID, 'fw_enable_featured',true)) { ?>
		<?php if (get_post_meta($post->ID, 'fw_enable_full_featured',true)) { ?>
			<?php the_post_thumbnail('portfolio-full', array( 'class' => 'full-img' ) );  ?>
		<?php } else { ?>
			<?php the_post_thumbnail('portfolio') ?>
		<?php } ?>
	<?php } ?>
	<?php } ?>
	<?php } ?>
	<div class="row">
		<div id="overlay"></div>
		<div class="span8 description-item <?php if (get_post_meta($post->ID, 'fw_disable_lightbox_description', true)) { ?>no-lightbox offset2<?php }?>">
			<div class="content-item">
				<?php if (!get_post_meta($post->ID, 'fw_disable_lightbox_description', true)) { ?><a href="#" id="close-content"><span class="fa fa-times"></span></a><?php }?>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php if (get_post_meta($post->ID, 'fw_link_portfolio', true) && get_post_meta($post->ID, 'fw_enable_link_button', true) ) { ?>
	<div class="portfolio-link-wrapper">
		<a class="link-portfolio" href="<?php echo get_post_meta($post->ID, 'fw_link_portfolio', true) ?>" <?php if (get_post_meta($post->ID, 'fw_target_blank_portfolio', true)) { ?> target="_blank" <?php } ?>><?php echo $fw_label_portfolio_link ?></a>
	</div>
	<?php } ?>
</div>