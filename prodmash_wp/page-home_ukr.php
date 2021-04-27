<?php
/*
Template Name: головна
*/
?>
  <?php get_header()?>

  <?php
  $page_id = get_the_ID(); 
  ?>

  
  <header class="header header__index">
      <div class="header__outer">
        <div class="wrapper">
          <div class="header__inner">
            <div class="header__navigation">
              <div class="header__logo logo">
                <span class="header__logo_color">P</span>rodmash-<span class="header__logo_color">v</span>esele
                <p class="header__main_slogan">
                МИ ВМІЄМО ПОКОРИТИ СТАЛЬ
                  
                </p>
              </div>
              <nav class="header__menu">
              <?php
              wp_nav_menu( [
                'theme_location'  => 'menu_main_ukr',
                'container'       => null, 
                'menu_class' => 'header__list', 
                
              ] );
              ?>
                
              </nav>
              
              <div class="hamburger hamburger--slider">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
              </div>
            </div>
            <div class="header__main">
              <p class="header__main_slogans orange__before_line">
              <?php echo carbon_get_post_meta(  $page_id, 'top_title' )?>
              </p>
              <p class="header__main_info">
              <?php echo carbon_get_post_meta(  $page_id, 'top_description' )?>
              </p>
              <a href="products.html" class="header__main_more">Детальніше</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End header -->
 <!-- Production -->

 <main class="main" >
      <div class="main__outer">
        <div class="wrapper">
          <div class="main__inner">
            <div class="main__left_block">
              <h1 class="main__headline orange__before_line">
              <?php echo carbon_get_post_meta(  $page_id, 'description_title' )?>
              </h1>
              <p class="main__right_desc">
              <?php echo carbon_get_post_meta(  $page_id, 'description_text' )?>
              </p>
              <p class="main__right_info">
              <?php echo carbon_get_post_meta(  $page_id, 'description_text_second' )?>
              </p>
              
            </div>
            <div class="main__right_block">
              <div class="main__right_slick orange__outline orange__outline_up">
                <div class="main__right_img">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/@1x/1.jpg" alt="Prodmash" />
                </div>
                <div class="main__right_img">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/@1x/2.jpg" alt="Prodmash" />
                </div>
                <div class="main__right_img">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/@1x/3.jpg" alt="Prodmash" />
                </div>
                <div class="main__right_img">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/@1x/4.jpg" alt="Prodmash" />
                </div>
                <div class="main__right_img">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/@1x/5.jpg" alt="Prodmash" />
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- End Production -->
      <!-- progress -->
      <div class="progress">
        <div class="progress__outer">
          <div class="wrapper">
            <div class="progress__inner">
              <div class="progress__item">
                <span class="progress__count"><?php echo carbon_get_post_meta(  $page_id, 'achievements_years' )?></span>
                <p class="color-headline color-headline-orange"><?php echo carbon_get_post_meta(  $page_id, 'achievements_years_text' )?></p>
              </div>
              <div class="progress__item">
                <span class="progress__count"><?php echo carbon_get_post_meta(  $page_id, 'achievements_month' )?></span>
                <p class="color-headline color-headline-orange"><?php echo carbon_get_post_meta(  $page_id, 'achievements_month_text' )?></p>
              </div>
              
              <div class="progress__item">
                <span class="progress__count"><?php echo carbon_get_post_meta(  $page_id, 'achievements_spec' )?></span>
                <p class="color-headline color-headline-orange"><?php echo carbon_get_post_meta(  $page_id, 'achievements_spec_text' )?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- End progress -->

    <!--  advantages -->
    <div class="advantages">
      <div class="advantages__outer">
        <div class="wrapper">
          <div class="advantages__inner">
            <h2 class="orange__before_line"><?php echo carbon_get_post_meta(  $page_id, 'benefits' )?></h2>
            <div class="advantages__container">
              <div class="advantages__item">
                <i class="fas fa-project-diagram"></i>
                <p class="color-headline"><?php echo carbon_get_post_meta(  $page_id, 'benefits_one' )?></p>
              </div>
              <div class="advantages__item">
                <i class="fas fa-users"></i>
                <p class="color-headline"><?php echo carbon_get_post_meta(  $page_id, 'benefits_two' )?></p>
              </div>
              <div class="advantages__item">
                <i class="fas fa-hourglass-end"></i>
                <p class="color-headline"><?php echo carbon_get_post_meta(  $page_id, 'benefits_three' )?></p>
              </div>
              <div class="advantages__item">
                <i class="fas fa-water"></i>
                <p class="color-headline"><?php echo carbon_get_post_meta(  $page_id, 'benefits_four' )?></p>
              </div>
              <div class="advantages__item">
                <i class="fas fa-cogs"></i>
                <p class="color-headline"><?php echo carbon_get_post_meta(  $page_id, 'benefits_five' )?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End advantages -->
    <!-- footer -->
    <footer class="footer" id="contacts">
      <div class="footer__outer">
        <div class="wrapper">
          <div class="footer__inner">
            <h3 class="orange__before_line">Контакти</h3>
            <div class="footer__contacts">
              
              <div class="footer__phones">
                <div class="footer__location footer__item">
                  <i class="fas fa-map-marker-alt"></i>
                  <a href="https://goo.gl/maps/5ewQ1PzzAVbAGdeL6"><?php echo $GLOBALS['prodmash']['adress']?></a>
                </div>
                <div class="footer__phone footer__item">
                  <i class="fas fa-phone"></i>
                  <a href="tel:<?php echo $GLOBALS['prodmash']['phone_digits']?>" class="phone"><?php echo $GLOBALS['prodmash']['phone']?></a>
                </div>
                <div class="footer__mail footer__item">
                  <i class="far fa-envelope"></i>
                  <a href="mailto:<?php echo $GLOBALS['prodmash']['email']?>" class="mail"><?php echo $GLOBALS['prodmash']['email']?></a>
                </div>
              </div>
              <div class="footer__map orange__outline">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2719.6483785511696!2d34.9173645156106!3d47.02750657915056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c2d22c407445a7%3A0x1bb9b992abb7810e!2zQXQgIlByb2RtYXNoLVZlc2VsZSIsIDcyMjAyLCDQl9Cw0L_QvtGA0ZbQt9GM0LrQsCDQvtCx0LsuLCDQktC10YHQtdC70ZbQstGB0YzQutC40Lkg0YDQsNC50L7QvSwg0YHQvNGCLiDQktC10YHQtdC70LUsINCy0YPQuy4g0JzQuNGA0YMsINCx0YPQtC4gMjDQkCwg0KIwODE3LCAyMNCwLCDQktC10YHQtdC70LUsINCX0LDQv9C-0YDRltC30YzQutCwINC-0LHQu9Cw0YHRgtGMLCA3MjIwMA!5e0!3m2!1sru!2sua!4v1611930879063!5m2!1sru!2sua"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php get_footer()?>