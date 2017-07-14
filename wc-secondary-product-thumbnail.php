<?php
/**
 * Plugin Name: WC Secondary Product Thumbnail
 * Plugin URI: https://wordpress.org/plugins/wc-secondary-product-thumbnail/
 * Description: Adds a hover effect that will reveal a secondary product thumbnail to product images in your WooCommerce store.
 * Version: 1.2
 * Author: Hendy Tarnando
 * Author URI: https://www.thewebflash.com/
 * Text Domain: wc-secondary-product-thumbnail
 * Domain Path: /languages
 * License: GPLv3 (license.txt)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Check if WooCommerce is active
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

	/**
	 * Localization (with WPML support)
	 */
	add_action( 'init', 'wcspt_load_textdomain' );
	function wcspt_load_textdomain() {
		load_plugin_textdomain( 'wc-secondary-product-thumbnail', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}


	/**
	 * New Badge class
	 */
	if ( ! class_exists( 'WCSPT' ) ) {

		class WCSPT {

			public function __construct() {
				if ( ! is_admin() && ! wp_is_mobile() ) {
					add_action( 'wp_enqueue_scripts', array( $this, 'wcspt_scripts' ) );	// Enqueue WCSPT styles and script
					add_action( 'woocommerce_before_shop_loop_item_title', array( $this, 'woocommerce_template_loop_second_product_thumbnail' ), 11 );
					add_filter( 'post_class', array( $this, 'product_has_gallery' ), 11, 3 );
				}
			}


			/*-----------------------------------------------------------------------------------*/
			/* Class Functions */
			/*-----------------------------------------------------------------------------------*/

			// Setup WCSPT styles and script
			function wcspt_scripts() {
				$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

				wp_enqueue_style( 'wcspt-styles', plugins_url( '/assets/css/style' . $suffix . '.css', __FILE__ ) );
				wp_enqueue_script( 'wcspt-script', plugins_url( '/assets/js/script' . $suffix . '.js', __FILE__ ), array( 'jquery' ), false, true );
			}

			// Add wcspt-has-gallery class to products that have a gallery
			function product_has_gallery( $classes, $class = '', $post_id = null ) {
				if ( ! $post_id || get_post_type( $post_id ) !== 'product' ) {
					return $classes;
				}

				global $product;

				if ( is_object( $product ) ) {
					if ( $product->get_gallery_attachment_ids() ) {
						$classes[] = 'wcspt-has-gallery';
					}
				}

				return $classes;
			}


			/*-----------------------------------------------------------------------------------*/
			/* Frontend Functions */
			/*-----------------------------------------------------------------------------------*/

			// Display the second thumbnails
			function woocommerce_template_loop_second_product_thumbnail() {
				global $product;

				$attachment_ids = $product->get_gallery_attachment_ids();

				if ( $attachment_ids ) {
					$secondary_image_id = apply_filters( 'wcspt_reveal_last_img', false ) ? end( $attachment_ids ) : reset( $attachment_ids );
					$classes = 'attachment-shop_catalog secondary-thumb wcspt-transition wcspt-ie8-tempfix';
					echo wp_get_attachment_image( $secondary_image_id, 'shop_catalog', '', $attr = array( 'class' => $classes ) );
				}
			}

		}


		$WCSPT = new WCSPT();
	}
}