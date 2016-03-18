<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	private $nb = 0;
	public function run()
	{
		DB::table('galleries')->insert([
			[	
				'image_uri'=>str_random(10).'_400x200.jpg',
				'admin_id'=>'1',
			],
			[
				'image_uri'=>str_random(10).'_400x200.jpg',
				'admin_id'=>'2',
			],

		]);
		$admins_id = DB::table('galleries')->get();
		foreach ($admins_id as $admin) {
			$this->nb++;
			$admin_name = DB::table('admins')->select('name')->where('id', '=', $admin->admin_id)->get();
			$file = file_get_contents('http://lorempicsum.com/futurama/350/200/'.$this->nb);
			foreach ($admin_name as $key => $value) {
				Storage::disk('uploads')->put('admins_'.$value->name.'/gallery/'.$admin->image_uri, $file);
			}
			
			
		};

	}
}
