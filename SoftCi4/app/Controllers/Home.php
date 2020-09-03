<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Home";				
		return view('home/index',$data);
	}

	public function about()
	{
		$data['title'] = "about";
		return view('home/about',$data);
	}
	
	public function contact()
	{
		$data['title'] = "contact";
		return view('home/contact',$data);
    }

}
