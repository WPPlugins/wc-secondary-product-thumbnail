# Changelog

## 1.2
* Feature - Reveal the last image in product gallery instead of the first image by using: add_filter( 'wcspt_reveal_last_img', '__return_true' );
* Tweak - Better animation timing
* Tweak - Further improve themes compatibility
* Dev - Removed 'wc_secondary_product_thumbnail_styles' filter hook

## 1.1.2
* Minor CSS improvements

## 1.1.1
* Use minified CSS & JS files rather than the non-minified versions, if SCRIPT_DEBUG is not turned on

## 1.1
* Animations now use CSS3 transitions for smoother animation effect
* Fallback to jQuery's .animate() in legacy browsers (e.g. IE 8-9)
* Improved performance

## 1.0.4
* Tested with WordPress 4.6 and WooCommerce 2.6
* Replace deprecated jQuery(document).ready(function) with jQuery(function)

## 1.0.3
* Fix a fatal error when $product->get_gallery_attachment_ids() is called on some themes.
* Cleanup code.

## 1.0.2
* Minor CSS fixes.

## 1.0.1
* Fix secondary thumbnail opacity issue on some themes.

## 1.0
* Initial version.