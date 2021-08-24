<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => constant('ELEARNI_THEME_NAME').' '.esc_html__('Options', 'elearni'),
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => sprintf(esc_html__('Designthemes Framework %sby Designthemes%s', 'elearni'),'<small>','</small>')
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
  'name'        => 'general',
  'title'       => esc_html__('General', 'elearni'),
  'icon'        => 'fa fa-gears',

  'fields'      => array(

	array(
	  'type'    => 'subheading',
	  'content' => esc_html__( 'General Options', 'elearni' ),
	),
	
	array(
		'id'	=> 'header',
		'type'	=> 'select',
		'title'	=> esc_html__('Site Header', 'elearni'),
		'class'	=> 'chosen',
		'options'	=> 'posts',
		'query_args'	=> array(
			'post_type'	=> 'dt_headers',
			'orderby'	=> 'title',
			'order'	=> 'ASC',
			'posts_per_page' => -1
		),
		'default_option'	=> esc_attr__('Select Header', 'elearni'),
		'attributes'	=> array ( 'style'	=> 'width:50%'),
		'info'	=> esc_html__('Select default header.','elearni'),
	),
	
	array(
		'id'	=> 'footer',
		'type'	=> 'select',
		'title'	=> esc_html__('Site Footer', 'elearni'),
		'class'	=> 'chosen',
		'options'	=> 'posts',
		'query_args'	=> array(
			'post_type'	=> 'dt_footers',
			'orderby'	=> 'title',
			'order'	=> 'ASC',
			'posts_per_page' => -1
		),
		'default_option'	=> esc_attr__('Select Footer', 'elearni'),
		'attributes'	=> array ( 'style'	=> 'width:50%'),
		'info'	=> esc_html__('Select defaultfooter.','elearni'),
	),

	array(
	  'id'  	 => 'use-site-loader',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Site Loader', 'elearni'),
	  'info'	 => esc_html__('YES! to use site loader.', 'elearni')
	),	

	array(
	  'id'  	 => 'enable-stylepicker',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Style Picker', 'elearni'),
	  'info'	 => esc_html__('YES! to show the style picker.', 'elearni')
	),		

	array(
	  'id'  	 => 'show-pagecomments',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Globally Show Page Comments', 'elearni'),
	  'info'	 => esc_html__('YES! to show comments on all the pages. This will globally override your "Allow comments" option under your page "Discussion" settings.', 'elearni'),
	  'default'  => true,
	),

	array(
	  'id'  	 => 'showall-pagination',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Show all pages in Pagination', 'elearni'),
	  'info'	 => esc_html__('YES! to show all the pages instead of dots near the current page.', 'elearni')
	),



	array(
	  'id'      => 'google-map-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Google Map API Key', 'elearni'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid google account api key here', 'elearni').'</p>',
	),

	array(
	  'id'      => 'mailchimp-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Mailchimp API Key', 'elearni'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid mailchimp account api key here', 'elearni').'</p>',
	),

  ),
);

$options[]      = array(
  'name'        => 'layout_options',
  'title'       => esc_html__('Layout Options', 'elearni'),
  'icon'        => 'dashicons dashicons-exerpt-view',
  'sections' => array(

	// -----------------------------------------
	// Header Options
	// -----------------------------------------
	array(
	  'name'      => 'breadcrumb_options',
	  'title'     => esc_html__('Breadcrumb Options', 'elearni'),
	  'icon'      => 'fa fa-sitemap',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Breadcrumb Options", 'elearni' ),
		  ),

		  array(
			'id'  		 => 'show-breadcrumb',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Breadcrumb', 'elearni'),
			'info'		 => esc_html__('YES! to display breadcrumb for all pages.', 'elearni'),
			'default' 	 => true,
		  ),

		  array(
			'id'           => 'breadcrumb-delimiter',
			'type'         => 'icon',
			'title'        => esc_html__('Breadcrumb Delimiter', 'elearni'),
			'info'         => esc_html__('Choose delimiter style to display on breadcrumb section.', 'elearni'),
		  ),

		  array(
			'id'           => 'breadcrumb-style',
			'type'         => 'select',
			'title'        => esc_html__('Breadcrumb Style', 'elearni'),
			'options'      => array(
			  'default' 							=> esc_html__('Default', 'elearni'),
			  'aligncenter'    						=> esc_html__('Align Center', 'elearni'),
			  'alignright'  						=> esc_html__('Align Right', 'elearni'),
			  'breadcrumb-left'    					=> esc_html__('Left Side Breadcrumb', 'elearni'),
			  'breadcrumb-right'     				=> esc_html__('Right Side Breadcrumb', 'elearni'),
			  'breadcrumb-top-right-title-center'  	=> esc_html__('Top Right Title Center', 'elearni'),
			  'breadcrumb-top-left-title-center'  	=> esc_html__('Top Left Title Center', 'elearni'),
			),
			'class'        => 'chosen',
			'default'      => 'default',
			'info'         => esc_html__('Choose alignment style to display on breadcrumb section.', 'elearni'),
		  ),

		  array(
			  'id'                 => 'breadcrumb-position',
			  'type'               => 'select',
			  'title'              => esc_html__('Position', 'elearni' ),
			  'options'            => array(
				  'header-top-absolute'    => esc_html__('Behind the Header','elearni'),
				  'header-top-relative'    => esc_html__('Default','elearni'),
			  ),
			  'class'        => 'chosen',
			  'default'      => 'header-top-relative',
			  'info'         => esc_html__('Choose position of breadcrumb section.', 'elearni'),
		  ),

		  array(
			'id'    => 'breadcrumb_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'elearni'),
			'desc'  => esc_html__('Choose background options for breadcrumb title section.', 'elearni'),
			'default' => array (
				'image' => ELEARNI_THEME_URI . '/images/breadcrumb.png',
			  	'repeat'   	  => 'repeat',
			  	'attachment'  => 'fixed',
			  	'position'    => 'left top',
			  	'color'	   	  => '#222222',
		  	),

		  ),

		),
	),

  ),
);

