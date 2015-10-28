<?php
/**
 * @package   CCBPress Booster
 * @author    Laura Haverkamp <laura@haverkamp.us>
 * @link      http://bitbucket.org/lhaverkamp/CCBPressBooster
 * @copyright 2015
 *
 * @wordpress-plugin
 * Plugin Name: CCBPress Booster
 * Depends: CCBPress
 * Plugin URI: http://bitbucket.org/lhaverkamp/CCBPressBooster
 * Description: Display information from Church Community Builder on your WordPress site.
 * Version: 1.0.0
 * Author: Laura Haverkamp
 * Author Email: laura@haverkamp.us
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Include the CCBPressBooster class
require_once 'ccbpress-booster-class.php';

add_action( 'plugins_loaded', 'ccbpress_booster_loader' );
function ccbpress_booster_loader() {
	$ccbpress = new CCBPressBooster();
	
	register_activation_hook( __FILE__, array( 'CCBPressBooster', 'activate' ) );
	register_deactivation_hook( __FILE__, array( 'CCBPressBooster', 'deactivate' ) );
}

?>
