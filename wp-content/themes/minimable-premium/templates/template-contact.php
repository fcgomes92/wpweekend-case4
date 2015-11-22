<?php
/**
 * Template Name: One Page - Template Contact
 *
 */?>
	<section <?php if (!wp_is_mobile() && get_post_meta($post->ID, 'fw_bg_parallax', true)) {?> data-type="background" data-speed="10"<?php } ?> id="<?php if (get_post_meta($post->ID, 'fw_page_link_alternative', true)) { echo get_post_meta($post->ID, 'fw_page_link_alternative', true); } else { echo the_fw_title(); } ?>" class="section-page <?php echo the_slug(); ?> contact-page">
		<?php Starkers_Utilities::get_template_parts(array( 'parts/shared/background' )); ?>
		<div class="container">
			<?php if (!get_post_meta($post->ID, 'fw_remove_title')) { ?>
			<h2 class="section-title"><?php the_title(); ?></h2>
			<?php } ?>
			<div class="row">
				<div class="span4" id="find-us">
					<h3>
						<?php if (get_post_meta($post->ID, 'fw_contact_info_title', true)) {
						echo get_post_meta($post->ID, 'fw_contact_info_title', true);
						} ?>
					</h3>
					<ul class="unstyled contact-info">
						<?php if (get_post_meta($post->ID, 'fw_address_label', true)) { ?>
						<li><span class="fa fa-map-marker"></span> <span class="color"><?php echo get_post_meta($post->ID, 'fw_address_label', true);?>:</span> <?php echo get_post_meta($post->ID, 'fw_address_field', true);?></li>
						<?php } ?>
						<?php if (get_post_meta($post->ID, 'fw_phone_label', true)) { ?>
						<li><span class="fa fa-signal"></span> <span class="color"><?php echo get_post_meta($post->ID, 'fw_phone_label', true);?>:</span> <?php echo get_post_meta($post->ID, 'fw_phone_field', true);?></li>
						<?php } ?>
						<?php if (get_post_meta($post->ID, 'fw_fax_label', true)) { ?>
						<li><span class="fa fa-print"></span> <span class="color"><?php echo get_post_meta($post->ID, 'fw_fax_label', true);?>:</span> <?php echo get_post_meta($post->ID, 'fw_fax_field', true);?></li>
						<?php } ?>
						<?php if (get_post_meta($post->ID, 'fw_email_label', true)) { ?>
						<li><span class="fa fa-envelope"></span> <span class="color"><?php echo get_post_meta($post->ID, 'fw_email_label', true);?>:</span> <a class="email-link" href="mailto:<?php echo get_post_meta($post->ID, 'fw_email_field', true);?>"><?php echo get_post_meta($post->ID, 'fw_email_field', true);?></a></li>
						<?php } ?>
					</ul>
					<?php if (get_post_meta($post->ID, 'fw_more_information', true)) { ?>
					<div id="more-contact-information">
						<?php echo wpautop(get_post_meta($post->ID, 'fw_more_information', true));?>
					</div>
					<?php } ?>
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
				<div class="span8" id="contact-info">
					<h3>
						<?php if (get_post_meta($post->ID, 'fw_contact_form_title', true)) {
						echo get_post_meta($post->ID, 'fw_contact_form_title', true);
						} ?>
					</h3>
					<?php echo apply_filters('the_content', get_post_meta($post->ID, 'fw_contact_form', true));?>
				</div>
			</div>
		</div>
	</section>