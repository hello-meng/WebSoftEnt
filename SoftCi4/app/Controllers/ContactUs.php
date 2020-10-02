<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\ContactModel;

class ContactUs extends BaseController
{
	public function index()
	{
		$data['title'] = "Contact Us";

		//$this->saveContactUs();
		//$this->sendEmail();

		return view('home/contact',$data);
	}

	private function saveContactUs()
	{
		$data = [
			'name'=>"test mail5",
			'email'=>"helo@gamil.com5",
			'subject'=>"test subject5",
			'message'=>"massameha oslaoltolallshas5"
		];
		// $db = \Config\Database::connect();
		// $builder = $db->table('contactus');
		// $builder->insert($data);

		$contactModel = new ContactModel();
		$contactModel->insert($data);

	}
	
	private function sendEmail() 
	{
		//ต้องไปเปิด https://myaccount.google.com/security
		//ไปที่ Security(ความปลอดภัย) 
		//ไปที่ Less secure app access (การเข้าถึงของแอปที่มีความปลอดภัยน้อย)
		//ให้ on (เปิด) เพื่อการใช้งาน

		$email = \Config\Services::email();

		$email->setFrom('mis.rggroup@gmail.com', 'Soft enterprises');
		$email->setTo('hello2meng@gmail.com');
		//$email->setCC('another@another-example.com');
		//$email->setBCC('them@their-example.com');

		$email->setSubject('Sont Enterprises Email Test Ci5');
		//$email->setMessage('Testing the email class.');
		//$email->setMessage('<h1>Test Email</h1><p>testing email message</p>');
		$email->setMessage('testing send email from ci5');

		//$email->send();
		if ($email->send()) 
		{
			echo "success";
		} else {
			echo "invalid";
			$data = $email->printDebugger([headers]);
			print_r($data);
		}

	}



}
