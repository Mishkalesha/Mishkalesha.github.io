<?php
if(!defined('ABSPATH')){
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Настройки сайта' )
  ->add_tab( 'Общие настройки', [
      Field::make( 'text', 'site_phone', 'Телефон сайта' ),
      Field::make( 'text', 'site_phone_digits', 'Телефон сайта без пробелов формата +380933333333' ),
      Field::make( 'text', 'site_adress', 'Адрес завода' ),
      Field::make( 'text', 'site_email', 'e-mail почта' ),
  ]);