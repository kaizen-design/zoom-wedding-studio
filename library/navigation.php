<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

register_nav_menus(
	array(
		'header_menu_main'  => esc_html__( 'Header main menu', '' ),
		'footer_menu'  => esc_html__( 'Footer menu', '' ),
	)
);


/**
 * Navigation - Menu in header
 *
 */
if ( ! function_exists( 'navigation_header_main_menu' ) ) {
	function navigation_header_main_menu() {
		wp_nav_menu(
			array(
                'theme_location' => 'header_menu_main',
				'container'      => false,
                'container_class'=>'',
				'menu_class'     => '',
			)
		);
	}
}

/**
 * Navigation - Menu in footer
 *
 */
if ( ! function_exists( 'navigation_footer_menu' ) ) {
    function navigation_footer_menu() {
        wp_nav_menu(
            array(
                'theme_location' => 'footer_menu',
                'container'      => false,
                'container_class'=>'',
                'menu_class'     => '',
            )
        );
    }
}

