<?php

namespace App\Controllers;

class admin extends BaseController
{
	public function checkingtable()
	{
		 $param = [];
		return view('Admin/checkingtable',  $param );
	}
	
}
