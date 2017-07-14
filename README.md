# WC Secondary Product Thumbnail

WC Secondary Product Thumbnail is a very simple plugin that adds a secondary product thumbnail on product archives that is revealed when you hover over the main product image.

This plugin is ideal if you'd like to display more than one image on product archives, and perfect if you want to display front and back images of clothing for example.

When installed, just activate the plugin and you're good to go.

### Other Features by WCSPT

* High-performance animations using CSS3 transitions
* Fallback to jQuery's .animate(), if needed
* Ultra lightweight
* Does not load its JavaScript and CSS, and also secondary thumbnails on mobile devices
* Works in IE8+ and all of the evergreen browsers

### Live Demo
See WC Secondary Product Thumbnail in action [here](http://demo-wcspt.thewebflash.com/shop/).

### Control Which Image to Reveal on Hover
You can either reveal the first image or the last image in product gallery. By default, the first image in product gallery will reveal on hover. If you would like to reveal the last image instead, add this line into your theme's functions.php file:
```php
add_filter( 'wcspt_reveal_last_img', '__return_true' );
```

This plugin is a fork of the [WooCommerce Product Image Flipper](https://wordpress.org/plugins/woocommerce-product-image-flipper/) by James Koster. Changes and improvements applied in this fork:

* Removed image moving up and down animations, now just simple fade in and fade out
* Disabled plugin's functionality on mobile devices (since this plugin is supposed to only work on devices with mouse)
* Improved themes compatibility
* Added support for older browsers like Internet Explorer 8-9
* And more (see [CHANGELOG.md](https://github.com/thewebflash/wc-secondary-product-thumbnail/blob/master/CHANGELOG.md))