<?php
/**
* Template Name: Blog
*
* @package Wordpress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<?php get_header()?>
<div class="textt">
      <div class="row">
        <div class="col-md-12">
          <div class="header">
            <h1 class="col-xl-3 col-md-4 headerText"><?php the_field('text_on_header')?>
</h1>
            <div class="btnblock">
           
         <?php $linkname=get_field('knopka_na_hedere')?>
              <a class="btn headerbtn" href="<?php echo $linkname['url']?>"><?php echo $linkname['title']?></a>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<div class="container mt-5">
    <div class="row">
        <h2 class="blogh1">Йога поток уровнь 2</h1>
        <div class="col-md-4">
       <img class="blogimg" src="wp-content\themes\Wordpress\yogajpg.jpg">
        </div>
        <div class="col-md-4">
       <img class="blogimg" src="wp-content\themes\Wordpress\yogajpg.jpg">
        </div>
        <div class="col-md-4">
       <img class="blogimg" src="wp-content\themes\Wordpress\yogajpg.jpg">
        </div>
</div>
<div class="button_wrapper_blog">
<a class="btn blogbtn" href="<?php the_field('link_potok') ?>">Записаться на курс</a>
</div>
<hr class="hrblog"><p class="pblog" style="   text-align: center;
    padding-left: 5%;
    padding-right: 5%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
<section class="blog">
        <div class="container">
          <div class="blog-head text-center">
            <h2>Image</h2>
            <h6>Overlay Slide</h6>
          </div>
          <div class="row">
          <div class="col-md-6">
              <div class="item animated wow fadeIn">
                  <img src="<?php get_template_directory_uri()?>\wp-content\themes\yoga\yogajpg.jpg" alt="">
                  <div class="imgoverlay bottom-overlay">
           
                  <div class="text">
                  <p>Тело человека функционирует в наиболее оптимальном режиме, когда оно находится в состоянии расслабления. Однако часто тело скованно, и причины этого могут быть разные: отсутствие...⠀</p>
                  </div>
                
                  <a class="btn blogbtn" href="http://yoga.website/product-category/разное/">Записаться на курс</a>
                    

  </div>
              </div>
          </div>
           
            <div class="col-md-6">
              <div class="item animated wow fadeIn">
                  <img src="<?php get_template_directory_uri()?>\wp-content\themes\yoga\yogajpg.jpg" alt="">
                  <div class="imgoverlay bottom-overlay">
    <div class="text">Тело человека функционирует в наиболее оптимальном режиме, когда оно находится в состоянии расслабления. Однако часто тело скованно, и причины этого могут быть разные: отсутствие...⠀</p>
 </div>
 <a class="btn blogbtn" href="http://yoga.website/product-category/разное/">Записаться на курс</a>
  </div>
              </div>
            </div>
           
            <div class="col-md-6">
              <div class="item animated wow fadeIn">
                  <img src="<?php get_template_directory_uri()?>\wp-content\themes\yoga\yogajpg.jpg" alt="">
                  <div class="imgoverlay bottom-overlay">
    <div class="text">Тело человека функционирует в наиболее оптимальном режиме, когда оно находится в состоянии расслабления. Однако часто тело скованно, и причины этого могут быть разные: отсутствие...⠀</p>
 </div>
 <a class="btn blogbtn" href="http://yoga.website/product-category/разное/">Записаться на курс</a>
  </div>
              </div>  
            </div>
           
            <div class="col-md-6">
              <div class="item animated wow fadeIn">
                  <img src="<?php get_template_directory_uri()?>\wp-content\themes\yoga\yogajpg.jpg" alt="">
                  <div class="imgoverlay bottom-overlay">
    <div class="text">Тело человека функционирует в наиболее оптимальном режиме, когда оно находится в состоянии расслабления. Однако часто тело скованно, и причины этого могут быть разные: отсутствие...⠀</p>
 </div>
 <a class="btn blogbtn" href="http://yoga.website/product-category/разное/">Записаться на курс</a>
  </div>
              </div>
            </div>
           
            <div class="col-md-6">
              <div class="item animated wow fadeIn">
                  <img src="<?php get_template_directory_uri()?>\wp-content\themes\yoga\yogajpg.jpg" alt="">
                  <div class="imgoverlay bottom-overlay">
    <div class="text">Тело человека функционирует в наиболее оптимальном режиме, когда оно находится в состоянии расслабления. Однако часто тело скованно, и причины этого могут быть разные: отсутствие...⠀</p>
 </div>
 <a class="btn blogbtn" href="http://yoga.website/product-category/разное/">Записаться на курс</a>
  </div>
              </div>
            </div>
          
            <div class="col-md-6">
              <div class="item animated wow fadeIn">
                  <img src="<?php get_template_directory_uri()?>\wp-content\themes\yoga\yogajpg.jpg" alt="">
                  <div class="imgoverlay bottom-overlay">
    <div class="text">Тело человека функционирует в наиболее оптимальном режиме, когда оно находится в состоянии расслабления. Однако часто тело скованно, и причины этого могут быть разные: отсутствие...⠀</p>
 </div>
 <a class="btn blogbtn" href="http://yoga.website/product-category/разное/">Записаться на курс</a>
  </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    





<?php the_content()?>
<?php get_footer()?>
