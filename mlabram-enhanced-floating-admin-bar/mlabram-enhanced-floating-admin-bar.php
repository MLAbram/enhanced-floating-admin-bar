<?php
/*
Plugin Name
@package            MLAbram - Enhanced Floating Admin Bar
@author             MLAbram
@copyright          2023 MLAbram
@License            GNU General Public License v3

@wordpress-plugin
Plugin Name:        MLAbram - Enhanced Floating Admin Bar
Plugin URI:         https://mlabram.com
Description:        Enhance the default WordPress floating admin bar.
Version:            1.0.1
Requires At Least:  5.0
Requires PHP:       7.0
Author:             MLAbram
Author URI:         https://mlabram.com
License:            GNU General Public License v3
License URI:        https://www.gnu.org/licenses/gpl-3.0.html
Text Domain:        mlabram-enhanced-floating-admin-bar
Domain Path:        /languages
Network:            true
Update URI:         mlabram-enhanced-floating-admin-bar
*/

/*
MLAbram - Enhanced Floating Admin Bar is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.

MLAbram - Enhanced Floating Admin Bar is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with MLAbram - Enhanced Floating Admin Bar. 
If not, see https://www.gnu.org/licenses/gpl-3.0.html.
*/

// create posts link in the floating admin bar
function mlabram_enhanced_floating_admin_bar_add_posts($admin_bar) {
	$args = array(
        'parent' => 'site-name',
	    'id' => 'posts',
        'title' => 'Posts', 
        'href' => '/wp-admin/edit.php'
    );
    $admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'mlabram_enhanced_floating_admin_bar_add_posts', 1998);

// create pages link in the floating admin bar
function mlabram_enhanced_floating_admin_bar_add_pages($admin_bar) {
    $args = array(
        'parent' => 'site-name',
	    'id' => 'pages',
        'title' => 'Pages', 
        'href' => '/wp-admin/edit.php?post_type=page'
    );
    $admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'mlabram_enhanced_floating_admin_bar_add_pages', 1999);
?>