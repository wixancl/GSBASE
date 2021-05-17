<?php
/*
Plugin Name: dooBlue Admin Theme
Description: Modern look for GetSimple CMS admin section
Version: 1.0
Author: dooBlue
Author URI: https://doo.blue/
*/

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");

# register plugin
register_plugin(
	$thisfile,
	'dooBlue Admin',
	'1.0',
	'dooBlue',
	'https://doo.blue/',
	'Modern look for GetSimple CMS admin section',
	'theme'
);

register_style('doolittle', $SITEURL.'plugins/dooBlue/css/main.css', 1.1, FALSE);
register_script('doolittle', $SITEURL.'plugins/dooBlue/js/main.js', 1.1, FALSE);
queue_style('doolittle',GSBACK);
queue_script('doolittle',GSBACK);