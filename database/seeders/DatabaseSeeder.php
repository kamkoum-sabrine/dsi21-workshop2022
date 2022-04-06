<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PostsTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\CommentsTableSeeder;
use Database\Seeders\CategoriesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategoriesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
