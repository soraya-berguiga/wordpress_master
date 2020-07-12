<?php

// BOOTSRAP JQUERY POPPER EN FONCTION A LA PLACE DU HEADER

function soraya_register_assets () {
  wp_register_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css", []);
  wp_register_script(' bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css",['popper', 'jquery'], false, true);

  wp_register_script('popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", [], false, true);

  wp_deregister_script('jquery');
  wp_register_script('jquery', "https://code.jquery.com/jquery-3.5.1.slim.min.js", [], false,true);

  wp_enqueue_style('bootstrap');
  wp_enqueue_script('bootstrap');

}


// MENU DE NAVIGATION


function soraya_setup() {

  register_nav_menus(
    array(

      'primary' => 'Menu principal',
      'secondary' => 'Menu secondaire',
      'footer' => 'Menu de pied de page',
      'social' => 'Menu des réseaux sociaux'
    )
  );

// LOGO
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');

}

// WIDGETS

add_action('after_setup_theme', 'soraya_setup');

function soraya_init_widgets() {
  register_sidebar(
    array(
      'id'  => 'widgets-section-1',
      'name'  => 'Zone de widgets 1',
      'description' => 'Description de la zone de widgets',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title widgettitle">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-2',
      'name'  => 'Zone de widgets 2',
      'description' => 'Description de la zone de widgets',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title widgettitle">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-3',
      'name'  => 'Zone de widgets 3',
      'description' => 'Description de la zone de widgets',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title widgettitle">',
      'after_title' => '</h4>'
    )
  );


  register_sidebar(
    array(
      'id'  => 'widgets-section-4',
      'name'  => 'Zone de widgets 4',
      'description' => 'Description de la zone de widgets',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title widgettitle">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-sidebar',
      'name'  => 'Zone de widgets de la barre latérale',
      'description' => 'Description de la zone de widgets',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title widgettitle">',
      'after_title' => '</h4>'
    )
  );
}


add_action('widgets_init', 'soraya_init_widgets');


require get_template_directory() . '/inc/customizer.php';

 ?>
