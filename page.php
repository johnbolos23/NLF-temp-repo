<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

if( have_rows('flexible_content') ){
    
    while( have_rows('flexible_content') ) : the_row();

        get_template_part( 'inc/flexible-blocks/' . get_row_layout() );

    endwhile;
    
}else{
    the_content();
}

?>



<?php
get_footer();
