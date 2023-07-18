<?php
/**
 * Services Section options.
 *
 * @package Volleyball Club
 */

$default = volleyball_club_get_default_theme_options();

// Services Section
$wp_customize->add_section( 'section_featured_services',
	array(
	'title'      => __( 'Services Section', 'volleyball-club' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'home_page_panel',
	)
);

// Enable Section
$wp_customize->add_setting('theme_options[enable_featured_services_section]', 
	array(
	'default' 			=> $default['enable_featured_services_section'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'volleyball_club_sanitize_checkbox'
	)
);

$wp_customize->add_control('theme_options[enable_featured_services_section]', 
	array(		
	'label' 	=> __('Enable Section', 'volleyball-club'),
	'section' 	=> 'section_featured_services',
	'settings'  => 'theme_options[enable_featured_services_section]',
	'type' 		=> 'checkbox',	
	)
);
// Section Title
$wp_customize->add_setting('theme_options[featured_services_section_title]', 
	array(
	'default'           => $default['featured_services_section_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[featured_services_section_title]', 
	array(
	'label'       => __('Section Title', 'volleyball-club'),
	'section'     => 'section_featured_services',   
	'settings'    => 'theme_options[featured_services_section_title]',	
	'active_callback' => 'volleyball_club_featured_services_active',		
	'type'        => 'text'
	)
);

// Items
$wp_customize->add_setting('theme_options[number_of_featured_services_items]', 
	array(
	'default' 			=> $default['number_of_featured_services_items'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'volleyball_club_sanitize_number_range'
	)
);

$wp_customize->add_control('theme_options[number_of_featured_services_items]', 
	array(
	'label'       => __('Items (Max: 6)', 'volleyball-club'),
	'section'     => 'section_featured_services',   
	'settings'    => 'theme_options[number_of_featured_services_items]',		
	'type'        => 'number',
	'active_callback' => 'volleyball_club_featured_services_active',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 6,
			'step'	=> 1,
		),
	)
);



// Column
$wp_customize->add_setting('theme_options[featured_services_column]', 
	array(
	'default' 			=> $default['featured_services_column'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'volleyball_club_sanitize_select'
	)
);

$wp_customize->add_control(new volleyball_club_Image_Radio_Control($wp_customize, 'theme_options[featured_services_column]', 
	array(		
	'label' 	=> __('Column', 'volleyball-club'),
	'section' 	=> 'section_featured_services',
	'settings'  => 'theme_options[featured_services_column]',
	'type' 		=> 'radio-image',
	'active_callback' => 'volleyball_club_featured_services_active',
	'choices' 	=> array(		
		'col-1' 	=> esc_url(get_template_directory_uri()) . '/assets/images/column-1.jpg',						
		'col-2' 	=> esc_url(get_template_directory_uri()) . '/assets/images/column-2.jpg',
		'col-3' 	=> esc_url(get_template_directory_uri()) . '/assets/images/column-3.jpg',
		'col-4' 	=> esc_url(get_template_directory_uri()) . '/assets/images/column-4.jpg',
		'col-5' 	=> esc_url(get_template_directory_uri()) . '/assets/images/column-5.jpg',
		'col-6' 	=> esc_url(get_template_directory_uri()) . '/assets/images/column-6.jpg',
		),	
	))
);

// Content Type
$wp_customize->add_setting('theme_options[featured_services_content_type]', 
	array(
	'default' 			=> $default['featured_services_content_type'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'volleyball_club_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[featured_services_content_type]', 
	array(
	'label'       => __('Content Type', 'volleyball-club'),
	'section'     => 'section_featured_services',   
	'settings'    => 'theme_options[featured_services_content_type]',		
	'type'        => 'select',
	'active_callback' => 'volleyball_club_featured_services_active',
	'choices'	  => array(
			'featured_services_page'	  => __('Page','volleyball-club'),
			'featured_services_post'	  => __('Post','volleyball-club'),
		),
	)
);

$number_of_featured_services_items = volleyball_club_get_option( 'number_of_featured_services_items' );

for( $i=1; $i<=$number_of_featured_services_items; $i++ ) {


	// Page
	$wp_customize->add_setting('theme_options[featured_services_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'volleyball_club_dropdown_pages'
		)
	);
	
	$wp_customize->add_control('theme_options[featured_services_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Page #%1$s', 'volleyball-club'), $i),
		'section'     => 'section_featured_services',   
		'settings'    => 'theme_options[featured_services_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'volleyball_club_featured_services_page',
		)
	);

	// Post
	$wp_customize->add_setting('theme_options[featured_services_post_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'volleyball_club_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[featured_services_post_'.$i.']', 
		array(
		'label'       => sprintf( __('Post #%1$s', 'volleyball-club'), $i),
		'section'     => 'section_featured_services',   
		'settings'    => 'theme_options[featured_services_post_'.$i.']',		
		'type'        => 'select',
		'choices'	  => volleyball_club_dropdown_posts(),
		'active_callback' => 'volleyball_club_featured_services_post',
		)
	);
}