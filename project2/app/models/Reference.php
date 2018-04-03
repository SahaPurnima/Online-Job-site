<?php


class Reference extends Eloquent {

	protected $table = 'reference';

    public $timestamps = false;
    protected $guarded = array();

	public static $rules = array();

    public function user()
    {
        return $this->belongsTo('user');
    }

}
