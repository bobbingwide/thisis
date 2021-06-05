=== thisis ===
Contributors: bobbingwide, vsgloik
Donate link: https://www.oik-plugins.com/oik/oik-donate/
Tags: blocks, FSE, Gutenberg, Full Site Editing
Requires at least: 5.7
Tested up to: 5.7.2
Version: 0.9.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

ThisIs... - experimental Full Site Editing

== Description ==
ThisIs... an experimental theme attempting to implement Full Site Editing (FSE) with Gutenberg blocks.

Its original purpose was to help prepare "A guide to Full Site Editing, blocks and themes".

The live demo site for the theme is https://sneak-peek.me 

Requirements:

1. Implement Full Site Editing
2. Similar look and feel as wordpress.org, originally
3. but suitable for using in a self guided presentation 
4. to enable documentation of Full Site Editing resources
5. Minimal PHP and CSS
6. Partly completed theme.json
7. Templates and template parts to be provided 
8. Additional templates and parts provided as patterns
9. Use block plugins for functionality not yet supported
10. or shortcodes when blocks are not yet available.


=== Contents: ===

IMPLEMENTED:

The `block-templates` developed so far are:

* 404.html -
* archive.html - 
* attachment.html -
* category-faqs.html
* category-fse-is.html
* featured-image-left.html
* front-page.html -
* full-width.html -
* index.htm - 
* index.html -
* output-input.html -
* page.htm -
* page.html -
* page-2.html - custom template for post ID 2
* page-template-hierarchy.html - custom template for template-hierarchy
* search.html
* single-post.htm -
* single-post.html - 


The `block-template-parts` are:

* 404.html -
* abandoned-footer.htm
* attachment-image.html
* body-only.html
* call-#5-query-quest.htm
* category-tag-clouds.html 
* contents-shortcode.html - part of output-input
* footer.html
* header.htm
* header.html
* latest-posts.html
* main-body.htm
* main-body.html
* page-tree.html
* post-footer-stuff.html
* previous-next.html
* query-pagination.html
* quixote.htm
* single-post-fields.html
* zzz.html

SAMPLES:


The files provided as samples have a file extension of  `.htm`.
These can be loaded as patterns using the experimental oik-patterns plugin. 

=== ASSETS: Only in the GitHub version ===

assets/featured-images

Some photos used when creating content, logo(s) and favicon.

The template visualization was copied from: https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png


assets/imagine

A series of screenshots taken for the new "This is Full Site Editing..." video.
- Taken with Gutenberg 10.5.3
- During the development of v0.3.0
- Used in a the "ThisIs... Full Site Editing" video on YouTube. 

https://www.youtube.com/watch?v=xT5GOjSEOPg

assets/screenshots

A series of screenshots taken at different stages of the theme's development.
- Taken with Gutenberg 10.4.1
- During the development of v0.1.0 and v0.2.0
- Used in a short introductory video.
- The prototype video is on YouTube.

== Installation ==

* Either install Gutenberg 10.4.1 or higher from wordpress.org 
* or install the Gutenberg nightly version of the plugin
* or install and build the latest Gutenberg source.
* Activate Gutenberg.
* Install and activate the thisis theme, as you would install any other theme. Full Site Editing will be enabled automatically.
* Install and activate any pre-requisite plugins.

== Change Log ==
= 0.9.1 =
* Changed: Make latest-posts full width, with a featured image below the date and spacer at the top. Issue #32 
* Tested: With Gutenberg 10.7.1 and nightly build 10.8.0.20210601 

= 0.9.0 = 
* Changed: Enable custom color for core/paragraph
* Changed: Update thisis_render_block_core_template_part to more closely match gutenberg's version, incl. the docblocks for do_action.
* Changed: Replace custom HTML div WP_DEBUG with oik-sb/sb-debug-block. Issue #11
* Changed: Add page list inside a vertical navigation block. Issue #32
* Changed: Update for Gutenberg 10.7. Issue #32
* Changed: Add demo template parts - reflecting changes made during the presentation on 19th May then undone
* Tested: With WordPress 5.7.2 and WordPress Multi Site
* Tested: With Gutenberg 10.7.1

