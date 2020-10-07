<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\ContactModel;

class Contact extends BaseController
{
	public function index()
	{
		// $data['title'] = "Contact Us";

		// //$this->saveContactUs();
		// //$this->sendEmail();

		// return view('home/contact',$data);

		//$data['title'] = "Contact Us";
		$contactModel = new ContactModel();
		if ($this->request->getMethod() === 'post')
		{
			// $validation =  \Config\Services::validation();
			// $val->validate([
			// 	'title' => "Contact Us",
			// 	'name' => 'trim|required',
			// 	'email' => 'trim|required|valid_email'
			// ]);
			
			// if ($validation)
			// {
			// 	return view('home/contact',$validation);
			// }
			// else
			// {
			// 	$data2 = [
			// 		'title' => "Contact Us",
			// 		//'name' => "test mail6",
			// 		//'email' =>"helo@gamil.com6",
			// 		//'subject' => "test subject6",
			// 		//'message' => "massameha oslaoltolallshas6"	
			// 		'name' => $this->request->getPost('name'),
			// 		'email' => $this->request->getPost('email'),
			// 		//'subject' => $this->request->getPost('subject'),
			// 		'subject' => "Customer send message. Email",
			// 		'message' => $this->request->getPost('message'),				
			// 	];
			// 	$contactModel->insert($data2);

			// 	return view('home/success',$data2);
			// }

			$data2 = [
				'title' => "Contact Us",
				//'name' => "test mail6",
				//'email' =>"helo@gamil.com6",
				//'subject' => "test subject6",
				//'message' => "massameha oslaoltolallshas6"	
				'name' => $this->request->getPost('name'),
				'email' => $this->request->getPost('email'),
				//'subject' => $this->request->getPost('subject'),
				'subject' => "Customer send message. Email",
				'message' => $this->request->getPost('message'),				
			];
			$contactModel->insert($data2);

			return view('home/success',$data2);

		}
		else
		{
			$data['title'] = "Contact Us";
			return view('home/contact',$data);
		}
	}

	private function saveContactUs()
	{
		// $data = [
		// 	'name'=>"test mail5",
		// 	'email'=>"helo@gamil.com5",
		// 	'subject'=>"test subject5",
		// 	'message'=>"massameha oslaoltolallshas5"
		// ];

		// //old
		// // $db = \Config\Database::connect();
		// // $builder = $db->table('contactus');
		// // $builder->insert($data);

		// $contactModel = new ContactModel();
		// $contactModel->insert($data);

		//$data['title'] = "Contact Us";
		$contactModel = new ContactModel();
		if ($this->request->getMethod() === 'post')
		{
			// $validation =  \Config\Services::validation();
			// $val->validate([
			// 	'title' => "Contact Us",
			// 	'name' => 'trim|required',
			// 	'email' => 'trim|required|valid_email'
			// ]);
			
			// if ($validation)
			// {
			// 	return view('home/contact',$validation);
			// }
			// else
			// {
			// 	$data2 = [
			// 		'title' => "Contact Us",
			// 		//'name' => "test mail6",
			// 		//'email' =>"helo@gamil.com6",
			// 		//'subject' => "test subject6",
			// 		//'message' => "massameha oslaoltolallshas6"	
			// 		'name' => $this->request->getPost('name'),
			// 		'email' => $this->request->getPost('email'),
			// 		//'subject' => $this->request->getPost('subject'),
			// 		'subject' => "Customer send message. Email",
			// 		'message' => $this->request->getPost('message'),				
			// 	];
			// 	$contactModel->insert($data2);

			// 	return view('home/success',$data2);
			// }

			$data2 = [
				'title' => "Contact Us",
				//'name' => "test mail6",
				//'email' =>"helo@gamil.com6",
				//'subject' => "test subject6",
				//'message' => "massameha oslaoltolallshas6"	
				'name' => $this->request->getPost('name'),
				'email' => $this->request->getPost('email'),
				//'subject' => $this->request->getPost('subject'),
				'subject' => "Customer send message. Email",
				'message' => $this->request->getPost('message'),				
			];
			$contactModel->insert($data2);

			//$this->sendEmail($data2['email']);

			//--------- email
			$email = \Config\Services::email();

			$email->setFrom('mis.rggroup@gmail.com', 'Soft enterprises');
			$email->setTo('hello2meng@gmail.com');	
			$email->setSubject('Please verify your email');
			$email->setMessage('<h1>Test Email</h1><p>testing email message</p>');

			//--------- end email
			if ($email->send()) 
			{
				//echo "success";
				return view('home/success',$data2);
			} else {
				echo "invalid";
				$data = $email->printDebugger([headers]);
				print_r($data);
			}

			//return view('home/success',$data2);

		}
		else
		{
			$data['title'] = "Contact Us";
			return view('home/contact',$data);
		}

	}
	
	private function sendEmail(string $email) 
	{
		//ต้องไปเปิด https://myaccount.google.com/security
		//ไปที่ Security(ความปลอดภัย) 
		//ไปที่ Less secure app access (การเข้าถึงของแอปที่มีความปลอดภัยน้อย)
		//ให้ on (เปิด) เพื่อการใช้งาน

		$email = \Config\Services::email();

		$email->setFrom('hello2meng@gmail.com', 'khun meng');
		$email->setTo('mis.rggroup@gmail.com');

		//$email->setTo($email);
		//$email->setCC('another@another-example.com');
		//$email->setBCC('them@their-example.com');

		$email->setSubject('Please verify your email');
		//$email->setMessage('Testing the email class.');
		$email->setMessage('<h1>Test Email</h1><p>testing email message</p>');

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
