# CCBPress Booster

## Description ##

This is an extension to the CCBPress Plugin that adds an additional shortcode 
for pulling group_info.  This was specifically developed for the purpose of 
having group information span the entire page and not be constrainted to a 
widget in a sidebar.

## Installation ##

### Using The WordPress Dashboard ###

1. Navigate to the 'Add New' Plugin Dashboard
2. Select 'ccbpress-booster.zip' from your computer
3. Upload
4. Activate the plugin on the WordPress Plugin Dashboard

### Using FTP ###

1. Extract 'ccbpress-booster.zip' to your computer
2. Upload the contents of the 'ccbpress' directory to your 'wp-content/plugins/ccbpress-booster' directory
3. Activate the plugin on the WordPress Plugin Dashboard

## Usage ##

`[ccbpress_group_info group_id=<group_id>]`

Below are a list of attributes accepted by the shortcode.

* `group_id` (integer) The identifier of the CCB Group to pull information for.
* `group_name` (string) Valid values: show or hide.  *Defaults to 'show'*
* `group_description` (string) Valid values: show or hide.  *Defaults to 'show'*
* `group_image` (string) Valid values: show or hide.  *Defaults to 'show'*
* `registration_forms` (string) Valid values: show or hide.  *Defaults to 'hide'*
* `main_leader` (string) Valid values: show or hide.  *Defaults to 'show'*
* `email_address` (string) Valid values: show or hide.  *Defaults to 'show'*
* `phone_number` (string) Valid values: show or hide.  *Defaults to 'hide'*
