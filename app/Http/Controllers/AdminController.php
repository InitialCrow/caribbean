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
use App\Presentation;
class AdminController extends Controller
{
	public function login(){
		return view('admin.login');
	}
	public function check(Request $request){
		if($request->isMethod('post')){
			$credential = $request->only('name');

	    		$admin = Admin::where('login', '=' , $credential['name'])->get();
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
		$presentation = Presentation::where('admin_id', '=' , $admins[0]->id)->get();
		$contentBlogs = ContentBlog::where('admin_id', '=' , $admins[0]->id)->get();
		$gallery = Gallery::where('admin_id', '=' , $admins[0]->id)->get();
		$todoList = TodoList::where('admin_id', '=' , $admins[0]->id)->get();

		$todoListConvert = $todoList->toArray();

		
		if(!empty($presentation[0]) ){
			return view('admin.my_event', compact(['contentBlogs','admins','gallery','todoListConvert','presentation']));	
		
		}
		else{
			return view('admin.dashboard', compact(['admins','gallery','todoListConvert','contentBlogs', 'adminToken']));
		}
		
	}
	public function change(Request $request){
		if($request->isMethod('post')){
			$url = $_SERVER['REQUEST_URI'];
			$parts = Explode('/', $url);
			$adminToken = $parts[2];
			
			$credential = $request->all();
			
			$admin = Admin::where('url', '=' , $adminToken)->get();
					
			if(!empty($credential['actu_image'])){
				$imgContentBlog = $credential['actu_image'];
				$imgContentBlog->move('uploads/admins_'.$admin[0]->name.'/content_blog_img/',$imgContentBlog->getClientOriginalName());
				$imgContentBlog = $imgContentBlog->getClientOriginalName();
			}
			else{
				$imgContentBlog = null;
			}

			if(!empty($credential['gallery_image'])){
				$imgGallery = $credential['gallery_image'];

				$imgGallery->move('uploads/admins_'.$admin[0]->name.'/gallery/',$imgGallery->getClientOriginalName());

				$gallery = new Gallery([
					'image_uri'=> $imgGallery->getClientOriginalName(),
					'admin_id'=> $admin[0]->id
				]);
				$gallery->save();
			}
			foreach ($credential['todolist'] as $todo) {
				if(!empty($todo)){
					
					$todoList = new TodoList([
						'admin_id'=> $admin[0]->id,
						'todo'=> $todo
					]);
					$todoList->save();

				}	
			}
			if(!empty($credential['titre_actu']) && !empty($credential['text_actu']) ){
				
				$contentBlog = new ContentBlog([
						'title_html' => $credential['titre_actu'],
						'text' => $credential['text_actu'],
						'image_uri' => $imgContentBlog,
						'admin_id'=> $admin[0]->id
				]);
				$contentBlog->save();
			}
			if(!empty($credential['presentation'])){
				$presentation = Presentation::where('admin_id', '=' , $admin[0]->id)->first();
				if(isset($presentation)){
					$presentation->update(['text' => $credential['presentation']]);
				}
				else{
					$presentation = new Presentation([
						'text' => $credential['presentation'],
						'admin_id'=>$admin[0]->id
					]);

				}
				$presentation->save();
			}
			else{
				return redirect()->intended('my_event/'.$adminToken.'/edit');	
			}
			return redirect()->intended('my_event/'.$adminToken);
    		}
	}
	public function edit(){
		$url = $_SERVER['REQUEST_URI'];
		$parts = Explode('/', $url);
		$adminToken = $parts[2];
		$admins = Admin::where('url', '=' , $adminToken)->get();
		$presentation = Presentation::where('admin_id', '=' , $admins[0]->id)->get();
		$contentBlogs = ContentBlog::where('admin_id', '=' , $admins[0]->id)->get();
		$gallery = Gallery::where('admin_id', '=' , $admins[0]->id)->get();
		$todoList = TodoList::where('admin_id', '=' , $admins[0]->id)->get();
		$todoListConvert = $todoList->toArray();
		return view('admin.dashboard',compact(['admins', 'adminToken','presentation','gallery','todoListConvert','contentBlogs']));
	}

	public function delete(Request $request , $token, $type, $id){
		$admin = Admin::where('url', '=' , $token)->get();
		if ( $type === "todoList"){
			$todoList = TodoList::Find($id);
			$todoList->delete();
			
		}
		if ( $type === "gallery"){
			$gallery = Gallery::Find($id);
			$gallery->delete();
		}
		if ( $type === "contentBlog"){
			$contentBlog = contentBlog::Find($id);
			$contentBlog->delete();
		}
		
		 return redirect()->intended('my_event/'.$admin[0]->url.'/edit');
	}
}
