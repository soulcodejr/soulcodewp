<!DOCTYPE html>
<html>
<head>
  <?php $home = get_template_directory_uri(); ?>
  <meta charset="utf-8">
  <title>
  	<?php gera_title(); ?>

  </title>
  <?php wp_head();?>


  <link href="<?= $home; ?>/style.css" rel="stylesheet">
</head>
<body>

 <!--Start Header-->
        <section id="fixed-navbar">
			<nav class="navbar navbar-default navbar-sticky" role="navigation">
				<div class="container">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
					    </button>
                        <a class="navbar-brand" href="#"><img src="img/assets/logo.png" alt=""></a>
					</div>

                    <div class="collapse navbar-collapse" id="main-nav">
                        <ul class="nav navbar-nav  navbar-right rez-drop">
                            <li>
                            <?php
                              $args = array(
                                  'theme_location' => 'header-menu'
                              	);
                              wp_nav_menu($args);
                            ?></li>

                      </ul>
                    </div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</section>
        <!--End Header-->