<?php get_header(); ?>
    <div class="posts-container">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<article class="post">
    <h3><?php the_title(); ?></h3>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
</article>
<?php endwhile; endif; ?>
    </div>
<?php the_posts_pagination(); ?>
<?php get_footer(); ?>