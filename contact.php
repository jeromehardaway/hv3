<?php
/*
Template Name:Contact Page
 */

 get_header();
 the_post();
global $polylang;
$curlang = $polylang->curlang->slug;
  ?>
<section id="title">
  <div class="row">
    <div class="large-12 columns">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
</section>

<!-- CONTENT SECTION  -->

<section id="content">
<div class="row">
  <div class="large-8 columns">
    <h2><?php the_field('form_heading'); ?></h2>
    <p><?php the_field('form_description'); ?></p>

    <section id="form">
  <?php the_content(); ?>

</section>
</div>
  <div class="large-4 columns">

<?php get_sidebar(); ?>

  </div>
</div>

<section id="accordion">
<div class="row">
  <div class="large-12 columns">
    <ul class="accordion" data-accordion>
    <li class="accordian is-active" data-accordion-item>
      <a href="#" class="accordion-title">Central Phoenix</a>

      <div class="accordion-content" data-tab-content>
        <div class="row">
<?php
$args = array(
 'posts_per_page' => -1,
 'orderby' => 'menu_order',
 'order' => 'ASC',
 'post_status' => 'publish',
 'post_type' => 'aall_locations',
 'meta_query' => array(
      array(
          'key'   => "areas_$curlang",
          'value' => 'Central Phoenix',
      )
  )
);
$inputs = get_posts($args);
foreach( $inputs as $input):
?>
    <div class="large-4 columns">
        <p class="address"><?php echo get_field("location_$curlang", $input->ID ); ?><br />
            <span><?php echo get_field("subtitle_$curlang", $input->ID ); ?></span></p>

        <p><?php echo get_field("address_line_one_$curlang", $input->ID ); ?><br />
            <?php echo get_field("address_line_two_$curlang", $input->ID ); ?></p>

        <p class="phone"><?php echo get_field("number_$curlang", $input->ID ); ?></p>
        <a class="rounded button green" href="<?php echo get_field("map_$curlang", $input->ID ); ?>">Map</a>
    </div>
    <?php endforeach ?>

  </div><!--  end row -->
    </div>
  </li>

    <li class="accordion-item" data-accordion-item>
    <a href="#" class="accordion-title">West Valley</a>
    <div class="accordion-content" data-tab-content>
   <div class="row">


     <?php
     $args = array(
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'post_status' => 'publish',
      'post_type' => 'aall_locations',
      'meta_query' => array(
           array(
               'key'   => "areas_$curlang",
               'value' => 'West Valley',
           )
       )
     );
     $inputs = get_posts($args);
     foreach( $inputs as $input):
     ?>
         <div class="large-4 columns">
             <p class="address"><?php echo get_field("location_$curlang", $input->ID ); ?><br />
                 <span><?php echo get_field("subtitle_$curlang", $input->ID ); ?></span></p>

             <p><?php echo get_field("address_line_one_$curlang", $input->ID ); ?><br />
                 <?php echo get_field("address_line_two_$curlang", $input->ID ); ?></p>

             <p class="phone"><?php echo get_field("number_$curlang", $input->ID ); ?></p>
             <a class="rounded button green" href="<?php echo get_field("map_$curlang", $input->ID ); ?>">Map</a>
         </div>
         <?php endforeach ?>

  </div> <!-- end row  -->
    </div>
  </li>

   <li class="accordion-item" data-accordion-item>
    <a href="#" class="accordion-title">East Valley</a>
    <div class="accordion-content" data-tab-content>
      <div class="row">
        <?php
        $args = array(
         'posts_per_page' => -1,
         'orderby' => 'menu_order',
         'order' => 'ASC',
         'post_status' => 'publish',
         'post_type' => 'aall_locations',
         'meta_query' => array(
              array(
                  'key'   => "areas_$curlang",
                  'value' => 'East Valley',
              )
          )
        );
        $inputs = get_posts($args);
        foreach( $inputs as $input):
        ?>
            <div class="large-4 columns">
                <p class="address"><?php echo get_field("location_$curlang", $input->ID ); ?><br />
                    <span><?php echo get_field("subtitle_$curlang", $input->ID ); ?></span></p>

                <p><?php echo get_field("address_line_one_$curlang", $input->ID ); ?><br />
                    <?php echo get_field("address_line_two_$curlang", $input->ID ); ?></p>

                <p class="phone"><?php echo get_field("number_$curlang", $input->ID ); ?></p>
                <a class="rounded button green" href="<?php echo get_field("map_$curlang", $input->ID ); ?>">Map</a>
            </div>
            <?php endforeach ?>
  </div>

    </div>
  </li>
  <!-- ... -->
</ul>

</div>
</div>
</section>
<?php get_footer(); ?>
