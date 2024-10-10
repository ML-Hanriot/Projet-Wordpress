<!--remplace index.php-->
<?php get_header(); ?>
<!--<h1>--><?php //the_title(); ?><!--</h1>-->

<main id="primary" class="site-main">
    <?php the_content(); ?>
    <?php $AccueilcinemaQuery = new WP_Query([
        'post_type' => 'post', // Nous recherchons des articles ...
        'tax_query' => array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => 'films',
            ),
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => 'series',
            ),
        ), // Faisant partie de la catégorie "film et serie" ...
        'tag' => '', // Possibilité d'affiner le filtrage par les tags ...
        'orderby' => 'date', // Nous les classons par date de publication ...
        'order' => 'DESC', // Classement antéchronologique ...
        'posts_per_page'=> 16 // On limite à 16 résultats ...
    ]);
    ?>
    <h2>Derniers films et/ou séries ajoutés</h2>
<!--    pour mettre les articles en flex-->
    <div class="posts-container">
    <?php if ($AccueilcinemaQuery->have_posts()) {
while ($AccueilcinemaQuery->have_posts()) {
$AccueilcinemaQuery->the_post();
?>
<div class="post">
    <div class="post-content">
        <h2>
                <?php
                if (has_category('series')) {
                    echo the_title() . ' (série)';
                } elseif (has_category('films')) {
                    echo the_title() . ' (film)';
                }
                ?>
        </h2>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
<!--        <p>--><?php //the_excerpt(); ?><!--</p>-->
    </div>
</div>
<?php
}
/* Restaurer les données d'article originales */
wp_reset_postdata();
} else {
// Pas d'articles trouvés
echo '<p>Nous n\'avons rien à afficher, désolé ! On y travaille ...</p>';
}
    ?>
    </div>
</main><!-- #main -->
<?php get_footer(); ?>





