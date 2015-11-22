<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php global $options;
	foreach ($options as $value) {
		if ((isset($value['id'])) && (isset($value['std']))) {
			if (FALSE === get_option( $value['id'])) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); }
		}
	}
?>
<?php the_post() ?>
<section class="section-page">
	<div class="container">
			<h2 class="section-title"><?php the_title(); ?></h2>
			<div class="full-width-container">
				<div class="row">
					<div class="span3">
				  		<?php the_post_thumbnail('staff', array('class' => 'img-circle')); ?>
				  	</div>
				  	<div class="span9 description-text">
				  		<h3><?php the_title(); ?></h3>
				  		<?php the_content(); ?>
				  		<ul class="unstyled social">
							<?php if (get_post_meta($post->ID, 'fw_fb_link', true)) { ?>
								<li>
									<a href="<?php echo (get_post_meta($post->ID, 'fw_fb_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
										<span class="fa fa-facebook fa-2x"></span>
									</a>
								</li>
							<?php } ?>
							<?php if (get_post_meta($post->ID, 'fw_tw_link', true)) { ?>
								<li>
									<a href="<?php echo (get_post_meta($post->ID, 'fw_tw_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
										<span class="fa fa-twitter fa-2x"></span>
									</a>
								</li>
							<?php } ?>
							<?php if (get_post_meta($post->ID, 'fw_gp_link', true)) { ?>
								<li>
									<a href="<?php echo (get_post_meta($post->ID, 'fw_gp_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
										<span class="fa fa-google-plus fa-2x"></span>
									</a>
								</li>
							<?php } ?>
							<?php if (get_post_meta($post->ID, 'fw_it_link', true)) { ?>
								<li>
									<a href="<?php echo (get_post_meta($post->ID, 'fw_it_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
										<span class="fa fa-instagram fa-2x"></span>
									</a>
								</li>
							<?php } ?>
							<?php if (get_post_meta($post->ID, 'fw_pt_link', true)) { ?>
								<li>
									<a href="<?php echo (get_post_meta($post->ID, 'fw_pt_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
										<span class="fa fa-pinterest fa-2x"></span>
									</a>
								</li>
							<?php } ?>
							<?php if (get_post_meta($post->ID, 'fw_ln_link', true)) { ?>
								<li>
									<a href="<?php echo (get_post_meta($post->ID, 'fw_ln_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
										<span class="fa fa-linkedin fa-2x"></span>
									</a>
								</li>
							<?php } ?>
							<?php if (get_post_meta($post->ID, 'fw_yt_link', true)) { ?>
								<li>
									<a href="<?php echo (get_post_meta($post->ID, 'fw_yt_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
										<span class="fa fa-youtube fa-2x"></span>
									</a>
								</li>
							<?php } ?>
							<?php if (get_post_meta($post->ID, 'fw_vi_link', true)) { ?>
								<li>
									<a href="<?php echo (get_post_meta($post->ID, 'fw_vi_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
										<span class="fa fa-vimeo-square fa-2x"></span>
									</a>
								</li>
							<?php } ?>
							<?php if (get_post_meta($post->ID, 'fw_tr_link', true)) { ?>
								<li>
									<a href="<?php echo (get_post_meta($post->ID, 'fw_tr_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
										<span class="fa fa-tumblr fa-2x"></span>
									</a>
								</li>
							<?php } ?>
							<?php if (get_post_meta($post->ID, 'fw_vk_link', true)) { ?>
								<li>
									<a href="<?php echo (get_post_meta($post->ID, 'fw_vk_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
										<span class="fa fa-vk fa-2x"></span>
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
			  	</div>
				</div>
			</div>
		</div>
</section>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>