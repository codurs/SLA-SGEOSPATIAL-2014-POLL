<?php namespace SGEOSPATIAL2014\EasyPoll\Facades;

use Illuminate\Support\Facades\Facade;

class EasyPollFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'easypoll'; }

}
