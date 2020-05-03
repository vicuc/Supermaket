<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhuyenmaiController extends Controller
{
    public function list()
	{
		return view('admin.khuyen-mai.list');
	}

	public function get_add()
	{
		return view('admin.khuyen-mai.add');
	}	
}
