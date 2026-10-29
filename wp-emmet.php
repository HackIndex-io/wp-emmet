<?php
/*
Plugin Name: WP Emmet (HackIndex Patched)
Plugin URI: https://github.com/rewish/wp-emmet
Description: Emmet (ex-Zen Coding) for WordPress. (HackIndex Patched)
Version: 0.3.5
Author: rewish
Author URI: https://github.com/rewish
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Modified by HackIndex on 2026-10-29: security fixes. Fork of https://github.com/rewish/wp-emmet
*/
require_once dirname(__FILE__) . '/WP/Emmet.php';

define('WP_EMMET_DOMAIN', 'wp-emmet');
define('WP_EMMET_DIR', WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . basename(dirname(__FILE__)));
define('WP_EMMET_FILE', WP_EMMET_DIR . DIRECTORY_SEPARATOR . basename(__FILE__));
define('WP_EMMET_LANG_DIR', WP_EMMET_DIR . DIRECTORY_SEPARATOR . 'langs');
define('WP_EMMET_VIEW_DIR', WP_EMMET_DIR . DIRECTORY_SEPARATOR . 'views');

$wp_emmet = new WP_Emmet();
