<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Categories;
use App\Models\Courses;
use App\Models\Posts;
use Illuminate\Database\Seeder;

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
        User::factory(5)->create();
        Categories::factory(3)->create();
        Courses::factory(10)->create();
        Posts::factory(90)->create();
    }
}
