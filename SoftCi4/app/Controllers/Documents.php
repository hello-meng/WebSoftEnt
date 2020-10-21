<?php namespace App\Controllers;

class Documents extends BaseController
{
	public function index()
	{
		$data['title'] = "Documents";				
		return view('documents/document',$data);
	}

	public function download($fileName = NULL)
	{
		$data['title'] = "Download";	
		
		if($fileName)
		{
			$file = realpath("downlaods")."\\".$fileName;
			if (file_exists($file))
			{
				$data = file_get_contents($file);
				force_download($fileName,$data);
			}
			else
			{
				redirect(base_url());
			}
		}

		return view('documents/download',$data);
	}

}
