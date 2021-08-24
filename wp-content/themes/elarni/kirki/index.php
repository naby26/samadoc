<?php

require_once get_template_directory() . '/kirki/kirki-utils.php';
require_once get_template_directory() . '/kirki/include-kirki.php';
require_once get_template_directory() . '/kirki/kirki.php';

$config = elearni_kirki_config();

add_action('customize_register', 'elearni_customize_register');
function elearni_customize_register( $wp_customize ) {

	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );

	$wp_customize->remove_section('themes');
	$wp_customize->get_section('title_tagline')->priority = 10;
}

add_action( 'customize_controls_print_styles', 'elearni_enqueue_customizer_stylesheet' );
function elearni_enqueue_customizer_stylesheet() {
	wp_register_style( 'elearni-customizer-css', ELEARNI_THEME_URI.'/kirki/assets/css/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'elearni-customizer-css' );	
}

add_action( 'customize_controls_print_footer_scripts', 'elearni_enqueue_customizer_script' );
function elearni_enqueue_customizer_script() {
	wp_register_script( 'elearni-customizer-js', ELEARNI_THEME_URI.'/kirki/assets/js/customizer.js', array('jquery', 'customize-controls' ), false, true );
	wp_enqueue_script( 'elearni-customizer-js' );
}

# Theme Customizer Begins
ELEARNI_Kirki::add_config( $config , array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

	# Site Identity	
		# use-custom-logo
		ELEARNI_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'use-custom-logo',
			'label'    => esc_html__( 'Logo ?', 'elearni' ),
			'section'  => 'title_tagline',
			'priority' => 1,
			'default'  => elearni_defaults('use-custom-logo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Logo', 'elearni' ),
				'off' => esc_attr__( 'Site Title', 'elearni' )
			)			
		) );

		# custom-logo
		ELEARNI_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-logo',
			'label'    => esc_html__( 'Logo', 'elearni' ),
			'section'  => 'title_tagline',
			'priority' => 2,
			'default' => elearni_defaults( 'custom-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));

		# site-title-color
		ELEARNI_Kirki::add_field( $config, array(
			'type'            => 'color',
			'settings'        => 'custom-title-color',
			'label'           => esc_html__( 'Site Title Color', 'elearni' ),
			'section'         => 'title_tagline',
			'priority'        => 4,
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '!=', 'value' => '1' )
			),
			'output'          => array(
				array( 'element' => '#site-title a' , 'property' => 'color', 'suffix' => ' !important' )
			),
			'default' => '#ffffff',
			'choices'         => array( 'alpha' => true ),
		) );

		# custom-light-logo
		ELEARNI_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-light-logo',
			'label'    => esc_html__( 'Light Logo', 'elearni' ),
			'section'  => 'title_tagline',
			'priority' => 3,
			'default' => elearni_defaults( 'custom-light-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));
		
	# Site Layout
	require_once get_template_directory() . '/kirki/options/site-layout.php';

	# Site Skin
	require_once get_template_directory() . '/kirki/options/site-skin.php';

	# Additional JS
	require_once get_template_directory() . '/kirki/options/custom-js.php';

	# Typography
	ELEARNI_Kirki::add_panel( 'dt_site_typography_panel', array(
		'title' => esc_html__( 'Typography', 'elearni' ),
		'description' => esc_html__('Typography Settings','elearni'),
		'priority' => 220
	) );	
	require_once get_template_directory() . '/kirki/options/site-typography.php';	
# Theme Customizer Ends