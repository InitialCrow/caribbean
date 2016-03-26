<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;
use App\ContentBlog;
use App\Gallery;
use App\TodoList;
use App\Presentation;
use App\Guest;
use App\Comment;

class GuestController extends Controller
{
    public function login($adminId, $guestToken){
    	$guest = Guest::where("token","=","$guestToken")->first();
    	$admin = Admin::where("url","=","$adminId")->first();
    	
    	
    	if(!empty($guest->name)){
	    	$presentation = Presentation::where("admin_id","=","$admin->id")->first();
			$contentBlogs = ContentBlog::where('admin_id', '=' , $admin->id)->get();
			$gallery = Gallery::where('admin_id', '=' , $admin->id)->get();
			$todoList = TodoList::where('admin_id', '=' , $admin->id)->get();
			$todoListConvert = $todoList->toArray();
			$comments =  Comment::where('admin_id', '=' , $admin->id)->get();
			$guests = Guest::where('admin_id', '=' , $admin->id)->get();

    		return view('guest.my_event', compact(['contentBlogs','admin','gallery','todoListConvert','presentation','guest','comments','guests']));
    	}
    	else{
    		
    		return view('guest.login', compact(['guest','admin']));
    	}
    	
    }
	public function subcribe(Request $request, $adminId, $guestToken){
		$credential = $request->all();
		$guest = Guest::where("token","=","$guestToken")->first();
		$guest->update([
				'name'=>$credential['name'],
				'status'=>$credential['presence']
			]);
		$guest->save();
		return redirect()->intended('my_event/'.$adminId.'/guest/'.$guestToken);
	}
	public function comment(Request $request, $adminUrl, $guestToken, $idContentBlog){
		
		$admin = Admin::where("url","=","$adminUrl")->first();
		$guest = Guest::where("token","=","$guestToken")->first();
		$credential = $request->all();
		$contentBlog =  ContentBlog::where("id","=","$idContentBlog")->first();
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
						"name"=>$guest->name,
						"content_blog_id"=>$contentBlog->id
					]);
			$comment->save();

			
		}
		else{
			return redirect()->intended('my_event/'.$adminUrl.'/guest/'.$guest->token);
		}
		return redirect()->intended('my_event/'.$adminUrl.'/guest/'.$guest->token);
	}
	public function add_actu(Request $request, $adminUrl, $guestToken){
		$admin = Admin::where("url","=","$adminUrl")->first();
		$guest = Guest::where("token","=","$guestToken")->first();
		$credential = $request->all();
		if(!empty($credential['titre_actu']) && !empty($credential['text_actu']) ){
			if(!empty($credential['actu_image'])){
				$imgContentBlog = $credential['actu_image'];
				$imgContentBlog->move('uploads/admins_'.$admin->name.'/content_blog_img/',$imgContentBlog->getClientOriginalName());
				$imgContentBlog = $imgContentBlog->getClientOriginalName();
			
			}
			else{
				$imgContentBlog = null;
			}
				
				$contentBlog = new ContentBlog([
						'title_html' => $credential['titre_actu'],
						'text' => $credential['text_actu'],
						'image_uri' => $imgContentBlog,
						'admin_id'=> $admin->id,
						'guest_id'=>$guest->id,
				]);
				$contentBlog->save();
		}
		else{
			return redirect()->intended('my_event/'.$adminUrl.'/guest/'.$guest->token);
		}
		return redirect()->intended('my_event/'.$adminUrl.'/guest/'.$guest->token);
	}
}
