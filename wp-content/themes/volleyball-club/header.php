<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Volleyball Club
 */
/**
* Hook - volleyball_club_action_doctype.
*
* @hooked volleyball_club_doctype -  10
*/
do_action( 'volleyball_club_action_doctype' );
?>
<head>
<?php
/**
* Hook - volleyball_club_action_head.
*
* @hooked volleyball_club_head -  10
*/
do_action( 'volleyball_club_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<?php

/**
* Hook - volleyball_club_action_before.
*
* @hooked volleyball_club_page_start - 10
*/
do_action( 'volleyball_club_action_before' );

/**
*
* @hooked volleyball_club_header_start - 10
*/
do_action( 'volleyball_club_action_before_header' );

/**
*
*@hooked volleyball_club_site_branding - 10
*@hooked volleyball_club_header_end - 15 
*/
do_action('volleyball_club_action_header');

/**
*
* @hooked volleyball_club_content_start - 10
*/
do_action( 'volleyball_club_action_before_content' );

/**
 * Banner start
 * 
 * @hooked volleyball_club_banner_header - 10
*/
do_action( 'volleyball_club_banner_header' );  
