=== Google 404  ===
Contributors: dmchale
Tags: google, 404, error
Requires at least: 2.5
Tested up to: 4.2.1
Stable tag: 2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add Google search capabilities to your site's 404 "page not found" template.

== Description ==

**- This plugin has been adopted! Please review the description below. -**

A 404 page is what a user sees when they try to reach a non-existent page on your site (because they've clicked on a broken link, the page has been deleted or they've mistyped a URL).

While the standard 404 page can vary depending on your web host, it doesn't usually provide the user with much useful information and users may just surf away from your site. Therefore, Google recommend creating a custom 404 page that provides the user with more information about your site and its content.

The Google 404 widget is a quick and easy way to embed a search box on your custom 404 page and provide users with useful information designed to help them find the information they need. Where it can, the Google widget will also suggest other ways for the user to find the information they need, thus increasing the likelihood that they'll continue to explore your site.

For best results, you should set up a [Google webmaster account](http://www.google.com/webmasters/ "Google") and submit an XML sitemap of your blog to ensure the Google 404 widget works effectively.

Find out more [here...](https://support.google.com/webmasters/answer/136085)

= Features =

Currently the plugin outputs the Google 404 widget in US English by default, or tries to use the current WordPress language.
You can use the `google_404_language` filter to specify a different language code.

Also looking to add the possibility to [change the appearance](https://support.google.com/webmasters/answer/100044) of the widget.

= Please note =

The Google 404 widget plugin is NOT a WordPress widget.
It is simply the term Google use to describe their enhanced 404 page script.

= Adoption Story =

This plugin was originally developed by [Ben Huson](https://profiles.wordpress.org/husobj/) and was adopted in September 2014 thanks to the [adopt-me](https://wordpress.org/plugins/tags/adopt-me) tag.

= Coming Soon! =

The ability to customize the CSS from an options page within the WordPress Admin area, attempt to dynamically inject the Google search box without needing to modify your template files, and more!

== Installation ==

You should first set up a [Google webmaster account](http://www.google.com/webmasters/ "Google") and submit an XML sitemap of your site to ensure the Google 404 widget works effectively.

1. Download the archive file and uncompress it.
2. Put the "google-404" folder in "wp-content/plugins"
3. Enable in WordPress by visiting the "Plugins" menu and activating it.
4. Add the following code to your 404.php template.

`<?php if ( function_exists( 'google404' ) ) google404(); ?>`

You could also add this code to your theme's index.php, single.php, image.php, archive.php and search.php below the HTML that is displayed if no posts are present (where you insert this may vary from theme to theme).

You may also use the `google_404_styles` and `google_404_language` filters for manually overriding the CSS values or language used by the Google 404 widget.

== Frequently Asked Questions ==

Currently no FAQs.

== Screenshots ==

No Screenshots yet.

== Changelog ==

= 2.0 =
* Initial release after adoption.
* Updated docblock and readme file to remove adopt-me tag and reflect new ownership.
* Added blank index.php
* Added plugin icons for 4.0 support

= 1.1 =
* Added 'google_404_language' filter.
* Added 'google_404_styles' filter.

= 1.0.2 =
* Added GPL License info.
* Try to use current WordPress language before defaulting to English.
* Moved all functionality into class.
* Update styles.

= 1.0.1 =
* Added documentation to read me file.

= 1.0 =
* First release.

== Upgrade Notice ==

= 1.1 =
Added 'google_404_language' and 'google_404_styles' filters.

= 1.0.2 =
Try to use current WordPress language before defaulting to English.
