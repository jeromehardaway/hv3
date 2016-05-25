<? the_post();
global $polylang;
$curlang = $polylang->curlang->slug;
?>
<section id="sidebar">
  <h3><?php the_field("our_services_$curlang", 'option'); ?></h3>
  <ul>
    <?php $args = array(
      'posts_per_page' => -1,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
      'post_type'      => 'aall_service'
    );
    $services = get_posts( $args );
    foreach ($services as $service): ?>
    <li><a href="#"><?php echo $service->post_title; ?></a></li>
    <?php endforeach; ?>
      </ul>

  <h3 class="corporate"><?php the_field("co_$curlang", 'option'); ?></h3>
    <p class="address"><?php the_field("address_line_one_$curlang", 'option'); ?><br />
        <?php the_field("address_line_two_$curlang", 'option'); ?></p>



    <p class="phone"><?php the_field("main_phone_$curlang", 'option'); ?><br />
        <?php the_field("fax_$curlang", 'option'); ?></p>

    <div class="email"><a href="#"><p><?php the_field("email_aall_$curlang", 'option'); ?></a></div>
      
</section>