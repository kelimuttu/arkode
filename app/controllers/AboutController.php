<?php

class AboutController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	public function __construct(){
		$this->about = new About();
	}

	protected function index()
	{
		$data = $this->about->getDataAbout();
            return View::make('landing_page')
                        ->with('data', $data);
	}

	public function input(){
		$input = Input::all();
		$this->about->simpan($input);
		return Redirect::to('/');
	}

	public function hapus($id)
	{
		$this->about->hapus($id);
        return Redirect::to('/');
	}

	public function edit($id){
		$data = $this->about->getDataAbout($id);
            return Redirect::to('/')
                        ->with('data', $data);
	}

	public function doEdit(){
		$input = Input::all();
		$this->about->doEdit($input);
		return Redirect::to('/dashboard/about');
	}

	public function update($id=1){
		$data = $this->about->getDataAbout($id);
	}

}