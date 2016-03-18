<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SuperUserController extends Controller
{	
	public function login(){
		return view('admin.login');
	}
	public function dashboard(){
		return view('admin.dashboard');
	}
}
