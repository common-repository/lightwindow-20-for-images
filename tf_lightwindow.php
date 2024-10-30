<?php
/*
Plugin Name: Lightwindow 2.0 for Images
Plugin URI: http://twentyforever.com/2008/02/03/lightwindow-20-for-images-plugin-for-wordpress/
Description: This plugin includes <a href="http://stickmanlabs.com/lightwindow/">Lightwindow 2.0</a> into your blog. All anchors on the page will be checked, if they are pointing to an image and have no class yet the plugin give it the lightwindow class. Working with .jpg, .jpeg, .png, .gif, .tiff, .bmp.
Version: 1.1
Author: Sebastian Senf
Author URI: http://www.twentyforever.com/
*/

function getPluginPath() {
	return get_option("siteurl")."/wp-content/plugins/tf_lightwindow/";
}

function includeLightwindow() {
	$jsInclude1 = '<script type="text/javascript" src="'.getPluginPath().'javascript/';
	$jsInclude2 = '.js"></script>'."\n";
	
	echo "\n".$jsInclude1.'prototype'.$jsInclude2.$jsInclude1.'effects'.$jsInclude2.$jsInclude1.'lightwindow'.$jsInclude2;
	echo '<link rel="stylesheet" href="'.getPluginPath().'css/lightwindow.css" type="text/css" media="screen" />'."\n";
}

function includeAnchors() {
	echo '<script type="text/javascript" src="'.getPluginPath().'javascript/anchors.js"></script>'."\n";
}

add_action('wp_head', 'includeLightwindow');
add_action('wp_footer', 'includeAnchors');
?>