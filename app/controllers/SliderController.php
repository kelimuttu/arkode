<?php

class SliderController extends BaseController {

	public function index(){
		$data['image'] = Slider::get();
							/*where('display', '=', '1')
							->orderBy('created_at', 'DESC')
							->get();*/
		return View::make('backend.intro', $data);
	}

	public function upload(){

		if(Input::get('display')==1)
		{
			$data['display'] = 1;
		}

		if(Input::hasFile('slider')){
			$slider = Input::file('slider');
			$filename = $slider->getClientOriginalName();
			$path = public_path('assets/img/slider/'.$filename);
			Image::make($slider->getRealPath())->resize(1364, 570)->save($path);
       		$data['slider'] = $filename;
		}

		Slider::create($data);

		return Redirect::to('dashboard/intro');
	}

	public function edit($id){
		$data['image'] = Slider::where('id', '=', $id)->first();
		return View::make('backend.update-slider', $data);
	}

	public function update($id){

		if(Input::get('display')==1)
		{
			$data['display'] = 1;
		}
		else
		{
			$data['display'] = 0;	
		}

		if(Input::hasFile('slider')){
			$slider = Input::file('slider');
			$filename = $slider->getClientOriginalName();
			$path = public_path('assets/img/slider/'.$filename);
			Image::make($slider->getRealPath())->resize(1364, 570)->save($path);
       		$data['slider'] = $filename;
		}

		Slider::where('id', '=', $id)->update($data);

		return Redirect::to('dashboard/intro');
	}

	public function hapus($id){
		Slider::where('id', '=', $id)->delete();
		return Redirect::to('dashboard/intro');
	}

}