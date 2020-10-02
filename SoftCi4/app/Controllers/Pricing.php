<?php namespace App\Controllers;

class Pricing extends BaseController
{
	public function index()
	{
		$data['title'] = "Price";		
		return view('pricing/index',$data);
	}

}