$options[]      = array(
  'name'        => 'allpage_options',
  'title'       => esc_html__('All Page Options', 'elearni'),
  'icon'        => 'fa fa-files-o',
  'sections' => array(

	// -----------------------------------------
	// Blog Archive Options
	// -----------------------------------------
	array(
	  'name'      => 'blog_archive_options',
	  'title'     => esc_html__('Blog Archive Options', 'elearni'),
	  'icon'      => 'fa fa-file-archive-o',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Blog Archives Page Layout", 'elearni' ),
		  ),

		  array(
			'id'      	 => 'blog-archives-page-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Page Layout', 'elearni'),
			'options'    => array(
			  'content-full-width'   => ELEARNI_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => ELEARNI_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => ELEARNI_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => ELEARNI_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'blog-archives-page-layout',
			),
		  ),

		  array(
			'id'  		 => 'show-standard-left-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Left Sidebar', 'elearni'),
			'dependency' => array( 'blog-archives-page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 => 'show-standard-right-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Right Sidebar', 'elearni'),
			'dependency' => array( 'blog-archives-page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'      	   => 'blog-post-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Post Layout', 'elearni'),
			'options'      => array(
			  'entry-grid'  => ELEARNI_THEME_URI . '/cs-framework-override/images/entry-grid.png',
			  'entry-list'  => ELEARNI_THEME_URI . '/cs-framework-override/images/entry-list.png',			  
			  'entry-cover' => ELEARNI_THEME_URI . '/cs-framework-override/images/entry-cover.png',
			),
			'default'      => 'entry-grid',
			'attributes'   => array(
			  'data-depend-id' => 'blog-post-layout',
			),
		  ),

		  array(
			'id'           => 'blog-post-grid-list-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'elearni'),
			'options'      => array(
			  'dt-sc-boxed' 			=> esc_html__('Boxed', 'elearni'),
			  'dt-sc-simple'      		=> esc_html__('Simple', 'elearni'),
			  'dt-sc-overlap'      		=> esc_html__('Overlap', 'elearni'),
			  'dt-sc-content-overlay' 	=> esc_html__('Content Overlay', 'elearni'),
			  'dt-sc-simple-withbg'		=> esc_html__('Simple with Background', 'elearni'),
			  'dt-sc-overlay'   	    => esc_html__('Overlay', 'elearni'),
			  'dt-sc-overlay-ii'      	=> esc_html__('Overlay II', 'elearni'),			  
			  'dt-sc-overlay-iii'      	=> esc_html__('Overlay III', 'elearni'),			  
			  'dt-sc-alternate'	 		=> esc_html__('Alternate', 'elearni'),
			  'dt-sc-minimal'       	=> esc_html__('Minimal', 'elearni'),
			  'dt-sc-modern' 	      	=> esc_html__('Modern', 'elearni'),
			  'dt-sc-classic'	 		=> esc_html__('Classic', 'elearni'),
			  'dt-sc-classic-ii'	 	=> esc_html__('Classic II', 'elearni'),
			  'dt-sc-classic-overlay' 	=> esc_html__('Classic Overlay', 'elearni'),
			  'dt-sc-grungy-boxed' 		=> esc_html__('Grungy Boxed', 'elearni'),
			  'dt-sc-title-overlap'	 	=> esc_html__('Title Overlap', 'elearni'),
			),
			'class'        => 'chosen',
			'default'      => 'dt-sc-boxed',
			'info'         => esc_html__('Choose post style to display blog archives pages.', 'elearni'),
			'dependency'   => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
		  ),

		  array(
			'id'           => 'blog-post-cover-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'elearni'),
			'options'      => array(
			  'dt-sc-boxed' 			=> esc_html__('Boxed', 'elearni'),
			  'dt-sc-canvas'      		=> esc_html__('Canvas', 'elearni'),
			  'dt-sc-content-overlay' 	=> esc_html__('Content Overlay', 'elearni'),
			  'dt-sc-overlay'   	    => esc_html__('Overlay', 'elearni'),
			  'dt-sc-overlay-ii'      	=> esc_html__('Overlay II', 'elearni'),
			  'dt-sc-overlay-iii'      	=> esc_html__('Overlay III', 'elearni'),
			  'dt-sc-trendy' 			=> esc_html__('Trendy', 'elearni'),
			  'dt-sc-mobilephone' 		=> esc_html__('Mobile Phone', 'elearni'),
			),
			'class'        => 'chosen',
			'default'      => 'dt-sc-boxed',
			'info'         => esc_html__('Choose post style to display blog archives pages.', 'elearni'),
			'dependency'   => array( 'blog-post-layout', '==', 'entry-cover' ),
		  ),

		  array(
			'id'      	   => 'blog-post-columns',
			'type'         => 'image_select',
			'title'        => esc_html__('Columns', 'elearni'),
			'options'      => array(
			  'one-column' 		  => ELEARNI_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => ELEARNI_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => ELEARNI_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  //'one-fourth-column' => ELEARNI_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
			),
			'default'      => 'one-third-column',
			'attributes'   => array(
			  'data-depend-id' => 'blog-post-columns',
			),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		  ),

		  array(
			'id'      	   => 'blog-list-thumb',
			'type'         => 'image_select',
			'title'        => esc_html__('List Type', 'elearni'),
			'options'      => array(
			  'entry-left-thumb'  => ELEARNI_THEME_URI . '/cs-framework-override/images/entry-left-thumb.png',
			  'entry-right-thumb' => ELEARNI_THEME_URI . '/cs-framework-override/images/entry-right-thumb.png',
			),
			'default'      => 'entry-left-thumb',
			'attributes'   => array(
			  'data-depend-id' => 'blog-list-thumb',
			),
			'dependency' => array( 'blog-post-layout', '==', 'entry-list' ),
		  ),

		  array(
			'id'           => 'blog-alignment',
			'type'         => 'select',
			'title'        => esc_html__('Elements Alignment', 'elearni'),
			'options'      => array(
			  'alignnone'	=> esc_html__('None', 'elearni'),
			  'alignleft' 	=> esc_html__('Align Left', 'elearni'),
			  'aligncenter' => esc_html__('Align Center', 'elearni'),
			  'alignright'  => esc_html__('Align Right', 'elearni'),
			),
			'class'        => 'chosen',
			'default'      => 'alignnone',
			'info'         => esc_html__('Choose alignment to display archives pages.', 'elearni'),
			'dependency'   => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		  ),

		  array(
			'id'  		 => 'enable-equal-height',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Equal Height', 'elearni'),
			'info'		 => esc_html__('YES! to items display as equal height', 'elearni'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		  ),

		  array(
			'id'  		 => 'enable-no-space',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable No Space', 'elearni'),
			'info'		 => esc_html__('YES! to items display as no space', 'elearni'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		  ),

		  array(
			'id'  		 => 'enable-gallery-slider',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Display Gallery Slider', 'elearni'),
			'info'		 => esc_html__('YES! to display gallery slider', 'elearni'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
		  ),

		  array(
			'id'             => 'blog-elements-position',
			'type'           => 'sorter',
			'title'          => esc_html__('Elements Positioning', 'elearni'),
			'default'        => array(
			  'enabled'      => array(
					'feature_image'	=> esc_html__('Feature Image', 'elearni'),
					'date'     		=> esc_html__('Date', 'elearni'),
					'title'      	=> esc_html__('Title', 'elearni'),
					'read_more'  	=> esc_html__('Read More', 'elearni'),
			  ),
			  'disabled'     => array(
					'author'		=> esc_html__('Author', 'elearni'),
					'content'    	=> esc_html__('Content', 'elearni'),					
					'meta_group' 	=> esc_html__('Meta Group', 'elearni'),
					'comments' 		=> esc_html__('Comments', 'elearni'),
					'categories'    => esc_html__('Categories', 'elearni'),
					'tags'  		=> esc_html__('Tags', 'elearni'),
					'social_share'  => esc_html__('Social Share', 'elearni'),
					'likes_views'   => esc_html__('Likes & Views', 'elearni'),
			  ),
			),
			'enabled_title'  	=> esc_html__('Active Elements', 'elearni'),
			'disabled_title' 	=> esc_html__('Deactive Elements', 'elearni'),
		  ),

		  array(
			'id'             => 'blog-meta-position',
			'type'           => 'sorter',
			'title'          => esc_html__('Meta Group Positioning', 'elearni'),
			'default'        => array(
			  'enabled'      => array(
				'author'		=> esc_html__('Author', 'elearni'),
				'date'     		=> esc_html__('Date', 'elearni'),
				'comments' 		=> esc_html__('Comments', 'elearni'),
				'categories'    => esc_html__('Categories', 'elearni'),
			  ),
			  'disabled'     => array(
				'tags'  		=> esc_html__('Tags', 'elearni'),
				'social_share'  => esc_html__('Social Share', 'elearni'),
				'likes_views'   => esc_html__('Likes & Views', 'elearni'),
			  ),
			),
			'enabled_title'  => esc_html__('Active Items', 'elearni'),
			'disabled_title' => esc_html__('Deactive Items', 'elearni'),
			'desc'  		 => esc_html__('Note: Use max 3 items for better results.', 'elearni')
		  ),

		  array(
			'id'  		 => 'enable-post-format',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Post Format', 'elearni'),
			'info'		 => esc_html__('YES! to display post format icon', 'elearni'),
		  ),

		  array(
			'id'  		 => 'enable-excerpt-text',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Excerpt Text', 'elearni'),
			'info'		 => esc_html__('YES! to display excerpt content', 'elearni'),
			'default'    => true,
		  ),

		  array(
			'id'  		 => 'blog-excerpt-length',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'elearni'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'elearni').'</span>',
			'default' 	 => 25,
			'dependency' => array( 'enable-excerpt-text', '==', 'true' ),
		  ),

		  array(
			'id'  		 => 'enable-video-audio',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Display Video & Audio for Posts', 'elearni'),
			'info'		 => esc_html__('YES! to display video & audio, instead of feature image for posts', 'elearni'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
		  ),

		  array(
			'id'  		 => 'blog-readmore-text',
			'type'  	 => 'text',
			'title' 	 => esc_html__('Read More Text', 'elearni'),
			'info'		 => esc_html__('Put the read more text here', 'elearni'),
			'default'	 => esc_html__('Read More', 'elearni')
		  ),

		  array(
			'id'           => 'blog-image-hover-style',
			'type'         => 'select',
			'title'        => esc_html__('Image Hover Style', 'elearni'),
			'options'      => array(
			  'dt-sc-default' 			=> esc_html__('Default', 'elearni'),
			  'dt-sc-blur'      		=> esc_html__('Blur', 'elearni'),
			  'dt-sc-bw'   		   		=> esc_html__('Black and White', 'elearni'),
			  'dt-sc-brightness'	 	=> esc_html__('Brightness', 'elearni'),
			  'dt-sc-fadeinleft'   	    => esc_html__('Fade InLeft', 'elearni'),
			  'dt-sc-fadeinright'  	    => esc_html__('Fade InRight', 'elearni'),
			  'dt-sc-hue-rotate'   	    => esc_html__('Hue-Rotate', 'elearni'),
			  'dt-sc-invert'	   	    => esc_html__('Invert', 'elearni'),
			  'dt-sc-opacity'   	    => esc_html__('Opacity', 'elearni'),
			  'dt-sc-rotate'	   	    => esc_html__('Rotate', 'elearni'),
			  'dt-sc-rotate-alt'   	    => esc_html__('Rotate Alt', 'elearni'),
			  'dt-sc-scalein'   	    => esc_html__('Scale In', 'elearni'),
			  'dt-sc-scaleout' 	    	=> esc_html__('Scale Out', 'elearni'),
			  'dt-sc-sepia'	   	    	=> esc_html__('Sepia', 'elearni'),
			  'dt-sc-tint'		   	    => esc_html__('Tint', 'elearni'),
			),
			'class'        => 'chosen',
			'default'      => 'dt-sc-default',
			'info'         => esc_html__('Choose image hover style to display archives pages.', 'elearni'),
		  ),

		  array(
			'id'           => 'blog-image-overlay-style',
			'type'         => 'select',
			'title'        => esc_html__('Image Overlay Style', 'elearni'),
			'options'      => array(
			  'dt-sc-default' 			=> esc_html__('None', 'elearni'),
			  'dt-sc-fixed' 			=> esc_html__('Fixed', 'elearni'),
			  'dt-sc-tb' 				=> esc_html__('Top to Bottom', 'elearni'),
			  'dt-sc-bt'   				=> esc_html__('Bottom to Top', 'elearni'),
			  'dt-sc-rl'   				=> esc_html__('Right to Left', 'elearni'),
			  'dt-sc-lr'				=> esc_html__('Left to Right', 'elearni'),
			  'dt-sc-middle'			=> esc_html__('Middle', 'elearni'),
			  'dt-sc-middle-radial'		=> esc_html__('Middle Radial', 'elearni'),
			  'dt-sc-tb-gradient' 		=> esc_html__('Gradient - Top to Bottom', 'elearni'),
			  'dt-sc-bt-gradient'   	=> esc_html__('Gradient - Bottom to Top', 'elearni'),
			  'dt-sc-rl-gradient'   	=> esc_html__('Gradient - Right to Left', 'elearni'),
			  'dt-sc-lr-gradient'		=> esc_html__('Gradient - Left to Right', 'elearni'),
			  'dt-sc-radial-gradient'	=> esc_html__('Gradient - Radial', 'elearni'),
			  'dt-sc-flash' 			=> esc_html__('Flash', 'elearni'),
			  'dt-sc-circle' 			=> esc_html__('Circle', 'elearni'),
			  'dt-sc-hm-elastic'		=> esc_html__('Horizontal Elastic', 'elearni'),
			  'dt-sc-vm-elastic'		=> esc_html__('Vertical Elastic', 'elearni'),
			),
			'class'        => 'chosen',
			'default'      => '',
			'info'         => esc_html__('Choose image overlay style to display archives pages.', 'elearni'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
		  ),

		  array(
			'id'           => 'blog-pagination',
			'type'         => 'select',
			'title'        => esc_html__('Pagination Style', 'elearni'),
			'options'      => array(
			  'older_newer' 	=> esc_html__('Older & Newer', 'elearni'),
			  'numbered'      	=> esc_html__('Numbered', 'elearni'),
			  'load_more'      	=> esc_html__('Load More', 'elearni'),
			  'infinite_scroll'	=> esc_html__('Infinite Scroll', 'elearni'),
			),
			'class'        => 'chosen',
			'default'      => 'numbered',
			'info'         => esc_html__('Choose pagination style to display archives pages.', 'elearni'),
		  ),

		),
	),

	// -----------------------------------------
	// Blog Single Options
	// -----------------------------------------
	array(
	  'name'      => 'blog_single_options',
	  'title'     => esc_html__('Blog Single Options', 'elearni'),
	  'icon'      => 'fas fa-thumbtack',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Blog Single Post Options", 'elearni' ),
		  ),

		  array(
			'id'             => 'post-elements-position',
			'type'           => 'sorter',
			'title'          => esc_html__('Post Elements Positioning', 'elearni'),
			'default'        => array(
			  'enabled'      => array(
					'feature_image'	=> esc_html__('Feature Image', 'elearni'),
					'content'    	=> esc_html__('Content', 'elearni'),
					'meta_group' 	=> esc_html__('Meta Group', 'elearni'),
					'navigation'    => esc_html__('Navigation', 'elearni'),
					'author_bio' 	=> esc_html__('Author Bio', 'elearni'),
					'comment_box' 	=> esc_html__('Comment Box', 'elearni'),
					'related_posts' => esc_html__('Related Posts', 'elearni'),
			  ),
			  'disabled'     => array(
					
					'title'      	=> esc_html__('Title', 'elearni'),
					'author'		=> esc_html__('Author', 'elearni'),					
					'date'     		=> esc_html__('Date', 'elearni'),
					'comments' 		=> esc_html__('Comments', 'elearni'),
					'categories'    => esc_html__('Categories', 'elearni'),
					'tags'  		=> esc_html__('Tags', 'elearni'),
					'social_share'  => esc_html__('Social Share', 'elearni'),
					'likes_views'   => esc_html__('Likes & Views', 'elearni'),
					'related_article' 	=> esc_html__('Related Article( Only Fixed )', 'elearni'),					
			  ),
			),
			'enabled_title'  => esc_html__('Active Elements', 'elearni'),
			'disabled_title' => esc_html__('Deactive Elements', 'elearni'),
		  ),

		  array(
			'id'             => 'post-meta-position',
			'type'           => 'sorter',
			'title'          => esc_html__('Meta Group Positioning', 'elearni'),
			'default'        => array(
			  'enabled'      => array(
					'author'		=> esc_html__('Author', 'elearni'),
					'date'     		=> esc_html__('Date', 'elearni'),
					'comments' 		=> esc_html__('Comments', 'elearni'),
					'likes_views'   => esc_html__('Likes & Views', 'elearni'),
			  ),
			  'disabled'     => array(
					'tags'  		=> esc_html__('Tags', 'elearni'),
					'social_share'  => esc_html__('Social Share', 'elearni'),
					'categories'    => esc_html__('Categories', 'elearni'),
			  ),
			),
			'enabled_title'  => esc_html__('Active Items', 'elearni'),
			'disabled_title' => esc_html__('Deactive Items', 'elearni'),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Related Post Options", 'elearni' ),
		  ),

		  array(
			'id'  		 => 'post-related-title',
			'type'  	 => 'text',
			'title' 	 => esc_html__('Related Posts Section Title', 'elearni'),
			'info'		 => esc_html__('Put the related posts section title here', 'elearni'),
			'default'	 => esc_html__('Related Posts', 'elearni')
		  ),

		  array(
			'id'      	   => 'post-related-columns',
			'type'         => 'image_select',
			'title'        => esc_html__('Columns', 'elearni'),
			'options'      => array(
			  'one-column' 		  => ELEARNI_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => ELEARNI_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => ELEARNI_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  //'one-fourth-column' => ELEARNI_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
			),
			'default'      => 'one-third-column',
			'attributes'   => array(
			  'data-depend-id' => 'post-related-columns',
			),
		  ),

		  array(
			'id'  		 => 'post-related-count',
			'type'  	 => 'number',
			'title' 	 => esc_html__('No.of Posts to Show', 'elearni'),
			'info'		 => esc_html__('Put the no.of related posts to show', 'elearni'),
			'default'	 => 3
		  ),

		  array(
			'id'  		 => 'enable-related-excerpt',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Excerpt Text', 'elearni'),
			'info'		 => esc_html__('YES! to display excerpt content', 'elearni'),
		  ),

		  array(
			'id'  		 => 'post-related-excerpt',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'elearni'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'elearni').'</span>',
			'default' 	 => 25,
			'dependency' => array( 'enable-related-excerpt', '==', 'true' ),
		  ),

		  array(
			'id'  		 => 'enable-related-carousel',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Carousel', 'elearni'),
			'info'		 => esc_html__('YES! to enable carousel related posts', 'elearni'),
		  ),

		  array(
			'id'           => 'related-carousel-nav',
			'type'         => 'select',
			'title'        => esc_html__('Navigation Style', 'elearni'),
			'options'      => array(
			  '' 			=> esc_html__('None', 'elearni'),
			  'navigation'  => esc_html__('Navigations', 'elearni'),
			  'pager'   	=> esc_html__('Pager', 'elearni'),
			),
			'class'        => 'chosen',
			'default'      => 'text',
			'info'         => esc_html__('Choose navigation style to display related post carousel.', 'elearni'),
			'dependency' => array( 'enable-related-carousel', '==', 'true' ),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Miscellaneous Post Options", 'elearni' ),
		  ),

		  array(
			'id'  		 => 'enable-image-lightbox',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Feature Image Lightbox', 'elearni'),
			'info'		 => esc_html__('YES! to enable lightbox for feature image.', 'elearni'),
		  ),

		  array(
			'id'           => 'post-comments-list-style',
			'type'         => 'select',
			'title'        => esc_html__('Comments List Style', 'elearni'),
			'options'      => array(
			  'rounded' 	=> esc_html__('Rounded', 'elearni'),
			  'square'   	=> esc_html__('Square', 'elearni'),
			),
			'class'        => 'chosen',
			'default'      => 'rounded',
			'info'         => esc_html__('Choose comments list style to display single post.', 'elearni'),
		  ),
		),
	),

	// -----------------------------------------
	// 404 Options
	// -----------------------------------------
	array(
	  'name'      => '404_options',
	  'title'     => esc_html__('404 Options', 'elearni'),
	  'icon'      => 'fa fa-warning',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "404 Message", 'elearni' ),
		  ),
		  
		  array(
			'id'      => 'enable-404message',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Message', 'elearni' ),
			'info'	  => esc_html__('YES! to enable not-found page message.', 'elearni'),
			'default' => true
		  ),

		  array(
			'id'           => 'notfound-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'elearni'),
			'options'      => array(
			  'type1' 	   => esc_html__('Modern', 'elearni'),
			  'type2'      => esc_html__('Classic', 'elearni'),
			  'type4'  	   => esc_html__('Diamond', 'elearni'),
			  'type5'      => esc_html__('Shadow', 'elearni'),
			  'type6'      => esc_html__('Diamond Alt', 'elearni'),
			  'type7'  	   => esc_html__('Stack', 'elearni'),
			  'type8'  	   => esc_html__('Minimal', 'elearni'),
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of not-found template page.', 'elearni')
		  ),

		  array(
			'id'      => 'notfound-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('404 Dark BG', 'elearni' ),
			'info'	  => esc_html__('YES! to use dark bg notfound page for this site.', 'elearni')
		  ),

		  array(
			'id'           => 'notfound-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'elearni'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'elearni'),
			'info'       	 => esc_html__('Choose the page for not-found content.', 'elearni')
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Background Options", 'elearni' ),
		  ),

		  array(
			'id'    => 'notfound_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'elearni')
		  ),

		  array(
			'id'  		 => 'notfound-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'elearni'),
			'info'		 => esc_html__('Paste custom CSS styles for not found page.', 'elearni')
		  ),

		),
	),

	// -----------------------------------------
	// Underconstruction Options
	// -----------------------------------------
	array(
	  'name'      => 'comingsoon_options',
	  'title'     => esc_html__('Under Construction Options', 'elearni'),
	  'icon'      => 'fa fa-thumbs-down',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Under Construction", 'elearni' ),
		  ),
	
		  array(
			'id'      => 'enable-comingsoon',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Coming Soon', 'elearni' ),
			'info'	  => esc_html__('YES! to check under construction page of your website.', 'elearni')
		  ),
	
		  array(
			'id'           => 'comingsoon-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'elearni'),
			'options'      => array(
			  'type1' 	   => esc_html__('Diamond', 'elearni'),
			  'type2'      => esc_html__('Teaser', 'elearni'),
			  'type3'  	   => esc_html__('Minimal', 'elearni'),
			  'type4'      => esc_html__('Counter Only', 'elearni'),
			  'type5'      => esc_html__('Belt', 'elearni'),
			  'type6'  	   => esc_html__('Classic', 'elearni'),
			  'type7'  	   => esc_html__('Boxed', 'elearni')
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of coming soon template.', 'elearni'),
		  ),

		  array(
			'id'      => 'uc-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('Coming Soon Dark BG', 'elearni' ),
			'info'	  => esc_html__('YES! to use dark bg coming soon page for this site.', 'elearni')
		  ),

		  array(
			'id'           => 'comingsoon-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'elearni'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'elearni'),
			'info'       	 => esc_html__('Choose the page for comingsoon content.', 'elearni')
		  ),

		  array(
			'id'      => 'show-launchdate',
			'type'    => 'switcher',
			'title'   => esc_html__('Show Launch Date', 'elearni' ),
			'info'	  => esc_html__('YES! to show launch date text.', 'elearni'),
		  ),

		  array(
			'id'      => 'comingsoon-launchdate',
			'type'    => 'text',
			'title'   => esc_html__('Launch Date', 'elearni'),
			'attributes' => array( 
			  'placeholder' => '10/30/2016 12:00:00'
			),
			'after' 	=> '<p class="cs-text-info">'.esc_html__('Put Format: 12/30/2016 12:00:00 month/day/year hour:minute:second', 'elearni').'</p>',
		  ),

		  array(
			'id'           => 'comingsoon-timezone',
			'type'         => 'select',
			'title'        => esc_html__('UTC Timezone', 'elearni'),
			'options'      => array(
			  '-12' => '-12', '-11' => '-11', '-10' => '-10', '-9' => '-9', '-8' => '-8', '-7' => '-7', '-6' => '-6', '-5' => '-5', 
			  '-4' => '-4', '-3' => '-3', '-2' => '-2', '-1' => '-1', '0' => '0', '+1' => '+1', '+2' => '+2', '+3' => '+3', '+4' => '+4',
			  '+5' => '+5', '+6' => '+6', '+7' => '+7', '+8' => '+8', '+9' => '+9', '+10' => '+10', '+11' => '+11', '+12' => '+12'
			),
			'class'        => 'chosen',
			'default'      => '0',
			'info'         => esc_html__('Choose utc timezone, by default UTC:00:00', 'elearni'),
		  ),

		  array(
			'id'    => 'comingsoon_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'elearni')
		  ),

		  array(
			'id'  		 => 'comingsoon-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'elearni'),
			'info'		 => esc_html__('Paste custom CSS styles for under construction page.', 'elearni'),
		  ),

		),
	),

  ),
);

