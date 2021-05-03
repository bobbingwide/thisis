# thisis 
![screenshot](https://raw.githubusercontent.com/bobbingwide/thisis/main/screenshot.png)
* Contributors: bobbingwide, vsgloik
* Donate link: https://www.oik-plugins.com/oik/oik-donate/
* Tags: blocks, FSE, Gutenberg, Full Site Editing
* Requires at least: 5.7
* Tested up to: 5.7.1
* Version: 0.1.0
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

ThisIs... - experimental Full Site Editing

## Description 
ThisIs... an experimental theme attempting to implement Full Site Editing (FSE) with Gutenberg blocks.

Its original purpose was to help prepare "A guide to Full Site Editing, blocks and themes".

Requirements:
1. Implement Full Site Editing
2. Similar look and feel as wordpress.org, originally
3. But suitable for using in a self guided presentation
4. To enable documentation of Full Site Editing resources
5. Minimal PHP and CSS
6. Partly completed experimental-theme.json
7. Templates and template parts to be provided
8. Additional templates and parts provided as patterns

Contents:

IMPLEMENTED:

The `block-templates` developed so far are:

* 404.html -
* archive.html -
* attachment.html -
* front-page.html
* index.htm -
* index.html -
* page.htm -
* page.html -
* single-post.htm -
* single-post.html -


The `block-template-parts` are:

* 404.html -
* abandoned-footer.htm
* attachment-image.html
* call-#5-query-quest.htm
* footer.html
* header.htm
* header.html
* main-body.htm
* main-body.html
* page-tree.html
* post-footer-stuff.html
* previous-next.html
* quixote.htm
* single-post-fields.html
* template-part-2.html
* template-part-3.html
* template-part.html


SAMPLES:


The files provided as samples have a file extension of  `.htm`.
These can be loaded as patterns using the experimental oik-patterns plugin.


SCREENSHOTS:

A series of screenshots taken at different stages of the theme's development.
- Taken with Gutenberg 10.4.1
- During the development of v0.1.0 and v0.2.0
- Used in a short introductory video.
- The prototype video is on YouTube.

ASSETS\IMAGES\IMAGINE:

A series of screenshots taken for the new "This is Full Site Editing..." video.
- Taken with Gutenberg 10.5.3
- During the development of v0.3.0
- Used in a better video on YouTube.

https://www.youtube.com/watch?v=xT5GOjSEOPg



IMAGES:

Some photos used when creating content, logo(s) and favicon.

* See the template visualization: https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png

## Installation 

* Either install Gutenberg 10.4.1 or higher from wordpress.org
* or install the Gutenberg nightly version of the plugin
* or install and build the latest Gutenberg source.
* Activate Gutenberg.
* Install and activate the thisis theme, as you would install any other theme. Full Site Editing will be enabled automatically.
* Install and activate any pre-requisite plugins.

## Change Log 
# 0.3.0 
* Added: Add 404 template,https://github.com/bobbingwide/thisis/issues/1
* Added: Add front-page template,https://github.com/bobbingwide/thisis/issues/1
* Added: Add new screenshots for the FSE is 'imagine' video slideshow,https://github.com/bobbingwide/thisis/issues/1
* Added: Add post-footer-stuff ( just Copyright at present ) to each template,https://github.com/bobbingwide/thisis/issues/1
* Added: Add template parts required by single-post template,https://github.com/bobbingwide/thisis/issues/1
* Added: Add the featured image for 'FSE is FREE'
* Changed: Add latest posts to the front page template
* Changed: Improve page template
* Changed: Improve sidebar for page template
* Changed: Lower the required PHP version to 7.3 for SiteGround hosting
* Changed: Reduce padding on the attachment template's post title,https://github.com/bobbingwide/thisis/issues/10
* Changed: Support responsive-embeds for full width YouTube videos,https://github.com/bobbingwide/thisis/issues/16
* Tested: With Gutenberg 10.5.3

# 0.2.0 
* Added: Add some images for the footer with Mrs Eames font - including a new proposal for a motto
* Added: Deliver templates and template parts as normal .html files,https://github.com/bobbingwide/thisis/issues/9
* Added: Screenshots and images
* Added: Templates: archive,
* Added: attachment template,https://github.com/bobbingwide/thisis/issues/10
* Changed: Added debug divs and CSS styling,https://github.com/bobbingwide/thisis/issues/11
* Changed: Styling that could not be applied using Global styles,https://github.com/bobbingwide/thisis/issues/5
* Fixed: screenshot should have been a .png file
* Tested: With Gutenberg 10.4.2
* Tested: With WordPress 5.7.1 and WordPress Multi Site
* Tested: With PHP 8.0, requires PHP 7.3

# 0.1.0 
* Added: Add intermediate files as potential patterns,https://github.com/bobbingwide/thisis/issues/1
* Added: Add some Fuzzy Duck images to use in examples
* Added: Start populating experimental-theme.json with: color palette, font families and sizes, normal and wide width, etc,https://github.com/bobbingwide/thisis/issues/5
* Changed: Override browser default margin; reduce to 0px.,https://github.com/bobbingwide/thisis/issues/5
* Changed: Add new logo,https://github.com/bobbingwide/thisis/issues/1
* Changed: Need to enqueue style.css and add featured image support,https://github.com/bobbingwide/thisis/issues/4
* Changed: Override styling to remove unwanted vertical white space between blocks,https://github.com/bobbingwide/thisis/issues/6
* Changed: override template-part.php to not call wpautop(),https://github.com/bobbingwide/thisis/issues/6
* Tested: With Gutenberg 10.4.1
* Tested: With PHP 8.0
* Tested: With WordPress 5.7.1 and WordPress Multi Site

# 0.0.0 
* Added: This is... probably the minimum mandatory content for an experimental FSE theme with Gutenberg 10.4.1,https://github.com/bobbingwide/thisis/issues/2


### Block overrides 
thisis may contain a number of overrides to Gutenberg server rendered blocks which didn't behave the way I expected.
These overrides should continue to work even when the PRs to fix the bugs have been implemented.

These overrides may have been copied / cobbled from Fizzie and SB.

* core/template-part - does not call `wpautop()`

## References 
See my articles on herbmiller.me:

- [Localization of Full Site Editing themes](https://herbmiller.me/localization-of-full-site-editing-themes/)
- [Fizzie - an experimental Full Site Editing theme](https://herbmiller.me/fizzie-an-experimental-full-site-editing-theme/)

For other articles see the [Fizzie theme's readme](https://github.com/bobbingwide/fizzie/blob/main/README.md)

For some other FSE themes see [WP-a2z FSE themes](https://blocks.wp-a2z.org/oik-themes)

## Brief development history 
ThisIs... is my third attempt to develop a theme using Full Site Editing.
It's the first one where I tried to use the Site Editor to build the theme.

Some of the templates and template parts that I build are exported to `.htm` files.
Since the file extensions are not `.html` then these files will not be found by the
Site Editor until manually renamed.

Once again I've found the need to use shortcodes in template parts.
The plugins upon which the template parts are dependent are:

- oik
- oik-fields
- sb-children-block
- sb-prevnext-block
- sb-breadcrumbs-block
- Yoast SEO

The following plugins are also used during development:
- oik-bwtrace
- oik-clone
- oik-types
- oik-patterns

## Copyright 
(C) Copyright Herb Miller, Bobbing Wide 2021

* This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
