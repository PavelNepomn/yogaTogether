<?php
/**
* Template Name: Kyle Ray
*
* @package WordPress
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

<div class="container-fluid kaliraycont">
  <div class="row">
  <div class="owl-carousel owl-theme">
    
    <img src="http://yoga.website/wp-content/uploads/2021/09/kaliray.jpg" class="kalisliderimage">
    <img src="http://yoga.website/wp-content/uploads/2021/09/Kali-Ray_Tri-Yoga_Video_Interview_YogaMeHome_1280x853.jpg" class="kalisliderimage">
</div>
    <script>$('.owl-carousel').owlCarousel({
     width:'100%',
    loop:true,
    margin:10,
  
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})</script>

    
    <div class="col-md-12 hrkaliray">
    <hr class="kaliraytext">Калиджи (Кали Рэй) – мастер йоги, присутствие которого вдохновляет бесчисленное количество практикующих. Ее жизнь подает пример тем, кто хочет прожить жизнь в радости и сострадании. Многие изменились и трансформировались под ее влиянием. Калиджи с рождения была Рэй. В возрасте 22 лет она ощутила внутреннею необходимость другого имени. Оно появилось, когда она просто открыла нью айджевскую книгу имен. Открытым было «Кали». Имя «Кали» имеет значения на многих языках. На греческом оно означает «Бог», на тибетском – «река», на санскрите – «энергия», «энергия очищения»; и на некоторых других языках оно также означает «очищение». Позже, во время медитации пришло еще одно имя – Лакшми, хотя она никому об этом не говорила. Вскоре после этого уважаемый йогин в Индии (ее духовный учитель Свами Ганапати из Майсора) дал ей имя Лакшми Девиджи. Так комбинированным именем стало Кали Лакшми Девиджи, укороченное со временем до Калиджи.
Кали Рэй долгое время занималась только медитаций. И как-то раз во время медитации 5 января 1980 году произошло пробуждение Кундалини (Космичекской энергии). Она почувствовала как ее тело спонтанно стало выполнять красивые ровные движения. Через него начал течь поток йога-асан, пранаям и мудр, в то время как ум оставался в состоянии глубокой медитации. Этот опыт продолжается и сегодня. Несмотря на то, что она не занималась до этого Хатха йогой, то, что она делала, больше всего напоминало именно Хатха йогу. Но принцип выполнения асан был несколько иным. Поэтому она стала родоначальницей нового течения в Йоге, которому дала название Три Йога (TriYoga).
</h2>
    </div>
    </div>
  </div>

<?php the_content()?>
<?php get_footer()?>