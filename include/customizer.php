<?php
/**
 * theme Theme Customizer
 *
 * @package theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->add_section( 'header' , array(
        'title'      => __( 'Header Section', 'MHA' ),
        'priority'   => 10
    ) );

    $wp_customize->add_setting( 'logo' , array(
        'default'   => '',
        'transport' => 'refresh'
    ) );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo-dark',
            array(
                'label'      => __( 'Upload a logo', 'MHA' ),
                'section'    => 'Footer',
                'settings'   => 'logo-dark'
            )
        )
    );

    /*Add section footer*/

    $wp_customize->add_setting('footer', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_section('footer-logo', array(
        'title' => __('Footer', 'mytheme'),
        'priority' => 100
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer-logo',
            array(
                'label'      => __( 'Download footer logo', 'theme_name' ),
                'section'    => 'footer-logo',
                'settings'   => 'footer'
            )
        )
    );

    /*Add email field*/

    $wp_customize->add_setting('about_header', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'about_header',
        array(
            'label' => __('Footer', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'about_header',
            'type' => 'text'
        )
    );

    /*Footer headline*/

    $wp_customize->add_setting('footer_header', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'footer_header',
        array(
            'label' => __('Footer headline', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'footer_header',
            'type' => 'text'
        )
    );

    /*Footer subtitle*/

    $wp_customize->add_setting('footer_subtitle', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'footer_subtitle',
        array(
            'label' => __('Footer subtitle', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'footer_subtitle',
            'type' => 'text'
        )
    );

    /*Add contact field*/

    $wp_customize->add_setting('footer-contact', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'footer-contact',
        array(
            'label' => __('Footer contact', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'footer-contact',
            'type' => 'text'
        )
    );

    /*Social links*/

    $wp_customize->add_setting('twitter', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'twitter',
        array(
            'label' => __('Twitter', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'twitter',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting('instagram', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'instagram',
        array(
            'label' => __('Instagram', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'instagram',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting('facebook', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        'facebook',
        array(
            'label' => __('Facebook', 'mytheme'),
            'section' => 'footer-logo',
            'settings' => 'facebook',
            'type' => 'text'
        )
    );
}
add_action( 'customize_register', 'theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function theme_customize_preview_js() {
	wp_enqueue_script( 'theme_customizer', get_template_directory_uri() . '/assets/scripts/customizer.js', array( 'customize-preview' ), false, true );
}
add_action( 'customize_preview_init', 'theme_customize_preview_js' );