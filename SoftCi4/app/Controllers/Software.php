<?php namespace App\Controllers;

class Software extends BaseController
{
	public function index()
	{
		$data['title'] = "Software";
		return view('software/index',$data);
	}

	//--------------------------------------------------------------------
	public function buffet()
	{
		$data['title'] = "Buffet & A la carte";
		return view('software/buffet',$data);
    }
    
    public function restaurant()
	{
		$data['title'] = "Restaurant Bistro, Coffee Shop";
		return view('software/restaurant',$data);
    }
    
    public function qsr()
	{
		$data['title'] = "Quick Services Restaurant (QSR)";
		return view('software/qsr',$data);
    }
    
    public function foodzone()
	{
		$data['title'] = "Shop Zone, Food Zone";
		return view('software/foodzone',$data);
    }
    
    public function jewelry()
	{
		$data['title'] = "Jewelry Shop";
		return view('software/jewelry',$data);
    }
    
    public function mediumshop()
	{
		$data['title'] = "Minimart Shop";
		return view('software/mediumshop',$data);
    }
    
    public function largeshop()
	{
		$data['title'] = "Department Store";
		return view('software/largeshop',$data);
    }
    
    public function rent()
	{
		$data['title'] = "โปรแกรมเช่า";
		return view('software/rent',$data);
    }
    
    public function carservices()
	{
		$data['title'] = "โปรแกรมอู่ซ่อมรถ";
		return view('software/carservices',$data);
    }
    
    public function booking()
	{
		$data['title'] = "โปรแกรมจัดการจองจัดยานพาหนะ";
		return view('software/booking',$data);
    }
    
    public function sop()
	{
		$data['title'] = "S&OP and S&OP Commission";
		return view('software/sop',$data);
    }
    
    public function consultation()
	{
		$data['title'] = "รับปรึกษาและพัฒนาโปรแกรมตามความต้องการ";
		return view('software/consultation',$data);
	}
}
