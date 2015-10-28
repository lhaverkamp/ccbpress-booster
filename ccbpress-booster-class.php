<?php
class CCBPressBooster {

	/*--------------------------------------------*
	 * Constructor
	 *--------------------------------------------*/

	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	function __construct() {
        // Check for API Settings
	    if ( ccbpress_is_api_connected() ) {
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
} // end class
?>
