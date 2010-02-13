=== ImageRotate ===
Contributors: LWille
Donate link: 
Tags: images
Requires at least: 2.0.2
Tested up to: 2.9.1
Stable tag: trunk

Alternative implementation of GD's imagerotate() function.


== Description ==

The php5-gd library on some Debian hosts doesn't include imagerotate() due to memory leaks.

If you notice that rotating images does not work in your image editor, just install this plugin to supply an alternative imagerotate() function.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `imagerotate.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==
= 1.0 =
First working version

== Upgrade Notice ==

`<?php code(); // goes in backticks ?>`