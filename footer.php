<!-- FOOTER  -->
<?php

global $polylang;
$curlang = $polylang->curlang->slug;

?>
<section id="footer">
  <div class="row">
    <div class="large-2 medium-3 columns">
      <h4><?php the_field("footer_menu_title_$curlang", 'option'); ?></h4>
      <?php
      wp_nav_menu( array(
          'menu' => 'Footer Menu',
          'menu_class' => ''
      ) );
      ?>
    </div>

  <div class="large-4 medium-4 large-push-2 columns">
      <h4><?php the_field("contact_title_$curlang", 'option'); ?></h4>
      
     <div class="phone"><p><strong><?php the_field("main_phone_$curlang", 'option'); ?></strong><br />
         <?php the_field("hours_$curlang", 'option'); ?><br />
         <span><?php the_field("wknd_hours_$curlang", 'option'); ?></span></p>
     </div>

    <div class="location">
        <p><?php the_field("address_line_one_$curlang", 'option'); ?><br />
          <?php the_field("address_line_two_$curlang", 'option'); ?> <br />
      <span><?php the_field("toll_free_phone_$curlang", 'option'); ?></span></p>

    </div>
  </div>

     <div class="large-4 medium-4 columns">
      <h4><?php the_field("fao_title_$curlang", 'option'); ?></h4>
            <div class="google-maps">
            <?php
            $location = get_field("map_$curlang", 'option');
            if( !empty($location) ):
            ?>
            <div class="acf-map">
              <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            </div>
            <?php endif; ?>
      </div>
    </div>
  </div>
</section>

  <section id="subfooter">
    <p><?php the_field("copyright_$curlang", 'option'); ?></p>
  </section>

<?php wp_footer(); ?>
  </body>
</html>
