<?php
/*
Plugin Name: Transparency Grid
Description: Add transparency grid to transparent PNGs in <code>wp-admin</code>.
Version: 1.0
Author: Brainstorm Media
Author URI: http://brainstormmedia.com
*/

add_action('admin_print_scripts', 'storm_transparency_grid' );

function storm_transparency_grid(){
	$url = plugins_url( 'transparency-grid.png?v=2', __FILE__ );
	?>
		<style>
			.media img[src$=".png"], .wp_attachment_image img[src$=".png"] { 
				background-color: #F8AC00; 
				background-image: url(<?php echo $url ?>);
				background-repeat: repeat;
			}
		</style>
	<?php
}