// -----------------------------------------
// Widget area Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'widgetarea_options',
  'title'       => esc_html__('Widget Area', 'elearni'),
  'icon'        => 'fa fa-trello',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Widget Area for Sidebar", 'elearni' ),
	  ),

	  array(
		'id'           => 'wtitle-style',
		'type'         => 'select',
		'title'        => esc_html__('Sidebar widget Title Style', 'elearni'),
		'options'      => array(
		  'default' => esc_html__('Choose any type', 'elearni'),
		  'type1' 	   => esc_html__('Double Border', 'elearni'),
		  'type2'      => esc_html__('Tooltip', 'elearni'),
		  'type3'  	   => esc_html__('Title Top Border', 'elearni'),
		  'type4'      => esc_html__('Left Border & Pattren', 'elearni'),
		  'type5'      => esc_html__('Bottom Border', 'elearni'),
		  'type6'  	   => esc_html__('Tooltip Border', 'elearni'),
		  'type7'  	   => esc_html__('Boxed Modern', 'elearni'),
		  'type8'  	   => esc_html__('Elegant Border', 'elearni'),
		  'type9' 	   => esc_html__('Needle', 'elearni'),
		  'type10' 	   => esc_html__('Ribbon', 'elearni'),
		  'type11' 	   => esc_html__('Content Background', 'elearni'),
		  'type12' 	   => esc_html__('Classic BG', 'elearni'),
		  'type13' 	   => esc_html__('Tiny Boders', 'elearni'),
		  'type14' 	   => esc_html__('BG & Border', 'elearni'),
		  'type15' 	   => esc_html__('Classic BG Alt', 'elearni'),
		  'type16' 	   => esc_html__('Left Border & BG', 'elearni'),
		  'type17' 	   => esc_html__('Basic', 'elearni'),
		  'type18' 	   => esc_html__('BG & Pattern', 'elearni'),
		),
		'class'          => 'chosen',
		'default' 		 =>  'default',
		'info'           => esc_html__('Choose the style of sidebar widget title.', 'elearni')
	  ),

	  array(
		'id'              => 'widgetarea-custom',
		'type'            => 'group',
		'title'           => esc_html__('Custom Widget Area', 'elearni'),
		'button_title'    => esc_html__('Add New', 'elearni'),
		'accordion_title' => esc_html__('Add New Widget Area', 'elearni'),
		'fields'          => array(

		  array(
			'id'          => 'widgetarea-custom-name',
			'type'        => 'text',
			'title'       => esc_html__('Name', 'elearni'),
		  ),

		)
	  ),

	),
);

// -----------------------------------------
// Sociable Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'sociable_options',
  'title'       => esc_html__('Sociable', 'elearni'),
  'icon'        => 'fa fa-share-square',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Sociable", 'elearni' ),
	  ),

	  array(
		'id'              => 'sociable_fields',
		'type'            => 'group',
		'title'           => esc_html__('Sociable', 'elearni'),
		'info'            => esc_html__('Click button to add type of social & url.', 'elearni'),
		'button_title'    => esc_html__('Add New Social', 'elearni'),
		'accordion_title' => esc_html__('Adding New Social Field', 'elearni'),
		'fields'          => array(
		  array(
			'id'          => 'sociable_fields_type',
			'type'        => 'select',
			'title'       => esc_html__('Select Social', 'elearni'),
			'options'      => array(
			  'delicious' 	 => esc_html__('Delicious', 'elearni'),
			  'deviantart' 	 => esc_html__('Deviantart', 'elearni'),
			  'digg' 	  	 => esc_html__('Digg', 'elearni'),
			  'dribbble' 	 => esc_html__('Dribbble', 'elearni'),
			  'envelope' 	 => esc_html__('Envelope', 'elearni'),
			  'facebook' 	 => esc_html__('Facebook', 'elearni'),
			  'flickr' 		 => esc_html__('Flickr', 'elearni'),
			  'google-plus'  => esc_html__('Google Plus', 'elearni'),
			  'gtalk'  		 => esc_html__('GTalk', 'elearni'),
			  'instagram'	 => esc_html__('Instagram', 'elearni'),
			  'lastfm'	 	 => esc_html__('Lastfm', 'elearni'),
			  'linkedin'	 => esc_html__('Linkedin', 'elearni'),
			  'pinterest'	 => esc_html__('Pinterest', 'elearni'),
			  'reddit'		 => esc_html__('Reddit', 'elearni'),
			  'rss'		 	 => esc_html__('RSS', 'elearni'),
			  'skype'		 => esc_html__('Skype', 'elearni'),
			  'stumbleupon'	 => esc_html__('Stumbleupon', 'elearni'),
			  'tumblr'		 => esc_html__('Tumblr', 'elearni'),
			  'twitter'		 => esc_html__('Twitter', 'elearni'),
			  'viadeo'		 => esc_html__('Viadeo', 'elearni'),
			  'vimeo'		 => esc_html__('Vimeo', 'elearni'),
			  'yahoo'		 => esc_html__('Yahoo', 'elearni'),
			  'youtube'		 => esc_html__('Youtube', 'elearni'),
			),
			'class'        => 'chosen',
			'default'      => 'delicious',
		  ),

		  array(
			'id'          => 'sociable_fields_url',
			'type'        => 'text',
			'title'       => esc_html__('Enter URL', 'elearni')
		  ),
		)
	  ),

   ),
);

// -----------------------------------------
// Hook Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'hook_options',
  'title'       => esc_html__('Hooks', 'elearni'),
  'icon'        => 'fa fa-paperclip',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Top Hook", 'elearni' ),
	  ),

	  array(
		'id'  	=> 'enable-top-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Top Hook', 'elearni'),
		'info'	=> esc_html__("YES! to enable top hook.", 'elearni')
	  ),

	  array(
		'id'  		 => 'top-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Top Hook', 'elearni'),
		'info'		 => esc_html__('Paste your top hook, Executes after the opening &lt;body&gt; tag.', 'elearni')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content Before Hook", 'elearni' ),
	  ),

	  array(
		'id'  	=> 'enable-content-before-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content Before Hook', 'elearni'),
		'info'	=> esc_html__("YES! to enable content before hook.", 'elearni')
	  ),

	  array(
		'id'  		 => 'content-before-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content Before Hook', 'elearni'),
		'info'		 => esc_html__('Paste your content before hook, Executes before the opening &lt;#primary&gt; tag.', 'elearni')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content After Hook", 'elearni' ),
	  ),

	  array(
		'id'  	=> 'enable-content-after-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content After Hook', 'elearni'),
		'info'	=> esc_html__("YES! to enable content after hook.", 'elearni')
	  ),

	  array(
		'id'  		 => 'content-after-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content After Hook', 'elearni'),
		'info'		 => esc_html__('Paste your content after hook, Executes after the closing &lt;/#main&gt; tag.', 'elearni')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Bottom Hook", 'elearni' ),
	  ),

	  array(
		'id'  	=> 'enable-bottom-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Bottom Hook', 'elearni'),
		'info'	=> esc_html__("YES! to enable bottom hook.", 'elearni')
	  ),

	  array(
		'id'  		 => 'bottom-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Bottom Hook', 'elearni'),
		'info'		 => esc_html__('Paste your bottom hook, Executes after the closing &lt;/body&gt; tag.', 'elearni')
	  ),

  array(
		'id'  	=> 'enable-analytics-code',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Tracking Code', 'elearni'),
		'info'	=> esc_html__("YES! to enable site tracking code.", 'elearni')
	  ),

	  array(
		'id'  		 => 'analytics-code',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Google Analytics Tracking Code', 'elearni'),
		'info'		 => esc_html__('Either enter your Google tracking id (UA-XXXXX-X). If you want to offer your visitors the option to stop being tracked you can place the shortcode [dt_sc_privacy_google_tracking] somewhere on your site', 'elearni')
	  ),

   ),
);

