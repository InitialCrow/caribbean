<?php

use Illuminate\Database\Seeder;


class CommentsTableSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	
	private $nb = 0;
	public function run(){

    	
		
		
		factory(App\Comment::class,5)->create()->each(function($comment){

			$this->nb ++;
			$admins = DB::table('admins')->select('name')->where('id', '=', $comment->admin_id)->get();
			$comment->image_uri = str_random(10).'_400x200.jpg';
			$file = file_get_contents('http://lorempicsum.com/futurama/350/200/'.$this->nb);
			foreach ($admins as $admin) {
				
				Storage::disk('uploads')->put('admins_'.$admin->name.'/comments/'.$comment->image_uri, $file);
			}
			
			$comment->update([
				'image_uri'=>$comment->image_uri
			]);
		});
	}
}
