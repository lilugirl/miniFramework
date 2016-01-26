<?php

class Home extends Controller{



	public function index($name=''){



		$this->view('home/index',array('name'=>$name));

	}

	public function create($username='',$password=''){
		User::create([
			'username'=>$username,
			'password'=>$password
		]);
	}

	public function test(){
		echo 'home/test';
	}
}
