/*
Plugin Name: Lightwindow 2.0 for Images
Plugin URI: http://twentyforever.com/2008/02/03/lightwindow-20-for-images-plugin-for-wordpress/
Description: This plugin includes <a href="http://stickmanlabs.com/lightwindow/">Lightwindow 2.0</a> into your blog. All anchors on the page will be checked, if they are pointing to an image and have no class yet the plugin give it the lightwindow class. Working with .jpg, .jpeg, .png, .gif, .tiff, .bmp.
Version: 1.1
Author: Sebastian Senf
Author URI: http://www.twentyforever.com/
*/

var anchors = document.getElementsByTagName('a');
	
for(var i = 0; i < anchors.length; i++) {
	var ext = anchors[i].href.substr(anchors[i].href.length - 4, 4).toLowerCase();

	if(ext == '.jpg' || ext == "jpeg" || ext == '.gif' || ext == '.png' || ext == '.bmp' || ext == 'tiff') {
		if(anchors[i].className == "") {
			anchors[i].className = "lightwindow";
		}
	}
}