<?php

class About extends Eloquent {

	protected $table = 'about'; //table pada database

	protected $primaryKey = 'id_about'; //primary key table

	public $timestamps = true; 

	public function simpan($input){
		$this->content = $input['about'];
		$this->save();
	}

	public function getDataAbout($id = 1){
            return $this->find($id)->get();
	}

	public function hapus($id){
        self::find($id)->delete();
    }

    public function doEdit($input){
            $id = 1;//$input['id_about'];
            $update = $this->find($id);
           // $user = User::find(1);

			$update->content = $input['content'];

			$update->save();
    }
}

