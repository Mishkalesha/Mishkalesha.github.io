<div class="footer__copyright">
        <div class="wrapper">
          <div class="footer__copyright_inner">
            <a href="#">2021 Fabricator. All Rights Reserved.</a>
          </div>
        </div>
        
      </div>
    </footer>
    <!-- End footer -->
    <!--go up btn-->
    <a href="#up" class="btn_up">
      <i class="fas fa-angle-double-up"></i>
    </a>
    <!--END go up btn-->
    <!--mobile menu-->
    <div class="overlay">
      <ul class="mobile-list">
      <?php
      wp_nav_menu( [
        'theme_location'  => 'menu_main_header',
        'container'       => null, 
        
      ] );?>
          <li class="mobile__lenguage">
          <div class="top__panel_ukr">
            <a href="http://prodmash/ukr/">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/@1x/ukraine.svg" alt="Prodmash" />
            </a>
          </div>
          <div class="top__panel_rus">
            <a href="http://prodmash">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/@1x/russia.svg" alt="Prodmash" />
            </a>
          </div>
          <div class="top__panel_usa">
            <a href="http://prodmash/homeeng/">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/@1x/united-states.svg" alt="Prodmash" />
            </a>
          </div>
        </li>
      </ul>
    </div>
    <!--mobile menu-->
    
  <?php wp_footer()?>
  </body>
</html>
