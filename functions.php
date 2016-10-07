<?php
//SUPPORT
add_theme_support('post-thumbnails');

//VARIÁVEIS


//functions
function client_register(){
  $nameSingular = 'Cliente';
  $namePlural = 'Clientes';
  $description = 'Clientes da Soul Code';

  $labels = array(
  	 'name' => $namePlural,
  	 'name_singular' => $nameSingular,
  	 'add_new_item' => 'Adicionar novo ' . $nameSingular,
  	 'edit_item' => 'Editar ' . $nameSingular
   );

  $args = array(
  	'labels' => $labels,
  	'public' => true,
  	'description' => $description,
  	'menu_icon' => 'dashicons-businessman'

  );

  register_post_type('clientes', $args);
}

function blog_register(){
  $nameSingular = 'Blog';
  $namePlural   = 'Blogs';
  $description  = 'Blog da Soul Code';

  $labels = array(
    'name' => $namePlural,
    'name_singular' => $nameSingular,
    'add_new_item' => 'Adicionar novo ' . $nameSingular,
    'edit_item' => 'Editar ' . $nameSingular

    );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-businessman'
    );

  register_post_type('blogs', $args);

}

function registration_menu_navation(){
  register_nav_menu('header-menu','main-menu');
}

function wp_nav_menu_remove_attributes( $menu ){
    return $menu = preg_replace('/ id=\"(.*)\" class=\"(.*)\"/iU', '', $menu );
}

function gera_title(){
            bloginfo ('name');
            if( !is_home() ) echo ' | ';
            the_title();
}

function theme_prefix_setup(){

  $args = array(
    'height' => 38,
    'width'  => 170,
    'flex-width' => true
     );

  add_theme_support('custom-logo', $args);
}



//END FUNCTIONS

//Call function
add_action('init', 'client_register' );
add_action('init', 'blog_register');
add_action('init', 'registration_menu_navation');
add_action('after_setup_theme', 'theme_prefix_setup');
add_filter( 'wp_nav_menu', 'wp_nav_menu_remove_attributes' );

?>