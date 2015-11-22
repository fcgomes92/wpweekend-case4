<?php
/**
 * Template Name: One Page - Template Portfolio Thumb
 *
 */?>
	<section <?php if (!wp_is_mobile() && get_post_meta($post->ID, 'fw_bg_parallax', true)) {?> data-type="background" data-speed="10"<?php } ?> id="<?php if (get_post_meta($post->ID, 'fw_page_link_alternative', true)) { echo get_post_meta($post->ID, 'fw_page_link_alternative', true); } else { echo the_fw_title(); } ?>" class="section-page <?php echo the_slug(); ?>">
		<?php Starkers_Utilities::get_template_parts(array( 'parts/shared/background' )); ?>
		<div class="container" id="portfolio">
			<?php if (!get_post_meta($post->ID, 'fw_remove_title')) { ?>
			<h2 class="section-title"><?php the_title(); ?></h2>
			<?php } ?>
			<?php if ( ! post_password_required() ) { ?>
			<div class="portfolio-container">
				<?php
				$term = term_exists(''.get_post_meta($post->ID, 'fw_taxonomy_select', true).'', 'portfolio-categories');
				if ($term !== 0 && $term !== null) {
					$theCatId = get_term_by( 'slug', ''.get_post_meta($post->ID, 'fw_taxonomy_select', true).'', 'portfolio-categories' );
					$theCatId = $theCatId->term_id;
					$args = array(
						'parent' => $theCatId
					);
					$terms = get_terms('portfolio-categories',$args);
				} else {
					$terms = get_terms("portfolio-categories");
				}
				$count = count($terms);
				if ( $count > 0 ){ ?>
				<ul class="filter nav nav-tabs">
					<?php if (get_post_meta($post->ID,'fw_meta_all_category', true)) { ?>
					<li class="all current"><a href="#"><?php echo get_post_meta($post->ID, 'fw_meta_all_category', true); ?></a></li>
					<?php } else { ?>
					<li class="all current"><a href="#"><?php echo $fw_label_all_category ?></a></li>
				  	<?php } ?>
				  <?php foreach ( $terms as $term ) { ?>
					<li class="<?php echo $term->slug ?>"><a href="#"><?php echo $term->name ?></a></li>
				  <?php } ?>
				</ul>
				<?php } ?>
				<?php if (get_post_meta($post->ID,'fw_order_select', true) == 'DESC' ) {
					$args = array(
						'post_type'=> 'portfolio',
						'portfolio-categories'=> ''.get_post_meta($post->ID, 'fw_taxonomy_select', true).'',
						'order'    => 'DESC',
						'posts_per_page' => '-1'
					);
				} else {
					$args = array(
						'post_type'=> 'portfolio',
						'portfolio-categories'=> ''.get_post_meta($post->ID, 'fw_taxonomy_select', true).'',
						'order'    => 'ASC',
						'posts_per_page' => '-1'
					);
				}
				query_posts( $args ); ?>
				<div class="portfolio-loading">
					<img src="<?php bloginfo('template_url') ?>/img/ajax-loader.gif" />
				</div>
				<section class="portfolio-detail-container"></section>
				<div class="row">
					<ul class="portfolio-wrapper thumbnails">
						<?php if (have_posts()) : while(have_posts()) : the_post() ?>
						<?php $categories_portfolio_id = $post->ID;
									$categories_portfolio_slug = wp_get_post_terms( $categories_portfolio_id, 'portfolio-categories');
									?>
						<li class="item span3" data-type="<?php foreach ($categories_portfolio_slug as $key) {
						echo $key->slug . ' ';
						} ?>" data-id="id-<?php echo  $count; ?>">
							<div class="item-content">
								<?php the_post_thumbnail('small', array('class' => 'img-circle')); ?>
								<span class="piu">+</span>
								<a class="info-wrapper open-link" href="<?php the_permalink() ?>">
									<div class="content-info">
										<div class="hidden-info">
											<h3><?php the_title(); ?></h3>
											<span class="btn-more">+</span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<?php $count++; ?>
						<?php endwhile; endif; ?>
					</ul>
				</div>
			</div>
			<?php } else {
				echo get_the_password_form();
			}?>
		</div>

	</section>