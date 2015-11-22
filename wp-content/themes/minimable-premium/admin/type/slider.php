<?php
  // -------- VAR INITALIZATION --------- //

  $i = 0;                  //counter for the draggable content inside of the box

  echo '<div class="slider_container" id="fw_slider">';

  if ($meta) {
    foreach ($meta as $slider_image) {
      include ('slider-includes/slider-box.php');
      $i++;
    } ?>

    <?php
  }
  else {
    include ('slider-includes/slider-box.php'); ?>
  <?php
  }
  ?>

<div class="add_slider_image"><a class="add_slider_image__button" href="#"><span>+</span>Add item</a></div>
<?php
  echo '</div>';



?>

<!--<div class="final-countdown" style="margin-top: 30px;">
  <p>
  <span>your creation</span><br/>
  <span>your party</span><br/>
  <span>your way</span><br/>
  <span>head to our soho spring street store</span><br/>
  <span>from 3pm – 7pm</span><br/>
  <span>on october 17th</span><br/>
  <span></span><br/>
  <span>and</span><br/>
  <span></span><br/>
  <span>customize your own decoded tee</span><br/>
  <span>when you spend $98 or more*</span><br/>
  <span>do you want more?</span><br/>
  <span>raid the free bar</span><br/>
  <span>and bop to live music. *</span>

your creation
your party
your way
head to our soho spring street store
from 3pm – 7pm
on october 17th
and
customize your own decoded tee
when you spend $98 or more*
do you want more?
raid the free bar
and bop to live music. *


  </p>
</div>-->