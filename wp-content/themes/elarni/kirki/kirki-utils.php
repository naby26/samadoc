<?php
function elearni_kirki_config() {
	return 'elearni_kirki_config';
}

function elearni_defaults( $key = '' ) {
	$defaults = array();

	# site identify
	$defaults['use-custom-logo'] = '1';
	$defaults['custom-logo'] = ELEARNI_THEME_URI.'/images/logo.png';
	$defaults['custom-light-logo'] = ELEARNI_THEME_URI.'/images/light-logo.png';
	$defaults['site_icon'] = ELEARNI_THEME_URI.'/images/favicon.ico';

	# site layout
	$defaults['site-layout'] = 'wide';
	$defaults['body-bg-color']      = '#ffffff';
	$defaults['body-content-color'] = '#474747';
	$defaults['body-a-color']       = '#00eda4';
	$defaults['body-a-hover-color'] = '#474747';	

	# site skin
	$defaults['primary-color'] = '#00eda4';
	$defaults['secondary-color'] = '#6a7df1';
	$defaults['tertiary-color'] = '#fcc400';

	# site breadcrumb
	$defaults['customize-breadcrumb-title-typo'] = '1';
	$defaults['breadcrumb-title-typo'] = array( 'font-family' => 'Poppins',
		'variant' => '700',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '',
		'line-height' => '',
		'letter-spacing' => '-0.04em',
		'color' => '#FFF',
		'text-align' => 'unset',
		'text-transform' => 'none' );
	$defaults['customize-breadcrumb-typo'] = '1';
	$defaults['breadcrumb-typo'] = array( 'font-family' => 'Roboto',
		'variant' => '300',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '16px',
		'line-height' => '',
		'letter-spacing' => '0.06em',
		'color' => '#FFF',
		'text-align' => 'unset',
		'text-transform' => 'uppercase' );

	# site footer
	$defaults['customize-footer-title-typo'] = '1';
	$defaults['footer-title-typo'] = array( 'font-family' => 'Poppins',
		'variant' => '700',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '20px',
		'line-height' => '38px',
		'letter-spacing' => '-0.04em',
		'color' => '#222222',
		'text-align' => 'left',
		'text-transform' => 'none' );
	$defaults['customize-footer-content-typo'] = '1';
	$defaults['footer-content-typo'] = array( 'font-family' => 'Roboto',
		'variant' => '300',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '16px',
		'line-height' => '40px',
		'letter-spacing' => '0',
		'color' => '#474747',
		'text-align' => 'left',
		'text-transform' => 'none' );

	# site typography
	$defaults['customize-body-h1-typo'] = '1';
	$defaults['h1'] = array(
		'font-family' => 'Poppins',
		'variant' => '700',
		'font-size' => '32px',
		'line-height' => '',
		'letter-spacing' => '-0.04em',
		'color' => '#222222',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h2-typo'] = '1';
	$defaults['h2'] = array(
		'font-family' => 'Poppins',
		'variant' => '700',
		'font-size' => '30px',
		'line-height' => '',
		'letter-spacing' => '-0.04em',
		'color' => '#222222',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h3-typo'] = '1';
	$defaults['h3'] = array(
		'font-family' => 'Poppins',
		'variant' => '700',
		'font-size' => '28px',
		'line-height' => '',
		'letter-spacing' => '-0.04em',
		'color' => '#222222',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h4-typo'] = '1';
	$defaults['h4'] = array(
		'font-family' => 'Poppins',
		'variant' => '700',
		'font-size' => '26px',
		'line-height' => '',
		'letter-spacing' => '-0.04em',
		'color' => '#222222',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h5-typo'] = '1';
	$defaults['h5'] = array(
		'font-family' => 'Poppins',
		'variant' => '700',
		'font-size' => '24px',
		'line-height' => '',
		'letter-spacing' => '-0.04em',
		'color' => '#222222',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h6-typo'] = '1';
	$defaults['h6'] = array(
		'font-family' => 'Poppins',
		'variant' => '700',
		'font-size' => '20px',
		'line-height' => '',
		'letter-spacing' => '-0.04em',
		'color' => '#222222',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-content-typo'] = '1';
	$defaults['body-content-typo'] = array(
		'font-family' => 'Roboto',
		'variant' => '300',
		'font-size' => '16px',
		'line-height' => '30px',
		'letter-spacing' => '0.02em',
		'color' => '#474747',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);

	if( !empty( $key ) && array_key_exists( $key, $defaults) ) {
		return $defaults[$key];
	}

	return '';
}

function elearni_image_positions() {

	$positions = array( "top left" => esc_attr__('Top Left','elearni'),
		"top center"    => esc_attr__('Top Center','elearni'),
		"top right"     => esc_attr__('Top Right','elearni'),
		"center left"   => esc_attr__('Center Left','elearni'),
		"center center" => esc_attr__('Center Center','elearni'),
		"center right"  => esc_attr__('Center Right','elearni'),
		"bottom left"   => esc_attr__('Bottom Left','elearni'),
		"bottom center" => esc_attr__('Bottom Center','elearni'),
		"bottom right"  => esc_attr__('Bottom Right','elearni'),
	);

	return $positions;
}

function elearni_image_repeats() {

	$image_repeats = array( "repeat" => esc_attr__('Repeat','elearni'),
		"repeat-x"  => esc_attr__('Repeat in X-axis','elearni'),
		"repeat-y"  => esc_attr__('Repeat in Y-axis','elearni'),
		"no-repeat" => esc_attr__('No Repeat','elearni')
	);

	return $image_repeats;
}

function elearni_border_styles() {

	$image_repeats = array(
		"none"	 => esc_attr__('None','elearni'),
		"dotted" => esc_attr__('Dotted','elearni'),
		"dashed" => esc_attr__('Dashed','elearni'),
		"solid"	 => esc_attr__('Solid','elearni'),
		"double" => esc_attr__('Double','elearni'),
		"groove" => esc_attr__('Groove','elearni'),
		"ridge"	 => esc_attr__('Ridge','elearni'),
	);

	return $image_repeats;
}

function elearni_animations() {

	$animations = array(
		'' 					 => esc_html__('Default','elearni'),	
		"bigEntrance"        =>  esc_attr__("bigEntrance",'elearni'),
        "bounce"             =>  esc_attr__("bounce",'elearni'),
        "bounceIn"           =>  esc_attr__("bounceIn",'elearni'),
        "bounceInDown"       =>  esc_attr__("bounceInDown",'elearni'),
        "bounceInLeft"       =>  esc_attr__("bounceInLeft",'elearni'),
        "bounceInRight"      =>  esc_attr__("bounceInRight",'elearni'),
        "bounceInUp"         =>  esc_attr__("bounceInUp",'elearni'),
        "bounceOut"          =>  esc_attr__("bounceOut",'elearni'),
        "bounceOutDown"      =>  esc_attr__("bounceOutDown",'elearni'),
        "bounceOutLeft"      =>  esc_attr__("bounceOutLeft",'elearni'),
        "bounceOutRight"     =>  esc_attr__("bounceOutRight",'elearni'),
        "bounceOutUp"        =>  esc_attr__("bounceOutUp",'elearni'),
        "expandOpen"         =>  esc_attr__("expandOpen",'elearni'),
        "expandUp"           =>  esc_attr__("expandUp",'elearni'),
        "fadeIn"             =>  esc_attr__("fadeIn",'elearni'),
        "fadeInDown"         =>  esc_attr__("fadeInDown",'elearni'),
        "fadeInDownBig"      =>  esc_attr__("fadeInDownBig",'elearni'),
        "fadeInLeft"         =>  esc_attr__("fadeInLeft",'elearni'),
        "fadeInLeftBig"      =>  esc_attr__("fadeInLeftBig",'elearni'),
        "fadeInRight"        =>  esc_attr__("fadeInRight",'elearni'),
        "fadeInRightBig"     =>  esc_attr__("fadeInRightBig",'elearni'),
        "fadeInUp"           =>  esc_attr__("fadeInUp",'elearni'),
        "fadeInUpBig"        =>  esc_attr__("fadeInUpBig",'elearni'),
        "fadeOut"            =>  esc_attr__("fadeOut",'elearni'),
        "fadeOutDownBig"     =>  esc_attr__("fadeOutDownBig",'elearni'),
        "fadeOutLeft"        =>  esc_attr__("fadeOutLeft",'elearni'),
        "fadeOutLeftBig"     =>  esc_attr__("fadeOutLeftBig",'elearni'),
        "fadeOutRight"       =>  esc_attr__("fadeOutRight",'elearni'),
        "fadeOutUp"          =>  esc_attr__("fadeOutUp",'elearni'),
        "fadeOutUpBig"       =>  esc_attr__("fadeOutUpBig",'elearni'),
        "flash"              =>  esc_attr__("flash",'elearni'),
        "flip"               =>  esc_attr__("flip",'elearni'),
        "flipInX"            =>  esc_attr__("flipInX",'elearni'),
        "flipInY"            =>  esc_attr__("flipInY",'elearni'),
        "flipOutX"           =>  esc_attr__("flipOutX",'elearni'),
        "flipOutY"           =>  esc_attr__("flipOutY",'elearni'),
        "floating"           =>  esc_attr__("floating",'elearni'),
        "hatch"              =>  esc_attr__("hatch",'elearni'),
        "hinge"              =>  esc_attr__("hinge",'elearni'),
        "lightSpeedIn"       =>  esc_attr__("lightSpeedIn",'elearni'),
        "lightSpeedOut"      =>  esc_attr__("lightSpeedOut",'elearni'),
        "pullDown"           =>  esc_attr__("pullDown",'elearni'),
        "pullUp"             =>  esc_attr__("pullUp",'elearni'),
        "pulse"              =>  esc_attr__("pulse",'elearni'),
        "rollIn"             =>  esc_attr__("rollIn",'elearni'),
        "rollOut"            =>  esc_attr__("rollOut",'elearni'),
        "rotateIn"           =>  esc_attr__("rotateIn",'elearni'),
        "rotateInDownLeft"   =>  esc_attr__("rotateInDownLeft",'elearni'),
        "rotateInDownRight"  =>  esc_attr__("rotateInDownRight",'elearni'),
        "rotateInUpLeft"     =>  esc_attr__("rotateInUpLeft",'elearni'),
        "rotateInUpRight"    =>  esc_attr__("rotateInUpRight",'elearni'),
        "rotateOut"          =>  esc_attr__("rotateOut",'elearni'),
        "rotateOutDownRight" =>  esc_attr__("rotateOutDownRight",'elearni'),
        "rotateOutUpLeft"    =>  esc_attr__("rotateOutUpLeft",'elearni'),
        "rotateOutUpRight"   =>  esc_attr__("rotateOutUpRight",'elearni'),
        "shake"              =>  esc_attr__("shake",'elearni'),
        "slideDown"          =>  esc_attr__("slideDown",'elearni'),
        "slideExpandUp"      =>  esc_attr__("slideExpandUp",'elearni'),
        "slideLeft"          =>  esc_attr__("slideLeft",'elearni'),
        "slideRight"         =>  esc_attr__("slideRight",'elearni'),
        "slideUp"            =>  esc_attr__("slideUp",'elearni'),
        "stretchLeft"        =>  esc_attr__("stretchLeft",'elearni'),
        "stretchRight"       =>  esc_attr__("stretchRight",'elearni'),
        "swing"              =>  esc_attr__("swing",'elearni'),
        "tada"               =>  esc_attr__("tada",'elearni'),
        "tossing"            =>  esc_attr__("tossing",'elearni'),
        "wobble"             =>  esc_attr__("wobble",'elearni'),
        "fadeOutDown"        =>  esc_attr__("fadeOutDown",'elearni'),
        "fadeOutRightBig"    =>  esc_attr__("fadeOutRightBig",'elearni'),
        "rotateOutDownLeft"  =>  esc_attr__("rotateOutDownLeft",'elearni')
    );

	return $animations;
}

function elearni_custom_fonts( $standard_fonts ){

	$custom_fonts = array();

	$fonts = cs_get_option('custom_font_fields');
	if( count( $fonts ) > 0 ):
		foreach( $fonts as $font ):
			$custom_fonts[$font['custom_font_name']] = array(
				'label' => $font['custom_font_name'],
				'variants' => array( '100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic' ),
				'stack' => $font['custom_font_name'] . ''
			);
		endforeach;
	endif;

	return array_merge_recursive( $custom_fonts, $standard_fonts );
}
add_filter( 'kirki/fonts/standard_fonts', 'elearni_custom_fonts', 20 );