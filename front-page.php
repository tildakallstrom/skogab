<?php get_header(); ?>
<?php /* koden nedan tömde sidan på innehåll
if(is_active_sidebar('widget')) : 
 dynamic_siderbar('widget');
endif; */


if (have_posts()) {

    the_post();
    the_content();
}

?>


<?php

query_posts('posts_per_page=3');
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <article class="newsarticle">
            <div>
                <h3 class="newsh3"> <?= the_title(); ?></h3>
                 <?= the_excerpt(); ?>
    </div>
                <div class="right">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } ?> </div><br>
                <a href="<?= the_permalink(); ?>" class="readmore">Läs mer...</a><br><br>
        </article>
<?php
    }
}
if (dynamic_sidebar('widget')) : endif;
?>




<?php get_footer(); ?>