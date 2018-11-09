<?php

function vhwp_hsfg_customize_registers( $wp_customize ) {

	// Checking and adding options
	if ( !get_option ( 'vhwp_hsfg_section1_image' )){
		add_option ( 'vhwp_hsfg_section1_image' );
	}

	if ( !get_option ( 'vhwp_hsfg_section1_image_height' )){
		add_option ( 'vhwp_hsfg_section1_image_height', '400' );
	}

/*
	if ( !get_option ( 'vhwp_ghsfg_section1_button_url' )){
		add_option ( 'vhwp_hsfg_section1_button_url' );
	}
*/
	if ( !get_option ( 'vhwp_hsfg_section1_title_text' )){
		add_option ( 'vhwp_hsfg_section1_title_text', 'Default Title' );
	}
	if ( !get_option ( 'vhwp_hsfg_section1_title_font_size' )){
		add_option ( 'vhwp_hsfg_section1_title_font_size');
	}

	if ( !get_option ( 'vhwp_hsfg_section1_title_font_color' )){
		add_option ( 'vhwp_hsfg_section1_title_font_color' );
	}

	if ( !get_option ( 'vhwp_hsfg_section1_subtitle_text' )){
		add_option ( 'vhwp_hsfg_section1_subtitle_text' );
	}

	if ( !get_option ( 'vhwp_hsfg_section1_subtitle_font_size' )){
		add_option ( 'vhwp_hsfg_section1_subtitle_font_size' );
	}

	if ( !get_option ( 'vhwp_hsfg_section1_subtitle_font_color' )){
		add_option ( 'vhwp_hsfg_section1_subtitle_font_color' );
	}



	// Creating the panel Genesis Hero Section
	$wp_customize->add_panel( 'vhwp_hsfg_main_panel', array(
	  'title' => __( 'Genesis Hero Section', 'vhwp-ghsfg' ),
	  'priority' => 160,
	  ) );

	// Creating the section: Section1
	$wp_customize->add_section( 'vhwp_hsfg_hero_section1' , array(
		'title'    		=> __( 'Hero Section 1', 'vhwp-hsfg' ),
		'priority' 		=> 10,
		'panel'			=> 'vhwp_hsfg_main_panel',
	  ) );

	/**
	 * Section1 Image
	 */
	$wp_customize->add_setting( 'vhwp_hsfg_section1_image' , array(
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'esc_url_raw',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'vhwp_hsfg_section1_image', array(
		'label'				=> __( 'Select an image', 'vhwp-hsfg' ),
		'section'			=> 'vhwp_hsfg_hero_section1',
		'settings'			=> 'vhwp_hsfg_section1_image',
	) ) );

	/**
	 * Section1 Image height
	 */
	$wp_customize->add_setting( 'vhwp_hsfg_section1_image_height' , array(
		'default'			=> '400',
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vhwp_hsfg_section1_image_height', array(
		'label'				=> __( 'Image Height  (px)', 'vhwp-hsfg' ),
		'section'			=> 'vhwp_hsfg_hero_section1',
		'settings'			=> 'vhwp_hsfg_section1_image_height',
		'type'				=> 'option',
	) ) );

	/**
	 * 
	 */ /*
	$wp_customize->add_setting( 'vhwp_hsfg_section1_button_url' , array(
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vhwp_hsfg_section1_button_url', array(
		'label'				=> __( 'Button URL link', 'vhwp-hsfg' ),
		'section'			=> 'vhwp_hsfg_hero_section1',
		'settings'			=> 'vhwp_hsfg_section1_button_url',
		'type'				=> 'option',
	) ) );
*/

	/********* Title Options  */

	/**
	 *  Section1 Title Text
	 */
	$wp_customize->add_setting( 'vhwp_hsfg_section1_title_text' , array(
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vhwp_hsfg_section1_title_text', array(
		'label'				=> __( 'Title Text', 'vhwp-hsfg' ),
		'section'			=> 'vhwp_hsfg_hero_section1',
		'settings'			=> 'vhwp_hsfg_section1_title_text',
		'type'				=> 'option',
	) ) );

	/**
	 * Section1 Font Size
	 */
	$wp_customize->add_setting( 'vhwp_hsfg_section1_title_font_size' , array(
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vhwp_hsfg_section1_title_font_size', array(
		'label'				=> __( 'Title Font Size (px)', 'vhwp-hsfg' ),
		'section'			=> 'vhwp_hsfg_hero_section1',
		'settings'			=> 'vhwp_hsfg_section1_title_font_size',
		'type'				=> 'option',
	) ) );

	/**
	 *  Section1 Title text color
	 */
	$wp_customize->add_setting( 'vhwp_hsfg_section1_title_font_color' , array(
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vhwp_hsfg_section1_title_font_color', array(
		'label'      => __( 'Title Color', 'vhwp-hsfg' ),
		'section'    => 'vhwp_hsfg_hero_section1',
		'settings'   => 'vhwp_hsfg_section1_title_font_color',
	) ) );

	/********* Subitle Options  */

	/**
	 * Section1 Subtitle Text
	 */
	$wp_customize->add_setting( 'vhwp_hsfg_section1_subtitle_text' , array(
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vhwp_hsfg_section1_subtitle_text', array(
		'label'				=> __( 'Subtitle Text', 'vhwp-hsfg' ),
		'section'			=> 'vhwp_hsfg_hero_section1',
		'settings'			=> 'vhwp_hsfg_section1_subtitle_text',
		'type'				=> 'option',
	) ) );

	/**
	 * Section1 Subtitle Font Size
	 */
	$wp_customize->add_setting( 'vhwp_hsfg_section1_subtitle_font_size' , array(
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vhwp_hsfg_section1_subtitle_font_size', array(
		'label'				=> __( 'Subtitle Font Size (px)', 'vhwp-hsfg' ),
		'section'			=> 'vhwp_hsfg_hero_section1',
		'settings'			=> 'vhwp_hsfg_section1_subtitle_font_size',
		'type'				=> 'option',
	) ) );

	/**
	 *  Section1 Subtitle Text Color
	 */
	$wp_customize->add_setting( 'vhwp_hsfg_section1_subtitle_font_color' , array(
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vhwp_hsfg_section1_subtitle_font_color', array(
		'label'      => __( 'Subitle Color', 'vhwp-hsfg' ),
		'section'    => 'vhwp_hsfg_hero_section1',
		'settings'   => 'vhwp_hsfg_section1_subtitle_font_color',
	) ) );


}

add_action ( 'customize_register', 'vhwp_hsfg_customize_registers' );
