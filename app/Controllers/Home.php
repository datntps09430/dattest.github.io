<?php

namespace App\Controllers;

class Home extends BaseController
{
	protected $mRequest;

	public function __construct()
	{
		$this->mRequest = service("request");
	}

	public function index()
	{

		return view('Admin/checkingtable');
	}
	public function add()
	{	
		
	
		return view('Update/update');
	}
	public function login()
    {
        $param = [];
        return view('Login/index', $param);
    }
}
