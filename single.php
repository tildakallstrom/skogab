<?php get_header(); ?>

<div class="main3">
        <h1 class="h1h1">Senaste nytt</h1>
</div>
<div class="news1">    
<section class="news">
   <!-- hämta post och skriv ut -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2 class="newsh2">
 <?php the_title(); ?>
</h2>

 <?php the_content(); ?>
 <p class="date">Skapad: 
 <?php echo get_the_date(); ?>
</p>
 <a href="http://studenter.miun.se/~tika1900/writeable/wordpress/om-skog-ab/nyheter/" class="readmore2">Tillbaka till Nyheter</a><br><br>

 </section> 
</div>
<?php endwhile; ?>
<?php endif; ?>




<?php get_footer(); ?>