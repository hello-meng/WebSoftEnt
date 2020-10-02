<?php namespace App\Controllers;

class Feature extends BaseController
{
	public function index()
	{
		$data['title'] = "Feature";		
		return view('feature/index',$data);
	}

}