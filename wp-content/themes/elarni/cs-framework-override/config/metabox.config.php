<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

// -----------------------------------------
// Layer Sliders
// -----------------------------------------
function elearni_layersliders() {
  $layerslider = array(  esc_html__('Select a slider','elearni') );

  if( elearni_plugin_is_active('LayerSlider/layerslider.php') ) {

    $sliders = LS_Sliders::find(array('limit' => 50));

    if(!empty($sliders)) {
      foreach($sliders as $key => $item){
        $layerslider[ $item['id'] ] = $item['name'];
      }
    }
  }

  return $layerslider;
}

// -----------------------------------------
// Revolution Sliders
// -----------------------------------------
function elearni_revolutionsliders() {
  $revolutionslider = array( '' => esc_html__('Select a slider','elearni') );

  if(elearni_plugin_is_active('revslider/revslider.php')) {
    $sld = new RevSlider();
    $sliders = $sld->getArrSliders();
    if(!empty($sliders)){
      foreach($sliders as $key => $item) {
        $revolutionslider[$item->getAlias()] = $item->getTitle();
      }
    }    
  }

  return $revolutionslider;  
}

// -----------------------------------------
// Meta Layout Section
// -----------------------------------------
$meta_layout_section =array(
  'name'  => 'layout_section',
  'title' => esc_html__('Layout', 'elearni'),
  'icon'  => 'fa fa-columns',
  'fields' =>  array(
    array(
      'id'  => 'layout',
      'type' => 'image_select',
      'title' => esc_html__('Page Layout', 'elearni' ),
      'options'      => array(
          'content-full-width'   => ELEARNI_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
          'with-left-sidebar'    => ELEARNI_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
          'with-right-sidebar'   => ELEARNI_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
          'with-both-sidebar'    => ELEARNI_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
      ),
      'default'      => 'content-full-width',
      'attributes'   => array( 'data-depend-id' => 'page-layout' )
    ),
    array(
      'id'        => 'show-standard-sidebar-left',
      'type'      => 'switcher',
      'title'     => esc_html__('Show Standard Left Sidebar', 'elearni' ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'        => 'widget-area-left',
      'type'      => 'select',
      'title'     => esc_html__('Choose Left Widget Areas', 'elearni' ),
      'class'     => 'chosen',
      'options'   => elearni_custom_widgets(),
      'attributes'  => array( 
        'multiple'  => 'multiple',
        'data-placeholder' => esc_html__('Select Left Widget Areas','elearni'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'          => 'show-standard-sidebar-right',
      'type'        => 'switcher',
      'title'       => esc_html__('Show Standard Right Sidebar', 'elearni' ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'        => 'widget-area-right',
      'type'      => 'select',
      'title'     => esc_html__('Choose Right Widget Areas', 'elearni' ),
      'class'     => 'chosen',
      'options'   => elearni_custom_widgets(),
      'attributes'    => array( 
        'multiple' => 'multiple',
        'data-placeholder' => esc_html__('Select Right Widget Areas','elearni'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    )
  )
);

// -----------------------------------------
// Meta Breadcrumb Section
// -----------------------------------------
$meta_breadcrumb_section = array(
  'name'  => 'breadcrumb_section',
  'title' => esc_html__('Breadcrumb', 'elearni'),
  'icon'  => 'fa fa-sitemap',
  'fields' =>  array(
    array(
      'id'      => 'enable-sub-title',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Breadcrumb', 'elearni' ),
      'default' => true
    ),
    array(
    	'id'                 => 'breadcrumb_position',
	'type'               => 'select',
      'title'              => esc_html__('Position', 'elearni' ),
      'options'            => array(
        'header-top-absolute'    => esc_html__('Behind the Header','elearni'),
        'header-top-relative' 	   => esc_html__('Default','elearni'),
		),
		'default'            => 'header-top-relative',	
      'dependency'         => array( 'enable-sub-title', '==', 'true' ),
    ),    
    array(
      'id'    => 'breadcrumb_background',
      'type'  => 'background',
      'title' => esc_html__('Background', 'elearni' ),
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),
  )
);

// -----------------------------------------
// Meta Slider Section
// -----------------------------------------
$meta_slider_section = array(
  'name'  => 'slider_section',
  'title' => esc_html__('Slider', 'elearni'),
  'icon'  => 'fab fa-slideshare',
  'fields' =>  array(
    array(
      'id'           => 'slider-notice',
      'type'         => 'notice',
      'class'        => 'danger',
      'content'      => esc_html__('Slider tab works only if breadcrumb disabled.','elearni'),
      'class'        => 'margin-30 cs-danger',
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),

    array(
      'id'           => 'show_slider',
      'type'         => 'switcher',
      'title'        => esc_html__('Show Slider', 'elearni' ),
      'dependency'   => array( 'enable-sub-title', '==', 'false' ),
    ),
    array(
    	'id'                 => 'slider_position',
	'type'               => 'select',
	'title'              => esc_html__('Position', 'elearni' ),
	'options'            => array(
		'header-top-relative'     => esc_html__('Top Header Relative','elearni'),
		'header-top-absolute'    => esc_html__('Top Header Absolute','elearni'),
		'bottom-header' 	   => esc_html__('Bottom Header','elearni'),
	),
	'default'            => 'bottom-header',
	'dependency'         => array( 'enable-sub-title|show_slider', '==|==', 'false|true' ),
   ),
   array(
      'id'                 => 'slider_type',
      'type'               => 'select',
      'title'              => esc_html__('Slider', 'elearni' ),
      'options'            => array(
        ''                 => esc_html__('Select a slider','elearni'),
        'layerslider'      => esc_html__('Layer slider','elearni'),
        'revolutionslider' => esc_html__('Revolution slider','elearni'),
        'customslider'     => esc_html__('Custom Slider Shortcode','elearni'),
      ),
      'validate' => 'required',
      'dependency'         => array( 'enable-sub-title|show_slider', '==|==', 'false|true' ),
    ),

    array(
      'id'          => 'layerslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Layer Slider', 'elearni' ),
      'options'     => elearni_layersliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|layerslider' )
    ),

    array(
      'id'          => 'revolutionslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Revolution Slider', 'elearni' ),
      'options'     => elearni_revolutionsliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|revolutionslider' )
    ),

    array(
      'id'          => 'customslider_sc',
      'type'        => 'textarea',
      'title'       => esc_html__('Custom Slider Code', 'elearni' ),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|customslider' )
    ),
  )  
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
array_push( $meta_layout_section['fields'], array(
  'id'        => 'enable-sticky-sidebar',
  'type'      => 'switcher',
  'title'     => esc_html__('Enable Sticky Sidebar', 'elearni' ),
  'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar,with-both-sidebar' )
) );

$page_settings = array(
  $meta_layout_section,
  $meta_breadcrumb_section,
  $meta_slider_section,
  array(
    'name'   => 'sidenav_template_section',
    'title'  => esc_html__('Side Navigation Template', 'elearni'),
    'icon'   => 'fa fa-th-list',
    'fields' =>  array(
      array(
        'id'      => 'sidenav-tpl-notice',
        'type'    => 'notice',
        'class'   => 'success',
        'content' => esc_html__('Side Navigation Tab Works only if page template set to Side Navigation Template in Page Attributes','elearni'),
        'class'   => 'margin-30 cs-success',      
      ),
      array(
        'id'      => 'sidenav-style',
        'type'    => 'select',
        'title'   => esc_html__('Side Navigation Style', 'elearni' ),
        'options' => array(
          'type1'  => esc_html__('Type1','elearni'),
          'type2'  => esc_html__('Type2','elearni'),
          'type3'  => esc_html__('Type3','elearni'),
          'type4'  => esc_html__('Type4','elearni'),
          'type5'  => esc_html__('Type5','elearni'),
          'type6'  => esc_html__('Type6','elearni'),
          'type7'  => esc_html__('Type7','elearni'),
          'type8'  => esc_html__('Type8','elearni'),
          'type9'  => esc_html__('Type9','elearni'),
          'type10' => esc_html__('Type10','elearni')
        ),
      ),
      array(
        'id'    => 'sidenav-align',
        'type'  => 'switcher',
        'title' => esc_html__('Align Right', 'elearni' ),
        'info'  => esc_html__('YES! to align right of side navigation.','elearni')
      ),
      array(
        'id'    => 'sidenav-sticky',
        'type'  => 'switcher',
        'title' => esc_html__('Sticky Side Navigation', 'elearni' ),
        'info'  => esc_html__('YES! to sticky side navigation content.','elearni')
      ),
      array(
        'id'    => 'enable-sidenav-content',
        'type'  => 'switcher',
        'title' => esc_html__('Show Content', 'elearni' ),
        'info'  => esc_html__('YES! to show content in below side navigation.','elearni')
      ),
      array(
        'id'         => 'sidenav-content',
        'type'       => 'textarea',
        'title'      => esc_html__('Side Navigation Content', 'elearni' ),
        'info'       => esc_html__('Paste any shortcode content here','elearni'),
        'attributes' => array( 'rows' => 6 ),
      ),
    )
  ),  
);

$shop_page_id = get_option('woocommerce_shop_page_id');

if( isset( $_GET['post'] ) && ( $_GET['post'] != $shop_page_id ) || !isset( $_GET['post'] )  ) {	
  $options[] = array(
    'id'        => '_tpl_default_settings',
    'title'     => esc_html__('Page Settings','elearni'),
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => $page_settings
  );

}

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$post_meta_layout_section = $meta_layout_section;
$fields = $post_meta_layout_section['fields'];

	$fields[0]['title'] =  esc_html__('Post Layout', 'elearni' );
	unset( $fields[5] );
	unset( $post_meta_layout_section['fields'] );
	$post_meta_layout_section['fields']  = $fields;  

	$post_format_section = array(
		'name'  => 'post_format_data_section',
		'title' => esc_html__('Post Format', 'elearni'),
		'icon'  => 'fa fa-cog',
		'fields' =>  array(

			array(
				'id'           => 'single-post-style',
				'type'         => 'select',
				'title'        => esc_html__('Post Style', 'elearni'),
				'options'      => array(
				  'default'      		     => esc_html__('Default', 'elearni'),
				  'breadcrumb-fixed'    => esc_html__('Breadcrumb Fixed', 'elearni'),
				  'breadcrumb-parallax' => esc_html__('Breadcrumb Parallax', 'elearni'),
				  'overlay'				         => esc_html__('Overlay', 'elearni'),
          'overlap' 		          => esc_html__('Overlap', 'elearni'),
				  'custom' 		    	      => esc_html__('Custom', 'elearni')
				),
				'class'        => 'chosen',
				'default'      => 'overlay',
				'info'         => esc_html__('Choose post style to display single post. If post style is "Custom", display based on Editor content.', 'elearni')
			),

			array(
				'id'           => 'single-custom-style',
				'type'         => 'select',
				'title'        => esc_html__('Custom Style', 'elearni'),
				'options'      => array(
				  'minimal'     => esc_html__('Minimal', 'elearni'),
				  'classic' 	=> esc_html__('Classic', 'elearni'),
				  'modern'		=> esc_html__('Modern', 'elearni'),
				),
				'class'        => 'chosen',
				'default'      => 'classic',
				'info'         => esc_html__('Select type of custom style.', 'elearni'),
				'dependency'   => array( 'single-post-style', '==', 'custom' ),
			),

			array(
			    'id'           => 'view_count',
			    'type'         => 'number',
			    'title'        => esc_html__('Views', 'elearni' ),
				'info'         => esc_html__('No.of views of this post.', 'elearni'),
	          	'attributes' => array(
		           'style'    => 'width: 15%;'
        	    ),
			),

			array(
			    'id'           => 'like_count',
			    'type'         => 'number',
			    'title'        => esc_html__('Likes', 'elearni' ),
				'info'         => esc_html__('No.of likes of this post.', 'elearni'),
	          	'attributes' => array(
		           'style'    => 'width: 15%;'
        	    ),
			),

			array(
				'id' => 'post-format-type',
				'title'   => esc_html__('Type', 'elearni' ),
				'type' => 'select',
				'default' => 'standard',
				'options' => array(
					'standard'  => esc_html__('Standard', 'elearni'),
					'status'	=> esc_html__('Status','elearni'),
					'quote'		=> esc_html__('Quote','elearni'),
					'gallery'	=> esc_html__('Gallery','elearni'),
					'image'		=> esc_html__('Image','elearni'),
					'video'		=> esc_html__('Video','elearni'),
					'audio'		=> esc_html__('Audio','elearni'),
					'link'		=> esc_html__('Link','elearni'),
					'aside'		=> esc_html__('Aside','elearni'),
					'chat'		=> esc_html__('Chat','elearni')
				),
				'info'         => esc_html__('Post Format & Type should be Same. Check the Post Format from the "Format" Tab, which comes in the Right Side Section', 'elearni'),
			),

			array(
				'id' 	  => 'post-gallery-items',
				'type'	  => 'gallery',
				'title'   => esc_html__('Add Images', 'elearni' ),
				'add_title'   => esc_html__('Add Images', 'elearni' ),
				'edit_title'  => esc_html__('Edit Images', 'elearni' ),
				'clear_title' => esc_html__('Remove Images', 'elearni' ),
				'dependency' => array( 'post-format-type', '==', 'gallery' ),
			),

			array(
				'id' 	  => 'media-type',
				'type'	  => 'select',
				'title'   => esc_html__('Select Type', 'elearni' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
		      	'options'	=> array(
					'oembed' => esc_html__('Oembed','elearni'),
					'self' => esc_html__('Self Hosted','elearni'),
				)
			),

			array(
				'id' 	  => 'media-url',
				'type'	  => 'textarea',
				'title'   => esc_html__('Media URL', 'elearni' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
			),
		)
	);

	$options[] = array(
		'id'        => '_dt_post_settings',
		'title'     => esc_html__('Post Settings','elearni'),
		'post_type' => 'post',
		'context'   => 'normal',
		'priority'  => 'high',
		'sections'  => array(
			$post_meta_layout_section,
			$meta_breadcrumb_section,
			$post_format_section			
		)
	);

// -----------------------------------------
// Tribe Events Post Metabox Options
// -----------------------------------------
  array_push( $post_meta_layout_section['fields'], array(
    'id' => 'event-post-style',
    'title'   => esc_html__('Post Style', 'elearni' ),
    'type' => 'select',
    'default' => 'type1',
    'options' => array(
      'type1'  => esc_html__('Classic', 'elearni'),
      'type2'  => esc_html__('Full Width','elearni'),
      'type3'  => esc_html__('Minimal Tab','elearni'),
      'type4'  => esc_html__('Clean','elearni'),
      'type5'  => esc_html__('Modern','elearni'),
    ),
	'class'    => 'chosen',
	'info'     => esc_html__('Your event post page show at most selected style.', 'elearni')
  ) );

  $options[] = array(
    'id'        => '_custom_settings',
    'title'     => esc_html__('Settings','elearni'),
    'post_type' => 'tribe_events',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
      $post_meta_layout_section,
      $meta_breadcrumb_section
    )
  );

  if( function_exists( 'is_woocommerce' ) ) {

    $woo_size_guides = cs_get_option( 'dt-woo-size-guides' );
    $woo_size_guides = (is_array($woo_size_guides) && !empty($woo_size_guides)) ? $woo_size_guides : false;
  
    $size_guides[] = esc_html__('None', 'elearni');
    if($woo_size_guides) {
      foreach($woo_size_guides as $woo_size_guide_key => $woo_size_guide) {
        $size_guides[$woo_size_guide_key] = $woo_size_guide['title'];
      }
    }
    
    $product_meta_layout_section = array(
      'name'   => 'general_section',
      'title'  => esc_html__('General', 'elearni'),
      'icon'   => 'fa fa-angle-double-right',
      'fields' =>  array(
          array(
              'id'         => 'page-layout',
              'type'       => 'image_select',
              'title'      => esc_html__('Page Layout', 'elearni'),
              'options'    => array(
                  'admin-option'       => ELEARNI_THEME_URI . '/cs-framework-override/images/admin-option.png',
                  'content-full-width' => ELEARNI_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
                  'with-left-sidebar'  => ELEARNI_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
                  'with-right-sidebar' => ELEARNI_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
              ),
              'default'    => 'admin-option',
              'attributes' => array( 'data-depend-id' => 'page-layout' )
          ),
          array(
              'id'         => 'show-standard-sidebar',
              'type'       => 'switcher',
              'title'      => esc_html__('Show Product Standard Sidebar', 'elearni'),
              'dependency' => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
          ),
          array(
              'id'         => 'product-widgetareas',
              'type'       => 'select',
              'title'      => esc_html__('Choose Custom Widget Area', 'elearni'),
              'class'      => 'chosen',
              'options'    => elearni_custom_widgets(),
              'dependency' => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
              'attributes' => array(
                  'multiple'         => 'multiple',
                  'data-placeholder' => esc_attr__('Select Widget Areas', 'elearni'),
                  'style'            => 'width: 400px;'
              ),
          ),
  
          # Product Template
          array(
              'id'      => 'product-template',
              'type'    => 'select',
              'title'   => esc_html__('Product Template', 'elearni'),
              'class'   => 'chosen',
              'options' => array(
                  'admin-option'    => esc_html__( 'Admin Option', 'elearni' ),
                  'woo-default'     => esc_html__( 'WooCommerce Default', 'elearni' ),
                  'custom-template' => esc_html__( 'Custom Template', 'elearni' )
              ),
              'default'    => 'admin-option',
              'info'       => esc_html__('Don\'t use product shortcodes in content area when "WooCommerce Default" template is chosen.', 'elearni')
          ),
                 
          array(
              'id'         => 'show-upsell',
              'type'       => 'select',
              'title'      => esc_html__('Show Upsell Products', 'elearni'),
              'class'      => 'chosen',
              'default'    => 'admin-option',
              'attributes' => array( 'data-depend-id' => 'show-upsell' ),
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'elearni' ),
                  'true'         => esc_html__( 'Show', 'elearni'),
                  null           => esc_html__( 'Hide', 'elearni'),
              ),
              'dependency' => array( 'product-template', '!=', 'custom-template')
          ),
          array(
              'id'         => 'upsell-column',
              'type'       => 'select',
              'title'      => esc_html__('Choose Upsell Column', 'elearni'),
              'class'      => 'chosen',
              'default'    => 4,
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'elearni' ),
                  1              => esc_html__( 'One Column', 'elearni' ),
                  2              => esc_html__( 'Two Columns', 'elearni' ),
                  3              => esc_html__( 'Three Columns', 'elearni' ),
                  4              => esc_html__( 'Four Columns', 'elearni' ),
              ),
              'dependency' => array( 'product-template|show-upsell', '!=|==', 'custom-template|true')
          ),
          array(
              'id'         => 'upsell-limit',
              'type'       => 'select',
              'title'      => esc_html__('Choose Upsell Limit', 'elearni'),
              'class'      => 'chosen',
              'default'    => 4,
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'elearni' ),
                  1              => esc_html__( 'One', 'elearni' ),
                  2              => esc_html__( 'Two', 'elearni' ),
                  3              => esc_html__( 'Three', 'elearni' ),
                  4              => esc_html__( 'Four', 'elearni' ),
                  5              => esc_html__( 'Five', 'elearni' ),
                  6              => esc_html__( 'Six', 'elearni' ),
                  7              => esc_html__( 'Seven', 'elearni' ),
                  8              => esc_html__( 'Eight', 'elearni' ),
                  9              => esc_html__( 'Nine', 'elearni' ),
                  10              => esc_html__( 'Ten', 'elearni' ),                                                
              ),
              'dependency' => array( 'product-template|show-upsell', '!=|==', 'custom-template|true')
          ),        
          array(
              'id'         => 'show-related',
              'type'       => 'select',
              'title'      => esc_html__('Show Related Products', 'elearni'),
              'class'      => 'chosen',
              'default'    => 'admin-option',
              'attributes' => array( 'data-depend-id' => 'show-related' ),
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'elearni' ),
                  'true'         => esc_html__( 'Show', 'elearni'),
                  null           => esc_html__( 'Hide', 'elearni'),
              ),
              'dependency' => array( 'product-template', '!=', 'custom-template')
          ),
          array(
              'id'         => 'related-column',
              'type'       => 'select',
              'title'      => esc_html__('Choose Related Column', 'elearni'),
              'class'      => 'chosen',
              'default'    => 4,
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'elearni' ),
                  2              => esc_html__( 'Two Columns', 'elearni' ),
                  3              => esc_html__( 'Three Columns', 'elearni' ),
                  4              => esc_html__( 'Four Columns', 'elearni' ),
              ),
              'dependency' => array( 'product-template|show-related', '!=|==', 'custom-template|true')
          ),
          array(
              'id'         => 'related-limit',
              'type'       => 'select',
              'title'      => esc_html__('Choose Related Limit', 'elearni'),
              'class'      => 'chosen',
              'default'    => 4,
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'elearni' ),
                  1              => esc_html__( 'One', 'elearni' ),
                  2              => esc_html__( 'Two', 'elearni' ),
                  3              => esc_html__( 'Three', 'elearni' ),
                  4              => esc_html__( 'Four', 'elearni' ),
                  5              => esc_html__( 'Five', 'elearni' ),
                  6              => esc_html__( 'Six', 'elearni' ),
                  7              => esc_html__( 'Seven', 'elearni' ),
                  8              => esc_html__( 'Eight', 'elearni' ),
                  9              => esc_html__( 'Nine', 'elearni' ),
                  10              => esc_html__( 'Ten', 'elearni' ),                                                
              ),
              'dependency' => array( 'product-template|show-related', '!=|==', 'custom-template|true')
          ),
  
          # Product Additional Tabs
          array(
            'id'              => 'product-additional-tabs',
            'type'            => 'group',
            'title'           => esc_html__('Additional Tabs', 'elearni'),
            'info'            => esc_html__('Click button to add title and description.', 'elearni'),
            'button_title'    => esc_html__('Add New Tab', 'elearni'),
            'accordion_title' => esc_html__('Adding New Tab Field', 'elearni'),
            'fields'          => array(
              array(
              'id'          => 'tab_title',
              'type'        => 'text',
              'title'       => esc_html__('Title', 'elearni'),
              ),
  
              array(
              'id'          => 'tab_description',
              'type'        => 'textarea',
              'title'       => esc_html__('Description', 'elearni')
              ),
            )
          ),
  
          # Product New Label
           array(
              'id'         => 'product-new-label',
              'type'       => 'switcher',
              'title'      => esc_html__('Add "New" label', 'elearni'),
          ), 
  
          array(
            'id'         => 'dt-single-product-size-guides',
            'type'       => 'select',
            'title'      => esc_html__('Product Size Guides', 'elearni'),
            'options'    => $size_guides,
            //'info'       => esc_html__('Choose product size guide that defined in admin section.', 'elearni')
          ),              
  
          array(
            'id'          => 'description',
            'type'        => 'textarea',
            'title'       => esc_html__('Description', 'elearni'),
            'info'       => esc_html__('This content will be used in description tab, when "Custom Template" is chosen.', 'elearni')
            ),
  
      )
    );
  
    $options[] = array(
      'id'        => '_custom_settings',
      'title'     => esc_html__('Product Settings','elearni'),
      'post_type' => 'product',
      'context'   => 'normal',
      'priority'  => 'high',
      'sections'  => array(
        $product_meta_layout_section
      )
    );
  
    $options[] = array(
      'id'        => '_360viewer_gallery',
      'title'     => esc_html__('Product 360 View Gallery','elearni'),
      'post_type' => 'product',
      'context'   => 'side',
      'priority'  => 'low',
      'sections'  => array(
                      array(
                      'name'   => '360view_section',
                      'fields' =>  array(
                                      array (
                                        'id'          => 'product-360view-gallery',
                                        'type'        => 'gallery',
                                        'title'       => esc_html__('Gallery Images', 'elearni'),
                                        'desc'        => esc_html__('Simply add images to gallery items.', 'elearni'),
                                        'add_title'   => esc_html__('Add Images', 'elearni'),
                                        'edit_title'  => esc_html__('Edit Images', 'elearni'),
                                        'clear_title' => esc_html__('Remove Images', 'elearni'),
                                      )
                                  )
                      )
                    )
      );
  
  
  }

