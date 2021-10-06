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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My family post',
            'slug' => 'my-family-post',
            'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt a dui quis sodales. Ut aliquet nunc ex, id pellentesque tellus laoreet vitae. Phasellus sit amet bibendum lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque nisi tellus, ornare quis rutrum non, venenatis quis eros. In lorem libero, malesuada eget dignissim tristique, posuere sed lorem. Nunc varius placerat ipsum, sit amet iaculis libero dictum eget. Maecenas molestie dapibus lobortis. Aliquam sed quam accumsan dui imperdiet laoreet vel fringilla elit. Morbi tellus est, aliquam vitae condimentum et, aliquet tempus massa. Aenean non tincidunt lacus. Mauris vel nisi lacus. </p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My work post',
            'slug' => 'my-work-post',
            'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt a dui quis sodales. Ut aliquet nunc ex, id pellentesque tellus laoreet vitae. Phasellus sit amet bibendum lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque nisi tellus, ornare quis rutrum non, venenatis quis eros. In lorem libero, malesuada eget dignissim tristique, posuere sed lorem. Nunc varius placerat ipsum, sit amet iaculis libero dictum eget. Maecenas molestie dapibus lobortis. Aliquam sed quam accumsan dui imperdiet laoreet vel fringilla elit. Morbi tellus est, aliquam vitae condimentum et, aliquet tempus massa. Aenean non tincidunt lacus. Mauris vel nisi lacus. </p>'
        ]);
    }
}
