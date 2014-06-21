<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * Fillable fields
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * @param $password
	 */
	public function setPasswordAttribute($password)
	{
		return $this->attributes['password'] = Hash::make($password);
	}

	public function profile()
	{
		return $this->hasOne('Profile');
	}

	public function isCurrent()
	{
		if (Auth::guest()) return FALSE;

		return Auth::user()->id == $this->id;
	}

}
