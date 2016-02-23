<?php

class CCBPressBooster {
	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	function __construct() {
		// Register site styles and scripts
		add_action( 'wp_enqueue_scripts', array( $this, 'register_plugin_styles' ) );
		
		// Check for API Settings
	    if ( function_exists('ccbpress_is_api_connected') && ccbpress_is_api_connected() ) {
			// Load the shortcodes
			include_once( plugin_dir_path( __FILE__ ) . 'lib/shortcodes/group_info.php' );
        } else {
	        //add_action( 'admin_notices', 'ccbpress_show_api_setting_warning' );
        }

		// Show a warning if the license is not active
		if ( get_option( 'ccbpress_license_status' ) != 'valid' ) {
			//add_action( 'admin_notices', 'ccbpress_show_license_warning' );
		}
	} // end constructor

	/**
	 * Registers and enqueues plugin-specific styles.
	 */
	public function register_plugin_styles() {
		// Register our normal styles
		wp_enqueue_style( 'ccbpress-booster', plugins_url( 'css/display.css', __FILE__ ), array( 'dashicons' ) );

	} // end register_plugin_styles

} // end class

?>
