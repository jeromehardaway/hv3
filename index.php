<?php

get_header();
the_post();
global $polylang;
$curlang = $polylang->curlang->slug;

?>
<section id="title">
    <div class="row">
        <div class="large-12 columns">
            <h1><?php the_title(); ?></h2>
        </div>
    </div>
</section>

<!-- CONTENT SECTION  -->

<section id="content">
    <div class="row">
        <div class="large-8 columns">
            <?php the_content(); ?>


        </div> <!-- end 8-columns -->

        <div class="large-4 columns">
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
