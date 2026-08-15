<?php
/**
 * Plugin Name: Juliepr Disable XML-RPC
 * Description: Disables all XML-RPC methods, including pingbacks.
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Author: Sergei Ashmarin
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: juliepr-disable-xmlrpc
 *
 * @package Juliepr\DisableXmlRpc
 */

declare( strict_types=1 );

namespace Juliepr\DisableXmlRpc;

defined( 'ABSPATH' ) || exit;

/**
 * Prevents XML-RPC authentication and removes every XML-RPC method.
 */
final class XmlRpcDisabler {

	/**
	 * Disables XML-RPC authentication.
	 *
	 * @param bool $enabled Whether XML-RPC authentication is enabled.
	 * @return bool Always false.
	 */
	public static function disable_authentication( bool $enabled ): bool {
		return false;
	}

	/**
	 * Removes all XML-RPC methods, including pingbacks.
	 *
	 * @param array<string, callable> $methods Registered XML-RPC methods.
	 * @return array<string, callable> An empty method list.
	 */
	public static function remove_methods( array $methods ): array {
		return array();
	}
}

add_filter( 'xmlrpc_enabled', array( XmlRpcDisabler::class, 'disable_authentication' ) );
add_filter( 'xmlrpc_methods', array( XmlRpcDisabler::class, 'remove_methods' ) );
