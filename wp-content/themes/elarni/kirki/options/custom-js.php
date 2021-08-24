<?php
$config = elearni_kirki_config();

ELEARNI_Kirki::add_section( 'dt_custom_js_section', array(
	'title' => esc_html__( 'Additional JS', 'elearni' ),
	'priority' => 210
) );

	# custom-js
	ELEARNI_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'enable-custom-js',
		'section'  => 'dt_custom_js_section',
		'label'    => esc_html__( 'Enable Custom JS?', 'elearni' ),
		'default'  => elearni_defaults('enable-custom-js'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'elearni' ),
			'off' => esc_attr__( 'No', 'elearni' )
		)		
	));

	# custom-js
	ELEARNI_Kirki::add_field( $config, array(
		'type'     => 'code',
		'settings' => 'custom-js',
		'section'  => 'dt_custom_js_section',
		'transport' => 'postMessage',
		'label'    => esc_html__( 'Add Custom JS', 'elearni' ),
		'choices'     => array(
			'language' => 'javascript',
			'theme'    => 'dark',
		),
		'active_callback' => array(
			array( 'setting' => 'enable-custom-js' , 'operator' => '==', 'value' =>'1')
		)
	));