<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <a href="<?php echo home_url( '/' ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo du site"></a>
    <p>Tout votre cinéma Queer</p>
    <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
   </header>
