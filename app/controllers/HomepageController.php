<?php

class HomepageController extends BaseController {

	public function index(){
		$data['image'] = Slider::where('display', '=', '1')
							/*->orderBy('created_at', 'DESC')*/
							->get();
		return View::make('index', $data);
	}

}