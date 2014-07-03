<?php

use LaravelBook\Ardent\Ardent;

class Team extends Ardent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'teams';


	public $id;

	public $name;

	public $description;

	public $category;

	public $votes;
}
