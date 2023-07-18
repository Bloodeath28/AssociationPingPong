<?php
/**
 * Active callback functions.
 *
 * @package Volleyball Club
 */

function volleyball_club_featured_slider_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[enable_featured_slider_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function volleyball_club_featured_slider_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_slider_content_type]' )->value();
    return ( volleyball_club_featured_slider_active( $control ) && ( 'featured_slider_page' == $content_type ) );
}

function volleyball_club_featured_slider_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_slider_content_type]' )->value();
    return ( volleyball_club_featured_slider_active( $control ) && ( 'featured_slider_post' == $content_type ) );
}

function volleyball_club_featured_services_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[enable_featured_services_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function volleyball_club_featured_services_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_services_content_type]' )->value();
    return ( volleyball_club_featured_services_active( $control ) && ( 'featured_services_page' == $content_type ) );
}

function volleyball_club_featured_services_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_services_content_type]' )->value();
    return ( volleyball_club_featured_services_active( $control ) && ( 'featured_services_post' == $content_type ) );
}


function volleyball_club_featured_blog_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[enable_featured_blog_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function volleyball_club_featured_blog_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_blog_content_type]' )->value();
    return ( volleyball_club_featured_blog_active( $control ) && ( 'featured_blog_page' == $content_type ) );
}

function volleyball_club_featured_blog_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_blog_content_type]' )->value();
    return ( volleyball_club_featured_blog_active( $control ) && ( 'featured_blog_post' == $content_type ) );
}


function volleyball_club_featured_posts_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[enable_featured_posts_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function volleyball_club_social_links_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[show_header_contact_link]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

/**
 * Active Callback for top bar section
 */
function volleyball_club_contact_info_ac( $control ) {

    $show_contact_info = $control->manager->get_setting( 'theme_options[show_header_contact_link]')->value();
    $control_id        = $control->id;
         
    if ( $control_id == 'theme_options[header_contact]' && $show_contact_info ) return true;

    return false;
}