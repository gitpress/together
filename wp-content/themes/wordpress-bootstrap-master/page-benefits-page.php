<?php
/*
Template Name: Benefits footer
*/
?>
<div class="container centered" id="">
  <div class="row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('frontpage1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('frontpage2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('frontpage3') ) : ?>
		            <?php endif; ?>
  </div>
</div>


  <div class="row" id="benefits">
    <div class="container centered">
      <div class="backblock">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('benefits1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('benefits2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('benefits3') ) : ?>
		            <?php endif; ?>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('benefits4') ) : ?>
		            <?php endif; ?>

      </div>
    </div>
  </div>