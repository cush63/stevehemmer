<?php
/*
Plugin Name: This post module
Plugin URI: http://premium.wpmudev.org/project/upfront
Description: Complex Upfront module 1
Version: 0.1
Text Domain: usearch
Author: Ve Bailovity (Incsub)
Author URI: http://premium.wpmudev.org

Copyright 2009-2011 Incsub (http://incsub.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License (Version 2 - GPLv2) as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/


/**
 * This is the entity entry point, where we inform Upfront of our existence.
 */
function this_post_initialize () {

	// Include the backend support stuff
	require_once (dirname(__FILE__) . '/lib/this_post.php');

	require_once (dirname(__FILE__) . '/lib/class_upfront_the_post_presets_server.php');

	// Add element defaults to data object
	add_action('upfront_data', array('Upfront_ThisPostView', 'add_js_defaults'));

	// Expose our JavaScript definitions to the Upfront API
	upfront_add_layout_editor_entity('this_post', upfront_relative_element_url('js/this_post', __FILE__));

	add_filter('upfront_l10n', array('Upfront_ThisPostView', 'add_l10n_strings'));

	// Define fallback selectors, if nothing else got in
	add_action('upfront_post_selectors', array('Upfront_ThisPostView', 'add_fallback_selectors'), 999); // <-- register late

}
// Initialize the entity when Upfront is good and ready
add_action('upfront-core-initialized', 'this_post_initialize');