// -----------------------------------------
// Custom Font Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'font_options',
  'title'       => esc_html__('Custom Fonts', 'elearni'),
  'icon'        => 'fa fa-font',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Fonts", 'elearni' ),
	  ),

	  array(
		'id'              => 'custom_font_fields',
		'type'            => 'group',
		'title'           => esc_html__('Custom Font', 'elearni'),
		'info'            => esc_html__('Click button to add font name & urls.', 'elearni'),
		'button_title'    => esc_html__('Add New Font', 'elearni'),
		'accordion_title' => esc_html__('Adding New Font Field', 'elearni'),
		'fields'          => array(
		  array(
			'id'          => 'custom_font_name',
			'type'        => 'text',
			'title'       => esc_html__('Font Name', 'elearni')
		  ),

		  array(
			'id'      => 'custom_font_woof',
			'type'    => 'upload',
			'title'   => esc_html__('Upload File (*.woff)', 'elearni'),
			'after'   => '<p class="cs-text-muted">'.esc_html__('You can upload custom font family (*.woff) file here.', 'elearni').'</p>',
		  ),

		  array(
			'id'      => 'custom_font_woof2',
			'type'    => 'upload',
			'title'   => esc_html__('Upload File (*.woff2)', 'elearni'),
			'after'   => '<p class="cs-text-muted">'.esc_html__('You can upload custom font family (*.woff2) file here.', 'elearni').'</p>',
		  )
		)
	  ),

   ),
);

// ------------------------------
// backup                       
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => esc_html__('Backup', 'elearni'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'elearni')
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// license
// ------------------------------
$options[]   = array(
  'name'     => 'theme_version',
  'title'    => constant('ELEARNI_THEME_NAME').esc_html__(' Log', 'elearni'),
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => constant('ELEARNI_THEME_NAME').esc_html__(' Theme Change Log', 'elearni')
    ),
    array(
      'type'    => 'content',
      'content' => '<pre>
	  *** Elearni WordPress Theme Changelog ***

	  2021.06.25 - version 2.2
		* Woocommerce template files update

	  2021.01.23 - version 2.1
		* Compatible with wordpress 5.6
		* Some design issues updated
		* Updated: All premium plugins

	 2020.11.30 - version 2.0
		* Latest jQuery fixes updated
		* Updated: All premium plugins

	  2020.08.13 - version 1.9
	  	* Compatible with wordpress 5.5	  

	  2020.08.05 - version 1.8

		* Updated: Envato Theme check
		* Updated: sanitize_text_field added
		* Updated: All wordpress theme standards
		* Updated: All premium plugins

	2020.07.29 - version 1.7
	
		* Updated: Course page responsive issue
		* Updated: Login page responsive issue
		* Updated: Font Awesome icons issue

	  2020.07.29 - version 1.6
		
		* Updated: Course page responsive issue
		* Updated: Login page responsive issue
		* Updated: Font Awesome icons issue

	 2020.06.30 - version 1.5
	  
	  * Compatible with wordpress 5.4.2
	  * Updated: All premium plugins
	  * Updated: Font Awesome icons 5 
	  * Updated: Vimeo video playing issue
	  * Updated: Kirki Fonts missing issue

	  2020.03.11 - version 1.4

		* Updated: All premium plugins
		* Updated: Design Fixes
		* Updated: Visual composer not working when activated LMS addon plugin

	  2020.02.01 - version 1.3

		* Compatible with wordpress 5.3.2
		* Updated: All premium plugins
		* Updated: All wordpress theme standards
		* Updated: Privacy and Cookies concept

		* Fixed: Privacy Button Issue

		* Improved: Single product breadcrumb section
		* Improved: Revisions options added for all custom posts

	  2019.11.25 - version 1.2
	  
		  * Compatible with wordpress 5.3
		  * Updated: All wordpress theme standards
		  * Updated: All premium plugins
		  * Updated: Revisions added to all custom post types
		  * Updated: Gutenberg editor support for custom post types
		  * Updated: Link for phone number module
		  * Updated: Online documentation link, check readme file
	  
		  * Fixed: Customizer logo option
		  * Fixed: Google Analytics issue
		  * Fixed: Mailchimp email client issue
		  * Fixed: Gutenberg check for old wordpress version
		  * Fixed: Edit with Visual Composer for portfolio
		  * Fixed: Header & Footer wpml option
		  * Fixed: Breadcrumb issue in services page
		  * Fixed: Site title color
		  * Fixed: Privacy popup bg color
		  * Fixed: 404 page scrolling issue
	  
		  * Improved: Tags taxonomy added for portfolio
		  * Improved: Woocommerce cart module added with custom class option
	  
		  * New: Whatsapp Shortcode
	  
	  2019.03.12 - version 1.1
	  
		  * Dummy Content 
	  
	  2019.03.11 - version 1.0
	  
		  * First release!
 * First release!  </pre>',
    ),

  )
);

// ------------------------------
// Seperator
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => esc_html__('Plugin Options', 'elearni'),
  'icon'   => 'fa fa-plug'
);

