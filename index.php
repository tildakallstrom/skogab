<?php get_header(); ?>
<div class="main3">
        <h1 class="h1h1">Senaste nytt</h1>
</div>

<?php
query_posts('posts_per_page=50');
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
?>


  

</section> 


<?php get_footer(); ?>