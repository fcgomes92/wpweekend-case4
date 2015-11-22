<?php global $options;
	foreach ($options as $value) {
		if ((isset($value['id'])) && (isset($value['std']))) {
			if (FALSE === get_option( $value['id'])) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); }
		}
	}
?>
<footer class="light">
	<div class="container">
		<?php wp_reset_query();
			if (is_front_page()) {?>
			<?php echo stripslashes($fw_footer_text) ?>
		<?php } else {?>
			<div class="row">
				<?php $template_file = get_post_meta( get_the_ID(), '_wp_page_template', TRUE ); ?>
				<?php if (!$template_file=='templates/template-page-fullwidth.php') { ?>
					<?php dynamic_sidebar('footer-widget'); ?>
				<?php } ?>
			</div>
			<?php echo stripslashes($fw_footer_text) ?>
		<?php } ?>
	</div>
</footer>
<?php echo stripslashes($fw_ga_code) ?>