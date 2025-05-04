<?php
/**
 * Professional Software Company: Customizer
 *
 * @subpackage Professional Software Company
 * @since 1.0
 */

use WPTRT\Customize\Section\Professional_Software_Company_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Professional_Software_Company_Button::class );

	$manager->add_section(
		new Professional_Software_Company_Button( $manager, 'professional_software_company_pro', [
			'title' => __( 'Software Company Pro', 'professional-software-company' ),
			'priority' => 0,
			'button_text' => __( 'Go Pro', 'professional-software-company' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/professional-software-wordpress-theme/', 'professional-software-company')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'professional-software-company-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'professional-software-company-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function professional_software_company_customize_register( $wp_customize ) {

	$wp_customize->add_setting('professional_software_company_logo_size',array(
		'default' => '',
		'sanitize_callback'	=> 'professional_software_company_sanitize_float'
	));
	$wp_customize->add_control('professional_software_company_logo_size',array(
		'type' => 'range',
		'description' => __('Logo Size (0-100%)','professional-software-company'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('professional_software_company_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('professional_software_company_logo_padding',array(
		'label' => __('Logo Margin','professional-software-company'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('professional_software_company_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'professional_software_company_sanitize_float'
	));
	$wp_customize->add_control('professional_software_company_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','professional-software-company'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('professional_software_company_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'professional_software_company_sanitize_float'
	));
	$wp_customize->add_control('professional_software_company_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','professional-software-company'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('professional_software_company_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'professional_software_company_sanitize_float'
	));
	$wp_customize->add_control('professional_software_company_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','professional-software-company'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('professional_software_company_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'professional_software_company_sanitize_float'
 	));
 	$wp_customize->add_control('professional_software_company_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','professional-software-company'),
		'section' => 'title_tagline',
    ));

	$wp_customize->add_setting('professional_software_company_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'professional_software_company_sanitize_checkbox'
	));
	$wp_customize->add_control('professional_software_company_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','professional-software-company'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('professional_software_company_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'professional_software_company_sanitize_float'
	));
	$wp_customize->add_control('professional_software_company_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','professional-software-company'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting( 'professional_software_company_site_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_site_title_color', array(
		'label' => 'Title Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_setting('professional_software_company_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'professional_software_company_sanitize_checkbox'
	));
	$wp_customize->add_control('professional_software_company_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','professional-software-company'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('professional_software_company_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'professional_software_company_sanitize_float'
	));
	$wp_customize->add_control('professional_software_company_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','professional-software-company'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting( 'professional_software_company_site_tagline_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_site_tagline_color', array(
		'label' => 'Tagline Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_panel( 'professional_software_company_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'professional-software-company' ),
		'description' => __( 'Description of what this panel does.', 'professional-software-company' ),
	) );

	$wp_customize->add_section( 'professional_software_company_theme_options_section', array(
    	'title'      => __( 'General Settings', 'professional-software-company' ),
		'priority'   => 30,
		'panel' => 'professional_software_company_panel_id'
	) );

	$wp_customize->add_setting('professional_software_company_theme_options',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'professional_software_company_sanitize_choices'
	));
	$wp_customize->add_control('professional_software_company_theme_options',array(
		'type' => 'select',
		'label' => __('Blog Page Sidebar Layout','professional-software-company'),
		'section' => 'professional_software_company_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','professional-software-company'),
		   'Right Sidebar' => __('Right Sidebar','professional-software-company'),
		   'One Column' => __('One Column','professional-software-company'),
		   'Three Columns' => __('Three Columns','professional-software-company'),
		   'Four Columns' => __('Four Columns','professional-software-company'),
		   'Grid Layout' => __('Grid Layout','professional-software-company')
		),
	));

	$wp_customize->add_setting('professional_software_company_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'professional_software_company_sanitize_choices'
	));
	$wp_customize->add_control('professional_software_company_single_post_sidebar',array(
        'type' => 'select',
        'label' => __('Single Post Sidebar Layout','professional-software-company'),
        'section' => 'professional_software_company_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','professional-software-company'),
            'Right Sidebar' => __('Right Sidebar','professional-software-company'),
            'One Column' => __('One Column','professional-software-company')
        ),
	));

	$wp_customize->add_setting('professional_software_company_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'professional_software_company_sanitize_choices'
	));
	$wp_customize->add_control('professional_software_company_page_sidebar',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','professional-software-company'),
        'section' => 'professional_software_company_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','professional-software-company'),
            'Right Sidebar' => __('Right Sidebar','professional-software-company'),
            'One Column' => __('One Column','professional-software-company')
        ),
	));

	$wp_customize->add_setting('professional_software_company_archive_page_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'professional_software_company_sanitize_choices'
	));
	$wp_customize->add_control('professional_software_company_archive_page_sidebar',array(
        'type' => 'select',
        'label' => __('Archive & Search Page Sidebar Layout','professional-software-company'),
        'section' => 'professional_software_company_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','professional-software-company'),
            'Right Sidebar' => __('Right Sidebar','professional-software-company'),
            'One Column' => __('One Column','professional-software-company'),
		    'Three Columns' => __('Three Columns','professional-software-company'),
		    'Four Columns' => __('Four Columns','professional-software-company'),
            'Grid Layout' => __('Grid Layout','professional-software-company')
        ),
	));

	$wp_customize->add_setting( 'professional_software_company_boxfull_width', array(
		'default'           => '',
		'sanitize_callback' => 'professional_software_company_sanitize_choices'
	));
	
	$wp_customize->add_control( 'professional_software_company_boxfull_width', array(
		'label'    => __( 'Section Width', 'professional-software-company' ),
		'section'  => 'professional_software_company_theme_options_section',
		'type'     => 'select',
		'choices'  => array(
			'container'  => __('Box Width', 'professional-software-company'),
			'container-fluid' => __('Full Width', 'professional-software-company'),
			'none' => __('None', 'professional-software-company')
		),
	));

	$wp_customize->add_setting( 'professional_software_company_dropdown_anim', array(
		'default'           => 'None',
		'sanitize_callback' => 'professional_software_company_sanitize_choices'
	));
	$wp_customize->add_control( 'professional_software_company_dropdown_anim', array(
		'label'    => __( 'Menu Dropdown Animations', 'professional-software-company' ),
		'section'  => 'professional_software_company_theme_options_section',
		'type'     => 'select',
		'choices'  => array(
			'bounceInUp'  => __('bounceInUp', 'professional-software-company'),
			'fadeInUp' => __('fadeInUp', 'professional-software-company'),
			'zoomIn'    => __('zoomIn', 'professional-software-company'),
			'None'    => __('None', 'professional-software-company')
		),
	));

	//Header
	$wp_customize->add_section( 'professional_software_company_header_section' , array(
    	'title'    => __( 'Header', 'professional-software-company' ),
		'priority' => null,
		'panel' => 'professional_software_company_panel_id'
	) );

	$wp_customize->add_setting('professional_software_company_header_btn_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('professional_software_company_header_btn_text',array(
	   	'type' => 'text',
	   	'label' => __('Add Button Text','professional-software-company'),
	   	'section' => 'professional_software_company_header_section',
	));

	$wp_customize->add_setting('professional_software_company_header_btn_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('professional_software_company_header_btn_url',array(
	   	'type' => 'text',
	   	'label' => __('Add Button URL','professional-software-company'),
	   	'section' => 'professional_software_company_header_section',
	));

	$wp_customize->add_setting( 'professional_software_company_menu_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_menu_color', array(
		'label' => 'Menu Color',
		'section' => 'professional_software_company_header_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_menuhvr_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_menuhvr_color', array(
		'label' => 'Menu Hover Color',
		'section' => 'professional_software_company_header_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_hdrbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_hdrbtn_color', array(
		'label' => 'Button Text Color',
		'section' => 'professional_software_company_header_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_hdrbtnhvr_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_hdrbtnhvr_color', array(
		'label' => 'Button Hover Text Color',
		'section' => 'professional_software_company_header_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_hdrbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_hdrbtnbg_color', array(
		'label' => 'Button Background Color',
		'section' => 'professional_software_company_header_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_hdrbtnhvrbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_hdrbtnhvrbg_color', array(
		'label' => 'Button Hover Background Color',
		'section' => 'professional_software_company_header_section',
	)));

	//home page slider
	$wp_customize->add_section( 'professional_software_company_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'professional-software-company' ),
		'priority' => null,
		'panel' => 'professional_software_company_panel_id'
	) );

	$wp_customize->add_setting('professional_software_company_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'professional_software_company_sanitize_checkbox'
	));
	$wp_customize->add_control('professional_software_company_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider','professional-software-company'),
	   	'section' => 'professional_software_company_slider_section',
	));

	$wp_customize->add_setting( 'professional_software_company_slider_effect', array(
		'default'           => '',
		'sanitize_callback' => 'professional_software_company_sanitize_choices'
	));
	$wp_customize->add_control( 'professional_software_company_slider_effect', array(
		'label'    => __( 'Onload Transactions Effects', 'professional-software-company' ),
		'section'  => 'professional_software_company_slider_section',
		'type'     => 'select',
		'choices'  => array(
			'bounceInLeft'  => __('bounceInLeft', 'professional-software-company'),
			'bounceInRight' => __('bounceInRight', 'professional-software-company'),
			'bounceInUp'    => __('bounceInUp', 'professional-software-company'),
			'bounceInDown'    => __('bounceInDown', 'professional-software-company'),
			'zoomIn'  => __('zoomIn', 'professional-software-company'),
			'zoomOut' => __('zoomOut', 'professional-software-company'),
			'fadeInDown'    => __('fadeInDown', 'professional-software-company'),
			'fadeInUp'    => __('fadeInUp', 'professional-software-company'),
			'fadeInLeft'  => __('fadeInLeft', 'professional-software-company'),
			'fadeInRight' => __('fadeInRight', 'professional-software-company'),
			'flip-up'    => __('flip-up', 'professional-software-company'),
			'none'    => __('none', 'professional-software-company')
		),
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'professional_software_company_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'professional_software_company_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'professional_software_company_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'professional-software-company' ),
			'description'=> __('Image size (700px x 610px)','professional-software-company'),
			'section' => 'professional_software_company_slider_section',
			'type' => 'dropdown-pages'
		));
	}

	$wp_customize->add_setting('professional_software_company_slider_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'professional_software_company_sanitize_float'
	));
	$wp_customize->add_control('professional_software_company_slider_font_size',array(
		'type' => 'number',
		'label' => __('Title Font Size','professional-software-company'),
		'section' => 'professional_software_company_slider_section',
	));

	$wp_customize->add_setting('professional_software_company_slider_text_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'professional_software_company_sanitize_float'
	));
	$wp_customize->add_control('professional_software_company_slider_text_font_size',array(
		'type' => 'number',
		'label' => __('Text Font Size','professional-software-company'),
		'section' => 'professional_software_company_slider_section',
	));

	$wp_customize->add_setting( 'professional_software_company_slider_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_slider_color', array(
		'label' => 'Text Color',
		'section' => 'professional_software_company_slider_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_slider_btn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_slider_btn_color', array(
		'label' => 'Button Text Color',
		'section' => 'professional_software_company_slider_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_slider_btnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_slider_btnbg_color', array(
		'label' => 'Button Background Color',
		'section' => 'professional_software_company_slider_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_slider_npbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_slider_npbtn_color', array(
		'label' => 'Prev/Next Arrow Color',
		'section' => 'professional_software_company_slider_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_slider_npbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_slider_npbtnbg_color', array(
		'label' => 'Prev/Next Arrow Bg Color',
		'section' => 'professional_software_company_slider_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_sliderbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_sliderbg_color', array(
		'label' => 'Slider Bg Color',
		'section' => 'professional_software_company_slider_section',
	)));

	//Services Section
	$wp_customize->add_section('professional_software_company_service_section',array(
		'title'	=> __('Service Section','professional-software-company'),
		'description'=> __('<b>Note :</b> This section will appear below the slider.','professional-software-company'),
		'panel' => 'professional_software_company_panel_id',
	));

    $wp_customize->add_setting('professional_software_company_small_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('professional_software_company_small_title',array(
		'label'	=> __('Section Small Title','professional-software-company'),
		'section' => 'professional_software_company_service_section',
		'type' => 'text'
	));

	$wp_customize->add_setting('professional_software_company_small_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'professional_software_company_sanitize_float'
	));
	$wp_customize->add_control('professional_software_company_small_title_font_size',array(
		'type' => 'number',
		'label' => __('Font Size','professional-software-company'),
		'section' => 'professional_software_company_service_section',
	));

    $wp_customize->add_setting('professional_software_company_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('professional_software_company_section_title',array(
		'label'	=> __('Section Title','professional-software-company'),
		'section' => 'professional_software_company_service_section',
		'type' => 'text'
	));

	$wp_customize->add_setting('professional_software_company_section_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'professional_software_company_sanitize_float'
	));
	$wp_customize->add_control('professional_software_company_section_title_font_size',array(
		'type' => 'number',
		'label' => __('Font Size','professional-software-company'),
		'section' => 'professional_software_company_service_section',
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('professional_software_company_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'professional_software_company_sanitize_choices',
	));
	$wp_customize->add_control('professional_software_company_category_setting',array(
		'type' => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category To Display Post','professional-software-company'),
		'section' => 'professional_software_company_service_section',
	));

	$wp_customize->add_setting('professional_software_company_service_number',array(
		'default'	=> '3',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('professional_software_company_service_number',array(
		'label'	=> __('Number Of Posts To Show In A Category','professional-software-company'),
		'section' => 'professional_software_company_service_section',
		'type'	  => 'number'
	));

	$professional_software_company_service_number = get_theme_mod('professional_software_company_service_number', 3);
	for ($i=1; $i <= $professional_software_company_service_number; $i++) { 
	   	$wp_customize->add_setting('professional_software_company_service_icon' . $i, array(
	      	'default' => 'fas fa-download',
	      	'sanitize_callback' => 'sanitize_text_field'
	   	));
	   	$wp_customize->add_control(new Professional_Software_Company_Fontawesome_Icon_Chooser($wp_customize, 'professional_software_company_service_icon' . $i, array(
	      	'section' => 'professional_software_company_service_section',
	      	'type' => 'icon',
	      	'label' => esc_html__('Service Icon ', 'professional-software-company') . $i
	  	)));
	}

	$wp_customize->add_setting( 'professional_software_company_service_smalltitle_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_service_smalltitle_color', array(
		'label' => 'Section Small Title Color',
		'section' => 'professional_software_company_service_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_service_section_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_service_section_title_color', array(
		'label' => 'Section Title Color',
		'section' => 'professional_software_company_service_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_service_icon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_service_icon_color', array(
		'label' => 'Icon Color',
		'section' => 'professional_software_company_service_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_service_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_service_title_color', array(
		'label' => 'Title Color',
		'section' => 'professional_software_company_service_section',
	)));

	$wp_customize->add_setting( 'professional_software_company_service_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'professional_software_company_service_text_color', array(
		'label' => 'Text Color',
		'section' => 'professional_software_company_service_section',
	)));

	//Footer
    $wp_customize->add_section( 'professional_software_company_footer', array(
    	'title'  => __( 'Footer Settings', 'professional-software-company' ),
		'priority' => null,
		'panel' => 'professional_software_company_panel_id'
	) );

	$wp_customize->add_setting('professional_software_company_show_back_totop',array(
       'default' => true,
       'sanitize_callback'	=> 'professional_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('professional_software_company_show_back_totop',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Back to Top','professional-software-company'),
       'section' => 'professional_software_company_footer'
    ));

    $wp_customize->add_setting('professional_software_company_footer_copy',array(
		'default' => 'Software WordPress Theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('professional_software_company_footer_copy',array(
		'label'	=> __('Copyright Text','professional-software-company'),
		'section' => 'professional_software_company_footer',
		'setting' => 'professional_software_company_footer_copy',
		'type' => 'text'
	));

	$wp_customize->add_setting('professional_software_company_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'professional_software_company_sanitize_float'
 	));
 	$wp_customize->add_control('professional_software_company_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','professional-software-company'),
		'section' => 'professional_software_company_footer',
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'professional_software_company_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'professional_software_company_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'professional_software_company_customize_register' );

