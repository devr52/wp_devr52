<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DEVR52
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="http://gmpg.org/xfn/11">


      <title>DEVR52 - Porfolio</title>

      <!-- Custom Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

      <?php wp_head(); ?>
   </head>

   <body id="page-top"<?php body_class('index'); ?>>
      <div id="page" class="site">
         <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'devr52' ); ?></a>


         <!-- Navigation -->
         <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                     <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand page-scroll" href="#page-top">DEVR52</a>
               </div>

               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--

                  <ul class="nav navbar-nav navbar-right">
                     <li class="hidden">
                        <a href="#page-top"></a>
                     </li>

                  </ul>
-->

                  <?php
                  wp_nav_menu( [
                     'theme_location' => 'primary',
                     'container'      => false,
                     'menu_class'     => 'nav navbar-nav navbar-right',
                     'walker'         => new Walker_Nav_Primary()
                     ] );
                  ?>
               </div>
               <!-- /.navbar-collapse
            </div>
            <!-- /.container-fluid -->
         </nav>


         <header>
            <div class="container">
               <div class="intro-text">
                  <div class="intro-lead-in">Hello World! I am</div>
                  <div class="intro-heading">Edmon Villanueva</div>
                  <!-- <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a> -->
                  <p class="logo-tagline">&zigrarr; TRUST ME I GOT THIS. &#9924;</p>
               </div>
               <div class="header-photo">
                  <figure>
                     <img src="<?= get_template_directory_uri(); ?>/img/about/pic.png" class="photo" alt="portfolio picture">
                  </figure>
               </div>
            </div><!-- .site-branding -->
         </header><!-- #masthead -->
