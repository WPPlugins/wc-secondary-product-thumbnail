=== WC Secondary Product Thumbnail ===
Contributors: frosdqy
Donate link: https://www.thewebflash.com/donate/
Tags: woocommerce, thumbnail, secondary image, secondary thumbnail, product thumbnail, product image, hover effect, reveal, image flipper, front and back
Requires at least: 3.8
Tested up to: 4.7
Stable tag: 1.2
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Adds a hover effect that will reveal a secondary product thumbnail to product images in your WooCommerce store.

== Description ==

WC Secondary Product Thumbnail is a very simple plugin that adds a secondary product thumbnail on product archives that is revealed when you hover over the main product image.

This plugin is ideal if you'd like to display more than one image on product archives, and perfect if you want to display front and back images of clothing for example.

> When installed, just activate the plugin and you're good to go.

= Other Features by WCSPT =
* High-performance animations using CSS3 transitions
* Fallback to jQuery's .animate(), if needed
* Ultra lightweight
* Does not load its JavaScript and CSS, and also secondary thumbnails on mobile devices
* Works in IE8+ and all of the evergreen browsers
* Available on [GitHub](https://github.com/thewebflash/wc-secondary-product-thumbnail)

= Live Demo =
See WC Secondary Product Thumbnail in action [here](http://demo-wcspt.thewebflash.com/shop/).

= Control Which Image to Reveal on Hover =
You can either reveal the first image or the last image in product gallery. By default, the first image in product gallery will reveal on hover. If you would like to reveal the last image instead, add this line into your theme's functions.php file:

    add_filter( 'wcspt_reveal_last_img', '__return_true' );

= Need Help? =
Visit my [Contact page](https://www.thewebflash.com/contact/) to send your support request.


== Installation ==

1. In your WordPress Dashboard select **Plugins** then **Add New** from the sidebar menu
2. Search for **WC Secondary Product Thumbnail**
3. Click **Install Now**
4. Activate the plugin
5. Enjoy!


== Frequently Asked Questions ==

= What is the dimension used by my secondary images? =
It uses the image size that you specify at *WooCommerce > Settings > Products > Display > Catalog Images*, which is usually used for images on product archives.

= It doesn't work. Nothing happens when I hover over product images? =
Check that the product gallery has an image attached to it. See the *Product Gallery* meta box when editing the product.


== Screenshots ==

1. A flipped image.


== Changelog ==

= 1.2 =
* Feature - Reveal the last image in product gallery instead of the first image by using: add_filter( 'wcspt_reveal_last_img', '__return_true' );
* Tweak - Better animation timing
* Tweak - Further improve themes compatibility
* Dev - Removed 'wc_secondary_product_thumbnail_styles' filter hook

= 1.1.2 =
* Minor CSS improvements

= 1.1.1 =
* Use minified CSS & JS files rather than the non-minified versions, if SCRIPT_DEBUG is not turned on

= 1.1 =
* Animations now use CSS3 transitions for smoother animation effect
* Fallback to jQuery's .animate() in legacy browsers (e.g. IE 8-9)
* Improved performance

= 1.0.4 =
* Tested with WordPress 4.6 and WooCommerce 2.6
* Replace deprecated jQuery(document).ready(function) with jQuery(function)

= 1.0.3 =
* Fix a fatal error when $product->get_gallery_attachment_ids() is called on some themes.
* Cleanup code.

= 1.0.2 =
* Minor CSS fixes.

= 1.0.1 =
* Fix secondary thumbnail opacity issue on some themes.

= 1.0 =
* Initial version.


== Upgrade Notice ==

= 1.1 =
Animations now use CSS3 transitions instead of jQuery's .animate()