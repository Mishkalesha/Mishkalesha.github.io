<?php
/*
Template Name: Продукція
*/
?>
  <?php get_header()?>
  <?php
  $page_id = get_the_ID();
 
  ?>



  <header class="products">
      <div class="products__outer">
        <div class="wrapper">
          <div class="products__inner">
            <div class="products__navigation">
              <div class="products__logo logo">
                <span class="header__logo_color">P</span>rodmash-<span
                  class="header__logo_color"
                  >v</span
                >esele
                <p class="header__main_slogan">МИ ВМІЄМО ПОКОРИТИ СТАЛЬ</p>
              </div>
              <nav class="products__menu">
              <?php
              wp_nav_menu( [
                'theme_location'  => 'menu_main_ukr',
                'container'       => null, 
                'menu_class' => 'header__list', 
                
              ] );
              ?>
              </nav>
              <div class="hamburger hamburger--slider burger__color_black">
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
    <!--products-->
    <main class="products__info">
      <div class="wrapper">
        <div class="products__info_inner">
          <h1>Наші продукти</h1>
          <?php
            $catalog_products = carbon_get_post_meta( $page_id, 'catalog_products' );
      $catalog_products_ids = wp_list_pluck($catalog_products, 'id');
      
      $catalog_products_args = [
        'post_type' => 'product',
        'post__in' => $catalog_products_ids
      ];
      $catalog_products_query = new WP_Query( $catalog_products_args );
      print_r($catalog_products_args);
    ?>
    <?php if ( $catalog_products_query->have_posts() ) : ?>
    <div class="products__info_container">

    <?php while ( $catalog_products_query->have_posts() ) : $catalog_products_query->the_post(); ?>
      <div class="products__info_item" >
        <?php echo get_template_part('product-content'); ?>
      </div>
    <?php endwhile; ?>

    <?php endif; ?>

  </div><!-- /.catalog -->
          
        </div>
      </div>
    </main>
    <!--end products-->
    <!--mobile menu-->
    <div class="mobile">
      <div class="wrapper">
        <div class="mobile__inner">
          <div class="header__logo logo">
            <span class="header__logo_color">P</span>rodmash
          </div>
          <div class="mobile__menu">
            <div class="hamburger hamburger--boring">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--mobile menu-->
    <a href="#up" class="btn_up">
      <i class="fas fa-angle-double-up"></i>
    </a>
    <!--END go up btn-->
  <?php get_footer()?>
