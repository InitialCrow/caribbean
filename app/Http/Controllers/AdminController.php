<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Mail;
use File;
use App\Admin;
use App\ContentBlog;
use App\Gallery;
use App\TodoList;
use App\Presentation;
use App\Guest;
use App\Comment;

class AdminController extends Controller
{

	public function login(){
		return view('admin.login');
	}
	public function check(Request $request){
		if($request->isMethod('post')){
			$credential = $request->all();
		
			
	    		$admin = Admin::where('login', '=' , $credential['name'])->first();
	    		if(!empty($admin)){
	    			$request->session()->put('admin',$admin);
	    			
	    			return redirect()->intended('my_event/'.$admin->url);
	    			
	    		}
	    		else{
	    			echo "nom d'utilisateur et mot de pass invaliede";
	    			// return view('superUser.login-superUser');
	    		}
    		}
	}
	public function eventAdmin(){
		if(empty(session()->get('admin'))){

			return redirect()->intended('evenement/');
		}
		else{
			$url = $_SERVER['REQUEST_URI'];
			$parts = Explode('/', $url);
			$adminToken = $parts[2];
			
			$admin = Admin::where('url', '=' , $adminToken)->first();

			$presentation = Presentation::where('admin_id', '=' , $admin->id)->first();
			$contentBlogs = ContentBlog::where('admin_id', '=' , $admin->id)->get();
			$gallery = Gallery::where('admin_id', '=' , $admin->id)->get();
			$comments = Comment::where('admin_id', '=' , $admin->id)->get();
			$todoList = TodoList::where('admin_id', '=' , $admin->id)->get();
			$todoListConvert = $todoList->toArray();
			$guests = Guest::where('admin_id', '=' , $admin->id)->get();


		}
		
		if(session()->get('admin')->remember_token ===  $admin->remember_token ){
			if(!empty($presentation) ){
			return view('admin.my_event', compact(['contentBlogs','admin','gallery','todoListConvert','presentation','comments','guests']));	
		
			}
			else{
				return view('admin.dashboard', compact(['admin','gallery','todoListConvert','contentBlogs', 'adminToken','comments','guests']));
			}
		}
		else{
			return redirect()->intended('evenement/');
		}
	}
	public function change(Request $request){
		if(empty(session()->get('admin'))){

			return redirect()->intended('evenement/');
		}
		else{
			$url = $_SERVER['REQUEST_URI'];
			$parts = Explode('/', $url);
			$adminToken = $parts[2];
			
			$credential = $request->all();
			
			$admin = Admin::where('url', '=' , $adminToken)->first();
		}
		if(session()->get('admin')->remember_token ===  $admin->remember_token ){
			if($request->isMethod('post')){
			
			if(!empty($credential['chrono'])){
				
				$admin->timer = $credential['chrono'];
				
			}
			$admin->save();
			if(!empty($credential['actu_image'])){
				$imgContentBlog = $credential['actu_image'];
				$imgContentBlog->move('uploads/admins_'.$admin->name.'/content_blog_img/',$imgContentBlog->getClientOriginalName());
				$imgContentBlog = $imgContentBlog->getClientOriginalName();
			
			}
			else{
				$imgContentBlog = null;
			}

			if(!empty($credential['gallery_image'] )){

				$imgGallery = $credential['gallery_image'];

				
				foreach($imgGallery as $img){
                    if(!empty($img)){
                        $img->move('uploads/admins_'.$admin->name.'/gallery/',$img->getClientOriginalName());
                        $gallery = new Gallery([
                            'image_uri'=> $img->getClientOriginalName(),
                            'admin_id'=> $admin->id
                        ]);
                        $gallery->save();
                    }
                    else{
                        break;
                    }

				}
				
				
			}
			foreach ($credential['todolist'] as $todo) {
				if(!empty($todo)){
					
					$todoList = new TodoList([
						'admin_id'=> $admin->id,
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
						'admin_id'=> $admin->id
				]);
				$contentBlog->save();
			}
			if(!empty($credential['presentation'])){
				$presentation = Presentation::where('admin_id', '=' , $admin->id)->first();
				if(isset($presentation)){

					$presentation->update(['text' => $credential['presentation']]);
				}
				else{
					$presentation = new Presentation([
						'text' => $credential['presentation'],
						'admin_id'=>$admin->id
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
		else{
			return redirect()->intended('evenement/');
		}
	}
	public function edit(){
		if(empty(session()->get('admin'))){

			return redirect()->intended('evenement/');
		}
		else{
			$url = $_SERVER['REQUEST_URI'];
			$parts = Explode('/', $url);
			$adminToken = $parts[2];
			$admin = Admin::where('url', '=' , $adminToken)->first();
			$presentation = Presentation::where('admin_id', '=' , $admin->id)->first();
			$contentBlogs = ContentBlog::where('admin_id', '=' , $admin->id)->get();
			$gallery = Gallery::where('admin_id', '=' , $admin->id)->get();
			$todoList = TodoList::where('admin_id', '=' , $admin->id)->get();
			$todoListConvert = $todoList->toArray();
			$comments = Comment::where('admin_id',"=", $admin->id)->get();
			$guests = Guest::where('admin_id', '=' , $admin->id)->get();
		}
		if(session()->get('admin')->remember_token ===  $admin->remember_token ){
			return view('admin.dashboard',compact(['admin', 'adminToken','presentation','gallery','todoListConvert','contentBlogs','comments','guests']));
		}
		else{
			return redirect()->intended('evenement/');
		}
		
		
	}
	public function comment(Request $request, $adminUrl, $idContentBlog){
		if(empty(session()->get('admin'))){

			return redirect()->intended('evenement/');
		}
		else{
			$admin = Admin::where("url","=","$adminUrl")->first();
			$contentBlog =  ContentBlog::where("id","=","$idContentBlog")->first();

			
		}
		if(session()->get('admin')->remember_token ===  $admin->remember_token ){
			$credential = $request->all();
			if(!empty($credential["comment"])){
				if(!empty($credential["comment_image"])){
					$imgComment = $credential['comment_image'];
					$imgComment->move('uploads/admins_'.$admin->name.'/comments/',$imgComment->getClientOriginalName());
					$imgComment = $imgComment->getClientOriginalName();
					
				}
				else{
					$imgComment = null;
				}
			$comment = new Comment([
						"text"=>$credential['comment'],
						"image_uri"=>$imgComment,
						"admin_id" =>$admin->id,
						"name"=>$admin->name,
						"content_blog_id"=>$contentBlog->id,
						
					]);
			$comment->save();

			
			}
			else{
				return redirect()->intended('my_event/'.$adminUrl);
			}
			return redirect()->intended('my_event/'.$adminUrl);
		}
		else{
			return redirect()->intended('evenement/');
		}	
	}

	public function delete(Request $request , $token, $type, $id){
		if(empty(session()->get('admin'))){

			return redirect()->intended('evenement/');
		}
		else{
			$admin = Admin::where('url', '=' , $token)->first();
			
		}
		if(session()->get('admin')->remember_token ===  $admin->remember_token ){
			if ( $type === "todoList"){
				$todoList = TodoList::Find($id);
				if(!empty($todoList)){
					$todoList->delete();
				}
			
			}
			if ( $type === "gallery"){
				$gallery = Gallery::Find($id);
				if(!empty($gallery)){
					$gallery->delete();
				}

			}
			if ( $type === "contentBlog"){
				$contentBlog = ContentBlog::Find($id);
				if(!empty($contentBlog)){
					$contentBlog->delete();
				}
				

			}
			if($type ==="comment"){
				$comment = Comment::Find($id);
				if(!empty($comment)){
					$comment->delete();
				}
			}
			if($type ==="guest"){
				
				$guest = Guest::Find($id);
				if(!empty($guest)){
					$guest->delete();
				}
			}
			 return redirect()->intended('my_event/'.$admin->url.'/edit');
		}
		else{
			return redirect()->intended('evenement/');
		}
		
	}

	public function send(Request $request, $token){
		if(empty(session()->get('admin'))){

			return redirect()->intended('evenement/');
		}
		else{
			$admin = Admin::where('url', '=', $token)->first();
			
		}
		if(session()->get('admin')->remember_token ===  $admin->remember_token ){
			$credential = $request->only('email');

		
			$guestToken = str_random(50);
			$guest = new Guest([
					'admin_id'=>$admin->id,
					'email' => $credential['email'],
					'token'=> $guestToken,
			]);


			$guest->save();
			$user = array(
				'email'=>$credential ['email'],
				'name'=>$admin->name,
				'msg'=>'bonjour '.$admin->name.' vous invite à leur mariage pour rejoindre la partie cliquez sur le lien suivant :',
				'link'=> "my_event/".$admin->url."/guest/".$guestToken
			);

			Mail::send('emails.guestMessage', compact('user'), function($message) use ($user)
			{
				$message->from(env('EMAIL_TECHN'),$user['name']);
				$message->to($user['email'])->subject('invitation au mariage de '.$user['name']);
			});
			return redirect()->intended('my_event/'.$admin->url);
		}
		else{
			return redirect()->intended('evenement/');
		}

		
	}
}
