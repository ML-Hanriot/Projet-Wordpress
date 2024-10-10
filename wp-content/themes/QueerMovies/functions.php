<?php

// Ajoute automatiquement la balise Title à chacune de vos pages et articles et //récupère son titre
add_theme_support( 'title-tag' );

// Vous permet d'ajouter la possibilité de mettre une image en avant dans les articles //et les pages
add_theme_support( 'post-thumbnails');


// Déclarer votre Css
function register_fichier_css() {

    wp_enqueue_style('mafonction-style',get_stylesheet_uri(),array(),'1.0');
}
add_action( 'wp_enqueue_scripts', 'register_fichier_css' );

// Vous permet d’enregistrer les emplacements de menu.
register_nav_menus( array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
) );