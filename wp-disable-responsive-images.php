<?php
/*
Plugin Name: WordPress disable responsive images
Plugin URI: https://github.com/BenjaminMedia/wp-disable-responsive-images
Description: Plugin that disables the responsive images added in wp 4.4
Author: Alf Henderson
Version: 1.0
Author URI: http://www.bonnierpublications.com
*/

function bp_disable_srcset( $sources ) {
    return false;
}
add_filter( 'wp_calculate_image_srcset', 'bp_disable_srcset' );