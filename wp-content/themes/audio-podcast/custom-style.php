<?php

	$audio_podcast_custom_css= "";

	/*--------------------- Global First Color --------------------*/

	$audio_podcast_first_color = get_theme_mod('audio_podcast_first_color');

	if($audio_podcast_first_color != false){
		$audio_podcast_custom_css .='.more-btn a:hover,input[type="submit"]:hover,#comments input[type="submit"]:hover,#comments a.comment-reply-link:hover,.pagination .current,.pagination a:hover,#footer .tagcloud a:hover,#sidebar .tagcloud a:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover,nav.woocommerce-MyAccount-navigation ul li:hover, .main-header, .main-navigation ul.sub-menu>li>a:before, .left-bg, .left-menu::-webkit-scrollbar, .slider-btn a:hover, .view-all-btn a:hover, .more-btn a:hover, #comments input[type="submit"]:hover,#comments a.comment-reply-link:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.pro-button a:hover, #preloader, .scrollup i, .pagination span, .pagination a, .widget_product_search button{';
			$audio_podcast_custom_css .='background-color: '.esc_attr($audio_podcast_first_color).';';
		$audio_podcast_custom_css .='}';
	}

	if($audio_podcast_first_color != false){
		$audio_podcast_custom_css .='h1,h2,h3,h4,h5,h6, .copyright a:hover, .post-main-box h2 a,.post-main-box:hover .post-info span a,.post-info:hover a, .middle-bar h6, .woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce ul.products li.product .price{';
			$audio_podcast_custom_css .='color: '.esc_attr($audio_podcast_first_color).';';
		$audio_podcast_custom_css .='}';
	}

	if($audio_podcast_first_color != false){
		$audio_podcast_custom_css .='.slider-btn a:hover{';
			$audio_podcast_custom_css .='box-shadow: outset 0 0 0 2em '.esc_attr($audio_podcast_first_color).';';
		$audio_podcast_custom_css .='} ';
	}

	$audio_podcast_custom_css .='@media screen and (max-width:1000px) {';
		if($audio_podcast_first_color != false){
			$audio_podcast_custom_css .='.main-navigation a:hover{
			color:'.esc_attr($audio_podcast_first_color).'!important;
			}';
		}
	$audio_podcast_custom_css .='}';

	/*--------------------- Global Second Color --------------------*/

	$audio_podcast_second_color = get_theme_mod('audio_podcast_second_color');

	$audio_podcast_third_color = get_theme_mod('audio_podcast_third_color');

	if($audio_podcast_second_color != false){
		$audio_podcast_custom_css .='#footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .woocommerce span.onsale, .toggle-nav button, .bradcrumbs a:hover, .bradcrumbs span{';
			$audio_podcast_custom_css .='background-color: '.esc_attr($audio_podcast_second_color).';';
		$audio_podcast_custom_css .='}';
	}

	if($audio_podcast_second_color != false){
		$audio_podcast_custom_css .='a, p.site-title a, .logo h1 a, .post-main-box:hover h2 a, #footer .textwidget a,#footer li a:hover,.post-main-box:hover h3 a,#sidebar ul li a:hover,.post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.post-navigation a:hover,.post-navigation a:focus, .top-header .topbar-links a:hover{';
			$audio_podcast_custom_css .='color: '.esc_attr($audio_podcast_second_color).';';
		$audio_podcast_custom_css .='}';
	}

	if($audio_podcast_second_color != false){
		$audio_podcast_custom_css .='.more-btn a:hover,input[type="submit"]:hover,#comments input[type="submit"]:hover,#comments a.comment-reply-link:hover,.pagination .current,.pagination a:hover,#footer .tagcloud a:hover,#sidebar .tagcloud a:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover,nav.woocommerce-MyAccount-navigation ul li:hover{';
			$audio_podcast_custom_css .='box-shadow: outset 0 0 0 2em '.esc_attr($audio_podcast_second_color).';';
		$audio_podcast_custom_css .='} ';
	}

	if($audio_podcast_second_color != false || $audio_podcast_third_color != false){
		$audio_podcast_custom_css .='.main-navigation a:hover, .left-menu::-webkit-scrollbar-thumb, .left-menu ul li:hover, #slider .carousel-control-next-icon i, #slider .carousel-control-prev-icon i, .slider-btn a, .view-all-btn a,.more-btn a,#comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,nav.woocommerce-MyAccount-navigation ul li,.pro-button a, .woocommerce a.added_to_cart.wc-forward, #player-sec .ai-wrap .ai-track-progress, #player-sec .ai-wrap .ai-track-progress:after, #footer-2, #sidebar h3{
		background-image: linear-gradient(90deg, '.esc_attr($audio_podcast_second_color).' 0%, '.esc_attr($audio_podcast_third_color).' 100%);
		}';
	}

	if($audio_podcast_second_color != false || $audio_podcast_first_color != false){
		$audio_podcast_custom_css .='#player-sec .ai-wrap{
		background-image: linear-gradient(90deg, '.esc_attr($audio_podcast_second_color).'-60%, '.esc_attr($audio_podcast_first_color).'65%, '.esc_attr($audio_podcast_second_color).'140%);
		}';
	}

	/*--------------------- Global Fourth Color --------------------*/

	$audio_podcast_fourth_color = get_theme_mod('audio_podcast_fourth_color');

	if($audio_podcast_fourth_color != false){
		$audio_podcast_custom_css .='.top-header{';
			$audio_podcast_custom_css .='background-color: '.esc_attr($audio_podcast_fourth_color).';';
		$audio_podcast_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$audio_podcast_theme_lay = get_theme_mod( 'audio_podcast_width_option','Full Width');
    if($audio_podcast_theme_lay == 'Boxed'){
		$audio_podcast_custom_css .='body{';
			$audio_podcast_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$audio_podcast_custom_css .='}';
	}else if($audio_podcast_theme_lay == 'Wide Width'){
		$audio_podcast_custom_css .='body{';
			$audio_podcast_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$audio_podcast_custom_css .='}';
	}else if($audio_podcast_theme_lay == 'Full Width'){
		$audio_podcast_custom_css .='body{';
			$audio_podcast_custom_css .='max-width: 100%;';
		$audio_podcast_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$audio_podcast_theme_lay = get_theme_mod( 'audio_podcast_slider_opacity_color','0.5');
	if($audio_podcast_theme_lay == '0'){
		$audio_podcast_custom_css .='#slider img{';
			$audio_podcast_custom_css .='opacity:0';
		$audio_podcast_custom_css .='}';
		}else if($audio_podcast_theme_lay == '0.1'){
		$audio_podcast_custom_css .='#slider img{';
			$audio_podcast_custom_css .='opacity:0.1';
		$audio_podcast_custom_css .='}';
		}else if($audio_podcast_theme_lay == '0.2'){
		$audio_podcast_custom_css .='#slider img{';
			$audio_podcast_custom_css .='opacity:0.2';
		$audio_podcast_custom_css .='}';
		}else if($audio_podcast_theme_lay == '0.3'){
		$audio_podcast_custom_css .='#slider img{';
			$audio_podcast_custom_css .='opacity:0.3';
		$audio_podcast_custom_css .='}';
		}else if($audio_podcast_theme_lay == '0.4'){
		$audio_podcast_custom_css .='#slider img{';
			$audio_podcast_custom_css .='opacity:0.4';
		$audio_podcast_custom_css .='}';
		}else if($audio_podcast_theme_lay == '0.5'){
		$audio_podcast_custom_css .='#slider img{';
			$audio_podcast_custom_css .='opacity:0.5';
		$audio_podcast_custom_css .='}';
		}else if($audio_podcast_theme_lay == '0.6'){
		$audio_podcast_custom_css .='#slider img{';
			$audio_podcast_custom_css .='opacity:0.6';
		$audio_podcast_custom_css .='}';
		}else if($audio_podcast_theme_lay == '0.7'){
		$audio_podcast_custom_css .='#slider img{';
			$audio_podcast_custom_css .='opacity:0.7';
		$audio_podcast_custom_css .='}';
		}else if($audio_podcast_theme_lay == '0.8'){
		$audio_podcast_custom_css .='#slider img{';
			$audio_podcast_custom_css .='opacity:0.8';
		$audio_podcast_custom_css .='}';
		}else if($audio_podcast_theme_lay == '0.9'){
		$audio_podcast_custom_css .='#slider img{';
			$audio_podcast_custom_css .='opacity:0.9';
		$audio_podcast_custom_css .='}';
	}

	/*-----------------Slider Content Layout -------------------*/

	$audio_podcast_theme_lay = get_theme_mod( 'audio_podcast_slider_content_option','Right');
    if($audio_podcast_theme_lay == 'Left'){
		$audio_podcast_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$audio_podcast_custom_css .='left:10%; right:50%;';
		$audio_podcast_custom_css .='}';
		$audio_podcast_custom_css .='@media screen and (min-width: 720px) and (max-width:768px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$audio_podcast_custom_css .='right:30%;';
		$audio_podcast_custom_css .='} }';
		$audio_podcast_custom_css .='@media screen and (max-width:720px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$audio_podcast_custom_css .='left:15%; right: 15%';
		$audio_podcast_custom_css .='} }';
	}else if($audio_podcast_theme_lay == 'Center'){
		$audio_podcast_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$audio_podcast_custom_css .='text-align:center; left:30%; right:30%;';
		$audio_podcast_custom_css .='}';
	}else if($audio_podcast_theme_lay == 'Right'){
		$audio_podcast_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$audio_podcast_custom_css .='left:50%; right:10%;';
		$audio_podcast_custom_css .='}';
		$audio_podcast_custom_css .='@media screen and (min-width: 720px) and (max-width:768px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$audio_podcast_custom_css .='left:30%;';
		$audio_podcast_custom_css .='} }';
		$audio_podcast_custom_css .='@media screen and (max-width:720px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$audio_podcast_custom_css .='left:15%; right: 15%';
		$audio_podcast_custom_css .='} }';
	}

	/*------------------ Slider Height ------------*/
	$audio_podcast_slider_height = get_theme_mod('audio_podcast_slider_height');
	if($audio_podcast_slider_height != false){
		$audio_podcast_custom_css .='#slider img{';
			$audio_podcast_custom_css .='height: '.esc_attr($audio_podcast_slider_height).';';
		$audio_podcast_custom_css .='}';
	}

	/*------------- Slider ------------*/

	$audio_podcast_slider = get_theme_mod('audio_podcast_slider_hide_show', false);
	if($audio_podcast_slider == false){
		$audio_podcast_custom_css .='.page-template-custom-home-page .main-header{';
			$audio_podcast_custom_css .='position: static; background: #1b2039;';
		$audio_podcast_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$audio_podcast_theme_lay = get_theme_mod( 'audio_podcast_blog_layout_option','Default');
    if($audio_podcast_theme_lay == 'Default'){
		$audio_podcast_custom_css .='.post-main-box{';
			$audio_podcast_custom_css .='';
		$audio_podcast_custom_css .='}';
	}else if($audio_podcast_theme_lay == 'Center'){
		$audio_podcast_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$audio_podcast_custom_css .='text-align:center;';
		$audio_podcast_custom_css .='}';
		$audio_podcast_custom_css .='.post-info{';
			$audio_podcast_custom_css .='margin-top:10px;';
		$audio_podcast_custom_css .='}';
		$audio_podcast_custom_css .='.post-info hr{';
			$audio_podcast_custom_css .='margin:15px auto;';
		$audio_podcast_custom_css .='}';
	}else if($audio_podcast_theme_lay == 'Left'){
		$audio_podcast_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$audio_podcast_custom_css .='text-align:Left;';
		$audio_podcast_custom_css .='}';
		$audio_podcast_custom_css .='.post-info hr{';
			$audio_podcast_custom_css .='margin-bottom:10px;';
		$audio_podcast_custom_css .='}';
		$audio_podcast_custom_css .='.post-main-box h2{';
			$audio_podcast_custom_css .='margin-top:10px;';
		$audio_podcast_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$audio_podcast_resp_slider = get_theme_mod( 'audio_podcast_resp_slider_hide_show',false);
	if($audio_podcast_resp_slider == true && get_theme_mod( 'audio_podcast_slider_hide_show', false) == false){
    	$audio_podcast_custom_css .='#slider{';
			$audio_podcast_custom_css .='display:none;';
		$audio_podcast_custom_css .='} ';
	}
    if($audio_podcast_resp_slider == true){
    	$audio_podcast_custom_css .='@media screen and (max-width:575px) {';
		$audio_podcast_custom_css .='#slider{';
			$audio_podcast_custom_css .='display:block;';
		$audio_podcast_custom_css .='} }';
	}else if($audio_podcast_resp_slider == false){
		$audio_podcast_custom_css .='@media screen and (max-width:575px) {';
		$audio_podcast_custom_css .='#slider{';
			$audio_podcast_custom_css .='display:none;';
		$audio_podcast_custom_css .='} }';
		$audio_podcast_custom_css .='@media screen and (max-width:575px){';
		$audio_podcast_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
			$audio_podcast_custom_css .='margin-top: 45px;';
		$audio_podcast_custom_css .='} }';
	}

	$audio_podcast_resp_sidebar = get_theme_mod( 'audio_podcast_sidebar_hide_show',true);
    if($audio_podcast_resp_sidebar == true){
    	$audio_podcast_custom_css .='@media screen and (max-width:575px) {';
		$audio_podcast_custom_css .='#sidebar{';
			$audio_podcast_custom_css .='display:block;';
		$audio_podcast_custom_css .='} }';
	}else if($audio_podcast_resp_sidebar == false){
		$audio_podcast_custom_css .='@media screen and (max-width:575px) {';
		$audio_podcast_custom_css .='#sidebar{';
			$audio_podcast_custom_css .='display:none;';
		$audio_podcast_custom_css .='} }';
	}

	$audio_podcast_resp_scroll_top = get_theme_mod( 'audio_podcast_resp_scroll_top_hide_show',true);
	if($audio_podcast_resp_scroll_top == true && get_theme_mod( 'audio_podcast_hide_show_scroll',true) == false){
    	$audio_podcast_custom_css .='.scrollup i{';
			$audio_podcast_custom_css .='visibility:hidden !important;';
		$audio_podcast_custom_css .='} ';
	}
    if($audio_podcast_resp_scroll_top == true){
    	$audio_podcast_custom_css .='@media screen and (max-width:575px) {';
		$audio_podcast_custom_css .='.scrollup i{';
			$audio_podcast_custom_css .='visibility:visible !important;';
		$audio_podcast_custom_css .='} }';
	}else if($audio_podcast_resp_scroll_top == false){
		$audio_podcast_custom_css .='@media screen and (max-width:575px){';
		$audio_podcast_custom_css .='.scrollup i{';
			$audio_podcast_custom_css .='visibility:hidden !important;';
		$audio_podcast_custom_css .='} }';
	}

	$audio_podcast_resp_menu_toggle_btn_bg_color = get_theme_mod('audio_podcast_resp_menu_toggle_btn_bg_color');
	if($audio_podcast_resp_menu_toggle_btn_bg_color != false){
		$audio_podcast_custom_css .='.toggle-nav button{';
			$audio_podcast_custom_css .='background: '.esc_attr($audio_podcast_resp_menu_toggle_btn_bg_color).';';
		$audio_podcast_custom_css .='}';
	}

	/*---------------- Topbar Settings ------------------*/

	$audio_podcast_nav_menus_font_weight = get_theme_mod( 'audio_podcast_navigation_menu_font_weight','Default');
    if($audio_podcast_nav_menus_font_weight == 'Default'){
		$audio_podcast_custom_css .='.main-navigation a{';
			$audio_podcast_custom_css .='';
		$audio_podcast_custom_css .='}';
	}else if($audio_podcast_nav_menus_font_weight == 'Normal'){
		$audio_podcast_custom_css .='.main-navigation a{';
			$audio_podcast_custom_css .='font-weight: normal;';
		$audio_podcast_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$audio_podcast_featured_image_box_shadow = get_theme_mod('audio_podcast_featured_image_box_shadow',0);
	if($audio_podcast_featured_image_box_shadow != false){
		$audio_podcast_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$audio_podcast_custom_css .='box-shadow: '.esc_attr($audio_podcast_featured_image_box_shadow).'px '.esc_attr($audio_podcast_featured_image_box_shadow).'px '.esc_attr($audio_podcast_featured_image_box_shadow).'px #cccccc;';
		$audio_podcast_custom_css .='}';
	}
	
	/*---------------- Button Settings ------------------*/

	$audio_podcast_button_border_radius = get_theme_mod('audio_podcast_button_border_radius');
	if($audio_podcast_button_border_radius != false){
		$audio_podcast_custom_css .='.post-main-box .more-btn a{';
			$audio_podcast_custom_css .='border-radius: '.esc_attr($audio_podcast_button_border_radius).'px;';
		$audio_podcast_custom_css .='}';
	}
	
	/*------------- Single Blog Page------------------*/

	$audio_podcast_single_blog_comment_title = get_theme_mod('audio_podcast_single_blog_comment_title', 'Leave a Reply');
	if($audio_podcast_single_blog_comment_title == ''){
		$audio_podcast_custom_css .='#comments h2#reply-title {';
			$audio_podcast_custom_css .='display: none;';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_single_blog_comment_button_text = get_theme_mod('audio_podcast_single_blog_comment_button_text', 'Post Comment');
	if($audio_podcast_single_blog_comment_button_text == ''){
		$audio_podcast_custom_css .='#comments p.form-submit {';
			$audio_podcast_custom_css .='display: none;';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_comment_width = get_theme_mod('audio_podcast_single_blog_comment_width');
	if($audio_podcast_comment_width != false){
		$audio_podcast_custom_css .='#comments textarea{';
			$audio_podcast_custom_css .='width: '.esc_attr($audio_podcast_comment_width).';';
		$audio_podcast_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$audio_podcast_footer_widgets_heading = get_theme_mod( 'audio_podcast_footer_widgets_heading','Left');
    if($audio_podcast_footer_widgets_heading == 'Left'){
		$audio_podcast_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$audio_podcast_custom_css .='text-align: left;';
		$audio_podcast_custom_css .='}';
	}else if($audio_podcast_footer_widgets_heading == 'Center'){
		$audio_podcast_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$audio_podcast_custom_css .='text-align: center;';
		$audio_podcast_custom_css .='}';
	}else if($audio_podcast_footer_widgets_heading == 'Right'){
		$audio_podcast_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$audio_podcast_custom_css .='text-align: right;';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_footer_widgets_content = get_theme_mod( 'audio_podcast_footer_widgets_content','Left');
    if($audio_podcast_footer_widgets_content == 'Left'){
		$audio_podcast_custom_css .='#footer .widget{';
		$audio_podcast_custom_css .='text-align: left;';
		$audio_podcast_custom_css .='}';
	}else if($audio_podcast_footer_widgets_content == 'Center'){
		$audio_podcast_custom_css .='#footer .widget{';
			$audio_podcast_custom_css .='text-align: center;';
		$audio_podcast_custom_css .='}';
	}else if($audio_podcast_footer_widgets_content == 'Right'){
		$audio_podcast_custom_css .='#footer .widget{';
			$audio_podcast_custom_css .='text-align: right;';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_copyright_alingment = get_theme_mod('audio_podcast_copyright_alingment');
	if($audio_podcast_copyright_alingment != false){
		$audio_podcast_custom_css .='.copyright p{';
			$audio_podcast_custom_css .='text-align: '.esc_attr($audio_podcast_copyright_alingment).';';
		$audio_podcast_custom_css .='}';
	}

	/*---------- Woocommerce Settings -----------*/

	$audio_podcast_products_btn_padding_top_bottom = get_theme_mod('audio_podcast_products_btn_padding_top_bottom');
	if($audio_podcast_products_btn_padding_top_bottom != false){
		$audio_podcast_custom_css .='.woocommerce a.button{';
			$audio_podcast_custom_css .='padding-top: '.esc_attr($audio_podcast_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($audio_podcast_products_btn_padding_top_bottom).' !important;';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_products_btn_padding_left_right = get_theme_mod('audio_podcast_products_btn_padding_left_right');
	if($audio_podcast_products_btn_padding_left_right != false){
		$audio_podcast_custom_css .='.woocommerce a.button{';
			$audio_podcast_custom_css .='padding-left: '.esc_attr($audio_podcast_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($audio_podcast_products_btn_padding_left_right).' !important;';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_woocommerce_sale_position = get_theme_mod( 'audio_podcast_woocommerce_sale_position','left');
    if($audio_podcast_woocommerce_sale_position == 'left'){
		$audio_podcast_custom_css .='.woocommerce ul.products li.product .onsale{';
			$audio_podcast_custom_css .='left: 8px !important; right: auto !important;';
		$audio_podcast_custom_css .='}';
	}else if($audio_podcast_woocommerce_sale_position == 'right'){
		$audio_podcast_custom_css .='.woocommerce ul.products li.product .onsale{';
			$audio_podcast_custom_css .='left: auto !important; right: 15px !important;';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_woocommerce_sale_font_size = get_theme_mod('audio_podcast_woocommerce_sale_font_size');
	if($audio_podcast_woocommerce_sale_font_size != false){
		$audio_podcast_custom_css .='.woocommerce span.onsale{';
			$audio_podcast_custom_css .='font-size: '.esc_attr($audio_podcast_woocommerce_sale_font_size).';';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_woocommerce_sale_padding_top_bottom = get_theme_mod('audio_podcast_woocommerce_sale_padding_top_bottom');
	if($audio_podcast_woocommerce_sale_padding_top_bottom != false){
		$audio_podcast_custom_css .='.woocommerce span.onsale{';
			$audio_podcast_custom_css .='padding-top: '.esc_attr($audio_podcast_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($audio_podcast_woocommerce_sale_padding_top_bottom).';';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_woocommerce_sale_padding_left_right = get_theme_mod('audio_podcast_woocommerce_sale_padding_left_right');
	if($audio_podcast_woocommerce_sale_padding_left_right != false){
		$audio_podcast_custom_css .='.woocommerce span.onsale{';
			$audio_podcast_custom_css .='padding-left: '.esc_attr($audio_podcast_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($audio_podcast_woocommerce_sale_padding_left_right).';';
		$audio_podcast_custom_css .='}';
	}

	/*------------------ Logo -------------------*/

	$audio_podcast_logo_padding = get_theme_mod('audio_podcast_logo_padding');
	if($audio_podcast_logo_padding != false){
		$audio_podcast_custom_css .='.main-header .logo{';
			$audio_podcast_custom_css .='padding: '.esc_attr($audio_podcast_logo_padding).';';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_logo_margin = get_theme_mod('audio_podcast_logo_margin');
	if($audio_podcast_logo_margin != false){
		$audio_podcast_custom_css .='.main-header .logo{';
			$audio_podcast_custom_css .='margin: '.esc_attr($audio_podcast_logo_margin).';';
		$audio_podcast_custom_css .='}';
	}

	// Site title Font Size
	$audio_podcast_site_title_font_size = get_theme_mod('audio_podcast_site_title_font_size');
	if($audio_podcast_site_title_font_size != false){
		$audio_podcast_custom_css .='.logo h1, .logo p.site-title{';
			$audio_podcast_custom_css .='font-size: '.esc_attr($audio_podcast_site_title_font_size).';';
		$audio_podcast_custom_css .='}';
	}

	// Site tagline Font Size
	$audio_podcast_site_tagline_font_size = get_theme_mod('audio_podcast_site_tagline_font_size');
	if($audio_podcast_site_tagline_font_size != false){
		$audio_podcast_custom_css .='.logo p.site-description{';
			$audio_podcast_custom_css .='font-size: '.esc_attr($audio_podcast_site_tagline_font_size).';';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_header_menus_color = get_theme_mod('audio_podcast_header_menus_color');
	if($audio_podcast_header_menus_color != false){
		$audio_podcast_custom_css .='.main-navigation a{';
			$audio_podcast_custom_css .='color: '.esc_attr($audio_podcast_header_menus_color).';';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_header_menus_hover_color = get_theme_mod('audio_podcast_header_menus_hover_color');
	if($audio_podcast_header_menus_hover_color != false){
		$audio_podcast_custom_css .='.main-navigation a:hover{';
			$audio_podcast_custom_css .='color: '.esc_attr($audio_podcast_header_menus_hover_color).';';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_header_submenus_color = get_theme_mod('audio_podcast_header_submenus_color');
	if($audio_podcast_header_submenus_color != false){
		$audio_podcast_custom_css .='.main-navigation ul ul a{';
			$audio_podcast_custom_css .='color: '.esc_attr($audio_podcast_header_submenus_color).';';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_header_submenus_hover_color = get_theme_mod('audio_podcast_header_submenus_hover_color');
	if($audio_podcast_header_submenus_hover_color != false){
		$audio_podcast_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$audio_podcast_custom_css .='color: '.esc_attr($audio_podcast_header_submenus_hover_color).';';
		$audio_podcast_custom_css .='}';
	}

	/*--------------- Preloader Background Color  -------------------*/

	$audio_podcast_preloader_bg_color = get_theme_mod('audio_podcast_preloader_bg_color');
	if($audio_podcast_preloader_bg_color != false){
		$audio_podcast_custom_css .='#preloader{';
			$audio_podcast_custom_css .='background-color: '.esc_attr($audio_podcast_preloader_bg_color).';';
		$audio_podcast_custom_css .='}';
	}

	$audio_podcast_preloader_border_color = get_theme_mod('audio_podcast_preloader_border_color');
	if($audio_podcast_preloader_border_color != false){
		$audio_podcast_custom_css .='.loader-line{';
			$audio_podcast_custom_css .='border-color: '.esc_attr($audio_podcast_preloader_border_color).'!important;';
		$audio_podcast_custom_css .='}';
	}