<?php get_header()?>
<div class="textt">
      <div class="row">
        <div class="col-md-12">
          <div class="header">
            <h1 class="col-xl-3 col-md-4 headerText bigtext"><?php the_title()?>
</h1>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
    <?php
    if(function_exists('wp_recall')) wp_recall();
?>
      <?php the_content()?>
    </div>
  </div>
</div>
<?php echo do_shortcode( '[contact-form-7 id="27" title="Контактная форма"]' )?>
<div id="result_form"></div>
<?php get_footer()?>