<?php

use Illuminate\Database\Seeder;


class ContentBlogsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	private $id=0;
    public function run()
    {	


    	File::deleteDirectory('public/uploads');
		
	$files = Storage::allFiles();
	Storage::delete($files);
	factory(App\ContentBlog::class,2)->create()->each(function($contentBlog){
		$this->id ++;
	
		$admins = DB::table('admins')->select('name')->where('id', '=', $contentBlog->admin_id)->get();
		$contentBlog->image_uri = str_random(10).'_400x200.jpg';
		
		$file = file_get_contents('http://lorempicsum.com/futurama/350/200/'.$this->id);
		foreach ($admins as $admin) {
			
			Storage::disk('uploads')->put('admins_'.$admin->name.'/content_blog_img/'.$contentBlog->image_uri, $file);
		}
		
		
		$contentBlog->update([
			'image_uri'=>$contentBlog->image_uri
		]);
	});
    }
}
