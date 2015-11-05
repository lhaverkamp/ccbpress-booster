<?php
if( !function_exists( 'ccbpress_group_info_shortcode' )) {
	function ccbpress_group_info_shortcode( $atts, $content = '' ) {
		global $ccbpress_ccb;
	
		$atts = shortcode_atts( array(
			'group_id'				=> NULL,
			'group_name'			=> 'show',
			'group_image'			=> 'show',
			'group_description'		=> 'show',
			'registration_forms'	=> 'hide',
			'main_leader'			=> 'show',
			'email_address'			=> 'show',
			'phone_number'			=> 'hide',
		), $atts );
		
		// Build the query to get the data from CCB
		$args = array(
			'id' => $atts['group_id']
		);
		$ccbpress_data = $ccbpress_ccb->group_profile_from_id( $args );
		
		// Define the array to hold all found group
		$group = array();
		$group = $ccbpress_data->response->groups->group;
		$group_id = (string) $group['id'];
		
		// Get the cached group image
		$group->image = $ccbpress_ccb->get_image( $group_id, 'group' );
		
		// Get their profile image from their user profile
		$group_main_leader_profile = ccbpress_get_individual_profile((string)$group->main_leader['id']);
		$group->main_leader->image = $group_main_leader_profile->response->individuals->individual->image;
		
		// Set the values passed from the shortcode options
		$group->widget_options->show_group_name					= $atts['group_name'];
		$group->widget_options->show_group_image				= $atts['group_image'];
		$group->widget_options->show_group_description			= $atts['group_description'];
		$group->widget_options->show_group_leader				= $atts['main_leader'];
		$group->widget_options->show_group_leader_email			= $atts['email_address'];
		$group->widget_options->show_group_leader_phone_numbers	= $atts['phone_number'];
		$group->widget_options->show_group_registration_forms	= $atts['registration_form'];
		
		return apply_filters( 'ccbpress_group_info_widget', $group );
	}
}

if( !shortcode_exists( 'ccbpress_group_info_shortcode' )) {
	add_shortcode( 'ccbpress_group_info', 'ccbpress_group_info_shortcode' );
}
?>
