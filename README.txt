=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: http://viewup.com.br/
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Vivus SVG Animation for WordPress

== Description ==

This plugin allows SVG animation by adding an CSS class.

To use this plugin, add the `animate-svg` class to an `svg` element. The element need to be:
* an SVG element (`<svg></svg>`)
* an OBJECT element (`<object type="image/svg+xml" data="link/to/my.svg"></object>`)

== Installation ==

1. Upload `vivus-svg` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How i enable an animation? =

Add the `animate-svg` class to an SVG element

= The animation isn't working... =

Make sure the element is an SVG (maybe it's an IMG?). To support IMG install the SVG plugin support and follow their instructions.

== Changelog ==

= 1.0 =
* Initial version.