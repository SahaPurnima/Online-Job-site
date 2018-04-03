<?php


class User extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	protected $table = 'user';

	public $timestamps = false;

    public function jobseekers()
    {
        return $this->hasMany('Jobseeker');
    }

	public function references()
    {
        return $this->hasMany('Reference');
    }

    public function educations()
    {
        return $this->hasMany('Education');
    }

    public function preferreds()
    {
        return $this->hasMany('Preferred');
    }

	

}