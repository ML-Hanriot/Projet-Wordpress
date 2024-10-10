<?php get_header(); ?>
<h1>Derniers films et séries ajoutés</h1>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<article class="post">
<h2><?php the_title(); ?></h2>
<?php the_post_thumbnail('medium'); ?>

    <?php the_excerpt(); ?>
<p>

<a href="<?php the_permalink(); ?>" class="post__link">Voir la suite</a>
</p>
</article>
<?php endwhile; endif; ?>
<?php the_posts_pagination(); ?>
<?php get_footer(); ?>