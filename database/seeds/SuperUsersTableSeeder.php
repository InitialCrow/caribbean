<?php

use Illuminate\Database\Seeder;

class SuperUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('super_users')->insert([
            [
               'name' => 'adam',
               'email' => 'test@salut.com',
               'password' => Hash::make('1234')
            ],
            
        ]);
    }
}