function professional_software_company_customize_partial_blogname() {
	bloginfo( 'name' );
}

function professional_software_company_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function professional_software_company_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function professional_software_company_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

if (class_exists('WP_Customize_Control')) {

   	class Professional_Software_Company_Fontawesome_Icon_Chooser extends WP_Customize_Control {

      	public $type = 'icon';

      	public function render_content() { ?>
	     	<label>
	            <span class="customize-control-title">
	               <?php echo esc_html($this->label); ?>
	            </span>

	            <?php if ($this->description) { ?>
	                <span class="description customize-control-description">
	                   <?php echo wp_kses_post($this->description); ?>
	                </span>
	            <?php } ?>

	            <div class="professional-software-company-selected-icon">
	                <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
	                <span><i class="fa fa-angle-down"></i></span>
	            </div>

	            <ul class="professional-software-company-icon-list clearfix">
	                <?php
	                $professional_software_company_font_awesome_icon_array = professional_software_company_font_awesome_icon_array();
	                foreach ($professional_software_company_font_awesome_icon_array as $professional_software_company_font_awesome_icon) {
	                   $icon_class = $this->value() == $professional_software_company_font_awesome_icon ? 'icon-active' : '';
	                   echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($professional_software_company_font_awesome_icon) . '"></i></li>';
	                }
	                ?>
	            </ul>
	            <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
	        </label>
	        <?php
      	}
  	}
}
function professional_software_company_customizer_script() {
   wp_enqueue_style( 'font-awesome-1', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css');
}
add_action( 'customize_controls_enqueue_scripts', 'professional_software_company_customizer_script' );