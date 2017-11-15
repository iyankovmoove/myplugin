<?php
/*
Plugin Name:       MyPlugin
Description:       This is an example plugin build for wordpress
Plugin URI:
Contributors:
Author:            Ivan Yankov
Author URI:
Donate link:
Tags:              example, boilerplate
Version:           1.0
Stable tag:        1.0
Requires at least: 4.5
Tested up to:      4.8
Text Domain:       myplugin
Domain Path:       /languages
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/


if ( ! defined('ABSPATH') ) {
    exit;
}

//including files from admin
require_once plugin_dir_path(__FILE__ ) . 'admin/admin-menu.php';
require_once  plugin_dir_path(__FILE__ ) . 'admin/settings-page.php';