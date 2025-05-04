<?php 

	$professional_software_company_custom_style = '';

	// Logo Size
	$professional_software_company_logo_top_padding = get_theme_mod('professional_software_company_logo_top_padding');
	$professional_software_company_logo_bottom_padding = get_theme_mod('professional_software_company_logo_bottom_padding');
	$professional_software_company_logo_left_padding = get_theme_mod('professional_software_company_logo_left_padding');
	$professional_software_company_logo_right_padding = get_theme_mod('professional_software_company_logo_right_padding');

	if( $professional_software_company_logo_top_padding != '' || $professional_software_company_logo_bottom_padding != '' || $professional_software_company_logo_left_padding != '' || $professional_software_company_logo_right_padding != ''){
		$professional_software_company_custom_style .=' .logo {';
			$professional_software_company_custom_style .=' padding-top: '.esc_attr($professional_software_company_logo_top_padding).'px; padding-bottom: '.esc_attr($professional_software_company_logo_bottom_padding).'px; padding-left: '.esc_attr($professional_software_company_logo_left_padding).'px; padding-right: '.esc_attr($professional_software_company_logo_right_padding).'px;';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_logo_size = get_theme_mod('professional_software_company_logo_size');
	if( $professional_software_company_logo_size != '' ) {
		if($professional_software_company_logo_size >= 0 && $professional_software_company_logo_size <= 100) {
			$calculated_width = $professional_software_company_logo_size * 3.5;
			$professional_software_company_custom_style .= ' .custom-logo-link img {';
			$professional_software_company_custom_style .= ' width: ' . esc_attr($calculated_width) . 'px;';
			$professional_software_company_custom_style .= ' }';
		}
	}

	// Header Image
	$header_image_url = professional_software_company_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$professional_software_company_custom_style .=' #inner-pages-header {';
			$professional_software_company_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$professional_software_company_custom_style .=' }';
		$professional_software_company_custom_style .=' .header-overlay {';
			$professional_software_company_custom_style .=' position: absolute; 	width: 100%; height: 100%; 	top: 0; left: 0; background: #000; opacity: 0.3;';
		$professional_software_company_custom_style .=' }';
	} else {
		$professional_software_company_custom_style .=' #inner-pages-header {';
			$professional_software_company_custom_style .=' background: linear-gradient(180deg,#949292 27%,#969595 55%,#ccc 78%); ';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_slider_hide_show = get_theme_mod('professional_software_company_slider_hide_show',false);
	if( $professional_software_company_slider_hide_show == true){
		$professional_software_company_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$professional_software_company_custom_style .=' display:none;';
		$professional_software_company_custom_style .=' }';
	}

	// Site Title Font Size
	$professional_software_company_site_title_font_size = get_theme_mod('professional_software_company_site_title_font_size');
	if( $professional_software_company_site_title_font_size != ''){
		$professional_software_company_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$professional_software_company_custom_style .=' font-size: '.esc_attr($professional_software_company_site_title_font_size).'px;';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_site_title_color = get_theme_mod('professional_software_company_site_title_color');
	if ( $professional_software_company_site_title_color != '') {
		$professional_software_company_custom_style .=' .logo h1.site-title a, .logo p.site-title a {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_site_title_color).';';
		$professional_software_company_custom_style .=' }';
	}

	// Site Tagline Font Size
	$professional_software_company_site_tagline_font_size = get_theme_mod('professional_software_company_site_tagline_font_size');
	if( $professional_software_company_site_tagline_font_size != ''){
		$professional_software_company_custom_style .=' .logo p.site-description {';
			$professional_software_company_custom_style .=' font-size: '.esc_attr($professional_software_company_site_tagline_font_size).'px;';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_site_tagline_color = get_theme_mod('professional_software_company_site_tagline_color');
	if ( $professional_software_company_site_tagline_color != '') {
		$professional_software_company_custom_style .=' .logo p.site-description {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_site_tagline_color).';';
		$professional_software_company_custom_style .=' }';
	}

	//layout width
	$professional_software_company_boxfull_width = get_theme_mod('professional_software_company_boxfull_width');
	if ($professional_software_company_boxfull_width !== '') {
		switch ($professional_software_company_boxfull_width) {
			case 'container':
				$professional_software_company_custom_style .= ' body, #header, .bottom-header {
					max-width: 1140px;
					width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;
					}';
				break;
			case 'container-fluid':
				$professional_software_company_custom_style .= ' body, #header, .bottom-header { 
					width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;
					}';
				break;
			case 'none':
				// No specific width specified, so no additional style needed.
				break;
			default:
				// Handle unexpected values.
				break;
		}
	}

	//Menu animation
	$professional_software_company_dropdown_anim = get_theme_mod('professional_software_company_dropdown_anim');

	if ( $professional_software_company_dropdown_anim != '') {
		$professional_software_company_custom_style .=' .nav-menu ul ul {';
			$professional_software_company_custom_style .=' animation:'.esc_attr($professional_software_company_dropdown_anim).' 1s ease;';
		$professional_software_company_custom_style .=' }';
	}

	//Header color
	$professional_software_company_menu_color = get_theme_mod('professional_software_company_menu_color');
	if ( $professional_software_company_menu_color != '') {
		$professional_software_company_custom_style .=' .nav-menu ul li a {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_menu_color).';';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_menuhvr_color = get_theme_mod('professional_software_company_menuhvr_color');
	if ( $professional_software_company_menuhvr_color != '') {
		$professional_software_company_custom_style .=' .nav-menu ul li a:hover {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_menuhvr_color).';';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_hdrbtn_color = get_theme_mod('professional_software_company_hdrbtn_color');
	$professional_software_company_hdrbtnbg_color = get_theme_mod('professional_software_company_hdrbtnbg_color');
	if ( $professional_software_company_hdrbtn_color != '') {
		$professional_software_company_custom_style .=' .quote-btn a {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_hdrbtn_color).'; background-color:'.esc_attr($professional_software_company_hdrbtnbg_color).';';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_hdrbtnhvr_color = get_theme_mod('professional_software_company_hdrbtnhvr_color');
	$professional_software_company_hdrbtnhvrbg_color = get_theme_mod('professional_software_company_hdrbtnhvrbg_color');
	if ( $professional_software_company_hdrbtnhvr_color != '') {
		$professional_software_company_custom_style .=' .quote-btn a:hover {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_hdrbtnhvr_color).'; background-color:'.esc_attr($professional_software_company_hdrbtnhvrbg_color).';';
		$professional_software_company_custom_style .=' }';
	}


	//Slider color
	$professional_software_company_slider_font_size = get_theme_mod('professional_software_company_slider_font_size');
	if( $professional_software_company_slider_font_size != ''){
		$professional_software_company_custom_style .=' #slider h2 {';
			$professional_software_company_custom_style .=' font-size: '.esc_attr($professional_software_company_slider_font_size).'px;';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_slider_text_font_size = get_theme_mod('professional_software_company_slider_text_font_size');
	if( $professional_software_company_slider_text_font_size != ''){
		$professional_software_company_custom_style .=' #slider p {';
			$professional_software_company_custom_style .=' font-size: '.esc_attr($professional_software_company_slider_text_font_size).'px;';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_slider_color = get_theme_mod('professional_software_company_slider_color');
	if ( $professional_software_company_slider_color != '') {
		$professional_software_company_custom_style .=' #slider h2 a {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_slider_color).';';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_slider_btn_color = get_theme_mod('professional_software_company_slider_btn_color');
	$professional_software_company_slider_btnbg_color = get_theme_mod('professional_software_company_slider_btnbg_color');
	if ( $professional_software_company_slider_btn_color != '') {
		$professional_software_company_custom_style .=' #slider a.read-btn {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_slider_btn_color).'; background-color:'.esc_attr($professional_software_company_slider_btnbg_color).';';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_slider_npbtn_color = get_theme_mod('professional_software_company_slider_npbtn_color');
	$professional_software_company_slider_npbtnbg_color = get_theme_mod('professional_software_company_slider_npbtnbg_color');
	if ( $professional_software_company_slider_npbtn_color != '') {
		$professional_software_company_custom_style .=' #slider .carousel-control-prev-icon i, #slider .carousel-control-next-icon i {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_slider_npbtn_color).'; background-color:'.esc_attr($professional_software_company_slider_npbtnbg_color).';';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_sliderbg_color = get_theme_mod('professional_software_company_sliderbg_color');
	if ( $professional_software_company_sliderbg_color != '') {
		$professional_software_company_custom_style .=' .sliderimg {';
			$professional_software_company_custom_style .=' background-color:'.esc_attr($professional_software_company_sliderbg_color).';';
		$professional_software_company_custom_style .=' }';
	}

	//Service color
	$professional_software_company_small_title_font_size = get_theme_mod('professional_software_company_small_title_font_size');
	if( $professional_software_company_small_title_font_size != ''){
		$professional_software_company_custom_style .=' #service-section .service-head .small-title {';
			$professional_software_company_custom_style .=' font-size: '.esc_attr($professional_software_company_small_title_font_size).'px;';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_section_title_font_size = get_theme_mod('professional_software_company_section_title_font_size');
	if( $professional_software_company_section_title_font_size != ''){
		$professional_software_company_custom_style .=' #service-section h3 {';
			$professional_software_company_custom_style .=' font-size: '.esc_attr($professional_software_company_section_title_font_size).'px;';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_service_smalltitle_color = get_theme_mod('professional_software_company_service_smalltitle_color');
	if ( $professional_software_company_service_smalltitle_color != '') {
		$professional_software_company_custom_style .=' #service-section .service-head .small-title {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_service_smalltitle_color).';';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_service_section_title_color = get_theme_mod('professional_software_company_service_section_title_color');
	if ( $professional_software_company_service_section_title_color != '') {
		$professional_software_company_custom_style .=' #service-section h3 {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_service_section_title_color).';';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_service_icon_color = get_theme_mod('professional_software_company_service_icon_color');
	if ( $professional_software_company_service_icon_color != '') {
		$professional_software_company_custom_style .=' #service-section .service-box .service-icon i {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_service_icon_color).';';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_service_title_color = get_theme_mod('professional_software_company_service_title_color');
	if ( $professional_software_company_service_title_color != '') {
		$professional_software_company_custom_style .=' .service-box h4 a {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_service_title_color).';';
		$professional_software_company_custom_style .=' }';
	}

	$professional_software_company_service_text_color = get_theme_mod('professional_software_company_service_text_color');
	if ( $professional_software_company_service_text_color != '') {
		$professional_software_company_custom_style .=' .service-box p {';
			$professional_software_company_custom_style .=' color:'.esc_attr($professional_software_company_service_text_color).';';
		$professional_software_company_custom_style .=' }';
	}

	//copyright css
	$professional_software_company_copyright_padding = get_theme_mod('professional_software_company_copyright_padding');

	if( $professional_software_company_copyright_padding != ''){
		$professional_software_company_custom_style .=' .site-info {';
			$professional_software_company_custom_style .=' padding-top: '.esc_attr($professional_software_company_copyright_padding).'px; padding-bottom: '.esc_attr($professional_software_company_copyright_padding).'px;';
		$professional_software_company_custom_style .=' }';
	}