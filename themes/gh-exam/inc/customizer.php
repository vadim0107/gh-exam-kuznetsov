<?php
/**
 * gh-exam Theme Customizer
 *
 * @package gh-exam
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gh_exam_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


    $wp_customize->add_section('homepage-custom', array(
        'title' => __('Homepage Custom', 'gh-exam'),
        'priority' => 30,
    ));
    $wp_customize->add_setting('about-descr', array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about-setting', array(
        'label' => __('About Description'),
        'section' => 'homepage-custom',
        'settings' => 'about-descr',
        'type' => 'textarea',
    )));

    $wp_customize->add_setting('welcome-descr', array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'welcome-setting', array(
        'label' => __('Welcome Description'),
        'section' => 'homepage-custom',
        'settings' => 'welcome-descr',
        'type' => 'textarea',
    )));
    $wp_customize->add_setting('contact-phone', array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contact-setting', array(
        'label' => __('Contact Phone'),
        'section' => 'homepage-custom',
        'settings' => 'contact-phone',
    )));

    //Portfolio Images
    $wp_customize->add_section('portfolio', array(
        'title' => __('Portfolio Images ', 'gh-exam'),
        'priority' => 30,
    ));
    $wp_customize->add_setting('portfolio1', array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio1', array(
        'label'      => __( 'Image 1', 'gh_exam' ),
        'section'    => 'portfolio',
        'settings'   => 'portfolio1',
    )));

    $wp_customize->add_setting('portfolio2', array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio2', array(
        'label'      => __( 'Image 2', 'gh_exam' ),
        'section'    => 'portfolio',
        'settings'   => 'portfolio2',
    )));

    $wp_customize->add_setting('portfolio3', array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio3', array(
        'label'      => __( 'Image 3', 'gh_exam' ),
        'section'    => 'portfolio',
        'settings'   => 'portfolio3',
    )));

    $wp_customize->add_setting('portfolio4', array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio4', array(
        'label'      => __( 'Image 4', 'gh_exam' ),
        'section'    => 'portfolio',
        'settings'   => 'portfolio4',
    )));

    $wp_customize->add_setting('portfolio5', array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio5', array(
        'label'      => __( 'Image 5', 'gh_exam' ),
        'section'    => 'portfolio',
        'settings'   => 'portfolio5',
    )));

    $wp_customize->add_setting('portfolio6', array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio6', array(
        'label'      => __( 'Image 6', 'gh_exam' ),
        'section'    => 'portfolio',
        'settings'   => 'portfolio6',
    )));
}
add_action( 'customize_register', 'gh_exam_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gh_exam_customize_preview_js() {
	wp_enqueue_script( 'gh_exam_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gh_exam_customize_preview_js' );
