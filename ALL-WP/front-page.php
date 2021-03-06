<?php

get_header();
the_post();
global $polylang;
$curlang = $polylang->curlang->slug;
?>
<section id="showcase">
    <div class="row">
        <div class="large-5 hide-for-medium-only columns">
            <img class="logo" src="<?php the_field("top_image_$curlang"); ?>" alt="" />
        </div>
        <div class="large-7 medium-12 text-center columns">

            <h1><?php the_field("top_header_$curlang"); ?></h1>
            <div class="right-side">
                <p><?php the_field("top_sub_header_$curlang"); ?></p>

                <a class="button rounded" href="#"><?php the_field("top_button_text_$curlang"); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- END SHOWCASE  -->

<!-- TABBED SECTION  -->

<section id="tabs">
    <div class="row">
        <div class="large-12 columns">
            <ul class="tabs" data-tabs id="example-tabs">
                <?php
                if( have_rows("service_tab_$curlang")):
                    $is_first = true;
                    while ( have_rows("service_tab_$curlang") ) : the_row();
                        $link = get_sub_field("button_link_$curlang");
                        $tab_title = get_sub_field("tab_title_$curlang");
                        $tab_link = get_sub_field("tab_link_$curlang");
                        $li_class = "tabs-title";
                        $selected = '';
                        if($is_first == true) {
                            $li_class .= " first is-active";
                            $selected = 'aria-selected="true"';
                            $is_first = false;
                        }
                        ?>
                        <li class="<?php echo $li_class;?>"><a href="<?php echo $tab_link; ?>" <?php echo $selected; ?> ><?php echo $tab_title; ?></a></li>
                        <?php
                    endwhile;
                endif;
                ?>


                <!-- <li class="tabs-title"><a href="#panel6">Tab 6</a></li> -->
            </ul>
</section>

<div class="tabs-content" data-tabs-content="example-tabs">
    <?php
    if( have_rows("service_tab_$curlang")):
        $is_first = true;
        while ( have_rows("service_tab_$curlang") ) : the_row();
            $title = get_sub_field("title_$curlang");
            $content = get_sub_field("content_$curlang");
            $image = get_sub_field("image_$curlang");
            $text = get_sub_field("button_text_$curlang");
            $link = get_sub_field("button_link_$curlang");
            $tab_id = get_sub_field("tab_id_$curlang");
            $li_class = "tabs-panel";
            if($is_first == true) {
                $li_class .= " is-active";
                $is_first = false;
            }
            ?>
            <div class="<?php echo $li_class; ?>" id="<?php echo $tab_id; ?>">
                <div class="row">
                    <div class="large-6 columns">
                        <h2><?php echo $title; ?></h2>
                        <p><?php echo $content; ?></p>
                        <a class="button rounded" href="<?php echo $link; ?>"><?php echo $text; ?> »</a>
                    </div>
                    <div class="large-6 columns">
                        <img src="<?php echo $image; ?>" />
                    </div>
                </div>
            </div>
            <?php
        endwhile;
    endif;
    ?>
</div> <!--  end tabs-content  -->
</div> <!-- end columns    -->
</div> <!-- end row -->
</section> <!-- end tabbed section -->

<section id="welcome">
    <div class="row">
        <div class="large-12 columns">
            <?php the_content(); ?>
        </div>
</section>

<!-- ICONS SECTION  -->
<section id="icons">
    <div class="row">
        <?php
        if( have_rows("resource_links_$curlang")):
            while ( have_rows("resource_links_$curlang") ) : the_row();
                $image = get_sub_field("image_$curlang");
                $text = get_sub_field("button_text_$curlang");
                $link = get_sub_field("button_link_$curlang");
                ?>
                <div class="large-4 columns">
                    <section class="icon">
                        <img src="<?php echo $image; ?>" alt="" />
                        <a href="<?php echo $link; ?>" class="button rounded "><?php echo $text; ?></a>
​
                    </section>
                </div>
                <?php
            endwhile;
        endif;
        ?>


    </div>
</section>

<?php get_footer(); ?>