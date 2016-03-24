<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;
use Storage;
class BoxToolController extends Controller
{
    public function show($id){
    	$admin = Admin::where('url','=',$id)->first();
    	$paths = Storage::disk('uploads')->allFiles('admins_'.$admin->name.'/files');
    	$names= [];

    	
   
    	foreach ($paths as $path) {
    		
    		$parts = Explode('/', $path);
    		array_push($names,$parts[2]);
    		
    		
    		
    		
    	}
    

    	
    	return view('admin.boxTool', compact(['paths','names']));
    }
}
