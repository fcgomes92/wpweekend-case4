<?php
/**
 * Template Name: Main Template
 * 
 */?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php global $options;
	foreach ($options as $value) {
		if ((isset($value['id'])) && (isset($value['std']))) {
			if (FALSE === get_option( $value['id'])) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); }
		}
	}
?>

<?php if (get_post_meta($post->ID, 'fw_section_number', true)) {
	$pageNumber = get_post_meta($post->ID, 'fw_section_number', true);
} else {
	$pageNumber = $fw_page_number;
}?>
<?php 
if (get_post_meta($post->ID, 'fw_main_name', true)) {
	$myPage = get_post_meta($post->ID, 'fw_main_name', true);
} else {
	$myPage = 'page';
} ?>
<?php for($i=1;$i<=$pageNumber;$i++) { 
	$pagePosts = new WP_Query();
	$pagePosts->query('pagename='.$myPage.'-'.$i.'');
	while($pagePosts->have_posts()): $pagePosts->the_post();	
		$template_file = get_post_meta( get_the_ID(), '_wp_page_template', TRUE );
		if ($template_file=='templates/template-home.php') { 
		   include 'templates/template-home.php'; 
		}
		elseif ($template_file=='templates/template-staff.php') { 
		   include 'templates/template-staff.php'; 
		}
		elseif ($template_file=='templates/template-gallery.php') { 
		   include 'templates/template-gallery.php'; 
		}
		elseif ($template_file=='templates/template-portfolio.php') { 
		   include 'templates/template-portfolio.php'; 
		}
		elseif ($template_file=='templates/template-portfolio-thumb.php') { 
		   include 'templates/template-portfolio-thumb.php'; 
		}
		elseif ($template_file=='templates/template-contact.php') { 
		   include 'templates/template-contact.php'; 
		}		
		elseif ($template_file=='templates/template-fullwidth.php') { 
		   include 'templates/template-fullwidth.php'; 
		}
		elseif ($template_file=='templates/template-product.php') { 
		   include 'templates/template-product.php'; 
		}			 
	endwhile;?>
<?php  } ?>  
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>