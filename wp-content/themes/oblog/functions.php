<?php

//Déclaration d'un Hook permettant de configurer le theme au chargement de WP
if ( ! function_exists( 'oblog_setup' ) ) :
    function oblog_setup() 
    {
        // ... Pour l'instant rien à configurer
        // remove_theme_support( 'title-tag' );
        add_theme_support( 'title-tag' );

        //On dit à wordpress qu'on gère les menus
        // https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/setup-theme.md#menus-de-navigation
        add_theme_support('menus'); // Facultatif car induit par un register_nav_menus
        register_nav_menu('header', 'Menu de liens dans le header');
        register_nav_menu('footer', 'Menu de liens dans le footer');

    }

endif;
// Ajout d'une action au Hook 'after_setup_theme'
add_action('after_setup_theme', 'oblog_setup');


// Déclaration d'un Hook permettant d'ajouter les scripts et css requis par le theme
if ( ! function_exists( 'oblog_scripts' ) ) :
    function oblog_scripts()
    {
        //Récupération de la version du theme ( configuré dans le fichier style.css )
        $theme_version = wp_get_theme()->get( 'Version' );
    
        //Ajout d'un fichier css oblog-reset
        wp_enqueue_style( 'oblog-reset', get_template_directory_uri() . '/assets/css/reset.css', [], $theme_version, 'all');
        //Ajout d'un fichier css oblog-style, dépendant de oblog-reset
        wp_enqueue_style( 'oblog-style', get_template_directory_uri() . '/assets/css/style.css', ['oblog-reset'], $theme_version, 'all');
    }
    
    endif;
    
    // Abonnement à wp_enqueue_scripts avec pour callback la fonction oblog_scripts
    add_action( 'wp_enqueue_scripts', 'oblog_scripts' );
    
    
    //Si la fonction oblog_sayhello n'existe pas, alors on peut la déclarer
    if ( ! function_exists( 'oblog_sayhello' ) ) :
        //Fonction permettant d'écrire Hello Dolly en commentaire ( pour l'exemple )
        function oblog_sayhello() 
        {
            echo "<!-- Hello dolly -->";
        }
    
    endif;
    
    //On accroche la fonction de callba&ck oblog_sayhello au hook wp_body_open
    add_action('wp_body_open', 'oblog_sayhello');