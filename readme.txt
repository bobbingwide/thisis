=== thisis ===
Contributors: bobbingwide, vsgloik
Donate link: https://www.oik-plugins.com/oik/oik-donate/
Tags: blocks, FSE, Gutenberg
Requires at least: 5.7
Tested up to: 5.7.1
Version: 0.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

ThisIs... - experimental Full Site Editing

== Description ==
ThisIs is an experimental theme attempting to implement Full Site Editing (FSE) with Gutenberg blocks.

Its original purpose was to help prepare "A guide to Full Site Editing, blocks and themes".

Requirements:
1. Implement Full Site Editing.
2. Similar look and feel as wordpress.org
3. To enable documentation of Full Site Editing resources.
4. Minimal PHP and CSS.
5. Partly completed experimental-theme.json.
6. Templates and template parts to be provided as samples.

Contents:

IMPLEMENTED:

The `block-templates` developed so far are:

* index.html - completely empty template

The `block-template-parts` are:

* None delivered

SAMPLES:


The files provided as samples have a file extension of  `.htm`.


SCREENSHOTS:

A series of screenshots taken at different stages of the theme's development.
These are intended to be used in a short video.

IMAGES:

Some photos used when creating content.

See the template visualization: https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png

== Installation ==

* Install and activate pre-requisite plugins.
* Either install Gutenberg 10.4.1 or higher or install and build the latest Gutenberg source.
* Activate Gutenberg.
* Install and activate the thisis theme, as you would install any other theme. Full Site Editing will be enabled automatically.


== Change Log ==
= 0.1.0 =
* Tested: With Gutenberg 10.4.1
* Tested: With WordPress 5.7.1 and WordPress Multi Site
* Tested: With PHP 8.0

= 0.0.0 =
* Added:

=== Block overrides ===
thisis may contain a number of overrides to Gutenberg server rendered blocks which didn't behave the way I expected.
These overrides should continue to work even when the PRs to fix the bugs have been implemented.

These overrides may have been copied / cobbled from Fizzie and SB.

* core/template-part - does not call `wpautop()`

== References ==
See my articles on herbmiller.me:

- [Localization of Full Site Editing themes](https://herbmiller.me/localization-of-full-site-editing-themes/)
- [Fizzie - an experimental Full Site Editing theme](https://herbmiller.me/fizzie-an-experimental-full-site-editing-theme/)

For other articles see the [Fizzie theme's readme](https://github.com/bobbingwide/fizzie/blob/main/README.md)

For some other FSE themes see [WP-a2z FSE themes](https://blocks.wp-a2z.org/oik-themes)

== Brief development history ==
thisis is my third attempt to develop a theme using Full Site Editing.
It's the first one where I tried to use the Site Editor to build the theme.
Some of the templates and template parts that I build are exported to `.htm` files.
Since the file extensions are not `.html` then these files will not be found by the
Site Editor until manually renamed.

== Copyright ==
(C) Copyright Herb Miller, Bobbing Wide 2021

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.