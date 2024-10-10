<?php
/**
 * Plugin Name: Search-bar
 * Description: Un plugin simple qui ajoute une barre de recherche via un shortcode.
 * Version: 1.0
 * Author: Ton Nom
 */

// Fonction qui génère le formulaire de recherche
function sbp_search_bar() {
    // Formulaire de recherche HTML
    $form = '
    <form role="search" method="get" id="searchform" class="searchform" action="' . esc_url(home_url('/')) . '">
        <label class="screen-reader-text" for="s">Rechercher :</label>
        <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Recherche..." />
        <input type="submit" id="searchsubmit" value="Rechercher" />
    </form>';

    return $form;
}

// Créer un shortcode pour afficher la barre de recherche
function sbp_register_search_bar_shortcode() {
    add_shortcode('search_bar', 'sbp_search_bar');
}
add_action('init', 'sbp_register_search_bar_shortcode');

//Ajout au menu admin
function eni_custom_menu_page() {
    add_menu_page(
        'ENI Custom Page', // Titre de la page (onglet)
        'Search-bar', // Titre du menu
        'manage_options', // Capacité requise
        'eni-custom-page', // Slug du menu
        'eni_custom_menu_page_content', // Fonction de contenu
        'dashicons-admin-site', // Icône du menu
        6 // Position du menu
    );
}
add_action('admin_menu', 'eni_custom_menu_page');