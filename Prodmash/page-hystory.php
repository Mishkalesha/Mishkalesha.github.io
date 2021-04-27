<?php
/*
Template Name: История
*/
?>
<?php get_header()?>

<?php
  $page_id = get_the_ID(); 
  ?>

<header class="header header__hystory">
      <div class="header__outer">
        <div class="wrapper">
          <div class="header__inner header__inner_padding">
            <div class="header__navigation">
              <div class="header__logo logo">
                <span class="header__logo_color">P</span>rodmash-<span
                  class="header__logo_color"
                  >v</span
                >esele
                <p class="header__main_slogan">МЫ УМЕЕМ ПОКОРИТЬ СТАЛЬ</p>
              </div>
              <nav class="header__menu">
              <?php
              wp_nav_menu( [
                'theme_location'  => 'menu_main_header',
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
          </div>
        </div>
      </div>
    </header>
    <!-- End header -->

    <main class="hystory">
      <div class="wrapper">
        <div class="hystory__inner">
          <div class="hystory__headline">
            <h1 class="orange__before_line"><?php echo carbon_get_post_meta(  $page_id, 'hystory_title' )?></h1>
            <span><?php echo carbon_get_post_meta(  $page_id, 'hystory_subtitle' )?></span>
          </div>
          <div class="hystory__main_info">
          <?php echo carbon_get_post_meta(  $page_id, 'hystory_main_text' )?>
          </div>
        </div>
      </div>
    </main>
<?php get_footer()?>