# Evaluate WordPress Shortcode In Mailings (au.com.agileware.evaluatewpshortcode)

This is a [CiviCRM](https://civicrm.org) extension for CiviCRM installations running on
[WordPress](https://wordpress.org) which enables WordPress shortcodes to be used in CiviCRM
mailings, including CiviCRM mailings created using the Mosaico editor.

Normally, if you type a WordPress shortcode (e.g. `[my_shortcode]`) into the body of a CiviCRM
mailing, it is sent to recipients as literal text — CiviCRM has no knowledge of WordPress
shortcodes and does not evaluate them. This extension solves that problem by evaluating any
WordPress shortcodes present in a mailing's HTML content at send time, and replacing them with
the output the shortcode generates, exactly as WordPress would when rendering a post or page.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Usage

Insert a WordPress shortcode into the HTML content of a CiviCRM mailing using the same notation
you would use in WordPress, for example `[my_shortcode attribute="value"]`.

When the mailing is sent, the extension evaluates the shortcode (via WordPress's `do_shortcode()`
function) and inserts the resulting output into the mailing in place of the shortcode text. This
happens automatically for every mailing — there is nothing to enable or configure per-mailing.

Any shortcode registered with WordPress — whether from WordPress core, a theme, or a plugin — can
be used, provided it produces output that is appropriate to include in an email (shortcodes that
depend on the current page request, logged-in user, or browser-side JavaScript/CSS may not behave
as expected in an email context).

## Special configuration requirements

None. The extension has no settings page, and requires no API keys, credentials, or one-time
setup. Once installed and enabled, it automatically evaluates WordPress shortcodes in the HTML
content of every CiviCRM mailing.

## Requirements

* CiviCRM 5.51+
* CiviCRM running on WordPress (the extension has no effect if `do_shortcode()` is not available,
  e.g. on Drupal or Backdrop installations of CiviCRM)

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin
Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

## About the Authors

Evaluate WordPress Shortcode In Mailings was developed by the team at
[Agileware](https://agileware.com.au).

[Agileware](https://agileware.com.au) provide a range of CiviCRM services including:

  * CiviCRM migration
  * CiviCRM integration
  * CiviCRM extension development
  * CiviCRM support
  * CiviCRM hosting
  * CiviCRM remote training services

Support your Australian [CiviCRM](https://civicrm.org) developers, [contact Agileware](https://agileware.com.au/contact) today!

![Agileware](logo/agileware-logo.png)
