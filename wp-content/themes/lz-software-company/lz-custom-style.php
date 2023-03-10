<?php 

	$lz_software_company_custom_style = '';

	// Logo Size
	$lz_software_company_logo_top_padding = get_theme_mod('lz_software_company_logo_top_padding');
	$lz_software_company_logo_bottom_padding = get_theme_mod('lz_software_company_logo_bottom_padding');
	$lz_software_company_logo_left_padding = get_theme_mod('lz_software_company_logo_left_padding');
	$lz_software_company_logo_right_padding = get_theme_mod('lz_software_company_logo_right_padding');

	if( $lz_software_company_logo_top_padding != '' || $lz_software_company_logo_bottom_padding != '' || $lz_software_company_logo_left_padding != '' || $lz_software_company_logo_right_padding != ''){
		$lz_software_company_custom_style .=' .logo {';
			$lz_software_company_custom_style .=' padding-top: '.esc_attr($lz_software_company_logo_top_padding).'px; padding-bottom: '.esc_attr($lz_software_company_logo_bottom_padding).'px; padding-left: '.esc_attr($lz_software_company_logo_left_padding).'px; padding-right: '.esc_attr($lz_software_company_logo_right_padding).'px;';
		$lz_software_company_custom_style .=' }';
	}

	// service section padding
	$lz_software_company_service_section_padding = get_theme_mod('lz_software_company_service_section_padding');

	if( $lz_software_company_service_section_padding != ''){
		$lz_software_company_custom_style .=' #our_service {';
			$lz_software_company_custom_style .=' padding-top: '.esc_attr($lz_software_company_service_section_padding).'px; padding-bottom: '.esc_attr($lz_software_company_service_section_padding).'px;';
		$lz_software_company_custom_style .=' }';
	}

	// Site Title Font Size
	$lz_software_company_site_title_font_size = get_theme_mod('lz_software_company_site_title_font_size');
	if( $lz_software_company_site_title_font_size != ''){
		$lz_software_company_custom_style .=' .logo h1{';
			$lz_software_company_custom_style .=' font-size: '.esc_attr($lz_software_company_site_title_font_size).'px;';
		$lz_software_company_custom_style .=' }';
	}

	// Site Tagline Font Size
	$lz_software_company_site_tagline_font_size = get_theme_mod('lz_software_company_site_tagline_font_size');
	if( $lz_software_company_site_tagline_font_size != ''){
		$lz_software_company_custom_style .=' .logo p.site-description {';
			$lz_software_company_custom_style .=' font-size: '.esc_attr($lz_software_company_site_tagline_font_size).'px;';
		$lz_software_company_custom_style .=' }';
	}

	// Copyright padding
	$lz_software_company_copyright_padding = get_theme_mod('lz_software_company_copyright_padding');

	if( $lz_software_company_copyright_padding != ''){
		$lz_software_company_custom_style .=' .site-info {';
			$lz_software_company_custom_style .=' padding-top: '.esc_attr($lz_software_company_copyright_padding).'px; padding-bottom: '.esc_attr($lz_software_company_copyright_padding).'px;';
		$lz_software_company_custom_style .=' }';
	}

	// Header Image
	$header_image_url = lz_software_company_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$lz_software_company_custom_style .=' #inner-pages-header {';
			$lz_software_company_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$lz_software_company_custom_style .=' }';
		$lz_software_company_custom_style .=' .header-overlay {';
			$lz_software_company_custom_style .=' position: absolute; 	width: 100%; height: 100%; 	top: 0; left: 0; background: #000; opacity: 0.3;';
		$lz_software_company_custom_style .=' }';
		$lz_software_company_custom_style .=' #our_service {';
			$lz_software_company_custom_style .=' margin: 4% 0;';
		$lz_software_company_custom_style .=' }';
	} else {
		$lz_software_company_custom_style .=' #inner-pages-header {';
			$lz_software_company_custom_style .=' background: linear-gradient(0deg,#8972ea,#516ced 80%) no-repeat; ';
		$lz_software_company_custom_style .=' }';
		$lz_software_company_custom_style .=' #our_service {';
			$lz_software_company_custom_style .=' margin: 4% 0;';
		$lz_software_company_custom_style .=' }';
	}

	$lz_software_company_slider_hide_show = get_theme_mod('lz_software_company_slider_hide_show',false);
	if( $lz_software_company_slider_hide_show == true){
		$lz_software_company_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$lz_software_company_custom_style .=' display:none;';
		$lz_software_company_custom_style .=' }';
	}