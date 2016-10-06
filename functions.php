<?php
//SUPPORT
add_theme_support('post-thumbnails');

//VARIÁVEIS
$args = array(
  'public' => true
);



//functions
function client_register(){
  $nameSingular = 'Cliente';
  $namePlural = 'Clientes';
  $description = 'Clientes da Soul Code';

  $labels = array(
  	 'name' => $namePlural,
  	 'name_singular' => $nameSingular,
  	 'add_new_item' => 'Adicionar novo ' . $nameSingular,
  	 'edit_item' => 'Editar' . $nameSingular
   );

  $args = array(
  	'labels' => $labels,
  	'public' => true,
  	'description' => $description,
  	'menu_icon' => 'dashicons-businessman'

  );

  register_post_type('clientes', $args);
}

function registration_menu_navation(){
  register_nav_menu('header-menu','main-menu');
}

function gera_title(){
            bloginfo ('name');
            if( !is_home() ) echo ' | ';
            the_title();
}


//Call function
add_action('init', 'client_register' );
add_action('init', 'registration_menu_navation');

?>