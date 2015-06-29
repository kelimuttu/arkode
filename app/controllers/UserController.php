<?php

class UserController extends BaseController {

	public function proses_login()
	{
		//periksa dulu apakau username/email dan password benar
		$jml = User::where(function($query){
					$query->where('username', '=', Input::get('username'));
					})
					->where('password', '=', Input::get('password'))
					->count();

		//jika benar, maka lanjutkan ke proses membuat session
		if($jml==1){
			$user = User::where(function($query){
						$query->where('username', '=', Input::get('username'));
						})
						->where('password', '=', Input::get('password'))
						->first();

			Session::put('logged_in', '1');
			Session::put('user_id', $user->id);
			Session::put('username', $user->username);

			return Redirect::to('/dashboard');
		}
		else
		{
			return Redirect::to('/admin');
		}
	}

}