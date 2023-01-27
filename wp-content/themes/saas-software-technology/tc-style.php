<?php 
	$saas_software_technology_custom_css ='';

	/*----------------Width Layout -------------------*/
	$saas_software_technology_theme_lay = get_theme_mod( 'saas_software_technology_width_options','Full Layout');
    if($saas_software_technology_theme_lay == 'Full Layout'){
		$saas_software_technology_custom_css .='body{';
			$saas_software_technology_custom_css .='max-width: 100%;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_theme_lay == 'Contained Layout'){
		$saas_software_technology_custom_css .='body{';
			$saas_software_technology_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_theme_lay == 'Boxed Layout'){
		$saas_software_technology_custom_css .='body{';
			$saas_software_technology_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$saas_software_technology_custom_css .='}';
	}

	/*------ Button Style -------*/
	$saas_software_technology_top_buttom_padding = get_theme_mod('saas_software_technology_top_button_padding');
	$saas_software_technology_left_right_padding = get_theme_mod('saas_software_technology_left_button_padding');
	if($saas_software_technology_top_buttom_padding != false || $saas_software_technology_left_right_padding != false ){
		$saas_software_technology_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
			$saas_software_technology_custom_css .='padding-top: '.esc_attr($saas_software_technology_top_buttom_padding).'px; padding-bottom: '.esc_attr($saas_software_technology_top_buttom_padding).'px; padding-left: '.esc_attr($saas_software_technology_left_right_padding).'px; padding-right: '.esc_attr($saas_software_technology_left_right_padding).'px;';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_button_border_radius = get_theme_mod('saas_software_technology_button_border_radius');
	$saas_software_technology_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
		$saas_software_technology_custom_css .='border-radius: '.esc_attr($saas_software_technology_button_border_radius).'px;';
	$saas_software_technology_custom_css .='}';

	/*-------------- Woocommerce Button  -------------------*/

	$saas_software_technology_woocommerce_button_padding_top = get_theme_mod('saas_software_technology_woocommerce_button_padding_top');
	if($saas_software_technology_woocommerce_button_padding_top != false){
		$saas_software_technology_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$saas_software_technology_custom_css .='padding-top: '.esc_attr($saas_software_technology_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($saas_software_technology_woocommerce_button_padding_top).'px;';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_woocommerce_button_padding_right = get_theme_mod('saas_software_technology_woocommerce_button_padding_right');
	if($saas_software_technology_woocommerce_button_padding_right != false){
		$saas_software_technology_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$saas_software_technology_custom_css .='padding-left: '.esc_attr($saas_software_technology_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($saas_software_technology_woocommerce_button_padding_right).'px;';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_woocommerce_button_border_radius = get_theme_mod('saas_software_technology_woocommerce_button_border_radius');
	if($saas_software_technology_woocommerce_button_border_radius != false){
		$saas_software_technology_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$saas_software_technology_custom_css .='border-radius: '.esc_attr($saas_software_technology_woocommerce_button_border_radius).'px;';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_related_product = get_theme_mod('saas_software_technology_related_product',true);

	if($saas_software_technology_related_product == false){
		$saas_software_technology_custom_css .='.related.products{';
			$saas_software_technology_custom_css .='display: none;';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_woocommerce_product_border = get_theme_mod('saas_software_technology_woocommerce_product_border',false);

	if($saas_software_technology_woocommerce_product_border == true){
		$saas_software_technology_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$saas_software_technology_custom_css .='border: 1px solid #ddd;';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_woocommerce_product_padding_top = get_theme_mod('saas_software_technology_woocommerce_product_padding_top',0);
		$saas_software_technology_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$saas_software_technology_custom_css .='padding-top: '.esc_attr($saas_software_technology_woocommerce_product_padding_top).'px; padding-bottom: '.esc_attr($saas_software_technology_woocommerce_product_padding_top).'px;';
		$saas_software_technology_custom_css .='}';

	$saas_software_technology_woocommerce_product_padding_right = get_theme_mod('saas_software_technology_woocommerce_product_padding_right',0);
		$saas_software_technology_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$saas_software_technology_custom_css .='padding-left: '.esc_attr($saas_software_technology_woocommerce_product_padding_right).'px; padding-right: '.esc_attr($saas_software_technology_woocommerce_product_padding_right).'px;';
		$saas_software_technology_custom_css .='}';

	$saas_software_technology_woocommerce_product_border_radius = get_theme_mod('saas_software_technology_woocommerce_product_border_radius');
	if($saas_software_technology_woocommerce_product_border_radius != false){
		$saas_software_technology_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$saas_software_technology_custom_css .='border-radius: '.esc_attr($saas_software_technology_woocommerce_product_border_radius).'px;';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_woocommerce_product_box_shadow = get_theme_mod('saas_software_technology_woocommerce_product_box_shadow');
	if($saas_software_technology_woocommerce_product_box_shadow != false){
		$saas_software_technology_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$saas_software_technology_custom_css .='box-shadow: '.esc_attr($saas_software_technology_woocommerce_product_box_shadow).'px '.esc_attr($saas_software_technology_woocommerce_product_box_shadow).'px '.esc_attr($saas_software_technology_woocommerce_product_box_shadow).'px #aaa;';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_product_sale_font_size = get_theme_mod('saas_software_technology_product_sale_font_size');
	$saas_software_technology_custom_css .='.woocommerce span.onsale {';
		$saas_software_technology_custom_css .='font-size: '.esc_attr($saas_software_technology_product_sale_font_size).'px;';
	$saas_software_technology_custom_css .='}';

	/*---- Preloader Color ----*/
	$saas_software_technology_preloader_color = get_theme_mod('saas_software_technology_preloader_color');
	$saas_software_technology_preloader_bg_color = get_theme_mod('saas_software_technology_preloader_bg_color');

	if($saas_software_technology_preloader_color != false){
		$saas_software_technology_custom_css .='.preloader-squares .square, .preloader-chasing-squares .square{';
			$saas_software_technology_custom_css .='background-color: '.esc_attr($saas_software_technology_preloader_color).';';
		$saas_software_technology_custom_css .='}';
	}
	if($saas_software_technology_preloader_bg_color != false){
		$saas_software_technology_custom_css .='.preloader{';
			$saas_software_technology_custom_css .='background-color: '.esc_attr($saas_software_technology_preloader_bg_color).';';
		$saas_software_technology_custom_css .='}';
	}

	/*---- Copyright css ----*/
	$saas_software_technology_copyright_fontsize = get_theme_mod('saas_software_technology_copyright_fontsize',16);
	if($saas_software_technology_copyright_fontsize != false){
		$saas_software_technology_custom_css .='#footer p{';
			$saas_software_technology_custom_css .='font-size: '.esc_attr($saas_software_technology_copyright_fontsize).'px; ';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_copyright_top_bottom_padding = get_theme_mod('saas_software_technology_copyright_top_bottom_padding',15);
	if($saas_software_technology_copyright_top_bottom_padding != false){
		$saas_software_technology_custom_css .='#footer {';
			$saas_software_technology_custom_css .='padding-top:'.esc_attr($saas_software_technology_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($saas_software_technology_copyright_top_bottom_padding).'px; ';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_copyright_alignment = get_theme_mod( 'saas_software_technology_copyright_alignment','Center');
    if($saas_software_technology_copyright_alignment == 'Left'){
		$saas_software_technology_custom_css .='#footer p{';
			$saas_software_technology_custom_css .='text-align:start;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_copyright_alignment == 'Center'){
		$saas_software_technology_custom_css .='#footer p{';
			$saas_software_technology_custom_css .='text-align:center;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_copyright_alignment == 'Right'){
		$saas_software_technology_custom_css .='#footer p{';
			$saas_software_technology_custom_css .='text-align:end;';
		$saas_software_technology_custom_css .='}';
	}

	/*------- Wocommerce sale css -----*/
	$saas_software_technology_woocommerce_sale_top_padding = get_theme_mod('saas_software_technology_woocommerce_sale_top_padding',0);
	$saas_software_technology_woocommerce_sale_left_padding = get_theme_mod('saas_software_technology_woocommerce_sale_left_padding',0);
	$saas_software_technology_custom_css .=' .woocommerce span.onsale{';
		$saas_software_technology_custom_css .='padding-top: '.esc_attr($saas_software_technology_woocommerce_sale_top_padding).'px; padding-bottom: '.esc_attr($saas_software_technology_woocommerce_sale_top_padding).'px; padding-left: '.esc_attr($saas_software_technology_woocommerce_sale_left_padding).'px; padding-right: '.esc_attr($saas_software_technology_woocommerce_sale_left_padding).'px;';
	$saas_software_technology_custom_css .='}';

	$saas_software_technology_woocommerce_sale_border_radius = get_theme_mod('saas_software_technology_woocommerce_sale_border_radius', 5);
	$saas_software_technology_custom_css .='.woocommerce span.onsale{';
		$saas_software_technology_custom_css .='border-radius: '.esc_attr($saas_software_technology_woocommerce_sale_border_radius).'px;';
	$saas_software_technology_custom_css .='}';

	$saas_software_technology_sale_position = get_theme_mod( 'saas_software_technology_sale_position','left');
    if($saas_software_technology_sale_position == 'left'){
		$saas_software_technology_custom_css .='.woocommerce ul.products li.product span.onsale{';
			$saas_software_technology_custom_css .='left: 0; right: auto;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_sale_position == 'right'){
		$saas_software_technology_custom_css .='.woocommerce ul.products li.product span.onsale{';
			$saas_software_technology_custom_css .='left: auto; right: 0;';
		$saas_software_technology_custom_css .='}';
	}

	/*-------- footer background css -------*/
	$saas_software_technology_footer_background_color = get_theme_mod('saas_software_technology_footer_background_color');
	$saas_software_technology_custom_css .='.footertown{';
		$saas_software_technology_custom_css .='background-color: '.esc_attr($saas_software_technology_footer_background_color).';';
	$saas_software_technology_custom_css .='}';

	$saas_software_technology_footer_background_img = get_theme_mod('saas_software_technology_footer_background_img');
	if($saas_software_technology_footer_background_img != false){
		$saas_software_technology_custom_css .='.footertown{';
			$saas_software_technology_custom_css .='background: url('.esc_attr($saas_software_technology_footer_background_img).') no-repeat; background-size: cover; background-attachment: fixed;';
		$saas_software_technology_custom_css .='}';
	}

	/*---- Comment form ----*/
	$saas_software_technology_comment_width = get_theme_mod('saas_software_technology_comment_width', '100');
	$saas_software_technology_custom_css .='#comments textarea{';
		$saas_software_technology_custom_css .=' width:'.esc_attr($saas_software_technology_comment_width).'%;';
	$saas_software_technology_custom_css .='}';

	$saas_software_technology_comment_submit_text = get_theme_mod('saas_software_technology_comment_submit_text', 'Post Comment');
	if($saas_software_technology_comment_submit_text == ''){
		$saas_software_technology_custom_css .='#comments p.form-submit {';
			$saas_software_technology_custom_css .='display: none;';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_comment_title = get_theme_mod('saas_software_technology_comment_title', 'Leave a Reply');
	if($saas_software_technology_comment_title == ''){
		$saas_software_technology_custom_css .='#comments h2#reply-title {';
			$saas_software_technology_custom_css .='display: none;';
		$saas_software_technology_custom_css .='}';
	}

	// Sticky Header padding
	$saas_software_technology_sticky_header_padding = get_theme_mod('saas_software_technology_sticky_header_padding');
	$saas_software_technology_custom_css .='.fixed-header{';
		$saas_software_technology_custom_css .=' padding-top:'.esc_attr($saas_software_technology_sticky_header_padding).'px; padding-bottom:'.esc_attr($saas_software_technology_sticky_header_padding).'px;';
	$saas_software_technology_custom_css .='}';

	// Navigation Font Size 
	$saas_software_technology_nav_font_size = get_theme_mod('saas_software_technology_nav_font_size');
	if($saas_software_technology_nav_font_size != false){
		$saas_software_technology_custom_css .='.primary-navigation ul li a{';
			$saas_software_technology_custom_css .='font-size: '.esc_attr($saas_software_technology_nav_font_size).'px;';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_navigation_case = get_theme_mod('saas_software_technology_navigation_case', 'capitalize');
	if($saas_software_technology_navigation_case == 'uppercase' ){
		$saas_software_technology_custom_css .='.primary-navigation ul li a{';
			$saas_software_technology_custom_css .=' text-transform: uppercase;';
		$saas_software_technology_custom_css .='}';
	}elseif($saas_software_technology_navigation_case == 'capitalize' ){
		$saas_software_technology_custom_css .='.primary-navigation ul li a{';
			$saas_software_technology_custom_css .=' text-transform: capitalize;';
		$saas_software_technology_custom_css .='}';
	}

    // site title color option
	$saas_software_technology_site_title_color_setting = get_theme_mod('saas_software_technology_site_title_color_setting');
	$saas_software_technology_custom_css .=' .logo h1 a, .logo p a{';
		$saas_software_technology_custom_css .='color: '.esc_attr($saas_software_technology_site_title_color_setting).';';
	$saas_software_technology_custom_css .='} ';

	$saas_software_technology_tagline_color_setting = get_theme_mod('saas_software_technology_tagline_color_setting');
	$saas_software_technology_custom_css .=' .logo p.site-description{';
		$saas_software_technology_custom_css .='color: '.esc_attr($saas_software_technology_tagline_color_setting).';';
	$saas_software_technology_custom_css .='} ';   

	//Site title Font size
	$saas_software_technology_site_title_fontsize = get_theme_mod('saas_software_technology_site_title_fontsize');
	$saas_software_technology_custom_css .='.logo h1, .logo p.site-title{';
		$saas_software_technology_custom_css .='font-size: '.esc_attr($saas_software_technology_site_title_fontsize).'px;';
	$saas_software_technology_custom_css .='}';

	$saas_software_technology_site_description_fontsize = get_theme_mod('saas_software_technology_site_description_fontsize');
	$saas_software_technology_custom_css .='.logo p.site-description{';
		$saas_software_technology_custom_css .='font-size: '.esc_attr($saas_software_technology_site_description_fontsize).'px;';
	$saas_software_technology_custom_css .='}';

	/*----- Featured image css -----*/
	$saas_software_technology_featured_image_border_radius = get_theme_mod('saas_software_technology_featured_image_border_radius');
	if($saas_software_technology_featured_image_border_radius != false){
		$saas_software_technology_custom_css .='.inner-service .service-image img{';
			$saas_software_technology_custom_css .='border-radius: '.esc_attr($saas_software_technology_featured_image_border_radius).'px;';
		$saas_software_technology_custom_css .='}';
	}

	$saas_software_technology_featured_image_box_shadow = get_theme_mod('saas_software_technology_featured_image_box_shadow');
	if($saas_software_technology_featured_image_box_shadow != false){
		$saas_software_technology_custom_css .='.inner-service .service-image img{';
			$saas_software_technology_custom_css .='box-shadow: 8px 8px '.esc_attr($saas_software_technology_featured_image_box_shadow).'px #aaa;';
		$saas_software_technology_custom_css .='}';
	} 

	/*------Shop page pagination ---------*/
	$saas_software_technology_shop_page_pagination = get_theme_mod('saas_software_technology_shop_page_pagination', true);
	if($saas_software_technology_shop_page_pagination == false){
		$saas_software_technology_custom_css .= '.woocommerce nav.woocommerce-pagination {';
			$saas_software_technology_custom_css .='display: none;';
		$saas_software_technology_custom_css .='}';
	}

	/*------- Post into blocks ------*/
	$saas_software_technology_post_blocks = get_theme_mod('saas_software_technology_post_blocks', 'Without box');
	if($saas_software_technology_post_blocks == 'Within box' ){
		$saas_software_technology_custom_css .='.services-box{';
			$saas_software_technology_custom_css .=' border: 1px solid #222;';
		$saas_software_technology_custom_css .='}';
	}

	//  ------------ Mobile Media Options ----------
	$saas_software_technology_responsive_show_back_to_top = get_theme_mod('saas_software_technology_responsive_show_back_to_top',true);
	if($saas_software_technology_responsive_show_back_to_top == true && get_theme_mod('saas_software_technology_show_back_to_top',true) == false){
		$saas_software_technology_custom_css .='@media screen and (min-width:575px){
			.scrollup{';
			$saas_software_technology_custom_css .='visibility:hidden;';
		$saas_software_technology_custom_css .='} }';
	}

	if($saas_software_technology_responsive_show_back_to_top == false){
		$saas_software_technology_custom_css .='@media screen and (max-width:575px){
			.scrollup{';
			$saas_software_technology_custom_css .='visibility:hidden;';
		$saas_software_technology_custom_css .='} }';
	}

	$saas_software_technology_responsive_preloader_hide = get_theme_mod('saas_software_technology_responsive_preloader_hide',false);
	if($saas_software_technology_responsive_preloader_hide == true && get_theme_mod('saas_software_technology_preloader_hide',false) == false){
		$saas_software_technology_custom_css .='@media screen and (min-width:575px){
			.preloader{';
			$saas_software_technology_custom_css .='display:none !important;';
		$saas_software_technology_custom_css .='} }';
	}

	if($saas_software_technology_responsive_preloader_hide == false){
		$saas_software_technology_custom_css .='@media screen and (max-width:575px){
			.preloader{';
			$saas_software_technology_custom_css .='display:none !important;';
		$saas_software_technology_custom_css .='} }';
	}

	// menu font weight
	$saas_software_technology_theme_lay = get_theme_mod( 'saas_software_technology_font_weight_menu_option','400');
    if($saas_software_technology_theme_lay == '100'){
		$saas_software_technology_custom_css .='.primary-navigation ul li a{';
			$saas_software_technology_custom_css .='font-weight:100;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_theme_lay == '200'){
		$saas_software_technology_custom_css .='.primary-navigation ul li a{';
			$saas_software_technology_custom_css .='font-weight: 200;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_theme_lay == '300'){
		$saas_software_technology_custom_css .='.primary-navigation ul li a{';
			$saas_software_technology_custom_css .='font-weight: 300;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_theme_lay == '400'){
		$saas_software_technology_custom_css .='.primary-navigation ul li a{';
			$saas_software_technology_custom_css .='font-weight: 400;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_theme_lay == '500'){
		$saas_software_technology_custom_css .='.primary-navigation ul li a{';
			$saas_software_technology_custom_css .='font-weight: 500;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_theme_lay == '600'){
		$saas_software_technology_custom_css .='.primary-navigation ul li a{';
			$saas_software_technology_custom_css .='font-weight: 600;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_theme_lay == '700'){
		$saas_software_technology_custom_css .='.primary-navigation ul li a{';
			$saas_software_technology_custom_css .='font-weight: 700;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_theme_lay == '800'){
		$saas_software_technology_custom_css .='.primary-navigation ul li a{';
			$saas_software_technology_custom_css .='font-weight: 800;';
		$saas_software_technology_custom_css .='}';
	}else if($saas_software_technology_theme_lay == '900'){
		$saas_software_technology_custom_css .='.primary-navigation ul li a{';
			$saas_software_technology_custom_css .='font-weight: 900;';
		$saas_software_technology_custom_css .='}';
	}

	// slider hide css
	$saas_software_technology_slider_hide_show = get_theme_mod('saas_software_technology_slider_hide_show',false);
	if($saas_software_technology_slider_hide_show == false) {
		$saas_software_technology_custom_css .='.page-template-custom-frontpage #header{';
			$saas_software_technology_custom_css .='position:static; border-bottom: 1px solid #e2e2e2;';
		$saas_software_technology_custom_css .='}';
	}