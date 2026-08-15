=== Disable XML-RPC ===
Contributors: juliepr
Tags: xml-rpc, xmlrpc, security, pingback
Requires at least: 6.0
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Disables all WordPress XML-RPC methods, including pingbacks.

== Description ==

This plugin disables XML-RPC authentication and removes every registered XML-RPC method. It has no settings and no effect on the WordPress REST API.

== Installation ==

1. Upload the `disable-xml-rpc` directory to `/wp-content/plugins/`, or install the plugin through the WordPress admin.
2. Activate **Disable XML-RPC** from the Plugins screen.

== Frequently Asked Questions ==

= Does this disable the REST API? =

No. The plugin affects XML-RPC only.

= What integrations are affected? =

Any app, service, or feature that uses XML-RPC, including the WordPress mobile app when configured for XML-RPC, will stop working. Use the REST API where supported.

== Changelog ==

= 1.0.0 =

* Initial release.
