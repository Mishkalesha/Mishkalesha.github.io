<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />

    <title>ПРОДМАШ</title>
    <meta name="description" content="Продмаш" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head()?>
  </head>

  <body id="up">
    <!-- header -->
    <div class="top__panel" >
      <div class="wrapper">
        <div class="top__panel_inner">
          <div class="top__panel_contact">
            <div class="panel__location panel__item">
              <i class="fas fa-map-marker-alt"></i>
              <a href="https://goo.gl/maps/5ewQ1PzzAVbAGdeL6"><?php echo $GLOBALS['prodmash']['adress']?></a>
            </div>
            <div class="panel__phone panel__item">
              <i class="fas fa-phone"></i>
              <a href="tel:<?php echo $GLOBALS['prodmash']['phone_digits']?>" class="phone"><?php echo $GLOBALS['prodmash']['phone']?></a>
              
            </div>
            <div class="panel__mail panel__item">
              <i class="far fa-envelope"></i>
              <a href="mailto:<?php echo $GLOBALS['prodmash']['email']?>" class="mail"><?php echo $GLOBALS['prodmash']['email']?></a>
            </div>
          </div>
          <div class="top__panel_language">
            <div class="top__panel_ukr">
              <a href="http://prodmash/ukr/">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/@1x/ukraine.svg" alt="Prodmash">
              </a>
            </div>
            <div class="top__panel_rus">
              <a href="http://prodmash">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/@1x/russia.svg" alt="Prodmash">
              </a>
            </div>
            <div class="top__panel_usa">
              <a href="http://prodmash/homeeng/">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/@1x/united-states.svg" alt="Prodmash">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    