= 0.8.0 = 
* Changed: Serve footer images from sneak-peek.me. Add spacer above vertical menus
* Changed: Add 'rendering_template_part' action for new debug div solution,[#11](https://github.com/bobbingwide/thisis/issues/11)
* Changed: Implement tag-cloud block override using Additional CSS class name of number-nnn.,[#31](https://github.com/bobbingwide/thisis/issues/31)
* Fixed: Move curly braces to fix semantics.,[#30](https://github.com/bobbingwide/thisis/issues/30)
* Tested: With WordPress 5.7.2 and WordPress Multi Site
* Tested: With Gutenberg 10.6.0


= 0.7.0 = 
* Changed: Set background colour to get a white background in the Site editor
* Changed: Failed attempt to style the table using theme.json
* Changed: Reduce font size for Copyright text
* Changed: Remove unnecessary code for [post-edit] shortcode, replaced by oik-sb/sb-post-edit-block,[#29](https://github.com/bobbingwide/thisis/issues/29)
* Changed: Replace [guts] shortcode by oik-bbw/wp block,[#27](https://github.com/bobbingwide/thisis/issues/27)
* Fixed: Remove unwanted ss
* Tested: With WordPress 5.7.1 and WordPress Multi Site
* Tested: With Gutenberg 10.6.0

= 0.6.1 = 
* Added: Add theme.json for Gutenberg 10.6.0-rc.1,[#23](https://github.com/bobbingwide/thisis/issues/23]

= 0.6.0 = 
* Added: Add post-meta-inline template part to display in single-post template,[#27]((https://github.com/bobbingwide/thisis/issues/27)
* Changed: Support Gutenberg 10.6 - post_terms block replaces post-tags and post-hierarchical-terms,[#23](https://github.com/bobbingwide/thisis/issues/23)
* Changed: Template part renames and add category-tag-clouds to most templates,[#26](https://github.com/bobbingwide/thisis/issues/26)
* Fixed: Correct About & Contact links,[#18](https://github.com/bobbingwide/thisis/issues/18)
* Fixed: Different message when slug attribute is not set,[#6](https://github.com/bobbingwide/thisis/issues/6)
* Tested: With Gutenberg 10.6.0-rc.1 and 10.5.4 

= 0.5.0 = 
* Added: Custom templates,[#14](https://github.com/bobbingwide/thisis/issues/14)
* Added: Query block override to order by rand,[#24](https://github.com/bobbingwide/thisis/issues/14)
* Added: Add image for the template editor with top toolbar on a second line
* Added: Add customTemplates prior to refactoring to theme.json version 1,[#24](https://github.com/bobbingwide/thisis/issues/24)
* Changed: wp_global_styles.json may contain the right way to set padding,[#6](https://github.com/bobbingwide/thisis/issues/6)
* Tested: With Gutenberg 10.5.4

= 0.4.0 = 
* Added: Add Search template,[github bobbingwide thisis issues 20]
* Added: Add category template for FSE is... posts,[github bobbingwide thisis issues 19]
* Added: Add first version of a template to display FAQs,[github bobbingwide thisis issues 15]
* Added: Implement navigation menu overrides to replace hardcoded links,[github bobbingwide thisis issues 18]
* Changed: Add more screen captures for the website
* Changed: Moved many images to assets so they're not in the runtime zip,[github bobbingwide thisis issues 21]
* Changed: Re-enable links in the header template part,[github bobbingwide thisis issues 18]
* Changed: Re-enable the template-part template part for the index template
* Changed: Reset featured image to the default content width
* Changed: Update footer template part menu and new images,[[github bobbingwide thisis issues 21]

= 0.3.0 =
* Added: Add 404 template,[github bobbingwide thisis issues 17]
* Added: Add front-page template,[github bobbingwide thisis issues 1]
* Added: Add new screenshots for the FSE is 'imagine' video slideshow,[github bobbingwide thisis issues 1]
* Added: Add post-footer-stuff ( just Copyright at present ) to each template,[github bobbingwide thisis issues 1]
* Added: Add template parts required by single-post template,[github bobbingwide thisis issues 1]
* Added: Add the featured image for 'FSE is FREE'
* Changed: Add latest posts to the front page template
* Changed: Improve page template
* Changed: Improve sidebar for page template
* Changed: Lower the required PHP version to 7.3 for SiteGround hosting
* Changed: Reduce padding on the attachment template's post title,[github bobbingwide thisis issues 10]
* Changed: Support responsive-embeds for full width YouTube videos,[github bobbingwide thisis issues 16]
* Tested: With Gutenberg 10.5.3

= 0.2.0 = 
* Added: Add some images for the footer with Mrs Eames font - including a new proposal for a motto
* Added: Deliver templates and template parts as normal .html files,[github bobbingwide thisis issues 9]
* Added: Screenshots and images
* Added: Templates: archive, 
* Added: attachment template,[github bobbingwide thisis issues 10]
* Changed: Added debug divs and CSS styling,[github bobbingwide thisis issues 11]
* Changed: Styling that could not be applied using Global styles,[github bobbingwide thisis issues 5]
* Fixed: screenshot should have been a .png file
* Tested: With Gutenberg 10.4.2
* Tested: With WordPress 5.7.1 and WordPress Multi Site
* Tested: With PHP 8.0, requires PHP 7.3

= 0.1.0 =
* Added: Add intermediate files as potential patterns,[github bobbingwide thisis issues 1]
* Added: Add some Fuzzy Duck images to use in examples
* Added: Start populating experimental-theme.json with: color palette, font families and sizes, normal and wide width, etc,[github bobbingwide thisis issues 5]
* Changed: Override browser default margin; reduce to 0px.,[github bobbingwide thisis issues 5]
* Changed: Add new logo,[github bobbingwide thisis issues 1]
* Changed: Need to enqueue style.css and add featured image support,[github bobbingwide thisis issues 4]
* Changed: Override styling to remove unwanted vertical white space between blocks,[github bobbingwide thisis issues 6]
* Changed: override template-part.php to not call wpautop(),[github bobbingwide thisis issues 6]
* Tested: With Gutenberg 10.4.1
* Tested: With PHP 8.0
* Tested: With WordPress 5.7.1 and WordPress Multi Site

= 0.0.0 =
* Added: This is... probably the minimum mandatory content for an experimental FSE theme with Gutenberg 10.4.1,[github bobbingwide thisis issues 2]


== Block overrides ==
thisis may contain a number of overrides to Gutenberg server rendered blocks which didn't behave the way I expected.
These overrides should continue to work even when the PRs to fix the bugs have been implemented.

These overrides may have been copied / cobbled from Fizzie and/or SB.

* core/template-part - does not call `wpautop()`
* core/navigation-link - changes hardcoded `https://s.b/wp55/thisis` to site_url()
* query-loop - Adds support for orderby=rand

== References ==

- [sneak-peek.me - ThisIs... Full Site Editing](https://sneak-peek.me)

See my articles on herbmiller.me:

- [Localization of Full Site Editing themes](https://herbmiller.me/localization-of-full-site-editing-themes/)
- [Fizzie - an experimental Full Site Editing theme](https://herbmiller.me/fizzie-an-experimental-full-site-editing-theme/)

For other articles see the [Fizzie theme's readme](https://github.com/bobbingwide/fizzie/blob/main/README.md)

For some other FSE themes see [WP-a2z FSE themes](https://blocks.wp-a2z.org/oik-themes)

== Brief development history ==
ThisIs... is my third attempt to develop a theme using Full Site Editing.
It's the first one where I tried to use the Site Editor to build the theme.

Some of the templates and template parts that I built are exported to `.htm` files.
Since the file extensions are not `.html` then these files will not be found by the
Site Editor until manually renamed.

Once again I've found the need to use shortcodes in some template parts.
The plugins upon which the template parts are dependent are:

- oik 
- oik-css
- oik-fields
- sb-breadcrumbs-block
- sb-children-block
- sb-post-edit-block
- sb-prevnext-block
- Yoast SEO - used by sb-breadcrumbs-block

The following plugins are also used during development and cloning to the live site.
- oik-bwtrace
- oik-clone
- oik-patterns
- oik-types


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