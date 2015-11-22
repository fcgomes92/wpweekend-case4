<div class="slider_image">

  <?php
  foreach ( ($field['slider_fields']) as $option ) { ?>
      <?php
      $order = $option['order'];
      ?>

      <?php
      switch ( $option['type']) {


        case 'image':
          $image = wp_get_attachment_image_src($slider_image[$order], 'small')[0]; ?>
          <div class="slider_image__item">
            <input name="<?php echo $field['id'].'['.$i. ']['.$order.']'; ?>" id="<?php echo $option['id'].'['.$i. ']['.$order.']'; ?>" type="hidden" class="slider_field custom_upload_image" value="<?php echo $slider_image[$order] ?>" />
            <img src="<?php echo $image ?>" class="slider_image__preview custom_preview_image" alt="" />
            <input class="slider_image_item__upload custom_upload_image_button" type="button" value="Add Image" />
            <div class="slider_image_item__remove"><a href="#" class="custom_clear_image_button"><img src="<?php echo get_template_directory_uri(); ?>/admin/img/close-popup.png" / width="30" height="30"></a></div>
          </div>
          <?php break;

      } ?>
    <?php
  } ?>
  <a class="slider-remove button" href="#">Remove item</a>
</div>


<?php
?>