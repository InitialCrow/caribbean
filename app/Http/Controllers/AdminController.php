<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use File;
use App\Admin;
use App\ContentBlog;
use App\Gallery;
use App\TodoList;
class AdminController extends Controller
{
	public function login(){
		return view('admin.login');
	}
	public function check(Request $request){
		if($request->isMethod('post')){
			$credential = $request->only('name');

	    		$admin = Admin::where('login', '=' , $credential['name'])->get();
	    		// dd($admin[0]);
	    		if(!empty($admin[0])){
	    			Auth::login($admin[0]);
	    			echo "ok";
	    			return redirect()->intended('my_event/'.$admin[0]->url);
	    			
	    		}
	    		
	    		
	    		else{
	    			echo "nom d'utilisateur et mot de pass invaliede";
	    			// return view('superUser.login-superUser');
	    		}
    		}
	}
	public function eventAdmin(){
		$url = $_SERVER['REQUEST_URI'];
		$parts = Explode('/', $url);
		$adminToken = $parts[2];
		
		$admins = Admin::where('url', '=' , $adminToken)->get();

		$contentBlogs = ContentBlog::where('admin_id', '=' , $admins[0]->id)->get();
		$gallery = Gallery::where('admin_id', '=' , $admins[0]->id)->get();
		$todoList = TodoList::where('content_blog_id', '=' , $admins[0]->id)->get();

		
		if(!empty($contentBlogs[0]) && !empty($gallery[0])){
			$presentationConvert[] = $contentBlogs->toArray();
			$presentation =  end($presentationConvert[0]);

			return view('admin.my_event', compact(['contentBlogs','admins','gallery','todoList','presentation']));	
		}
		else{
			return view('admin.dashboard', compact(['admins', 'adminToken']));
		}
		
	}
	public function change(Request $request){
		if($request->isMethod('post')){
			$url = $_SERVER['REQUEST_URI'];
			$parts = Explode('/', $url);
			$adminToken = $parts[2];
			
			$credential = $request->all();
			$admin = Admin::where('url', '=' , $adminToken)->get();
			$imgContentBlog = $credential['actu_image'];
			$imgGallery = $credential['gallery_image'];

			$imgContentBlog->move('uploads/admins_'.$admin[0]->name.'/content_blog_img/',$imgContentBlog->getClientOriginalName());
			$imgGallery->move('uploads/admins_'.$admin[0]->name.'/gallery/',$imgGallery->getClientOriginalName());

			$contentBlog = new ContentBlog([
				'presentation_text' => $credential['presentation'],
				'title_html' => $credential['titre_actu'],
				'text' => $credential['text_actu'],
				'image_uri' => $imgContentBlog->getClientOriginalName(),
				'admin_id'=> $admin[0]->id
			]);
			$gallery = new Gallery([
				'image_uri'=> $imgGallery->getClientOriginalName(),
				'admin_id'=> $admin[0]->id
			]);
		
			foreach ($credential['todolist'] as $todo) {
				$todoList = new TodoList([
					'content_blog_id'=> $admin[0]->id,
					'todo'=> $todo
				]);
				$todoList->save();
			}
			
			$contentBlog->save();
			$gallery->save();
			
    		}
	}
	public function edit(){
		$url = $_SERVER['REQUEST_URI'];
		$parts = Explode('/', $url);
		$adminToken = $parts[2];
		$admins = Admin::where('url', '=' , $adminToken)->get();

		return view('admin.dashboard',compact(['admins', 'adminToken']));
	}
}
