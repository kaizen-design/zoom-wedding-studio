<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 */

if ( ! function_exists( 'zwickywed_theme_support' ) ) :
	function zwickywed_theme_support() {

		// Add menu support
		add_theme_support( 'menus' );

		// Add post thumbnail support
		add_theme_support( 'post-thumbnails' );

        // Let WordPress manage the document title
        add_theme_support( 'title-tag' );

        add_theme_support( 'responsive-embeds' );

        // Disable Custom Colors
        //add_theme_support( 'disable-custom-colors' );        
	}

	add_action( 'after_setup_theme', 'zwickywed_theme_support' );
endif;