<?php namespace App\Controllers;

class Downloads extends BaseController
{
	public function document()
	{
		$data['title'] = "Documents";				
		return view('downloads/document',$data);
	}

	public function file($fileName = NULL)
	{
		$data['title'] = "Files";	
		
		if($fileName)
		{
			$file = realpath("downloads")."\\".$fileName;
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

		return view('downloads/file',$data);
	}

}
