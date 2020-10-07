<?php namespace App\Controllers;

class Feature extends BaseController
{
	public function index()
	{
		// $data['title'] = "Feature POS";		
		// return view('feature/index',$data);
	}

	public function featurepos()
	{
		$data['title'] = "Feature POS";		
		return view('feature/featurepos',$data);
	}

	public function featurerest()
	{
		$data['title'] = "Feature Restaurant";		
		return view('feature/featurerest',$data);
	}

	public function price()
	{
		$data['title'] = "Feature Restaurant";		
		return view('feature/price',$data);
	}
}