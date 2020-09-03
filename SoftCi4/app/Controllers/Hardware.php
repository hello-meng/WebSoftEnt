<?php namespace App\Controllers;

class Hardware extends BaseController
{
	public function index()
	{
		$data['title'] = "Hardware";		
		return view('hardware/index',$data);
	}

}
