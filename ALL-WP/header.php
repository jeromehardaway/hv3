
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AALL</title>
    <script src="https://use.typekit.net/osg0qde.js"></script>

    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>

 <?php wp_head(); ?>
  </head>
  <body>
<?php
global $polylang;
$curlang = $polylang->curlang->slug;
?>
<section id="menu">
<?php if( get_field("logo_$curlang", 'option') ): ?>
 <a class="logo float-left" href="<?php echo get_site_url(); ?>"><img src="<?php the_field("logo_$curlang", 'option'); ?>" alt="" /></a>
<?php endif; ?>
       <!-- MOBILE SPANISH BUBBLE  -->
  <div class="bubble show-for-small-only">
       <a href="#"><p class="spanish float-right">Se habla<br />
           <span>Español</span></p></a>
      </div>


  <div class="row">

<div class="large-11 green columns">
          <nav class="title-bar" data-responsive-toggle="top-bar-menu" data-hide-for="medium">
            <div class="title-bar-right">
            </div>

            <div class="title-bar-left">
              <button class="menu-icon" type="button" data-toggle></button>
            </div>
          </nav>

          <nav class="top-bar" id="top-bar-menu">
             <div class="row">
                 <div class="top-bar-right show-for-medium"></div>
                     <div class="top-bar-right">
                       <?php
                       wp_nav_menu(array(
                'menu'       => 'Main Menu',
                'container'  => '',
                'menu_class' => '',
                'walker'     => new AALL_Nav_Walker(),
                'items_wrap' => '<ul class="vertical medium-horizontal menu menu-items" data-responsive-menu="accordion medium-dropdown" data-click-open="false">%3$s</ul>'
              ));
              ?>


             </div>

           </div>
          </nav>



    <div class="bubble float-right hide-for-small-only">
       <a href="#"><p class="spanish">Se habla<br />
           <span>Espa&Ntilde;ol</span></p></a>
      </div>


</section>
