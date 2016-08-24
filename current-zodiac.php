<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
 Plugin Name: current-zodiac
 Plugin URI: https://github.com/sheema1/currentzodiac
 Description: A simple WordPress plugin to show current month zodiac sign
 Version: 1.0
 Author: Sheema Sadia
 Author URI: http://www.itfellow.com
 License: GPL2
*/

if(!class_exists('plugin2'))

	{
		class plugin2
		{
			/**
			 * Construct the plugin object
			 */
			public function __construct()
			{
					
				add_action( 'init', 'current_zodiac_register_shortcode' );
				
			} // END public function __construct
	
			/**
			 * Activate the plugin
			 */
			public static function activate()
			{
				// Do nothing
			} // END public static function activate
	
			/**
			 * Deactivate the plugin
			 */
			public static function deactivate()
			{
				// Do nothing
			} // END public static function deactivate
	
		} // END class firstplugin
	
	
	} // END if(!class_exists('currentzodiac'))
		// register actions
	
	
		
		function currentzodiac_shortcode($birthdate)
		{
			 $zodiac = "";
			 $birthdate = date("Y-m-d");
			list ( $year, $month, $day ) = explode ( "-", $birthdate );
			 
			if     ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ) { $zodiac = "Aries"; }
			elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) { $zodiac = "Taurus"; }
			elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) { $zodiac = "Gemini"; }
			elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) { $zodiac = "Cancer"; }
			elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) { $zodiac = "Leo"; }
			elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) { $zodiac = "Virgo"; }
			elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) { $zodiac = "Libra"; }
			elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) { $zodiac = "Scorpio"; }
			elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) { $zodiac = "Sagittarius"; }
			elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) { $zodiac = "Capricorn"; }
			elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) { $zodiac = "Aquarius"; }
			elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) { $zodiac = "Pisces"; }
			
			return $zodiac;
		}
	function current_zodiac_register_shortcode() {
	
		add_shortcode( 'current-zodiac', 'currentzodiac_shortcode' );
	
	}
	
	// call this plugin
	$current_zodiac = new plugin2();
	