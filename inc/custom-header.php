<?php
/**
 * Custom header implementation
 */

function professional_software_company_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'professional_software_company_custom_header_args', array(
		'default-text-color' => 'fff',
		'header-text' 	     =>	false,
		'width'              => 1200,
		'height'             => 80,
		'flex-width'         => true,
		'flex-height'        => true,
		'wp-head-callback'   => 'professional_software_company_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'professional_software_company_custom_header_setup' );

if ( ! function_exists( 'professional_software_company_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see professional_software_company_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'professional_software_company_header_style' );
function professional_software_company_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        #header {
			background-image:url('".esc_url(get_header_image())."');
			background-position: bottom center;
			background-size: 100% 100%;
		}";
	   	wp_add_inline_style( 'professional-software-company-basic-style', $custom_css );
	endif;
}
endif; // professional_software_company_header_style