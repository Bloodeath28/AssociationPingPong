<?php

$default = volleyball_club_get_default_theme_options();
/**
* Add Header Top Panel
*/
$wp_customize->add_panel( 'header_top_panel', array(
    'title'          => __( 'Header Top', 'volleyball-club' ),
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
) );

/** Header social links section */
$wp_customize->add_section(
    'header_contact_link_section',
    array(
        'title'    => __( 'Contact Button', 'volleyball-club' ),
        'panel'    => 'header_top_panel',
        'priority' => 20,
    )
);

/** Header social links control */
$wp_customize->add_setting( 
    'theme_options[show_header_contact_link]', 
    array(
        'default'           => $default['show_header_contact_link'],
        'sanitize_callback' => 'volleyball_club_sanitize_checkbox',
    ) 
);

$wp_customize->add_control(
    'theme_options[show_header_contact_link]',
    array(
        'label'       => __( 'Show Contact Link', 'volleyball-club' ),
        'section'     => 'header_contact_link_section',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting( 
    'theme_options[header_contact]', 
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ) 
);

$wp_customize->add_control(
    'theme_options[header_contact]',
    array(
        'label'           => __( 'Contact Link', 'volleyball-club' ),
        'section'         => 'header_contact_link_section',
        'active_callback' => 'volleyball_club_contact_info_ac',
    )
);