<?php namespace App\Controllers;

class Documents extends BaseController
{
	public function index()
	{
		$data['title'] = "Documents";				
		return view('documents/document',$data);
	}

	public function download()
	{
		$data['title'] = "Download";				
		return view('documents/download',$data);
	}

}
