<?php
$config = elearni_kirki_config();

ELEARNI_Kirki::add_section( 'dt_site_layout_section', array(
	'title' => esc_html__( 'Site Layout', 'elearni' ),
	'priority' => 20
) );

	# site-layout
	ELEARNI_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'site-layout',
		'label'    => esc_html__( 'Site Layout', 'elearni' ),
		'section'  => 'dt_site_layout_section',
		'default'  => elearni_defaults('site-layout'),
		'choices' => array(
			'boxed' =>  ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/boxed.png',
			'wide' => ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/wide.png',
		)
	));

	# site-boxed-layout
	ELEARNI_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'site-boxed-layout',
		'label'    => esc_html__( 'Customize Boxed Layout?', 'elearni' ),
		'section'  => 'dt_site_layout_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'elearni' ),
			'off' => esc_attr__( 'No', 'elearni' )
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
		)			
	));

	# body-bg-type
	ELEARNI_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-type',
		'label'    => esc_html__( 'Background Type', 'elearni' ),
		'section'  => 'dt_site_layout_section',
		'multiple' => 1,
		'default'  => 'none',
		'choices'  => array(
			'pattern' => esc_attr__( 'Predefined Patterns', 'elearni' ),
			'upload' => esc_attr__( 'Set Pattern', 'elearni' ),
			'none' => esc_attr__( 'None', 'elearni' ),
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-pattern
	ELEARNI_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'body-bg-pattern',
		'label'    => esc_html__( 'Predefined Patterns', 'elearni' ),
		'description'    => esc_html__( 'Add Background for body', 'elearni' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'choices' => array(
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg',
			ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg'=> ELEARNI_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg',
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'pattern' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)						
	));

	# body-bg-image
	ELEARNI_Kirki::add_field( $config, array(
		'type' => 'image',
		'settings' => 'body-bg-image',
		'label'    => esc_html__( 'Background Image', 'elearni' ),
		'description'    => esc_html__( 'Add Background Image for body', 'elearni' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'upload' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-position
	ELEARNI_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-position',
		'label'    => esc_html__( 'Background Position', 'elearni' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-position' )
		),
		'default' => 'center',
		'multiple' => 1,
		'choices' => elearni_image_positions(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload') ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-repeat
	ELEARNI_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-repeat',
		'label'    => esc_html__( 'Background Repeat', 'elearni' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-repeat' )
		),
		'default' => 'repeat',
		'multiple' => 1,
		'choices' => elearni_image_repeats(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload' ) ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));	