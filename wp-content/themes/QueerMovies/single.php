<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<article class="post">

<!--    affiche l'image mise en avant dans l'article-->
<!--  <?php //the_post_thumbnail(); ?>  -->

    <h1><?php the_title(); ?></h1>

    <div class="post__content">
        <?php the_content(); ?>
    </div>
</article>
<?php endwhile; endif; ?>
<?php previous_post_link( 'Article Précédent<br>%link' ); ?>
<?php next_post_link( 'Article Suivant<br>%link' ); ?>
<?php get_footer(); ?>