<?php
use LaravelBook\Ardent\Ardent;

class Vote extends Ardent {

	public static $rules = array(
		'option_id' => 'required'
	);

	protected $fillable = array('option_id', 'user_id');

	/**
	 * Relationships
	 *
	 */
	public function option() {
		return $this->belongsTo('Option');
	}

    public function user() {
        return $this->belongsTo('User');
    }
}
