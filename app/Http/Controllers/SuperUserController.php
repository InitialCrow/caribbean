<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SuperUser;
use App\Admin;
use App\ContentBlog;
use App\Gallery;
use App\TodoList;
use Storage;
use File;
use Auth;

class SuperUserController extends Controller
{	

	public function login(){

		return view('superUser.login');
	}
	public function check(Request $request){
		
		if($request->isMethod('post')){

			
				$credential = $request->only('name','password');

	    		
		    		if(Auth::attempt(array('name' => $credential['name'], 'password' => $credential['password']))){
		    			
		    			return redirect()->intended('superUser/dashboard');

		    		}
		    		else{
		    			echo "nom d'utilisateur et mot de pass invalide";
		    			return view('superUser.login');
		    		}
			
	    		
    		}

	}
	public function getDashboard(){
		$admins = Admin::all();
		return view("superUser.dashboard",compact('admins'));
	}
	public function post_addAdmin(Request $request){

	    	if($request->isMethod('post')){
	    		
	    		$credential = $request->only('login','name');
	    		
	    		$admin = new Admin([
	    		    'login' => $credential['login'],
			    'name' =>  $credential['name'],
			    'url' => str_random(20),
			    'remember_token'=>str_random(10)
			]);
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
