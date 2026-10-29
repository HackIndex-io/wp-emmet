=== WP Emmet (HackIndex Patched) ===
Contributors: rewish, joshuavanderpoll
Tags: emmet, zen-coding, editor, post, plugin, coding
Requires at least: 4.0
Tested up to: 7.1
Stable tag: 0.3.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Emmet (ex-Zen Coding) for WordPress. (HackIndex Patched)

== Description ==

= HackIndex Patched fork =
This is an unofficial fork of WP Emmet by rewish. The original plugin is no longer maintained and its latest release (0.3.4) has known vulnerabilities ([CVE-2025-15658](https://www.wordfence.com/threat-intel/vulnerabilities/id/2b49897d-ebf5-4ac3-99c0-fa5e90818673), [CVE-2025-49894](https://www.wordfence.com/threat-intel/vulnerabilities/id/d34936af-f3a4-414d-ad71-7ad3af6feed4)). HackIndex maintains this fork for security fixes only.

* We fix security issues and keep the plugin working on current WordPress and PHP versions. We do not add features or change how the plugin works.
* It is a drop-in replacement: same plugin folder and settings, so your Emmet options are kept.
* HackIndex is not affiliated with or endorsed by rewish. Please do not contact the original author for support with this fork, open an issue on the fork instead.
* Original plugin: [WordPress.org](https://wordpress.org/plugins/wp-emmet/) and [GitHub](https://github.com/rewish/wp-emmet) by rewish.
* HackIndex fork and issues: [github.com/HackIndex-io/wp-emmet](https://github.com/HackIndex-io/wp-emmet)
* Licensed under the GPLv2 or later, like the original, and provided without any warranty.

Do you want to use the [Emmet](http://emmet.io/) in admin page? This plugin will support it!

[Fork me on GitHub](https://github.com/rewish/wp-emmet) :)

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `wp-emmet` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. The Emmet is available in admin page

== Changelog ==

= 0.3.5 =
* Security: fixed Administrator+ stored Cross-Site Scripting ([CVE-2025-15658](https://www.cve.org/CVERecord?id=CVE-2025-15658), [Wordfence advisory](https://www.wordfence.com/threat-intel/vulnerabilities/id/2b49897d-ebf5-4ac3-99c0-fa5e90818673); [CVE-2025-49894](https://www.cve.org/CVERecord?id=CVE-2025-49894), [Wordfence advisory](https://www.wordfence.com/threat-intel/vulnerabilities/id/d34936af-f3a4-414d-ad71-7ad3af6feed4)) by escaping the editor style, profile and shortcut settings in the inline style and scripts on every admin page
* Security: escaped all values on the settings page (indent character, editor style, shortcut names and keys, select options)
* Security: the editor settings are now encoded with JSON_HEX_TAG in the inline script
* Tested with WordPress 7.1 and PHP 8.0 to 8.5

= 0.3.4 =
* Fix a broken editor in the edit comment page

= 0.3.3 =
* Bug fix for iOS

= 0.3.2 =
* Run the adapter in the jQuery.ready()

= 0.3.1 =
* Supports text-count
* Fix a bug of media insertion in the Visual Editor
* Fix textarea height and toolbar position

= 0.3 =
* Fixes for WordPress 4.0
* Raise the requires version to 4.0

= 0.2.6 =
* Add filter (`wp_emmet_is_in_scope`)

= 0.2.5 =
* Add others scope

= 0.2.4 =
* Add the Scope option

= 0.2.3 =
* Add option of editor style

= 0.2.2 =
* Fix a bug of shortcuts that occurs when `enable` the Code coloring

= 0.2.1 =
* Fix localization doesn't works
* Fix save on fullscreen mode doesn't works

= 0.2 =
* Support the Code coloring by [CodeMirror](http://codemirror.net/)

= 0.1.2 =
* Fix "Add Media" button doesn't works

= 0.1.1 =
* Update emmet.js
* Fix a bug that occurs when Options is not set

= 0.1 =
* Initial release
