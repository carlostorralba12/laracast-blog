<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*User::factory()->create([
            'name' => 'Alfredo'
        ]);*/
        //Post::factory(1)->create(['user_id' => 1]);
        Post::factory(12)->create();
    }
}
