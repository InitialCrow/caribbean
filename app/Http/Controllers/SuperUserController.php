<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SuperUser;
use App\Admin;
use Storage;
use File;
use Auth;

class SuperUserController extends Controller
{	
	public function login(){

		return view('superUser.login-superUser');
	}
	public function post_check(Request $request){
		
		if($request->isMethod('post')){
	    		
	    		$credential = $request->only('name','password');

	    		
	    		if(Auth::attempt(array('name' => $credential['name'], 'password' => $credential['password']))){
	    			
	    			return redirect()->intended('superUser/dashboard');

	    		}
	    		else{
	    			echo "nom d'utilisateur et mot de pass invalide";
	    			return view('superUser.login-superUser');
	    		}
    		}

	}
	public function getDashboard(){
		$admins = Admin::all();
		return view("superUser.dashboard",compact('admins'));
	}
	public function post_addAdmin(Request $request){

	    	if($request->isMethod('post')){
	    		
	    		$credential = $request->only('name','url');
	    		$admin = new Admin(array(
			    'name' =>  $credential['name'],
			    'url' => str_random(20),
			    'remember_token'=>str_random(10),
			));
			$admin->save();
			Storage::disk('uploads')->makeDirectory('admins_'.$admin->name);
			Storage::disk('uploads')->makeDirectory('admins_'.$admin->name.'/comments');
			Storage::disk('uploads')->makeDirectory('admins_'.$admin->name.'/content_blog_img');
			Storage::disk('uploads')->makeDirectory('admins_'.$admin->name.'/gallery');
			return redirect('/superUser/dashboard');	
	    	}
    	}
    	public function get_removeAdmin($id){
    		
		$admin = Admin::find($id);

		$path = public_path(). '/uploads/admins_'.$admin->name;
		// dd($path);
		File::deleteDirectory($path);
			
			
		$admin->delete();
		return back()->with( ['message' => trans('app.success')] );
    	}
}