// -----------------------------------------
// Header And Footer Options Metabox
// -----------------------------------------
$post_types = apply_filters( 'elearni_header_footer_default_cpt' , array ( 'post', 'page', 'product' )  );
$options[] = array(
	'id'	=> '_dt_custom_settings',
	'title'	=> esc_html__('Header & Footer','elearni'),
	'post_type' => $post_types,
	'priority'  => 'high',
	'context'   => 'side', 
	'sections'  => array(
	
		# Header Settings
		array(
			'name'  => 'header_section',
			'title' => esc_html__('Header', 'elearni'),
			'icon'  => 'fa fa-angle-double-right',
			'fields' =>  array(
			
				# Header Show / Hide
				array(
					'id'		=> 'show-header',
					'type'		=> 'switcher',
					'title'		=> esc_html__('Show Header', 'elearni'),
					'default'	=>  true,
				),
				
				# Header
				array(
					'id'  		 => 'header',
					'type'  	 => 'select',
					'title' 	 => esc_html__('Choose Header', 'elearni'),
					'class'		 => 'chosen',
					'options'	 => 'posts',
					'query_args' => array(
						'post_type'	 => 'dt_headers',
						'orderby'	 => 'ID',
						'order'		 => 'ASC',
						'posts_per_page' => -1,
					),
					'default_option' => esc_attr__('Select Header', 'elearni'),
					'attributes' => array( 'style'	=> 'width:50%' ),
					'info'		 => esc_html__('Select custom header for this page.','elearni'),
					'dependency'	=> array( 'show-header', '==', 'true' )
				),							
			)			
		),
		# Header Settings

		# Footer Settings
		array(
			'name'  => 'footer_settings',
			'title' => esc_html__('Footer', 'elearni'),
			'icon'  => 'fa fa-angle-double-right',
			'fields' =>  array(
			
				# Footer Show / Hide
				array(
					'id'		=> 'show-footer',
					'type'		=> 'switcher',
					'title'		=> esc_html__('Show Footer', 'elearni'),
					'default'	=>  true,
				),
				
				# Footer
		        array(
					'id'         => 'footer',
					'type'       => 'select',
					'title'      => esc_html__('Choose Footer', 'elearni'),
					'class'      => 'chosen',
					'options'    => 'posts',
					'query_args' => array(
						'post_type'  => 'dt_footers',
						'orderby'    => 'ID',
						'order'      => 'ASC',
						'posts_per_page' => -1,
					),
					'default_option' => esc_attr__('Select Footer', 'elearni'),
					'attributes' => array( 'style'  => 'width:50%' ),
					'info'       => esc_html__('Select custom footer for this page.','elearni'),
					'dependency'    => array( 'show-footer', '==', 'true' )
				),			
			)			
		),
		# Footer Settings
		
	)	
);
	
CSFramework_Metabox::instance( $options );