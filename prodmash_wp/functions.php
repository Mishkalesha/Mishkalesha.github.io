<?php

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate


add_action( 'after_setup_theme', 'theme_support' );
function theme_support() {
	register_nav_menu( 'menu_main_header', 'Меню в шапке' );
  register_nav_menu( 'menu_main_ukr', 'Меню в шапке ukr' );
  register_nav_menu( 'menu_main_eng', 'Меню в шапке eng' );
  add_theme_support('post-thumbnails');
  add_image_size('product', 500, 313, true);
}

add_action('wp_enqueue_scripts', 'site_sripts');

function site_sripts(){
  wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(),'0.0.0.0' );
  wp_enqueue_style( 'all-style', get_template_directory_uri() . '/assets/css/all.min.css', array(),'0.0.0.0' );


  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/scripts.min.js', array(),'0.0.0.0',true );
  wp_enqueue_script( 'lazy-js', get_template_directory_uri() . '/assets/js/_lazy.js', array(),'0.0.0.0',true );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields','register_carbon_fields');

function register_carbon_fields(){
  require_once( 'includes/carbon-fields-options/theme-options.php' );
  require_once( 'includes/carbon-fields-options/post-meta.php' );
}

add_action('init','create_global_variable');

function create_global_variable(){
  global $prodmash;
  $prodmash =[
    'phone' => carbon_get_theme_option('site_phone'),
    'phone_digits' => carbon_get_theme_option('site_phone_digits'),
    'adress' => carbon_get_theme_option('site_adress'),
    'email' => carbon_get_theme_option('site_email'),
  ];
}

add_action( 'init', 'register_post_types' );
function register_post_types() {
  register_post_type('product', [
    'labels' => [
      'name'               => 'Продукция', // основное название для типа записи
      'singular_name'      => 'Продукция', // название для одной записи этого типа
      'add_new'            => 'Добавить продукцию', // для добавления новой записи
      'add_new_item'       => 'Добавление продукции', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование продукции', // для редактирования типа записи
      'new_item'           => 'Новая продукция', // текст новой записи
      'view_item'          => 'Смотреть продукцию', // для просмотра записи этого типа.
      'search_items'       => 'Искать продукцию', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'menu_name'          => 'Продукция', // название меню
    ],
    'menu_icon'          => 'dashicons-cart',
    'public'             => true,
    'menu_position'      => 5,
    'supports'           => ['title', 'editor', 'thumbnail'],
    'has_archive'        => true,
    'rewrite'            => ['slug' => 'products']
  ] );
  register_taxonomy('product-categories', 'product', [
    'labels'        => [
      'name'                        => 'Категории товаров',
      'singular_name'               => 'Категория товароа',
      'search_items'                =>  'Искать категории',
      'popular_items'               => 'Популярные категории',
      'all_items'                   => 'Все категории',
      'edit_item'                   => 'Изменить категорию',
      'update_item'                 => 'Обновить категорию',
      'add_new_item'                => 'Добавить новую категорию',
      'new_item_name'               => 'Новое название категории',
      'separate_items_with_commas'  => 'Отделить категории запятыми',
      'add_or_remove_items'         => 'Добавить или удалить категорию',
      'choose_from_most_used'       => 'Выбрать самую популярную категорию',
      'menu_name'                   => 'Категории',
    ],
    'hierarchical'  => true,
  ]);
}