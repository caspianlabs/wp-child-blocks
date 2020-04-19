<?php
/**
 * WP Child Blocks
 *
 * @package WPChildBlocks
 * @author Caspian Labs
 * @copyright 2020 Caspian Labs
 * @license GPL-3.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: WP Child Blocks
 * Plugin URI: https://github.com/caspianlabs/wp-child-blocks
 * Description: Insert Child Pages using the Block Editor.
 * Version: 0.0.1
 * Requires at least: 5.4
 * Requires PHP: 7.3
 * Author: Caspian Labs
 * Author URI: https://caspianlabs.org
 * License: GPL v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * WP Child Blocks is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * WP Child Blocks is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with WP Child Blocks. If not, see
 * https://www.gnu.org/licenses/gpl-3.0.en.html.
 */

/**
 * Activate WP Child Blocks
 */
function clwpcb_activate()
{
}

register_activation_hook(__FILE__, 'clwpcb_activate');

/**
 * Deactivation hook.
 */
function clwpcb_deactivate()
{
}

register_deactivation_hook(__FILE__, 'clwpcb_deactivate');

/**
 * Uninstall hook.
 */
function clwpcb_uninstall()
{
}

register_uninstall_hook(__FILE__, 'clwpcb_uninstall');
