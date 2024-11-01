<?php
/*
Plugin Name: Panorama
Plugin URI: http://iran98.org/category/wordpress/wp-panorama/
Description: View 360 Degree images in WordPress
Version: 1.0
Author: Mostafa Soufi
Author URI: http://iran98.org/
License: GPL2
*/
function wp_panorama_meta() {
	echo "<link rel='stylesheet' media='all' type='text/css' href='".home_url()."/wp-content/plugins/wp-panorama/files/panorama360.css' />";
	echo "<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js'></script>";
	echo "<script type='text/javascript' src='".home_url()."/wp-content/plugins/wp-panorama/files/jquery.mousewheel.min.js'></script>";
	echo "<script type='text/javascript' src='".home_url()."/wp-content/plugins/wp-panorama/files/jquery.panorama360.js'></script>";
	echo "
		<script>
		$(function(){
		$('.panorama-view').panorama360({
			bind_resize: false	// no need to subscribe to window resize event
			});
		});
		</script>";
	}
	add_action('wp_head', 'wp_panorama_meta');

	function wp_panorama($img_url, $img_size = "2000", $img_width = "400" , $img_height = "250") { ?>
		<div class="panorama" style="width: <?php echo $img_width; ?>px; height: <?php echo $img_height; ?>px;">
			<div class="panorama-view">
				<div class="panorama-container">
					<img src="<?php echo $img_url; ?>" data-width="<?php echo $img_size; ?>" data-height="<?php echo $img_height; ?>" alt="Panorama" />
				</div>
			</div>
			<a class="info" href="http://iran98.org/category/wordpress/wp-panorama/">wp-panorama</a>
		</div>	
	<?php } ?>