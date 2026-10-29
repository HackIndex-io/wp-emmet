# WP Emmet (HackIndex Patched)

> [!IMPORTANT]
> This is an unofficial fork of [WP Emmet](https://wordpress.org/plugins/wp-emmet/) by [rewish](https://github.com/rewish/wp-emmet). HackIndex is not affiliated with or endorsed by the original author.

The original plugin is no longer maintained and its latest release (0.3.4) has known vulnerabilities ([CVE-2025-15658](https://www.wordfence.com/threat-intel/vulnerabilities/id/2b49897d-ebf5-4ac3-99c0-fa5e90818673), [CVE-2025-49894](https://www.wordfence.com/threat-intel/vulnerabilities/id/d34936af-f3a4-414d-ad71-7ad3af6feed4)). HackIndex maintains this fork for security fixes only:

- We fix security issues and keep the plugin working on current WordPress and PHP versions.
- We do not add features or change how the plugin works.
- It is a drop-in replacement: same plugin folder and option name, so your Emmet settings are kept.

Need help with this fork? [Open an issue](https://github.com/HackIndex-io/wp-emmet/issues) here, please don't contact the original author about it.

## What it does

Adds [Emmet](https://emmet.io/) abbreviations and shortcuts to the textareas in the WordPress admin (post editor, theme and plugin editor and others), with optional code coloring by CodeMirror. Settings are under **Settings > Emmet**.

## Security fixes

### 0.3.5

- Administrator+ stored Cross-Site Scripting ([CVE-2025-15658](https://www.cve.org/CVERecord?id=CVE-2025-15658), [Wordfence advisory](https://www.wordfence.com/threat-intel/vulnerabilities/id/2b49897d-ebf5-4ac3-99c0-fa5e90818673); [CVE-2025-49894](https://www.cve.org/CVERecord?id=CVE-2025-49894), [Wordfence advisory](https://www.wordfence.com/threat-intel/vulnerabilities/id/d34936af-f3a4-414d-ad71-7ad3af6feed4)): the editor style, profile and shortcut settings were printed unescaped in an inline `<style>` and `<script>` on every admin page, so an administrator without `unfiltered_html` (multisite, or `DISALLOW_UNFILTERED_HTML`) could run scripts in the browser of other users, including super admins. These values are now escaped for their context, which also neutralizes settings that were stored before the update.
- All values on the settings page are escaped (indent character, editor style, shortcut names and keys, select options)
- The editor settings are encoded with `JSON_HEX_TAG` in the inline script
- Tested with WordPress 7.1 and PHP 8.0 to 8.5

## Install

1. Download `wp-emmet.zip` from the [latest release](https://github.com/HackIndex-io/wp-emmet/releases/latest).
2. Deactivate and delete the original plugin. Your settings are kept.
3. Upload the zip in **Plugins > Add New > Upload Plugin** and activate it.

WordPress does not update this fork automatically. Watch this repo's releases to get new security fixes.

## License

GPLv2 or later, like the original. See [LICENSE](LICENSE). Provided without any warranty. The bundled [CodeMirror](https://codemirror.net/) 3.14 and [Emmet](https://emmet.io/) scripts are MIT licensed.

All credit for the plugin goes to [rewish](https://github.com/rewish/wp-emmet). The full upstream history is kept in this repository.
