<?php

class User extends Eloquent{

	protected $table = 'users';
	protected $guarded = array('id');
	protected $hidden = array('password');

}
