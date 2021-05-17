<?php
/*
Plugin Name: Fullwidth Admin Theme
Description: A fullwidth standard GetSimple CMS admin theme
Version: 0.1
Author: Pavol Bokor
Author URI: https://www.4enzo.sk/
*/

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");

# register plugin
register_plugin(
	$thisfile,
	'Fullwidth Admin Theme',
	'0.1',
	'Pavol Bokor',
	'https://www.4enzo.sk/',
	'A fullwidth standard GetSimple CMS admin theme',
	'theme'
);

register_style('fullwidth_admin_theme', $SITEURL.'plugins/fullwidth_admin_theme/css/style.css', 1.1, FALSE);
queue_style('fullwidth_admin_theme',GSBACK);