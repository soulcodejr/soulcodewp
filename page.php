<?php get_header(); ?>

<div class="content">

<?php
  if(is_page('home') ){
    
    require_once 'pages/home.php';

  }else if(is_page('contato')){

    require_once 'pages/contact.php';
  
  }else {
    if ( have_posts() ){
      while( have_posts() ){
        the_post();
        the_title();
        the_content();
  }
}

}
?>

</div>

<?php get_footer(); ?>