// -----------------------------------------
// Woocommerce Options
// -----------------------------------------
if( function_exists( 'is_woocommerce' ) ) {

	$product_style_templates = cs_get_option( 'dt-woo-product-style-templates' );
	$product_style_templates = (is_array($product_style_templates) && !empty($product_style_templates)) ? $product_style_templates : false;

	$product_style_templates_arr = array ();
	if($product_style_templates) {
		foreach($product_style_templates as $product_style_template_key => $product_style_template) {
			$product_style_templates_arr[$product_style_template_key] = $product_style_template['template-title'];
		}
	}

	$woo_page_layouts = array(
		'content-full-width'   => ELEARNI_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
		'with-left-sidebar'    => ELEARNI_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
		'with-right-sidebar'   => ELEARNI_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
	);

	$social_follow = array (
			  'delicious' 	 => esc_html__('Delicious', 'elearni'),
			  'deviantart' 	 => esc_html__('Deviantart', 'elearni'),
			  'digg' 	  	 => esc_html__('Digg', 'elearni'),
			  'dribbble' 	 => esc_html__('Dribbble', 'elearni'),
			  'envelope' 	 => esc_html__('Envelope', 'elearni'),
			  'facebook' 	 => esc_html__('Facebook', 'elearni'),
			  'flickr' 		 => esc_html__('Flickr', 'elearni'),
			  'google-plus'  => esc_html__('Google Plus', 'elearni'),
			  'gtalk'  		 => esc_html__('GTalk', 'elearni'),
			  'instagram'	 => esc_html__('Instagram', 'elearni'),
			  'lastfm'	 	 => esc_html__('Lastfm', 'elearni'),
			  'linkedin'	 => esc_html__('Linkedin', 'elearni'),
			  'pinterest'	 => esc_html__('Pinterest', 'elearni'),
			  'reddit'		 => esc_html__('Reddit', 'elearni'),
			  'rss'		 	 => esc_html__('RSS', 'elearni'),
			  'skype'		 => esc_html__('Skype', 'elearni'),
			  'stumbleupon'	 => esc_html__('Stumbleupon', 'elearni'),
			  'tumblr'		 => esc_html__('Tumblr', 'elearni'),
			  'twitter'		 => esc_html__('Twitter', 'elearni'),
			  'viadeo'		 => esc_html__('Viadeo', 'elearni'),
			  'vimeo'		 => esc_html__('Vimeo', 'elearni'),
			  'yahoo'		 => esc_html__('Yahoo', 'elearni'),
			  'youtube'		 => esc_html__('Youtube', 'elearni')
			);

	$social_follow_options = array ();
	foreach($social_follow as $socialfollow_key => $socialfollow) {

		$social_follow_option = array(
							'id'    => 'dt-single-product-show-follow-'.$socialfollow_key,
							'type'  => 'switcher',
							'title' => sprintf(esc_html__('Show %1$s Follow', 'elearni'), $socialfollow),
						);
		array_push($social_follow_options, $social_follow_option);

	}

	array_push($social_follow_options, array(
						  'type'    => 'notice',
						  'class'   => 'info',
						  'content' => esc_html__('For Sociables Follow - links must be defined under "Sociables" tab. Sociables Share & Sociables Follow option is used for "Custom Template" single product settings.', 'elearni' )
						));


	$options[] = array(
		'name'     => 'dtwoo',
		'title'    => esc_html__( 'WooCommerce', 'elearni' ),
		'icon'     => 'fa fa-shopping-cart',
		'sections' => array(

			// Shop
				array(
					'name'	=> 'dt-woo-shop',
					'title'	=> esc_html__('Shop', 'elearni'),
					'icon'  => 'fa fa-angle-double-right',
					'fields'=> array(
						array(	
							'type'    => 'subheading',
							'content' => esc_html__( 'Shop Page Settings', 'elearni' ),
						),

						array(
							'id'         => 'shop-page-layout',
							'type'       => 'image_select',
							'title'      => esc_html__('Page Layout', 'elearni'),
							'options'    => $woo_page_layouts,
							'default'    => 'content-full-width',
							'attributes' => array( 'data-depend-id' => 'dt-woo-shop-page-layout' )
						),

						array(
							'id'         => 'shop-page-show-standard-sidebar',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Standard Sidebar', 'elearni'),
							'dependency' => array( 'dt-woo-shop-page-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
						),

						array(
							'id'         => 'shop-page-widgetareas',
							'type'       => 'select',
							'title'      => esc_html__('Choose Custom Widget Area', 'elearni'),
							'class'      => 'chosen',
							'options'    => elearni_custom_widgets(),
							'dependency' => array( 'dt-woo-shop-page-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
							'attributes' => array(
								'multiple'         => 'multiple',
								'data-placeholder' => esc_attr__('Select Widget Areas', 'elearni'),
								'style'            => 'width: 400px;'
							),
						),

						array(
							'id'      => 'shop-product-per-page',
							'type'    => 'number',
							'title'   => esc_html__('Products Per Page', 'elearni'),
							'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in catalog / shop page', 'elearni').'</span>',
							'default' => 12,
						),

						array(
							'id'         => 'shop-page-product-layout',
							'type'       => 'image_select',
							'title'      => esc_html__('Product Layout', 'elearni'),
							'options'    => array(
								1 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-column.png',
								2 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-half-column.png',
								3 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-third-column.png',
								4 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-fourth-column.png'
							),
							'default'    => 3,							
						),

				        array(
				          'id'         => 'shop-page-product-style-template',
				          'type'       => 'select',
				          'title'      => esc_html__('Product Style Template', 'elearni'),
									'options'    => $product_style_templates_arr,
									'default'    => 0
				        ), 											

						array(
							'type'    => 'subheading',
							'content' => esc_html__( "Shop Page Sorter Settings", 'elearni' ),
						),

						array(
							'id'         => 'product-show-sorter-on-header',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Sorter On Header', 'elearni'),
							'attributes' => array( 'data-depend-id' => 'dt-woo-shop-product-sorter-on-header' ),
							'info'       => esc_html__('YES! to show sorter bar on header.', 'elearni'),
							'default' => true
						),

						array(
							'id'             => 'product-sorter-header-elements',
							'type'           => 'sorter',
							'title'          => esc_html__('Sorter Header Elements', 'elearni'),
							'default'        => array(
								'enabled'      => array(
									'filter'       => esc_html__('Filter', 'elearni'),
									'result_count' => esc_html__('Result Count', 'elearni'),
									'pagination'   => esc_html__('Pagination', 'elearni'),
								),
								'disabled'     => array(
									'display_mode'         => esc_html__('Display Mode', 'elearni'),
									'display_mode_options' => esc_html__('Display Mode Options', 'elearni'),
								),
							),
							'enabled_title'  => esc_html__('Active Elements', 'elearni'),
							'disabled_title' => esc_html__('Deatcive Elements', 'elearni'),
							'dependency' => array( 'dt-woo-shop-product-sorter-on-header', '==', 'true' )
						),

						array(
							'id'         => 'product-show-sorter-on-footer',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Sorter On Footer', 'elearni'),
							'attributes' => array( 'data-depend-id' => 'dt-woo-shop-product-sorter-on-footer' ),
							'info'       => esc_html__('YES! to show sorter bar on footer.', 'elearni'),
							'default' => true
						),

						array(
							'id'             => 'product-sorter-footer-elements',
							'type'           => 'sorter',
							'title'          => esc_html__('Sorter Footer Elements', 'elearni'),
							'default'        => array(
								'enabled'      => array(
									'filter'       => esc_html__('Filter', 'elearni'),
									'result_count' => esc_html__('Result Count', 'elearni'),
									'pagination'   => esc_html__('Pagination', 'elearni'),
								),
								'disabled'     => array(
									'display_mode'         => esc_html__('Display Mode', 'elearni'),
									'display_mode_options' => esc_html__('Display Mode Options', 'elearni'),
								),
							),
							'enabled_title'  => esc_html__('Active Elements', 'elearni'),
							'disabled_title' => esc_html__('Deatcive Elements', 'elearni'),
							'dependency' => array( 'dt-woo-shop-product-sorter-on-footer', '==', 'true' )
						)

					)
				),

			// Product Category
				array(
					'name'	=> 'dt-woo-cat-archive',
					'title'	=> esc_html__('Category Archive', 'elearni'),
					'icon'  => 'fa fa-angle-double-right',
					'fields'=> array(

						array(
							'type'    => 'subheading',
							'content' => esc_html__( 'Category Archive Settings', 'elearni' ),
						),

						array(
							'id'         => 'dt-woo-category-archive-layout',
							'type'       => 'image_select',
							'title'      => esc_html__('Page Layout', 'elearni'),
							'options'    => $woo_page_layouts,
							'default'    => 'with-left-sidebar',
							'attributes' => array( 'data-depend-id' => 'dt-woo-category-archive-layout' )
						),

						array(
							'id'         => 'dt-woo-category-archive-show-standard-sidebar',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Standard Sidebar', 'elearni'),
							'dependency' => array( 'dt-woo-category-archive-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
						),

						array(
							'id'         => 'dt-woo-category-archive-widgetareas',
							'type'       => 'select',
							'title'      => esc_html__('Choose Custom Widget Area', 'elearni'),
							'class'      => 'chosen',
							'options'    => elearni_custom_widgets(),
							'dependency' => array( 'dt-woo-category-archive-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
							'attributes' => array(
								'multiple'         => 'multiple',
								'data-placeholder' => esc_attr__('Select Widget Areas', 'elearni'),
								'style'            => 'width: 400px;'
							),
						),

						array(
							'id'      => 'dt-woo-category-archive-product-per-page',
							'type'    => 'number',
							'title'   => esc_html__('Products Per Page', 'elearni'),
							'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in product category archive page', 'elearni').'</span>',
							'default' => get_option( 'posts_per_page' ),
						),

						array(
							'id'      => 'dt-woo-category-archive-product-column',
							'type'    => 'image_select',
							'title'   => esc_html__('Product Layout', 'elearni'),
							'options' => array(
								1 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-column.png',
								2 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-half-column.png',
								3 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-third-column.png',
								4 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-fourth-column.png'
							),
							'default' => 4,
						),

				        array(
				          'id'         => 'dt-woo-category-product-style-template',
				          'type'       => 'select',
				          'title'      => esc_html__('Product Style Template', 'elearni'),
									'options'    => $product_style_templates_arr,
									'default'    => 0
				        )

					)
				),

			// Product Tag
				array(
					'name'	=> 'dt-woo-tag-archive',
					'title'	=> esc_html__('Tag Archive', 'elearni'),
					'icon'  => 'fa fa-angle-double-right',
					'fields'=> array(

						array(
							'type'    => 'subheading',
							'content' => esc_html__( 'Tag Archive Settings', 'elearni' ),
						),

						array(
							'id'         => 'dt-woo-tag-archive-layout',
							'type'       => 'image_select',
							'title'      => esc_html__('Page Layout', 'elearni'),
							'options'    => $woo_page_layouts,
							'default'    => 'with-left-sidebar',
							'attributes' => array( 'data-depend-id' => 'dt-woo-tag-archive-layout' )
						),

						array(
							'id'         => 'dt-woo-tag-archive-show-standard-sidebar',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Standard Sidebar', 'elearni'),
							'dependency' => array( 'dt-woo-tag-archive-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
						),

						array(
							'id'         => 'dt-woo-tag-archive-widgetareas',
							'type'       => 'select',
							'title'      => esc_html__('Choose Custom Widget Area', 'elearni'),
							'class'      => 'chosen',
							'options'    => elearni_custom_widgets(),
							'dependency' => array( 'dt-woo-tag-archive-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
							'attributes' => array(
								'multiple'         => 'multiple',
								'data-placeholder' => esc_attr__('Select Widget Areas', 'elearni'),
								'style'            => 'width: 400px;'
							),
						),

						array(
							'id'      => 'dt-woo-tag-archive-product-per-page',
							'type'    => 'number',
							'title'   => esc_html__('Products Per Page', 'elearni'),
							'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in product tag archive page', 'elearni').'</span>',
							'default' => get_option( 'posts_per_page' ),
						),

						array(
							'id'      => 'dt-woo-tag-archive-product-column',
							'type'    => 'image_select',
							'title'   => esc_html__('Product Layout', 'elearni'),
							'options' => array(
								2 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-half-column.png',
								3 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-third-column.png',
								4 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-fourth-column.png'							
							),
							'default' => 4,
						),	

				        array(
				          'id'         => 'dt-woo-tag-product-style-template',
				          'type'       => 'select',
				          'title'      => esc_html__('Product Style Template', 'elearni'),
									'options'    => $product_style_templates_arr,
									'default'    => 0
				        )

					)
				),

			// Product
				array(
					'name'   => 'dt-woo-single-product',
					'title'  => esc_html__('Product', 'elearni'),
					'icon'   => 'fa fa-angle-double-right',
					'fields' => array_merge ( 
						array(

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Single Product Page Default Settings', 'elearni' ),
							),

							array(
								'id'      => 'dt-single-product-default-template',
								'type'    => 'select',
								'title'   => esc_html__('Product Template', 'elearni'),
								'class'   => 'chosen',
								'options' => array(
									'woo-default'     => esc_html__( 'WooCommerce Default', 'elearni' ),
									'custom-template' => esc_html__( 'Custom Template', 'elearni' )
								),
								'default'    => 'woo-default',
								'info'       => esc_html__('Don\'t use product shortcodes in content area when "WooCommerce Default" template is chosen.', 'elearni')
							),

							array(
								'id'         => 'dt-single-product-default-layout',
								'type'       => 'image_select',
								'title'      => esc_html__('Page Layout', 'elearni'),
								'options'    => $woo_page_layouts,			
								'default'    => 'with-left-sidebar',
								'attributes' => array( 'data-depend-id' => 'dt-single-product-default-layout' )
							),

							array(
								'id'         => 'dt-single-product-show-default-sidebar',
								'type'       => 'switcher',
								'title'      => esc_html__('Show Standard Sidebar', 'elearni'),
								'dependency' => array( 'dt-single-product-default-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
							),

							array(
								'id'         => 'dt-single-product-widgetareas',
								'type'       => 'select',
								'title'      => esc_html__('Choose Custom Widget Area', 'elearni'),
								'class'      => 'chosen',
								'options'    => elearni_custom_widgets(),
								'dependency' => array( 'dt-single-product-default-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
								'attributes' => array(
									'multiple'         => 'multiple',
									'data-placeholder' => esc_attr__('Select Widget Areas', 'elearni'),
									'style'            => 'width: 400px;'
								),
							),

							array(
								'id'		 => 'dt-single-product-sale-countdown-timer',
								'type'		 => 'switcher',
								'title'		 => esc_html__('Enable Sale Countdown Timer', 'elearni'),
								'info'       => esc_html__('This option is applicable for "WooCommerce Default" template page only.', 'elearni')
							),

							array(
								'id'		 => 'dt-single-product-enable-size-guide',
								'type'		 => 'switcher',
								'title'		 => esc_html__('Enable Size Guide Button', 'elearni'),
								'info'       => esc_html__('This option is applicable for "WooCommerce Default" template page only.', 'elearni')
							),

							array(
								'id'		 => 'dt-single-product-enable-ajax-addtocart',
								'type'		 => 'switcher',
								'title'		 => esc_html__('Enable Ajax Add To Cart', 'elearni'),
								'info'       => esc_html__('If you wish, you can have ajax functionality in single page add to cart button.', 'elearni')
							),

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Single Page Upsell Products Settings', 'elearni' ),
							),
							
							array(
								'id'		 => 'dt-single-product-default-show-upsell',
								'type'		 => 'switcher',
								'title'		 => esc_html__('Show Upsell Products', 'elearni'),
								'default' 	 => true
							),

							array(
								'id'  		=> 'dt-single-product-upsell-title',
								'type'  	=> 'wysiwyg',
								'title' 	=> esc_html__('Upsell Title', 'elearni'),
								'default'	=> '<h2>'.esc_html__('You may also like&hellip;', 'elearni').'</h2>'
							),

							array(
								'id'      => 'dt-single-product-upsell-column',
								'type'    => 'image_select',
								'title'   => esc_html__('Upsell Column', 'elearni'),
								'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Select upsell products column layout', 'elearni').'</span>',
								'default' => 4,
								'options' => array(
									1 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-column.png',
									2 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-half-column.png',
									3 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-third-column.png',
									4 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
								)
							),

							array(
								'id'      => 'dt-single-product-upsell-limit',
								'type'    => 'select',
								'title'   => esc_html__('Upsell Limit', 'elearni'),
								'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Select upsell products limit', 'elearni').'</span>',
								'default' => 4,
								'options' => array(
									1 => esc_html__( '1', 'elearni' ),
									2 => esc_html__( '2', 'elearni' ),
									3 => esc_html__( '3', 'elearni' ),
									4 => esc_html__( '4', 'elearni' ),
									5 => esc_html__( '5', 'elearni' ),
									6 => esc_html__( '6', 'elearni' ),
									7 => esc_html__( '7', 'elearni' ),
									8 => esc_html__( '8', 'elearni' ),	
									9 => esc_html__( '9', 'elearni' ),
									10 => esc_html__( '10', 'elearni' ),									
								)
							),

					        array(
					          'id'         => 'dt-woo-single-product-upsell-style-template',
					          'type'       => 'select',
					          'title'      => esc_html__('Product Style Template', 'elearni'),
										'options'    => $product_style_templates_arr,
										'default'    => 0
					        ),

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Single Page Related Products Settings', 'elearni' ),
							),

							array(
								'id'    => 'dt-single-product-default-show-related',
								'type'  => 'switcher',
								'title' => esc_html__('Show Related Products', 'elearni'),
								'default' 	 => true
							),

							array(
								'id'      => 'dt-single-product-related-title',
								'type'    => 'wysiwyg',
								'title'   => esc_html__('Related Product Title', 'elearni'),
								'default' => '<h2>'.esc_html__('Related products', 'elearni').'</h2>'
							),

							array(
								'id'      => 'dt-single-product-related-column',
								'type'    => 'image_select',
								'title'   => esc_html__('Related Column', 'elearni'),
								'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Select related products column layout', 'elearni').'</span>',
								'default' => 4,
								'options' => array(
									2 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-half-column.png',
									3 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-third-column.png',
									4 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
								)							
							),

							array(
								'id'      => 'dt-single-product-related-limit',
								'type'    => 'select',
								'title'   => esc_html__('Related Limit', 'elearni'),
								'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Select related products limit', 'elearni').'</span>',
								'default' => 4,
								'options' => array(
									1 => esc_html__( '1', 'elearni' ),
									2 => esc_html__( '2', 'elearni' ),
									3 => esc_html__( '3', 'elearni' ),
									4 => esc_html__( '4', 'elearni' ),
									5 => esc_html__( '5', 'elearni' ),
									6 => esc_html__( '6', 'elearni' ),
									7 => esc_html__( '7', 'elearni' ),
									8 => esc_html__( '8', 'elearni' ),	
									9 => esc_html__( '9', 'elearni' ),
									10 => esc_html__( '10', 'elearni' ),									
								)
							),

					        array(
					          'id'         => 'dt-woo-single-product-related-style-template',
					          'type'       => 'select',
					          'title'      => esc_html__('Product Style Template', 'elearni'),
										'options'    => $product_style_templates_arr,
										'default'    => 0
					        ),

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Single Product Page Settings', 'elearni' ),
							),

							array(
								'id'    => 'dt-single-product-addtocart-sticky',
								'type'  => 'switcher',
								'title' => esc_html__('Sticky Add to Cart', 'elearni'),
							),

							array(
								'id'    => 'dt-single-product-show-360-viewer',
								'type'  => 'switcher',
								'title' => esc_html__('Show Product 360 Viewer', 'elearni'),
							),

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Sociables Share', 'elearni' ),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-facebook',
								'type'  => 'switcher',
								'title' => esc_html__('Show Facebook Sharer', 'elearni'),
								'default'  => true
							),

							array(
								'id'    => 'dt-single-product-show-sharer-delicious',
								'type'  => 'switcher',
								'title' => esc_html__('Show Delicious Sharer', 'elearni'),
								'default'  => true
							),

							array(
								'id'    => 'dt-single-product-show-sharer-digg',
								'type'  => 'switcher',
								'title' => esc_html__('Show Digg Sharer', 'elearni'),
								'default'  => true
							),

							array(
								'id'    => 'dt-single-product-show-sharer-stumbleupon',
								'type'  => 'switcher',
								'title' => esc_html__('Show Stumble Upon Sharer', 'elearni'),
								'default'  => true
							),

							array(
								'id'    => 'dt-single-product-show-sharer-twitter',
								'type'  => 'switcher',
								'title' => esc_html__('Show Twitter Sharer', 'elearni'),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-googleplus',
								'type'  => 'switcher',
								'title' => esc_html__('Show Google Plus Sharer', 'elearni'),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-linkedin',
								'type'  => 'switcher',
								'title' => esc_html__('Show Linkedin Sharer', 'elearni'),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-pinterest',
								'type'  => 'switcher',
								'title' => esc_html__('Show Pinterest Sharer', 'elearni'),
							),	

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Sociables Follow', 'elearni' ),
							),							

						),

						$social_follow_options

					)
				),
			
			// Size Guide
				array(
					'name'   => 'dt-woo-size-guides',
					'title'  => esc_html__( 'Size Guides', 'elearni' ),
					'icon'   => 'fa fa-angle-double-right',
					'fields' => array(
						array(
							'id'              => 'dt-woo-size-guides',
							'type'            => 'group',
							'title'           => esc_html__( 'Size Guides List', 'elearni' ),
							'button_title'    => esc_html__('Add New', 'elearni'),
							'accordion_title' => esc_html__('Add New Size Guide', 'elearni'),
							'fields'          => array(
								array(
									'id'    => 'title',
									'type'  => 'text',
									'title' => esc_html__('Title', 'elearni'),
								),
								array(
									'id'    => 'size-guide',
									'type'  => 'upload',
									'title' => esc_html__('Size Guide', 'elearni'),
								)
							)
						)
					)
				),
			
			// Product Style Templates
				array(
					'name'   => 'dt-woo-product-style-templates-holder',
					'title'  => esc_html__( 'Product Style Templates', 'elearni' ),
					'icon'   => 'fa fa-angle-double-right',
					'fields' => array(
						array(
							'id'              => 'dt-woo-product-style-templates',
							'type'            => 'group',
							'title'           => esc_html__( 'Product Style Templates', 'elearni' ),
							'button_title'    => esc_html__('Add New', 'elearni'),
							'accordion_title' => esc_html__('Add New Template', 'elearni'),
							'fields'          => array(

								array(
									'id'    => 'template-title',
									'type'  => 'text',
									'title' => esc_html__('Template Title', 'elearni'),
								),
								array(
									'id'         => 'product-style',
									'type'       => 'select',
									'title'      => esc_html__('Product Style', 'elearni'),
									'options'    => array(
														'product-style-default'              => esc_html__('Default', 'elearni'),
														'product-style-cornered'             => esc_html__('Cornered', 'elearni'),
														'product-style-title-eg-highlighter' => esc_html__('Title & Element Group Highlighter', 'elearni'),
														'product-style-content-highlighter'  => esc_html__('Content Highlighter', 'elearni'),
														'product-style-egrp-overlap-pc'      => esc_html__('Element Group Overlap Product Content', 'elearni'),
														'product-style-egrp-reveal-pc'       => esc_html__('Element Group Reveal Product Content', 'elearni'),
														'product-style-igrp-over-pc'         => esc_html__('Icon Group over Product Content', 'elearni'),
														'product-style-egrp-over-pc'         => esc_html__('Element Group over Product Content', 'elearni')
													),
									'default'    => 'product-style-default'
								),								

							// "Product Style" Hover Options

								array(
									'type'    => 'notice',
									'class'   => 'info',
									'content' => esc_html__('"Product Style" Hover Options.', 'elearni')
								),

								array(
									'id'         => 'product-hover-styles',
									'type'       => 'select',
									'title'      => esc_html__('Hover Styles', 'elearni'),
									'options'    => array(
														''                                        => esc_html__('None', 'elearni'),
														'product-hover-fade-border'               => esc_html__('Fade - Border', 'elearni'),
														'product-hover-fade-skinborder'           => esc_html__('Fade - Skin Border', 'elearni'),
														'product-hover-fade-gradientborder'       => esc_html__('Fade - Gradient Border', 'elearni'),
														'product-hover-fade-shadow'               => esc_html__('Fade - Shadow', 'elearni'),
														'product-hover-fade-inshadow'             => esc_html__('Fade - InShadow', 'elearni'),
														'product-hover-thumb-fade-border'         => esc_html__('Fade Thumb Border', 'elearni'),
														'product-hover-thumb-fade-skinborder'     => esc_html__('Fade Thumb SkinBorder', 'elearni'),
														'product-hover-thumb-fade-gradientborder' => esc_html__('Fade Thumb Gradient Border', 'elearni'),
														'product-hover-thumb-fade-shadow'         => esc_html__('Fade Thumb Shadow', 'elearni'),
														'product-hover-thumb-fade-inshadow'       => esc_html__('Fade Thumb InShadow', 'elearni')
													),
									'default'    => 'product-hover-fade-border'
								),

								array(
									'id'         => 'product-overlay-bgcolor',
									'type'       => 'color_picker',
									'title'      => esc_html__('Overlay Background Color', 'elearni')
								),

								array(
									'id'         => 'product-overlay-dark-bgcolor',
									'type'       => 'switcher',
									'title'      => esc_html__('Overlay Dark Background', 'elearni'),
								),

								array(
									'id'         => 'product-overlay-effects',
									'type'       => 'select',
									'title'      => esc_html__('Overlay Effects', 'elearni'),
									'options'    => array(
														''                                    => esc_html__('None', 'elearni'),
														'product-overlay-fixed'               => esc_html__('Fixed', 'elearni'),
														'product-overlay-toptobottom'         => esc_html__('Top to Bottom', 'elearni'),
														'product-overlay-bottomtotop'         => esc_html__('Bottom to Top', 'elearni'),
														'product-overlay-righttoleft'         => esc_html__('Right to Left', 'elearni'),
														'product-overlay-lefttoright'         => esc_html__('Left to Right', 'elearni'),
														'product-overlay-middle'              => esc_html__('Middle', 'elearni'),
														'product-overlay-middleradial'        => esc_html__('Middle Radial', 'elearni'),
														'product-overlay-gradienttoptobottom' => esc_html__('Gradient - Top to Bottom', 'elearni'),
														'product-overlay-gradientbottomtotop' => esc_html__('Gradient - Bottom to Top', 'elearni'),
														'product-overlay-gradientrighttoleft' => esc_html__('Gradient - Right to Left', 'elearni'),
														'product-overlay-gradientlefttoright' => esc_html__('Gradient - Left to Right', 'elearni'),
														'product-overlay-gradientradial'      => esc_html__('Gradient - Radial', 'elearni'),
														'product-overlay-flash'               => esc_html__('Flash', 'elearni'),
														'product-overlay-scale'               => esc_html__('Scale', 'elearni'),
														'product-overlay-horizontalelastic'   => esc_html__('Horizontal - Elastic', 'elearni'),
														'product-overlay-verticalelastic'     => esc_html__('Vertical - Elastic', 'elearni')
													),
									'default'    => ''
								),

								array(
									'id'         => 'product-hover-image-effects',
									'type'       => 'select',
									'title'      => esc_html__('Hover Image Effects', 'elearni'),
									'options'    => array(
														''                                => esc_html__('None', 'elearni'),
														'product-hover-image-blur'        => esc_html__('Blur', 'elearni'),
														'product-hover-image-blackwhite'  => esc_html__('Black & White', 'elearni'),
														'product-hover-image-fadeinleft'  => esc_html__('Fade In Left', 'elearni'),
														'product-hover-image-fadeinright' => esc_html__('Fade In Right', 'elearni'),
														'product-hover-image-rotate'      => esc_html__('Rotate', 'elearni'),
														'product-hover-image-rotatealt'   => esc_html__('Rotate - Alt', 'elearni'),
														'product-hover-image-scalein'     => esc_html__('Scale In', 'elearni'),
														'product-hover-image-scaleout'    => esc_html__('Scale Out', 'elearni'),
														'product-hover-image-floatout'    => esc_html__('Float Up', 'elearni')
													),
									'default'    => ''
								),

								array(
									'id'         => 'product-hover-secondary-image-effects',
									'type'       => 'select',
									'title'      => esc_html__('Hover Secondary Image Effects', 'elearni'),
									'options'    => array(
														'product-hover-secimage-fade'              => esc_html__('Fade', 'elearni'),
														'product-hover-secimage-zoomin'            => esc_html__('Zoom In', 'elearni'),
														'product-hover-secimage-zoomout'           => esc_html__('Zoom Out', 'elearni'),
														'product-hover-secimage-zoomoutup'         => esc_html__('Zoom Out Up', 'elearni'),
														'product-hover-secimage-zoomoutdown'       => esc_html__('Zoom Out Down', 'elearni'),
														'product-hover-secimage-zoomoutleft'       => esc_html__('Zoom Out Left', 'elearni'),
														'product-hover-secimage-zoomoutright'      => esc_html__('Zoom Out Right', 'elearni'),
														'product-hover-secimage-pushup'            => esc_html__('Push Up', 'elearni'),
														'product-hover-secimage-pushdown'          => esc_html__('Push Down', 'elearni'),
														'product-hover-secimage-pushleft'          => esc_html__('Push Left', 'elearni'),
														'product-hover-secimage-pushright'         => esc_html__('Push Right', 'elearni'),
														'product-hover-secimage-slideup'           => esc_html__('Slide Up', 'elearni'),
														'product-hover-secimage-slidedown'         => esc_html__('Slide Down', 'elearni'),
														'product-hover-secimage-slideleft'         => esc_html__('Slide Left', 'elearni'),
														'product-hover-secimage-slideright'        => esc_html__('Slide Right', 'elearni'),		
														'product-hover-secimage-hingeup'           => esc_html__('Hinge Up', 'elearni'),
														'product-hover-secimage-hingedown'         => esc_html__('Hinge Down', 'elearni'),
														'product-hover-secimage-hingeleft'         => esc_html__('Hinge Left', 'elearni'),
														'product-hover-secimage-hingeright'        => esc_html__('Hinge Right', 'elearni'),		
														'product-hover-secimage-foldup'            => esc_html__('Fold Up', 'elearni'),
														'product-hover-secimage-folddown'          => esc_html__('Fold Down', 'elearni'),
														'product-hover-secimage-foldleft'          => esc_html__('Fold Left', 'elearni'),
														'product-hover-secimage-foldright'         => esc_html__('Fold Right', 'elearni'),
														'product-hover-secimage-fliphoriz'         => esc_html__('Flip Horizontal', 'elearni'),
														'product-hover-secimage-flipvert'          => esc_html__('Flip Vertical', 'elearni')
													),
									'default'    => 'product-hover-secimage-fade'
								),

								array(
									'id'         => 'product-content-hover-effects',
									'type'       => 'select',
									'title'      => esc_html__('Content Hover Effects', 'elearni'),
									'options'    => array(
														''                                   => esc_html__('None', 'elearni'),
														'product-content-hover-fade'         => esc_html__('Fade', 'elearni'),
														'product-content-hover-zoom'         => esc_html__('Zoom', 'elearni'),
														'product-content-hover-slidedefault' => esc_html__('Slide Default', 'elearni'),
														'product-content-hover-slideleft'    => esc_html__('Slide From Left', 'elearni'),
														'product-content-hover-slideright'   => esc_html__('Slide From Right', 'elearni'),
														'product-content-hover-slidetop'     => esc_html__('Slide From Top', 'elearni'),
														'product-content-hover-slidebottom'  => esc_html__('Slide From Bottom', 'elearni')
													),
									'default'    => ''
								),

								array(
									'id'         => 'product-icongroup-hover-effects',
									'type'       => 'select',
									'title'      => esc_html__('Icon Group Hover Effects', 'elearni'),
									'options'    => array(
														''                               => esc_html__('None', 'elearni'),
														'product-icongroup-hover-flipx'  => esc_html__('Flip X', 'elearni'),
														'product-icongroup-hover-flipy'  => esc_html__('Flip Y', 'elearni'),
														'product-icongroup-hover-bounce' => esc_html__('Bounce', 'elearni')
													),
									'default'    => ''
								),

							// "Product Style" Common Options

								array(
									'type'    => 'notice',
									'class'   => 'info',
									'content' => esc_html__('"Product Style" Common Options.', 'elearni')
								),	
								array(
									'id'         => 'product-borderorshadow',
									'type'       => 'select',
									'title'      => esc_html__('Border or Shadow', 'elearni'),
									'options'    => array(
														''                              => esc_html__('None', 'elearni'),
														'product-borderorshadow-border' => esc_html__('Border', 'elearni'),
														'product-borderorshadow-shadow' => esc_html__('Shadow', 'elearni')
													),
									'default'    => '',
									'desc'      => esc_html__('Choose either Border or Shadow for your product listing.', 'elearni')
								),										
								array(
									'id'         => 'product-border-type',
									'type'       => 'select',
									'title'      => esc_html__('Border - Type', 'elearni'),
									'options'    => array(
														'product-border-type-default' => esc_html__('Default', 'elearni'),
														'product-border-type-thumb'   => esc_html__('Thumb', 'elearni')
													),
									'default'    => 'product-border-type-default',
								),													
								array(
									'id'         => 'product-border-position',
									'type'       => 'select',
									'title'      => esc_html__('Border - Position', 'elearni'),
									'options'    => array(
														'product-border-position-default'      => esc_html__('Default', 'elearni'),
														'product-border-position-left'         => esc_html__('Left', 'elearni'),
														'product-border-position-right'        => esc_html__('Right', 'elearni'),
														'product-border-position-top'          => esc_html__('Top', 'elearni'),
														'product-border-position-bottom'       => esc_html__('Bottom', 'elearni'),
														'product-border-position-top-left'     => esc_html__('Top Left', 'elearni'),
														'product-border-position-top-right'    => esc_html__('Top Right', 'elearni'),
														'product-border-position-bottom-left'  => esc_html__('Bottom Left', 'elearni'),
														'product-border-position-bottom-right' => esc_html__('Bottom Right', 'elearni')														
													),
									'default'    => 'product-border-position-default',
								),	
								array(
									'id'         => 'product-shadow-type',
									'type'       => 'select',
									'title'      => esc_html__('Shadow - Type', 'elearni'),
									'options'    => array(
														'product-shadow-type-default' => esc_html__('Default', 'elearni'),
														'product-shadow-type-thumb'   => esc_html__('Thumb', 'elearni')
													),
									'default'    => 'product-shadow-type-default',
								),
								array(
									'id'         => 'product-shadow-position',
									'type'       => 'select',
									'title'      => esc_html__('Shadow - Position', 'elearni'),
									'options'    => array(
														'product-shadow-position-default'      => esc_html__('Default', 'elearni'),
														'product-shadow-position-top-left'     => esc_html__('Top Left', 'elearni'),
														'product-shadow-position-top-right'    => esc_html__('Top Right', 'elearni'),
														'product-shadow-position-bottom-left'  => esc_html__('Bottom Left', 'elearni'),
														'product-shadow-position-bottom-right' => esc_html__('Bottom Right', 'elearni')
													),
									'default'    => 'product-shadow-position-default',
								),

								array(
									'id'         => 'product-bordershadow-highlight',
									'type'       => 'select',
									'title'      => esc_html__('Border / Shadow - Highlight', 'elearni'),
									'options'    => array(
														''                                       => esc_html__('None', 'elearni'),
														'product-bordershadow-highlight-default' => esc_html__('Default', 'elearni'),
														'product-bordershadow-highlight-onhover' => esc_html__('On Hover', 'elearni')
													),
									'default'    => '',
								),

								array(
									'id'         => 'product-background-bgcolor',
									'type'       => 'color_picker',
									'title'      => esc_html__('Background - Background Color', 'elearni')
								),

								array(
									'id'         => 'product-background-dark-bgcolor',
									'type'       => 'switcher',
									'title'      => esc_html__('Background - Dark Background', 'elearni')
								),
							
								array(
									'id'         => 'product-padding',
									'type'       => 'select',
									'title'      => esc_html__('Padding', 'elearni'),
									'options'    => array(
														'product-padding-default' => esc_html__('Default', 'elearni'),
														'product-padding-overall' => esc_html__('Product', 'elearni'),
														'product-padding-thumb'   => esc_html__('Thumb', 'elearni'),
														'product-padding-content' => esc_html__('Content', 'elearni'),
													),
									'default'    => 'product-padding-content'
								),
								array(
									'id'         => 'product-space',
									'type'       => 'select',
									'title'      => esc_html__('Space', 'elearni'),
									'options'    => array(
														'product-without-space' => esc_html__('False', 'elearni'),
														'product-with-space'  => esc_html__('True', 'elearni')
													),
									'default'    => 'product-with-space'
								),
								array(
									'id'         => 'product-display-type',
									'type'       => 'select',
									'title'      => esc_html__('Display Type', 'elearni'),
									'options'    => array(
														'grid' => esc_html__('Grid', 'elearni'),
														'list'  => esc_html__('List', 'elearni')
													),
									'default'    => 'grid'
								),
								array(
									'id'         => 'product-display-type-list-options',
									'type'       => 'select',
									'title'      => esc_html__('List Options', 'elearni'),
									'options'    => array(
														'left-thumb'  => esc_html__('Left Thumb', 'elearni'),
														'right-thumb' => esc_html__('Right Thumb', 'elearni')
													),
									'default'    => 'left-thumb'
								),	
								array(
									'id'         => 'product-show-labels',
									'type'       => 'select',
									'title'      => esc_html__('Show Product Labels', 'elearni'),
									'options'    => array(
														'true'  => esc_html__('True', 'elearni'),
														'false' => esc_html__('False', 'elearni')
													),
									'default'    => 'true'
								),															
								array(
									'id'         => 'product-label-design',
									'type'       => 'select',
									'title'      => esc_html__('Product Label Design', 'elearni'),
									'options'    => array(
														'product-label-boxed'      => esc_html__('Boxed', 'elearni'),
														'product-label-circle'  => esc_html__('Circle', 'elearni'),
														'product-label-rounded'   => esc_html__('Rounded', 'elearni'),
														'product-label-angular'   => esc_html__('Angular', 'elearni'),
														'product-label-ribbon'   => esc_html__('Ribbon', 'elearni'),
													),
									'default'    => 'product-label-circle',
								),

								array(
									'id'         => 'product-custom-class',
									'type'       => 'text',
									'title'      => esc_html__('Custom Class', 'elearni')
								),	

							// "Product Style - Thumb" Options

								array(
									'type'    => 'notice',
									'class'   => 'info',
									'content' => esc_html__('"Product Style - Thumb" Options.', 'elearni')
								),

								array(
									'id'         => 'product-thumb-secondary-image-onhover',
									'type'       => 'switcher',
									'title'      => esc_html__('Show Secondary Image On Hover', 'elearni'),
									'desc'	 => esc_html__('YES! to show secondary image on product hover. First image in the gallery will be used as secondary image.', 'elearni')
								),

								array(
									'id'             => 'product-thumb-content',
									'type'           => 'sorter',
									'title'          => esc_html__('Content', 'elearni'),
									'default'        => array(
										'enabled'      => array(
											'title'          => esc_html__('Title', 'elearni'),
											'category'       => esc_html__('Category', 'elearni'),
											'price'          => esc_html__('Price', 'elearni'),
											'button_element' => esc_html__('Button Element', 'elearni'),
											'icons_group'    => esc_html__('Icons Group', 'elearni'),
										),
										'disabled'     => array(
											'excerpt'       => esc_html__('Excerpt', 'elearni'),
											'rating'        => esc_html__('Rating', 'elearni'),
											'countdown'     => esc_html__('Count Down', 'elearni'),
											'separator'     => esc_html__('Separator', 'elearni'),
											'element_group' => esc_html__('Element Group', 'elearni'),
											'swatches'      => esc_html__('Swatches', 'elearni'),
										),
									),
									'enabled_title'  => esc_html__('Active Elements', 'elearni'),
									'disabled_title' => esc_html__('Deatcive Elements', 'elearni'),
								),

								array(
									'id'         => 'product-thumb-alignment',
									'type'       => 'select',
									'title'      => esc_html__('Alignment', 'elearni'),
									'options'    => array(
														'product-thumb-alignment-top'          => esc_html__('Top', 'elearni'),
														'product-thumb-alignment-top-left'     => esc_html__('Top Left', 'elearni'),
														'product-thumb-alignment-top-right'    => esc_html__('Top Right', 'elearni'),
														'product-thumb-alignment-middle'       => esc_html__('Middle', 'elearni'),
														'product-thumb-alignment-bottom'       => esc_html__('Bottom', 'elearni'),
														'product-thumb-alignment-bottom-left'  => esc_html__('Bottom Left', 'elearni'),
														'product-thumb-alignment-bottom-right' => esc_html__('Bottom Right', 'elearni')
													),
									'default'    => 'product-thumb-alignment-top'
								),

								array(
									'id'         => 'product-thumb-iconsgroup-icons',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Icons', 'elearni'),
									'options'    => array(
														'cart'      => esc_html__('Cart', 'elearni'),
														'wishlist'  => esc_html__('Wishlist', 'elearni'),
														'compare'   => esc_html__('Compare', 'elearni'),
														'quickview' => esc_html__('Quick View', 'elearni')
													),
									'class'         => 'chosen',
									'attributes'    => array(
										'multiple'    => 'multiple',
									),							
								),

								array(
									'id'         => 'product-thumb-iconsgroup-style',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Style', 'elearni'),
									'options'    => array(
														'product-thumb-iconsgroup-style-simple'  => esc_html__('Simple', 'elearni'),
														'product-thumb-iconsgroup-style-bgfill-square'  => esc_html__('Background Fill Square', 'elearni'),
														'product-thumb-iconsgroup-style-bgfill-rounded-square' => esc_html__('Background Fill Rounded Square', 'elearni'),
														'product-thumb-iconsgroup-style-bgfill-rounded'  => esc_html__('Background Fill Rounded', 'elearni'),
														'product-thumb-iconsgroup-style-brdrfill-square'  => esc_html__('Border Fill Square', 'elearni'),
														'product-thumb-iconsgroup-style-brdrfill-rounded-square' => esc_html__('Border Fill Rounded Square', 'elearni'),
														'product-thumb-iconsgroup-style-brdrfill-rounded'  => esc_html__('Border Fill Rounded', 'elearni'),
														'product-thumb-iconsgroup-style-skinbgfill-square'  => esc_html__('Skin Background Fill Square', 'elearni'),
														'product-thumb-iconsgroup-style-skinbgfill-rounded-square' => esc_html__('Skin Background Fill Rounded Square', 'elearni'),
														'product-thumb-iconsgroup-style-skinbgfill-rounded'  => esc_html__('Skin Background Fill Rounded', 'elearni'),
														'product-thumb-iconsgroup-style-skinbrdrfill-square'  => esc_html__('Skin Border Fill Square', 'elearni'),
														'product-thumb-iconsgroup-style-skinbrdrfill-rounded-square' => esc_html__('Skin Border Fill Rounded Square', 'elearni'),
														'product-thumb-iconsgroup-style-skinbrdrfill-rounded'  => esc_html__('Skin Border Fill Rounded', 'elearni')																											
													),
									'default'    => 'product-thumb-iconsgroup-style-simple'
								),

								array(
									'id'         => 'product-thumb-iconsgroup-position',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Position', 'elearni'),
									'options'    => array(

													''                                                                              => esc_html__('Default', 'elearni'),

													'product-thumb-iconsgroup-position-horizontal horizontal-position-top'          => esc_html__('Horizontal Top', 'elearni'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-top-left'     => esc_html__('Horizontal Top Left', 'elearni'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-top-right'    => esc_html__('Horizontal Top Right', 'elearni'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-middle'       => esc_html__('Horizontal Middle', 'elearni'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-bottom'       => esc_html__('Horizontal Bottom', 'elearni'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-bottom-left'  => esc_html__('Horizontal Bottom Left', 'elearni'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-bottom-right' => esc_html__('Horizontal Bottom Right', 'elearni'),

													'product-thumb-iconsgroup-position-vertical vertical-position-top-left'         => esc_html__('Vertical Top Left', 'elearni'),
													'product-thumb-iconsgroup-position-vertical vertical-position-top-right'        => esc_html__('Vertical Top Right', 'elearni'),
													'product-thumb-iconsgroup-position-vertical vertical-position-middle-left'      => esc_html__('Vertical Middle Left', 'elearni'),
													'product-thumb-iconsgroup-position-vertical vertical-position-middle-right'     => esc_html__('Vertical Middle Right', 'elearni'),
													'product-thumb-iconsgroup-position-vertical vertical-position-bottom-left'      => esc_html__('Vertical Bottom Left', 'elearni'),
													'product-thumb-iconsgroup-position-vertical vertical-position-bottom-right'     => esc_html__('Vertical Bottom Right', 'elearni')

												),
									'default'    => ''
								),

								array(
									'id'         => 'product-thumb-buttonelement-button',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Button', 'elearni'),
									'options'    => array(
														''          => esc_html__('None', 'elearni'),
														'cart'      => esc_html__('Cart', 'elearni'),
														'wishlist'  => esc_html__('Wishlist', 'elearni'),
														'compare'   => esc_html__('Compare', 'elearni'),
														'quickview' => esc_html__('Quick View', 'elearni')
													)
								),	

								array(
									'id'         => 'product-thumb-buttonelement-secondary-button',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Secondary Button', 'elearni'),
									'options'    => array(
														''          => esc_html__('None', 'elearni'),
														'cart'      => esc_html__('Cart', 'elearni'),
														'wishlist'  => esc_html__('Wishlist', 'elearni'),
														'compare'   => esc_html__('Compare', 'elearni'),
														'quickview' => esc_html__('Quick View', 'elearni')
													)
								),

								array(
									'id'         => 'product-thumb-buttonelement-style',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Style', 'elearni'),
									'options'    => array(
														'product-thumb-buttonelement-style-simple'  => esc_html__('Simple', 'elearni'),
														'product-thumb-buttonelement-style-bgfill-square'  => esc_html__('Background Fill Square', 'elearni'),
														'product-thumb-buttonelement-style-bgfill-rounded-square' => esc_html__('Background Fill Rounded Square', 'elearni'),
														'product-thumb-buttonelement-style-bgfill-rounded'  => esc_html__('Background Fill Rounded', 'elearni'),
														'product-thumb-buttonelement-style-brdrfill-square'  => esc_html__('Border Fill Square', 'elearni'),
														'product-thumb-buttonelement-style-brdrfill-rounded-square' => esc_html__('Border Fill Rounded Square', 'elearni'),
														'product-thumb-buttonelement-style-brdrfill-rounded'  => esc_html__('Border Fill Rounded', 'elearni'),
														'product-thumb-buttonelement-style-skinbgfill-square'  => esc_html__('Skin Background Fill Square', 'elearni'),
														'product-thumb-buttonelement-style-skinbgfill-rounded-square' => esc_html__('Skin Background Fill Rounded Square', 'elearni'),
														'product-thumb-buttonelement-style-skinbgfill-rounded'  => esc_html__('Skin Background Fill Rounded', 'elearni'),
														'product-thumb-buttonelement-style-skinbrdrfill-square'  => esc_html__('Skin Border Fill Square', 'elearni'),
														'product-thumb-buttonelement-style-skinbrdrfill-rounded-square' => esc_html__('Skin Border Fill Rounded Square', 'elearni'),
														'product-thumb-buttonelement-style-skinbrdrfill-rounded'  => esc_html__('Skin Border Fill Rounded', 'elearni')																
													),
									'default'    => 'product-thumb-buttonelement-style-simple'
								),

								array(
									'id'         => 'product-thumb-buttonelement-stretch',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Stretch', 'elearni'),
									'options'    => array(
														''                                    => esc_html__('False', 'elearni'),
														'product-thumb-buttonelement-stretch' => esc_html__('True', 'elearni')
													)
								),

								array(
									'id'             => 'product-thumb-element-group',
									'type'           => 'sorter',
									'title'          => esc_html__('Element Group Content', 'elearni'),
									'default'        => array(
										'enabled'      => array(
											'title' => esc_html__('Title', 'elearni'),
											'price' => esc_html__('Price', 'elearni')
										),
										'disabled'     => array(
											'cart'           => esc_html__('Cart', 'elearni'),
											'wishlist'       => esc_html__('Wishlist', 'elearni'),
											'compare'        => esc_html__('Compare', 'elearni'),
											'quickview'      => esc_html__('Quick View', 'elearni'),
											'category'       => esc_html__('Category', 'elearni'),
											'button_element' => esc_html__('Button Element', 'elearni'),
											'icons_group'    => esc_html__('Icons Group', 'elearni'),
											'excerpt'        => esc_html__('Excerpt', 'elearni'),
											'rating'         => esc_html__('Rating', 'elearni'),
											'separator'      => esc_html__('Separator', 'elearni'),
											'swatches'       => esc_html__('Swatches', 'elearni')
										),
									),
									'enabled_title'  => esc_html__('Active Elements', 'elearni'),
									'disabled_title' => esc_html__('Deatcive Elements', 'elearni'),
								),


							// "Product Style - Content" Options
								
								array(
									'type'    => 'notice',
									'class'   => 'info',
									'content' => esc_html__('"Product Style - Content" Options.', 'elearni')
								),

								array(
									'id'         => 'product-content-enable',
									'type'       => 'switcher',
									'title'      => esc_html__('Enable Content Section', 'elearni'),
									'desc'	 => esc_html__('YES! to enable content section.', 'elearni')
								),

								array(
									'id'             => 'product-content-content',
									'type'           => 'sorter',
									'title'          => esc_html__('Content', 'elearni'),
									'default'        => array(
										'enabled'      => array(
											'title'          => esc_html__('Title', 'elearni'),
											'category'       => esc_html__('Category', 'elearni'),
											'price'          => esc_html__('Price', 'elearni'),
											'button_element' => esc_html__('Button Element', 'elearni'),
											'icons_group'    => esc_html__('Icons Group', 'elearni'),
										),
										'disabled'     => array(
											'excerpt'       => esc_html__('Excerpt', 'elearni'),
											'rating'        => esc_html__('Rating', 'elearni'),
											'countdown'     => esc_html__('Count Down', 'elearni'),
											'separator'     => esc_html__('Separator', 'elearni'),
											'element_group' => esc_html__('Element Group', 'elearni'),
											'swatches'      => esc_html__('Swatches', 'elearni'),
										),
									),
									'enabled_title'  => esc_html__('Active Elements', 'elearni'),
									'disabled_title' => esc_html__('Deatcive Elements', 'elearni'),
								),

								array(
									'id'         => 'product-content-alignment',
									'type'       => 'select',
									'title'      => esc_html__('Alignment', 'elearni'),
									'options'    => array(
														'product-content-alignment-left'   => esc_html__('Left', 'elearni'),
														'product-content-alignment-right'  => esc_html__('Right', 'elearni'),
														'product-content-alignment-center' => esc_html__('Center', 'elearni')
													),
									'default'    => 'product-content-alignment-left'
								),

								array(
									'id'         => 'product-content-iconsgroup-icons',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Icons', 'elearni'),
									'options'    => array(
														'cart'      => esc_html__('Cart', 'elearni'),
														'wishlist'  => esc_html__('Wishlist', 'elearni'),
														'compare'   => esc_html__('Compare', 'elearni'),
														'quickview' => esc_html__('Quick View', 'elearni')
													),
									'class'         => 'chosen',
									'attributes'    => array(
										'multiple'    => 'multiple',
									),							
								),

								array(
									'id'         => 'product-content-iconsgroup-style',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Style', 'elearni'),
									'options'    => array(
														'product-content-iconsgroup-style-simple'  => esc_html__('Simple', 'elearni'),
														'product-content-iconsgroup-style-bgfill-square'  => esc_html__('Background Fill Square', 'elearni'),
														'product-content-iconsgroup-style-bgfill-rounded-square' => esc_html__('Background Fill Rounded Square', 'elearni'),
														'product-content-iconsgroup-style-bgfill-rounded'  => esc_html__('Background Fill Rounded', 'elearni'),
														'product-content-iconsgroup-style-brdrfill-square'  => esc_html__('Border Fill Square', 'elearni'),
														'product-content-iconsgroup-style-brdrfill-rounded-square' => esc_html__('Border Fill Rounded Square', 'elearni'),
														'product-content-iconsgroup-style-brdrfill-rounded'  => esc_html__('Border Fill Rounded', 'elearni'),
														'product-content-iconsgroup-style-skinbgfill-square'  => esc_html__('Skin Background Fill Square', 'elearni'),
														'product-content-iconsgroup-style-skinbgfill-rounded-square' => esc_html__('Skin Background Fill Rounded Square', 'elearni'),
														'product-content-iconsgroup-style-skinbgfill-rounded'  => esc_html__('Skin Background Fill Rounded', 'elearni'),
														'product-content-iconsgroup-style-skinbrdrfill-square'  => esc_html__('Skin Border Fill Square', 'elearni'),
														'product-content-iconsgroup-style-skinbrdrfill-rounded-square' => esc_html__('Skin Border Fill Rounded Square', 'elearni'),
														'product-content-iconsgroup-style-skinbrdrfill-rounded'  => esc_html__('Skin Border Fill Rounded', 'elearni')																													
													),
									'default'    => 'product-content-iconsgroup-style-simple'
								),

								array(
									'id'         => 'product-content-buttonelement-button',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Button', 'elearni'),
									'options'    => array(
														''          => esc_html__('None', 'elearni'),
														'cart'      => esc_html__('Cart', 'elearni'),
														'wishlist'  => esc_html__('Wishlist', 'elearni'),
														'compare'   => esc_html__('Compare', 'elearni'),
														'quickview' => esc_html__('Quick View', 'elearni')
													)
								),	

								array(
									'id'         => 'product-content-buttonelement-secondary-button',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Secondary Button', 'elearni'),
									'options'    => array(
														''          => esc_html__('None', 'elearni'),
														'cart'      => esc_html__('Cart', 'elearni'),
														'wishlist'  => esc_html__('Wishlist', 'elearni'),
														'compare'   => esc_html__('Compare', 'elearni'),
														'quickview' => esc_html__('Quick View', 'elearni')
													)
								),

								array(
									'id'         => 'product-content-buttonelement-style',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Style', 'elearni'),
									'options'    => array(
														'product-content-buttonelement-style-simple'  => esc_html__('Simple', 'elearni'),
														'product-content-buttonelement-style-bgfill-square'  => esc_html__('Background Fill Square', 'elearni'),
														'product-content-buttonelement-style-bgfill-rounded-square' => esc_html__('Background Fill Rounded Square', 'elearni'),
														'product-content-buttonelement-style-bgfill-rounded'  => esc_html__('Background Fill Rounded', 'elearni'),
														'product-content-buttonelement-style-brdrfill-square'  => esc_html__('Border Fill Square', 'elearni'),
														'product-content-buttonelement-style-brdrfill-rounded-square' => esc_html__('Border Fill Rounded Square', 'elearni'),
														'product-content-buttonelement-style-brdrfill-rounded'  => esc_html__('Border Fill Rounded', 'elearni'),
														'product-content-buttonelement-style-skinbgfill-square'  => esc_html__('Skin Background Fill Square', 'elearni'),
														'product-content-buttonelement-style-skinbgfill-rounded-square' => esc_html__('Skin Background Fill Rounded Square', 'elearni'),
														'product-content-buttonelement-style-skinbgfill-rounded'  => esc_html__('Skin Background Fill Rounded', 'elearni'),
														'product-content-buttonelement-style-skinbrdrfill-square'  => esc_html__('Skin Border Fill Square', 'elearni'),
														'product-content-buttonelement-style-skinbrdrfill-rounded-square' => esc_html__('Skin Border Fill Rounded Square', 'elearni'),
														'product-content-buttonelement-style-skinbrdrfill-rounded'  => esc_html__('Skin Border Fill Rounded', 'elearni')																													
													),
									'default'    => 'product-content-buttonelement-style-simple'
								),

								array(
									'id'         => 'product-content-buttonelement-stretch',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Stretch', 'elearni'),
									'options'    => array(
														''                                    => esc_html__('False', 'elearni'),
														'product-content-buttonelement-stretch' => esc_html__('True', 'elearni')
													)
								),

								array(
									'id'             => 'product-content-element-group',
									'type'           => 'sorter',
									'title'          => esc_html__('Element Group Content', 'elearni'),
									'default'        => array(
										'enabled'      => array(
											'title'          => esc_html__('Title', 'elearni'),
											'price'          => esc_html__('Price', 'elearni')
										),
										'disabled'     => array(
											'cart'           => esc_html__('Cart', 'elearni'),
											'wishlist'       => esc_html__('Wishlist', 'elearni'),
											'compare'        => esc_html__('Compare', 'elearni'),
											'quickview'      => esc_html__('Quick View', 'elearni'),
											'category'       => esc_html__('Category', 'elearni'),
											'button_element' => esc_html__('Button Element', 'elearni'),
											'icons_group'    => esc_html__('Icons Group', 'elearni'),
											'excerpt'        => esc_html__('Excerpt', 'elearni'),
											'rating'         => esc_html__('Rating', 'elearni'),
											'separator'      => esc_html__('Separator', 'elearni'),
											'swatches'       => esc_html__('Swatches', 'elearni')
										),
									),
									'enabled_title'  => esc_html__('Active Elements', 'elearni'),
									'disabled_title' => esc_html__('Deactive Elements', 'elearni')
								),
							
							),
							'default' => array(
								dt_sc_woo_default_product_settings()
							),


						)					
					)
				),

			// Others
				array(
					'name'   => 'dt-woo-other-settings',
					'title'  => esc_html__('Others', 'elearni'),
					'icon'   => 'fa fa-angle-double-right',
					'fields' => array(

						array(	
							'type'    => 'subheading',
							'content' => esc_html__( 'Other Settings', 'elearni' ),
						),

						array(
							'id'    => 'dt-woo-quantity-plusnminus',
							'type'  => 'switcher',
							'title' => esc_html__('Enable Plus / Minus Button - Quantity', 'elearni'),
						),

						array(	
							'type'    => 'subheading',
							'content' => esc_html__( 'Cart Settings', 'elearni' ),
						),

						array(
							'id'         => 'dt-woo-addtocart-custom-action',
							'type'       => 'select',
							'title'      => esc_html__('Add To Cart Custom Action', 'elearni'),
							'options'    => array(
												''                    => esc_html__('None', 'elearni'),
												'sidebar_widget'      => esc_html__('Sidebar Widget', 'elearni'),
												'notification_widget' => esc_html__('Notification Widget', 'elearni'),
											),
							'default'    => '',
						),

						array(
							'id'      => 'dt-woo-cross-sell-column',
							'type'    => 'image_select',
							'title'   => esc_html__('Cross Sell Prodcut Column', 'elearni'),
							'options' => array(
								2 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-half-column.png',
								3 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-third-column.png',
								4 => ELEARNI_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
							),
							'default' => 2,
						),

						array(
							'id'  		=> 'dt-cross-sell-title',
							'type'  	=> 'wysiwyg',
							'title' 	=> esc_html__('Cross Sell Title', 'elearni'),
							'default'	=> '<h2>You may be interested in&hellip;</h2>'
						),												
					)
				),
		)
	);
}

CSFramework::instance( $settings, $options );