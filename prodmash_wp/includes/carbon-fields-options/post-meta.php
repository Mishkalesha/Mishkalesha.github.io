<?php
if(!defined('ABSPATH')){
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Дополнительные поля')
	->show_on_page(7)
	->add_tab('Первый экран',[
		Field::make('text', 'top_title','Заголовок первого экрана'),
		Field::make('text', 'top_description','Описание под заголовком первого экрана'),
  ])

  ->add_tab('Направление деятельности',[
		Field::make('text', 'description_title','Заголовок Направления'),
		Field::make('textarea', 'description_text','текст Направления'),
		Field::make('rich_text', 'description_text_second','текст Направления'),
  ])

  ->add_tab('Счетчики достижений',[
		Field::make('text', 'achievements_years','Лет успешной работы')
    ->set_width( 50 ),
    Field::make('text', 'achievements_years_text','Лет успешной работы - текст')
    ->set_width( 50 ),
		Field::make('text', 'achievements_month','Месяцев гарантии')
    ->set_width( 50 ),
    Field::make('text', 'achievements_month_text','месяцев гарантии - текст')
    ->set_width( 50 ),
		Field::make('text', 'achievements_spec','Квалифицированых специалистов')
    ->set_width( 50 ),
    Field::make('text', 'achievements_spec_text','Квалифицированных специалистов - текст')
    ->set_width( 50 ),
		
  ])

  ->add_tab('Наши достижения',[
		Field::make('text', 'benefits','Заголовок наших достижений'),
		Field::make('text', 'benefits_one','Текст для первого блока'),
		Field::make('text', 'benefits_two','Текст для второго блока'),
		Field::make('text', 'benefits_three','Текст для третьего  блока'),
		Field::make('text', 'benefits_four','Текст для четвертого блока'),
		Field::make('text', 'benefits_five','Текст для пятого блока'),
  ]);

  Container::make('post_meta', 'Дополнительные поля')
	->show_on_page(16)
	->add_tab('Первый экран',[
		Field::make('text', 'hystory_title','Заголовок страници истории'),
		Field::make('text', 'hystory_subtitle','Описание под заголовком страници истории'),
    Field::make('rich_text', 'hystory_main_text','текст исторической справки'),
  ]);

  Container::make('post_meta', 'Дополнительные поля')
	->show_on_page(37)
	->add_tab('Продукция',[
    Field::make( 'association', 'catalog_products', 'Продукция' )
    ->set_types( [        
      [
            'type'      => 'post',
            'post_type' => 'product',
      ]
    ] )
  ]);


  //ukr lenguage

  Container::make('post_meta', 'Дополнительные поля')
	->show_on_page(59)
	->add_tab('Первый экран',[
		Field::make('text', 'top_title','Заголовок первого экрана'),
		Field::make('text', 'top_description','Описание под заголовком первого экрана'),
  ])

  ->add_tab('Направление деятельности',[
		Field::make('text', 'description_title','Заголовок Направления'),
		Field::make('textarea', 'description_text','текст Направления'),
		Field::make('rich_text', 'description_text_second','текст Направления'),
  ])

  ->add_tab('Счетчики достижений',[
		Field::make('text', 'achievements_years','Лет успешной работы')
    ->set_width( 50 ),
    Field::make('text', 'achievements_years_text','Лет успешной работы - текст')
    ->set_width( 50 ),
		Field::make('text', 'achievements_month','Месяцев гарантии')
    ->set_width( 50 ),
    Field::make('text', 'achievements_month_text','месяцев гарантии - текст')
    ->set_width( 50 ),
		Field::make('text', 'achievements_spec','Квалифицированых специалистов')
    ->set_width( 50 ),
    Field::make('text', 'achievements_spec_text','Квалифицированных специалистов - текст')
    ->set_width( 50 ),
		
  ])

  ->add_tab('Наши достижения',[
		Field::make('text', 'benefits','Заголовок наших достижений'),
		Field::make('text', 'benefits_one','Текст для первого блока'),
		Field::make('text', 'benefits_two','Текст для второго блока'),
		Field::make('text', 'benefits_three','Текст для третьего  блока'),
		Field::make('text', 'benefits_four','Текст для четвертого блока'),
		Field::make('text', 'benefits_five','Текст для пятого блока'),
  ]);

  Container::make('post_meta', 'Дополнительные поля')
	->show_on_page(61)
	->add_tab('Продукция',[
    Field::make( 'association', 'catalog_products', 'Продукция' )
    ->set_types( [        
      [
            'type'      => 'post',
            'post_type' => 'product',
      ]
    ] )
  ]);

  //hystory ukr
  Container::make('post_meta', 'Дополнительные поля')
	->show_on_page(76)
	->add_tab('Первый экран',[
		Field::make('text', 'hystory_title','Заголовок страници истории'),
		Field::make('text', 'hystory_subtitle','Описание под заголовком страници истории'),
    Field::make('rich_text', 'hystory_main_text','текст исторической справки'),
  ]);

  //eng home

  Container::make('post_meta', 'Дополнительные поля')
	->show_on_page(83)
	->add_tab('Первый экран',[
		Field::make('text', 'top_title','Заголовок первого экрана'),
		Field::make('text', 'top_description','Описание под заголовком первого экрана'),
  ])

  ->add_tab('Направление деятельности',[
		Field::make('text', 'description_title','Заголовок Направления'),
		Field::make('textarea', 'description_text','текст Направления'),
		Field::make('rich_text', 'description_text_second','текст Направления'),
  ])

  ->add_tab('Счетчики достижений',[
		Field::make('text', 'achievements_years','Лет успешной работы')
    ->set_width( 50 ),
    Field::make('text', 'achievements_years_text','Лет успешной работы - текст')
    ->set_width( 50 ),
		Field::make('text', 'achievements_month','Месяцев гарантии')
    ->set_width( 50 ),
    Field::make('text', 'achievements_month_text','месяцев гарантии - текст')
    ->set_width( 50 ),
		Field::make('text', 'achievements_spec','Квалифицированых специалистов')
    ->set_width( 50 ),
    Field::make('text', 'achievements_spec_text','Квалифицированных специалистов - текст')
    ->set_width( 50 ),
		
  ])

  ->add_tab('Наши достижения',[
		Field::make('text', 'benefits','Заголовок наших достижений'),
		Field::make('text', 'benefits_one','Текст для первого блока'),
		Field::make('text', 'benefits_two','Текст для второго блока'),
		Field::make('text', 'benefits_three','Текст для третьего  блока'),
		Field::make('text', 'benefits_four','Текст для четвертого блока'),
		Field::make('text', 'benefits_five','Текст для пятого блока'),
  ]);

  Container::make('post_meta', 'Дополнительные поля')
	->show_on_page(61)
	->add_tab('Продукция',[
    Field::make( 'association', 'catalog_products', 'Продукция' )
    ->set_types( [        
      [
            'type'      => 'post',
            'post_type' => 'product',
      ]
    ] )
  ]);

  //hystory eng
  Container::make('post_meta', 'Дополнительные поля')
	->show_on_page(87)
	->add_tab('Первый экран',[
		Field::make('text', 'hystory_title','Заголовок страници истории'),
		Field::make('text', 'hystory_subtitle','Описание под заголовком страници истории'),
    Field::make('rich_text', 'hystory_main_text','текст исторической справки'),
  ]);

  //products eng

  Container::make('post_meta', 'Дополнительные поля')
	->show_on_page(85)
	->add_tab('Продукция',[
    Field::make( 'association', 'catalog_products', 'Продукция' )
    ->set_types( [        
      [
            'type'      => 'post',
            'post_type' => 'product',
      ]
    ] )
  ]);