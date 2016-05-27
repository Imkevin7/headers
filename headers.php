<?php
/*
Plugin Name: Headers
Description: Shortcode for headers
Version: 2016.5.26.1
Author: Kevin Pichette
Author URI: http://www.kevinpichette.com
License: GPL
Copyright: Kevin Pichettte
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


add_shortcode('header','header_code');

function header_code($atts, $content = null)
{
	$a = shortcode_atts(array(
			'size' => '20px',
			'weight' => 'bold',
			'align' => 'center',
		),$atts);

	$size = $a['size'];
	$weight = $a['weight'];
	$align = $a['align'];

	return '<div style="text-align: ' . $align . ';">
				<div style="float: left; width: 30%; margin-top: 10px; overflow:hidden;">

					<hr />

				</div>
				<div style="float: left; width: 30%;">
					<h1 style="font-size: ' . $size . '; margin: auto;">' . $content . '</h1>
				</div>
				<div style="float: left; width: 30%; margin-top: 10px; overflow: hidden;">

					<hr />

				</div>
				<div style="clear:left;"> </div>
			</div>';
}