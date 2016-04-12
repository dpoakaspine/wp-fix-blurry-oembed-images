<?php
/**
 *
 * Plugin Name: Fix blurry oEmbed images
 * Description: adds image size to embed_thumbnail_image_size
 * Version:     0.0.1
 * Author:      Stefan Böttcher
 * Author URI:  http://berliner-hilfe.de
 * Plugin URI:  http://berliner-hilfe.de
 */

// If this file is called directly, abort.
if (!defined("WPINC")) {
	die;
}

// define the embed_thumbnail_image_size callback
function filter_embed_thumbnail_image_size( $image_size ) {
    // make filter magic happen here...
    return 'medium';
};

// add the filter
add_filter( 'embed_thumbnail_image_size', 'filter_embed_thumbnail_image_size' );
