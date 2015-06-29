<?php

class GamesController extends BaseController {

	public function index(){
		$data['games'] = Posts::where('publish', '=', '1')
							/*->orderBy('created_at', 'DESC')*/
							->get();
		return View::make('games.index', $data);
	}

	public function tambah(){
		return View::make('games.games-tambah');	
	}

	public function simpan_game(){
		$data['judul'] = Input::get('judul');
		$data['konten'] = Input::get('konten');
		$data['slug'] = Str::slug(Input::get('judul'), '-');
		$data['link'] = Input::get('link');

		if(Input::get('publish')==1)
		{
			$data['publish'] = 1;
		}

		if(Input::hasFile('cover')){
			$img = Input::file('cover');
			$filename = $img->getClientOriginalName();
			$path = public_path('assets/img/games/'.$filename);
			Image::make($img->getRealPath())->resize(250, 437)->save($path);
       		$data['thumb_img'] = $filename;
		}

		Posts::create($data);

		return Redirect::to('dashboard/games');
	}

	public function edit($id){
		$data['games'] = Posts::where('id', '=', $id)->first();
		return View::make('games.games-edit', $data);
	}

	public function update_games($id){
		$data['judul'] = Input::get('judul');
		$data['konten'] = Input::get('konten');
		$data['slug'] = Str::slug(Input::get('judul'), '-');
		$data['link'] = Input::get('link');

		if(Input::get('publish')==1)
		{
			$data['publish'] = 1;
		}
		else
		{
			$data['publish'] = 0;	
		}

		if(Input::hasFile('cover')){
			$img = Input::file('cover');
			$filename = $img->getClientOriginalName();
			$path = public_path('assets/img/games/'.$filename);
			Image::make($img->getRealPath())->resize(250, 437)->save($path);
       		$data['thumb_img'] = $filename;
		}

		Posts::where('id', '=', $id)->update($data);

		return Redirect::to('dashboard/games');
	}

	public function hapus($id){
		Posts::where('id', '=', $id)->delete();
		return Redirect::to('dashboard/games');
	}

	public function baca($slug){
		$data['games'] = Posts::where('slug', '=', $slug)->first();
		return View::make('games.games-detail', $data);
	}
}