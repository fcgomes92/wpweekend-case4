<?php
$product_fields = array(
  array(
    'label'=> 'Width Product content',
    'desc'  => 'Set the best width for your product content (default 800px)',
    'id'    => $prefix.'width_product_content',
    'type'  => 'select-size',
    'std' => '800'
  ),
  array(
    'label'  => 'Image',
    'desc'  => 'Upload the image of your product. You can take the one you upload on the woocommerce product page.',
    'id'    => $prefix.'image',
    'type'  => 'image'
  ),
  array(
    'label'  => 'Image Position',
    'desc'  => 'If you want to place the image on the right and text on the left check the field',
    'id'    => $prefix.'image_right',
    'type'  => 'checkbox'
  ),
);