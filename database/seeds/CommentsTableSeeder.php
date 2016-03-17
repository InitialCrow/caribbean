<?php

use Illuminate\Database\Seeder;


class CommentsTableSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	

	public function run(){
		$directories = Storage::allDirectories();
    	
		foreach ($directories as $directory) {
			Storage::deleteDirectory($directory);
		}
		$files = Storage::allFiles();
		Storage::delete($files);
		factory(App\Comment::class,5)->create()->each(function($comment){
			$admins = DB::table('admins')->select('name')->where('id', '=', $comment->admin_id)->get();
			$comment->image_uri = str_random(10).'_400x200.jpg';
			$file = file_get_contents('http://lorempixel.com/400/200/');
			foreach ($admins as $admin) {
				
				Storage::put('public/admins_'.$admin->name.'/comments/'.$comment->image_uri, $file);
			}
			
			$comment->update([
				'image_uri'=>$comment->image_uri
			]);
		});
	}
}
