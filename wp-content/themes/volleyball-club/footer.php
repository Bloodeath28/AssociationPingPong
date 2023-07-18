<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Volleyball Club
 */

/**
 *
 * @hooked volleyball_club_footer_start
 */
do_action( 'volleyball_club_action_before_footer' );

/**
 * Hooked - volleyball_club_footer_top_section -10
 * Hooked - volleyball_club_footer_section -20
 */
do_action( 'volleyball_club_action_footer' );

/**
 * Hooked - volleyball_club_footer_end. 
 */
do_action( 'volleyball_club_action_after_footer' );

wp_footer(); ?>

</body>  
</html>