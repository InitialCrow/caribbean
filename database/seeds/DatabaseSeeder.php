<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SuperUsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(PresentationTableSeeder::class);
        $this->call(GuestsTableSeeder::class);
        $this->call(ContentBlogsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(TodoListTableSeeder::class);
        
    }
}
