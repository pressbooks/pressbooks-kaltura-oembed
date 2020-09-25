<?php
/*
Plugin Name: Pressbooks Kaltura oEmbed
Plugin URI: https://pressbooks.org
Description: Enables Kaltura MediaSpace oEmbeds for videos hosted on selected domains.
Version: 1.0
Author: Steel Wagstaff
License: GPL3
*/

add_action( 'init', 'kaltura_add_oembed_handlers' );
// To add oEmbed support for additional Kaltura MediaSpace instances, register them using `wp_ombed_add_provider` and
// the pattern described in Kaltura's documentation: https://knowledge.kaltura.com/help/mediaspace-oembed-integration
function kaltura_add_oembed_handlers(){
    wp_oembed_add_provider( 'https://mediaspace.wisc.edu/*', 'https://mediaspace.wisc.edu/oembed', false );
    wp_oembed_add_provider( 'https://media.kpu.ca/*', 'https://media.kpu.ca/oembed/' );
    wp_oembed_add_provider( 'https://iu.mediaspace.kaltura.com/*', 'https://iu.mediaspace.kaltura.com/oembed', false );
    wp_oembed_add_provider( 'https://learning.kaltura.com/*', 'https://learning.kaltura.com/oembed', false );
}
