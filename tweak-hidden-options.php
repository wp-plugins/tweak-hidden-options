<?php
/*
 Plugin Name: Tweak Hidden Options
 Plugin URI: http://www.legalcompetitiveintelligence.com/wordpress-plugin-tweak-hidden-options/
 Description: Tweak Hidden Options is a safe and easy-to-use way to modify, tweak, and change various hidden options within WordPress. 
 Author: LCI
 Version: 1.0
 Author URI: http://www.legalcompetitiveintelligence.com/wordpress-plugin-tweak-hidden-options/
 Licence: GPL2
 */

//Require the files only if it's admin interface
if( is_admin() ){
	require_once( __DIR__ . '/options-functions.php' );
	require_once( __DIR__ . '/options-page.php' );
}