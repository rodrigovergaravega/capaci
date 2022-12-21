<?php
/**
 * Audio Podcast Theme Customizer
 *
 * @package Audio Podcast
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function audio_podcast_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'audio_podcast_custom_controls' );

function audio_podcast_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage'; 
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array( 
		'selector' => '.logo .site-title a', 
	 	'render_callback' => 'audio_podcast_Customize_partial_blogname',
	)); 

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array( 
		'selector' => 'p.site-description', 
		'render_callback' => 'audio_podcast_Customize_partial_blogdescription',
	));

	//Homepage Settings
	$wp_customize->add_panel( 'audio_podcast_homepage_panel', array(
		'title' => esc_html__( 'Homepage Settings', 'audio-podcast' ),
		'panel' => 'audio_podcast_panel_id',
		'priority' => 20,
	));

	// Top Bar
	$wp_customize->add_section( 'audio_podcast_top_bar' , array(
    	'title' => esc_html__( 'Top Bar', 'audio-podcast' ),
		'panel' => 'audio_podcast_homepage_panel'
	) );

	$wp_customize->add_setting('audio_podcast_topbar_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_topbar_text',array(
		'label'	=> esc_html__('Add Topbar Text','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('audio_podcast_topbar_support_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('audio_podcast_topbar_support_link',array(
		'label'	=> esc_html__('Add Support Link','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'www.example-info.com', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_top_bar',
		'type'=> 'url'
	));

	$wp_customize->add_setting('audio_podcast_topbar_wishlist_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('audio_podcast_topbar_wishlist_link',array(
		'label'	=> esc_html__('Add Wishlist Link','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'www.example-info.com', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_top_bar',
		'type'=> 'url'
	));

	$wp_customize->add_setting('audio_podcast_topbar_myaccount_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('audio_podcast_topbar_myaccount_link',array(
		'label'	=> esc_html__('Add My Account Link','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'www.example-info.com', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_top_bar',
		'type'=> 'url'
	));

	$wp_customize->add_setting('audio_podcast_navigation_menu_font_weight',array(
        'default' => 'Default',
        'transport' => 'refresh',
        'sanitize_callback' => 'audio_podcast_sanitize_choices'
	));
	$wp_customize->add_control('audio_podcast_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','audio-podcast'),
        'section' => 'audio_podcast_top_bar',
        'choices' => array(
        	'Default' => __('Default','audio-podcast'),
            'Normal' => __('Normal','audio-podcast')
        ),
	) );

	$wp_customize->add_setting('audio_podcast_search_placeholder',array(
       'default' => esc_html__('Search','audio-podcast'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('audio_podcast_search_placeholder',array(
       'type' => 'text',
       'label' => __('Search Placeholder Text','audio-podcast'),
       'section' => 'audio_podcast_top_bar'
    ));

    $wp_customize->add_setting('audio_podcast_header_menus_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'audio_podcast_header_menus_color', array(
		'label'    => __('Menus Color', 'audio-podcast'),
		'section'  => 'audio_podcast_top_bar',
	)));

	$wp_customize->add_setting('audio_podcast_header_menus_hover_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'audio_podcast_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'audio-podcast'),
		'section'  => 'audio_podcast_top_bar',
	)));

	$wp_customize->add_setting('audio_podcast_header_submenus_color', array(
		'default'           => '#151821',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'audio_podcast_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'audio-podcast'),
		'section'  => 'audio_podcast_top_bar',
	)));

	$wp_customize->add_setting('audio_podcast_header_submenus_hover_color', array(
		'default'           => '#151821',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'audio_podcast_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'audio-podcast'),
		'section'  => 'audio_podcast_top_bar',
	)));

	//Slider
	$wp_customize->add_section( 'audio_podcast_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'audio-podcast' ),
    	'description' => __('Free theme has 3 slides options, For unlimited slides and more options </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/audio-podcast-wordpress-theme/">GO PRO</a>','audio-podcast'),
		'panel' => 'audio_podcast_homepage_panel'
	) );

	$wp_customize->add_setting( 'audio_podcast_slider_hide_show',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ));  
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_slider_hide_show',array(
      'label' => esc_html__( 'Show / Hide Slider','audio-podcast' ),
      'section' => 'audio_podcast_slidersettings'
    )));

     //Selective Refresh
    $wp_customize->selective_refresh->add_partial('audio_podcast_slider_hide_show',array(
		'selector'        => '.slider-btn a',
		'render_callback' => 'audio_podcast_customize_partial_audio_podcast_slider_hide_show',
	));

	for ( $count = 1; $count <= 3; $count++ ) {
		$wp_customize->add_setting( 'audio_podcast_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'audio_podcast_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'audio_podcast_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'audio-podcast' ),
			'description' => __('Slider image size (1500 x 540)','audio-podcast'),
			'section'  => 'audio_podcast_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('audio_podcast_slider_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_slider_button_text',array(
		'label'	=> __('Add Slider Button Text','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => __( 'EXPLORE ALL', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_slidersettings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'audio_podcast_slider_title_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ));  
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_slider_title_hide_show',array(
		'label' => esc_html__( 'Show / Hide Slider Title','audio-podcast' ),
		'section' => 'audio_podcast_slidersettings'
    )));

	$wp_customize->add_setting( 'audio_podcast_slider_content_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ));  
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_slider_content_hide_show',array(
		'label' => esc_html__( 'Show / Hide Slider Content','audio-podcast' ),
		'section' => 'audio_podcast_slidersettings'
    )));

	//content layout
	$wp_customize->add_setting('audio_podcast_slider_content_option',array(
        'default' => 'Right',
        'sanitize_callback' => 'audio_podcast_sanitize_choices'
	));
	$wp_customize->add_control(new Audio_Podcast_Image_Radio_Control($wp_customize, 'audio_podcast_slider_content_option', array(
        'type' => 'select',
        'label' => __('Slider Content Layouts','audio-podcast'),
        'section' => 'audio_podcast_slidersettings',
        'choices' => array(
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/slider-content1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/slider-content2.png',
            'Right' => esc_url(get_template_directory_uri()).'/assets/images/slider-content3.png',
    ))));

    //Slider excerpt
	$wp_customize->add_setting( 'audio_podcast_slider_excerpt_number', array(
		'default'              => 30,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'audio_podcast_sanitize_number_range'
	) );
	$wp_customize->add_control( 'audio_podcast_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','audio-podcast' ),
		'section'     => 'audio_podcast_slidersettings',
		'type'        => 'range',
		'settings'    => 'audio_podcast_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('audio_podcast_slider_opacity_color',array(
      'default'              => 0.5,
      'sanitize_callback' => 'audio_podcast_sanitize_choices'
	));

	$wp_customize->add_control( 'audio_podcast_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','audio-podcast' ),
	'section'     => 'audio_podcast_slidersettings',
	'type'        => 'select',
	'settings'    => 'audio_podcast_slider_opacity_color',
	'choices' => array(
		'0' =>  esc_attr('0','audio-podcast'),
		'0.1' =>  esc_attr('0.1','audio-podcast'),
		'0.2' =>  esc_attr('0.2','audio-podcast'),
		'0.3' =>  esc_attr('0.3','audio-podcast'),
		'0.4' =>  esc_attr('0.4','audio-podcast'),
		'0.5' =>  esc_attr('0.5','audio-podcast'),
		'0.6' =>  esc_attr('0.6','audio-podcast'),
		'0.7' =>  esc_attr('0.7','audio-podcast'),
		'0.8' =>  esc_attr('0.8','audio-podcast'),
		'0.9' =>  esc_attr('0.9','audio-podcast')
	),
	));

	//Slider height
	$wp_customize->add_setting('audio_podcast_slider_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_slider_height',array(
		'label'	=> __('Slider Height','audio-podcast'),
		'description'	=> __('Specify the slider height (px).','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => __( '500px', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_slidersettings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'audio_podcast_slider_speed', array(
		'default'  => 4000,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'audio_podcast_slider_speed', array(
		'label' => esc_html__('Slider Transition Speed','audio-podcast'),
		'section' => 'audio_podcast_slidersettings',
		'type'  => 'text',
	) );

	// Player
	$wp_customize->add_section('audio_podcast_player_section',array(
		'title'	=> __('Player Section','audio-podcast'),
		'description' => __('For more options of the player section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/audio-podcast-wordpress-theme/">GO PRO</a>','audio-podcast'),
		'panel' => 'audio_podcast_homepage_panel',
	));

	$wp_customize->add_setting( 'audio_podcast_player_page', array(
		'default'           => '',
		'sanitize_callback' => 'audio_podcast_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'audio_podcast_player_page', array(
		'label'    => __( 'Select Page of Player', 'audio-podcast' ),
		'section'  => 'audio_podcast_player_section',
		'type'     => 'dropdown-pages'
	) );

	//Latest Episode Section
	$wp_customize->add_section('audio_podcast_latest_episode', array(
		'title'       => __('Latest Episode Section', 'audio-podcast'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','audio-podcast'),
		'priority'    => null,
		'panel'       => 'audio_podcast_homepage_panel',
	));

	$wp_customize->add_setting('audio_podcast_latest_episode_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_latest_episode_text',array(
		'description' => __('<p>1. More options for Latest Episode section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Latest Episode section.</p>','audio-podcast'),
		'section'=> 'audio_podcast_latest_episode',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('audio_podcast_latest_episode_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_latest_episode_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=audio_podcast_guide') ." '>More Info</a>",
		'section'=> 'audio_podcast_latest_episode',
		'type'=> 'hidden'
	));

	//Podcast Series Section
	$wp_customize->add_section('audio_podcast_podcast_series', array(
		'title'       => __('Podcast Series Section', 'audio-podcast'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','audio-podcast'),
		'priority'    => null,
		'panel'       => 'audio_podcast_homepage_panel',
	));

	$wp_customize->add_setting('audio_podcast_podcast_series_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_podcast_series_text',array(
		'description' => __('<p>1. More options for Podcast Series section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Podcast Series section.</p>','audio-podcast'),
		'section'=> 'audio_podcast_podcast_series',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('audio_podcast_podcast_series_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_podcast_series_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=audio_podcast_guide') ." '>More Info</a>",
		'section'=> 'audio_podcast_podcast_series',
		'type'=> 'hidden'
	));

	//Curious Mind Section
	$wp_customize->add_section('audio_podcast_curious_mind', array(
		'title'       => __('Curious Mind Section', 'audio-podcast'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','audio-podcast'),
		'priority'    => null,
		'panel'       => 'audio_podcast_homepage_panel',
	));

	$wp_customize->add_setting('audio_podcast_curious_mind_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_curious_mind_text',array(
		'description' => __('<p>1. More options for Curious Mind section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Curious Mind section.</p>','audio-podcast'),
		'section'=> 'audio_podcast_curious_mind',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('audio_podcast_curious_mind_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_curious_mind_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=audio_podcast_guide') ." '>More Info</a>",
		'section'=> 'audio_podcast_curious_mind',
		'type'=> 'hidden'
	));

	//Team Section
	$wp_customize->add_section('audio_podcast_team', array(
		'title'       => __('Team Section', 'audio-podcast'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','audio-podcast'),
		'priority'    => null,
		'panel'       => 'audio_podcast_homepage_panel',
	));

	$wp_customize->add_setting('audio_podcast_team_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_team_text',array(
		'description' => __('<p>1. More options for Team section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Team section.</p>','audio-podcast'),
		'section'=> 'audio_podcast_team',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('audio_podcast_team_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_team_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=audio_podcast_guide') ." '>More Info</a>",
		'section'=> 'audio_podcast_team',
		'type'=> 'hidden'
	));

	//Features Section
	$wp_customize->add_section('audio_podcast_features', array(
		'title'       => __('Features Section', 'audio-podcast'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','audio-podcast'),
		'priority'    => null,
		'panel'       => 'audio_podcast_homepage_panel',
	));

	$wp_customize->add_setting('audio_podcast_features_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_features_text',array(
		'description' => __('<p>1. More options for Features section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Features section.</p>','audio-podcast'),
		'section'=> 'audio_podcast_features',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('audio_podcast_features_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_features_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=audio_podcast_guide') ." '>More Info</a>",
		'section'=> 'audio_podcast_features',
		'type'=> 'hidden'
	));

	//Testimonial Section
	$wp_customize->add_section('audio_podcast_testimonial', array(
		'title'       => __('Testimonial Section', 'audio-podcast'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','audio-podcast'),
		'priority'    => null,
		'panel'       => 'audio_podcast_homepage_panel',
	));

	$wp_customize->add_setting('audio_podcast_testimonial_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_testimonial_text',array(
		'description' => __('<p>1. More options for Testimonial section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Testimonial section.</p>','audio-podcast'),
		'section'=> 'audio_podcast_testimonial',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('audio_podcast_testimonial_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_testimonial_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=audio_podcast_guide') ." '>More Info</a>",
		'section'=> 'audio_podcast_testimonial',
		'type'=> 'hidden'
	));

	//Support Creator Section
	$wp_customize->add_section('audio_podcast_support_creator', array(
		'title'       => __('Support Creator Section', 'audio-podcast'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','audio-podcast'),
		'priority'    => null,
		'panel'       => 'audio_podcast_homepage_panel',
	));

	$wp_customize->add_setting('audio_podcast_support_creator_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_support_creator_text',array(
		'description' => __('<p>1. More options for Support Creator section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Support Creator section.</p>','audio-podcast'),
		'section'=> 'audio_podcast_support_creator',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('audio_podcast_support_creator_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_support_creator_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=audio_podcast_guide') ." '>More Info</a>",
		'section'=> 'audio_podcast_support_creator',
		'type'=> 'hidden'
	));

	//Our Blog Section
	$wp_customize->add_section('audio_podcast_our_blog', array(
		'title'       => __('Our Blog Section', 'audio-podcast'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','audio-podcast'),
		'priority'    => null,
		'panel'       => 'audio_podcast_homepage_panel',
	));

	$wp_customize->add_setting('audio_podcast_our_blog_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_our_blog_text',array(
		'description' => __('<p>1. More options for Our Blog section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Our Blog section.</p>','audio-podcast'),
		'section'=> 'audio_podcast_our_blog',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('audio_podcast_our_blog_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_our_blog_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=audio_podcast_guide') ." '>More Info</a>",
		'section'=> 'audio_podcast_our_blog',
		'type'=> 'hidden'
	));

	//News Section
	$wp_customize->add_section('audio_podcast_news', array(
		'title'       => __('News Section', 'audio-podcast'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','audio-podcast'),
		'priority'    => null,
		'panel'       => 'audio_podcast_homepage_panel',
	));

	$wp_customize->add_setting('audio_podcast_news_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_news_text',array(
		'description' => __('<p>1. More options for News section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for News section.</p>','audio-podcast'),
		'section'=> 'audio_podcast_news',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('audio_podcast_news_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_news_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=audio_podcast_guide') ." '>More Info</a>",
		'section'=> 'audio_podcast_news',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('audio_podcast_footer',array(
		'title'	=> esc_html__('Footer Settings','audio-podcast'),
		'description' => __('For more options of the footer section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/audio-podcast-wordpress-theme/">GO PRO</a>','audio-podcast'),
		'panel' => 'audio_podcast_homepage_panel',
	));	

	$wp_customize->add_setting('audio_podcast_footer_widgets_heading',array(
        'default' => 'Left',
        'transport' => 'refresh',
        'sanitize_callback' => 'audio_podcast_sanitize_choices'
	));
	$wp_customize->add_control('audio_podcast_footer_widgets_heading',array(
        'type' => 'select',
        'label' => __('Footer Widget Heading','audio-podcast'),
        'section' => 'audio_podcast_footer',
        'choices' => array(
        	'Left' => __('Left','audio-podcast'),
            'Center' => __('Center','audio-podcast'),
            'Right' => __('Right','audio-podcast')
        ),
	) );

	$wp_customize->add_setting('audio_podcast_footer_widgets_content',array(
        'default' => 'Left',
        'transport' => 'refresh',
        'sanitize_callback' => 'audio_podcast_sanitize_choices'
	));
	$wp_customize->add_control('audio_podcast_footer_widgets_content',array(
        'type' => 'select',
        'label' => __('Footer Widget Content','audio-podcast'),
        'section' => 'audio_podcast_footer',
        'choices' => array(
        	'Left' => __('Left','audio-podcast'),
            'Center' => __('Center','audio-podcast'),
            'Right' => __('Right','audio-podcast')
        ),
	) );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('audio_podcast_footer_text', array( 
		'selector' => '.copyright p', 
		'render_callback' => 'audio_podcast_Customize_partial_audio_podcast_footer_text', 
	));
	
	$wp_customize->add_setting('audio_podcast_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('audio_podcast_footer_text',array(
		'label'	=> esc_html__('Copyright Text','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Copyright 2020, .....', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('audio_podcast_copyright_alingment',array(
        'default' => 'center',
        'sanitize_callback' => 'audio_podcast_sanitize_choices'
	));
	$wp_customize->add_control(new Audio_Podcast_Image_Radio_Control($wp_customize, 'audio_podcast_copyright_alingment', array(
        'type' => 'select',
        'label' => esc_html__('Copyright Alignment','audio-podcast'),
        'section' => 'audio_podcast_footer',
        'settings' => 'audio_podcast_copyright_alingment',
        'choices' => array(
            'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
            'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
            'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
    ))));

    $wp_customize->add_setting( 'audio_podcast_hide_show_scroll',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ));  
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_hide_show_scroll',array(
      	'label' => esc_html__( 'Show / Hide Scroll to Top','audio-podcast' ),
      	'section' => 'audio_podcast_footer'
    )));

     //Selective Refresh
	$wp_customize->selective_refresh->add_partial('audio_podcast_scroll_to_top_icon', array( 
		'selector' => '.scrollup i', 
		'render_callback' => 'audio_podcast_Customize_partial_audio_podcast_scroll_to_top_icon', 
	));

    $wp_customize->add_setting('audio_podcast_scroll_top_alignment',array(
        'default' => 'Right',
        'sanitize_callback' => 'audio_podcast_sanitize_choices'
	));
	$wp_customize->add_control(new Audio_Podcast_Image_Radio_Control($wp_customize, 'audio_podcast_scroll_top_alignment', array(
        'type' => 'select',
        'label' => esc_html__('Scroll To Top','audio-podcast'),
        'section' => 'audio_podcast_footer',
        'settings' => 'audio_podcast_scroll_top_alignment',
        'choices' => array(
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
            'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
    ))));

	//Blog Post Settings
	$wp_customize->add_panel( 'audio_podcast_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'audio-podcast' ),
		'panel' => 'audio_podcast_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'audio_podcast_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'audio-podcast' ),
		'panel' => 'audio_podcast_blog_post_parent_panel',
	));

	//Blog layout
    $wp_customize->add_setting('audio_podcast_blog_layout_option',array(
        'default' => 'Default',
        'sanitize_callback' => 'audio_podcast_sanitize_choices'
    ));
    $wp_customize->add_control(new Audio_Podcast_Image_Radio_Control($wp_customize, 'audio_podcast_blog_layout_option', array(
        'type' => 'select',
        'label' => __('Blog Post Layouts','audio-podcast'),
        'section' => 'audio_podcast_post_settings',
        'choices' => array(
            'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
    ))));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('audio_podcast_toggle_postdate', array( 
		'selector' => '.post-main-box h2 a', 
		'render_callback' => 'audio_podcast_Customize_partial_audio_podcast_toggle_postdate', 
	));

	$wp_customize->add_setting( 'audio_podcast_toggle_postdate',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ) );
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_toggle_postdate',array(
        'label' => esc_html__( 'Post Date','audio-podcast' ),
        'section' => 'audio_podcast_post_settings'
    )));

    $wp_customize->add_setting( 'audio_podcast_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ) );
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_toggle_author',array(
		'label' => esc_html__( 'Author','audio-podcast' ),
		'section' => 'audio_podcast_post_settings'
    )));

    $wp_customize->add_setting( 'audio_podcast_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ) );
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_toggle_comments',array(
		'label' => esc_html__( 'Comments','audio-podcast' ),
		'section' => 'audio_podcast_post_settings'
    )));

    $wp_customize->add_setting( 'audio_podcast_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ) );
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_toggle_time',array(
		'label' => esc_html__( 'Time','audio-podcast' ),
		'section' => 'audio_podcast_post_settings'
    )));

    $wp_customize->add_setting( 'audio_podcast_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
	));
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_featured_image_hide_show', array(
		'label' => esc_html__( 'Featured Image','audio-podcast' ),
		'section' => 'audio_podcast_post_settings'
    )));

    $wp_customize->add_setting( 'audio_podcast_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'audio_podcast_sanitize_number_range'
	) );
	$wp_customize->add_control( 'audio_podcast_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','audio-podcast' ),
		'section'     => 'audio_podcast_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

    $wp_customize->add_setting( 'audio_podcast_toggle_tags',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
	));
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_toggle_tags', array(
		'label' => esc_html__( 'Tags','audio-podcast' ),
		'section' => 'audio_podcast_post_settings'
    )));

    $wp_customize->add_setting( 'audio_podcast_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'audio_podcast_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'audio_podcast_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','audio-podcast' ),
		'section'     => 'audio_podcast_post_settings',
		'type'        => 'range',
		'settings'    => 'audio_podcast_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('audio_podcast_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','audio-podcast'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','audio-podcast'),
		'section'=> 'audio_podcast_post_settings',
		'type'=> 'text'
	));

    $wp_customize->add_setting('audio_podcast_excerpt_settings',array(
        'default' => 'Excerpt',
        'transport' => 'refresh',
        'sanitize_callback' => 'audio_podcast_sanitize_choices'
	));
	$wp_customize->add_control('audio_podcast_excerpt_settings',array(
        'type' => 'select',
        'label' => esc_html__('Post Content','audio-podcast'),
        'section' => 'audio_podcast_post_settings',
        'choices' => array(
        	'Content' => esc_html__('Content','audio-podcast'),
            'Excerpt' => esc_html__('Excerpt','audio-podcast'),
            'No Content' => esc_html__('No Content','audio-podcast')
        ),
	) );

    // Button Settings
	$wp_customize->add_section( 'audio_podcast_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'audio-podcast' ),
		'panel' => 'audio_podcast_blog_post_parent_panel',
	));

	$wp_customize->add_setting( 'audio_podcast_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'audio_podcast_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'audio_podcast_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','audio-podcast' ),
		'section'     => 'audio_podcast_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('audio_podcast_button_text', array( 
		'selector' => '.post-main-box .more-btn a', 
		'render_callback' => 'audio_podcast_Customize_partial_audio_podcast_button_text', 
	));

    $wp_customize->add_setting('audio_podcast_button_text',array(
		'default'=> esc_html__('Read More','audio-podcast'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_button_text',array(
		'label'	=> esc_html__('Add Button Text','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Read More', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_button_settings',
		'type'=> 'text'
	));

	// Related Post Settings
	$wp_customize->add_section( 'audio_podcast_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'audio-podcast' ),
		'panel' => 'audio_podcast_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('audio_podcast_related_post_title', array( 
		'selector' => '.related-post h3', 
		'render_callback' => 'audio_podcast_Customize_partial_audio_podcast_related_post_title', 
	));

    $wp_customize->add_setting( 'audio_podcast_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ) );
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_related_post',array(
		'label' => esc_html__( 'Related Post','audio-podcast' ),
		'section' => 'audio_podcast_related_posts_settings'
    )));

    $wp_customize->add_setting('audio_podcast_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Related Post', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_related_posts_settings',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('audio_podcast_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'audio_podcast_sanitize_number_absint'
	));
	$wp_customize->add_control('audio_podcast_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => esc_html__( '3', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_related_posts_settings',
		'type'=> 'number'
	));

	// Single Posts Settings
	$wp_customize->add_section( 'audio_podcast_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'audio-podcast' ),
		'panel' => 'audio_podcast_blog_post_parent_panel',
	));

	$wp_customize->add_setting( 'audio_podcast_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ) );
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_single_post_breadcrumb',array(
		'label' => esc_html__( 'Single Post Breadcrumb','audio-podcast' ),
		'section' => 'audio_podcast_single_blog_settings'
    )));

	$wp_customize->add_setting('audio_podcast_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','audio-podcast'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','audio-podcast'),
		'section'=> 'audio_podcast_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('audio_podcast_single_blog_comment_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('audio_podcast_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => __( 'Leave a Reply', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('audio_podcast_single_blog_comment_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('audio_podcast_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => __( 'Post Comment', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('audio_podcast_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','audio-podcast'),
		'description'	=> __('Enter a value in %. Example:50%','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => __( '100%', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_single_blog_settings',
		'type'=> 'text'
	));

	//Others Settings
	$wp_customize->add_panel( 'audio_podcast_others_panel', array(
		'title' => esc_html__( 'Others Settings', 'audio-podcast' ),
		'panel' => 'audio_podcast_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'audio_podcast_left_right', array(
    	'title' => esc_html__( 'General Settings', 'audio-podcast' ),
		'panel' => 'audio_podcast_others_panel'
	) );

	$wp_customize->add_setting('audio_podcast_width_option',array(
        'default' => 'Full Width',
        'sanitize_callback' => 'audio_podcast_sanitize_choices'
	));
	$wp_customize->add_control(new Audio_Podcast_Image_Radio_Control($wp_customize, 'audio_podcast_width_option', array(
        'type' => 'select',
        'label' => esc_html__('Width Layouts','audio-podcast'),
        'description' => esc_html__('Here you can change the width layout of Website.','audio-podcast'),
        'section' => 'audio_podcast_left_right',
        'choices' => array(
            'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
            'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
            'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
    ))));

	$wp_customize->add_setting('audio_podcast_theme_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'audio_podcast_sanitize_choices'
	));
	$wp_customize->add_control('audio_podcast_theme_options',array(
        'type' => 'select',
        'label' => esc_html__('Post Sidebar Layout','audio-podcast'),
        'description' => esc_html__('Here you can change the sidebar layout for posts. ','audio-podcast'),
        'section' => 'audio_podcast_left_right',
        'choices' => array(
            'Left Sidebar' => esc_html__('Left Sidebar','audio-podcast'),
            'Right Sidebar' => esc_html__('Right Sidebar','audio-podcast'),
            'One Column' => esc_html__('One Column','audio-podcast'),
            'Grid Layout' => esc_html__('Grid Layout','audio-podcast')
        ),
	) );

	$wp_customize->add_setting('audio_podcast_page_layout',array(
        'default' => 'One_Column',
        'sanitize_callback' => 'audio_podcast_sanitize_choices'
	));
	$wp_customize->add_control('audio_podcast_page_layout',array(
        'type' => 'select',
        'label' => esc_html__('Page Sidebar Layout','audio-podcast'),
        'description' => esc_html__('Here you can change the sidebar layout for pages. ','audio-podcast'),
        'section' => 'audio_podcast_left_right',
        'choices' => array(
            'Left_Sidebar' => esc_html__('Left Sidebar','audio-podcast'),
            'Right_Sidebar' => esc_html__('Right Sidebar','audio-podcast'),
            'One_Column' => esc_html__('One Column','audio-podcast')
        ),
	) );

	// Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'audio_podcast_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar', 
		'render_callback' => 'audio_podcast_customize_partial_audio_podcast_woocommerce_shop_page_sidebar', ) );

    // Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'audio_podcast_woocommerce_shop_page_sidebar',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ) );
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Shop Page Sidebar','audio-podcast' ),
		'section' => 'audio_podcast_left_right'
    )));

    // Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'audio_podcast_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar', 
		'render_callback' => 'audio_podcast_customize_partial_audio_podcast_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'audio_podcast_woocommerce_single_product_page_sidebar',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ) );
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Single Product Sidebar','audio-podcast' ),
		'section' => 'audio_podcast_left_right'
    )));

    $wp_customize->add_setting( 'audio_podcast_single_page_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ) );
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_single_page_breadcrumb',array(
		'label' => esc_html__( 'Single Page Breadcrumb','audio-podcast' ),
		'section' => 'audio_podcast_left_right'
    )));

    //Wow Animation
	$wp_customize->add_setting( 'audio_podcast_animation',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ));
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_animation',array(
        'label' => esc_html__( 'Animation ','audio-podcast' ),
        'description' => __('Here you can disable overall site animation effect','audio-podcast'),
        'section' => 'audio_podcast_left_right'
    )));

    // Pre-Loader
	$wp_customize->add_setting( 'audio_podcast_loader_enable',array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ) );
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_loader_enable',array(
        'label' => esc_html__( 'Pre-Loader','audio-podcast' ),
        'section' => 'audio_podcast_left_right'
    )));

	$wp_customize->add_setting('audio_podcast_preloader_bg_color', array(
		'default'           => '#1b2039',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'audio_podcast_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'audio-podcast'),
		'section'  => 'audio_podcast_left_right',
	)));

	$wp_customize->add_setting('audio_podcast_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'audio_podcast_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'audio-podcast'),
		'section'  => 'audio_podcast_left_right',
	)));

	//No Result Page Setting
	$wp_customize->add_section('audio_podcast_no_results_page',array(
		'title'	=> __('No Results Page Settings','audio-podcast'),
		'panel' => 'audio_podcast_others_panel',
	));	

	$wp_customize->add_setting('audio_podcast_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('audio_podcast_no_results_page_title',array(
		'label'	=> __('Add Title','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('audio_podcast_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('audio_podcast_no_results_page_content',array(
		'label'	=> __('Add Text','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_no_results_page',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('audio_podcast_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','audio-podcast'),
		'panel' => 'audio_podcast_others_panel',
	));

    $wp_customize->add_setting( 'audio_podcast_resp_slider_hide_show',array(
      	'default' => 0,
     	'transport' => 'refresh',
      	'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ));  
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_resp_slider_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Slider','audio-podcast' ),
      	'section' => 'audio_podcast_responsive_media'
    )));

    $wp_customize->add_setting( 'audio_podcast_sidebar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ));  
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_sidebar_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Sidebar','audio-podcast' ),
      	'section' => 'audio_podcast_responsive_media'
    )));

    $wp_customize->add_setting( 'audio_podcast_resp_scroll_top_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'audio_podcast_switch_sanitization'
    ));  
    $wp_customize->add_control( new Audio_Podcast_Toggle_Switch_Custom_Control( $wp_customize, 'audio_podcast_resp_scroll_top_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Scroll To Top','audio-podcast' ),
      	'section' => 'audio_podcast_responsive_media'
    )));

    $wp_customize->add_setting('audio_podcast_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Audio_Podcast_Fontawesome_Icon_Chooser(
        $wp_customize,'audio_podcast_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','audio-podcast'),
		'transport' => 'refresh',
		'section'	=> 'audio_podcast_responsive_media',
		'setting'	=> 'audio_podcast_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('audio_podcast_res_menu_close_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Audio_Podcast_Fontawesome_Icon_Chooser(
        $wp_customize,'audio_podcast_res_menu_close_icon',array(
		'label'	=> __('Add Close Menu Icon','audio-podcast'),
		'transport' => 'refresh',
		'section'	=> 'audio_podcast_responsive_media',
		'setting'	=> 'audio_podcast_res_menu_close_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('audio_podcast_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#ff498d',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'audio_podcast_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'audio-podcast'),
		'section'  => 'audio_podcast_responsive_media',
	)));

    //Woocommerce settings
	$wp_customize->add_section('audio_podcast_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'audio-podcast'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('audio_podcast_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','audio-podcast'),
		'description'	=> __('Enter a value in pixels. Example:20px','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('audio_podcast_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','audio-podcast'),
		'description'	=> __('Enter a value in pixels. Example:20px','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('audio_podcast_woocommerce_sale_position',array(
        'default' => 'left',
        'sanitize_callback' => 'audio_podcast_sanitize_choices'
	));
	$wp_customize->add_control('audio_podcast_woocommerce_sale_position',array(
        'type' => 'select',
        'label' => __('Sale Badge Position','audio-podcast'),
        'section' => 'audio_podcast_woocommerce_section',
        'choices' => array(
            'left' => __('Left','audio-podcast'),
            'right' => __('Right','audio-podcast'),
        ),
	) );

	$wp_customize->add_setting('audio_podcast_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','audio-podcast'),
		'description'	=> __('Enter a value in pixels. Example:20px','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('audio_podcast_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','audio-podcast'),
		'description'	=> __('Enter a value in pixels. Example:20px','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('audio_podcast_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('audio_podcast_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','audio-podcast'),
		'description'	=> __('Enter a value in pixels. Example:20px','audio-podcast'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'audio-podcast' ),
        ),
		'section'=> 'audio_podcast_woocommerce_section',
		'type'=> 'text'
	));
}

add_action( 'customize_register', 'audio_podcast_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Audio_Podcast_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Audio_Podcast_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Audio_Podcast_Customize_Section_Pro( $manager,'audio_podcast_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'PODCAST PRO', 'audio-podcast' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'audio-podcast' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/audio-podcast-wordpress-theme/'),
		) )	);

		// Register sections.
		$manager->add_section(new Audio_Podcast_Customize_Section_Pro($manager,'audio_podcast_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'audio-podcast' ),
			'pro_text' => esc_html__( 'DOCS', 'audio-podcast' ),
			'pro_url'  => esc_url('https://www.vwthemesdemo.com/docs/free-audio-podcast/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'audio-podcast-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'audio-podcast-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Audio_Podcast_Customize::get_instance();