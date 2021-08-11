<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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

        User::create([
            'name' => 'Achmad Rifki',
            'email' => 'eririfky29@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Rava Akhtareez',
            'email' => 'rava@gmail.com',
            'password' => bcrypt('54321')
        ]);

        Category::create([
            'name' => 'Programming Language',
            'slug' => 'programming-language'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Science',
            'slug' => 'science'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quae velit nemo libero dolor voluptate debitis iure minus. Quam tempora dolor fugit!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quae velit nemo libero dolor voluptate debitis iure minus. Quam tempora dolor fugit! Minus distinctio ad ullam quis dicta sint, assumenda fugit nisi natus maiores ex deserunt facere, ratione iste corrupti sit est omnis asperiores eos? Nisi quis, aperiam officiis dolor ipsum corporis aut, aspernatur eum cum at inventore atque quisquam esse sequi, accusamus reiciendis quasi quaerat voluptatum cumque vitae velit sunt! Veritatis, provident suscipit consectetur natus eaque adipisci sint, ut, mollitia neque rem magni ab maiores quo. Voluptatum vero a maiores harum dicta provident illum? Aliquid doloremque dolores rem repellendus?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quae velit nemo libero dolor voluptate debitis iure minus. Quam tempora dolor fugit!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quae velit nemo libero dolor voluptate debitis iure minus. Quam tempora dolor fugit! Minus distinctio ad ullam quis dicta sint, assumenda fugit nisi natus maiores ex deserunt facere, ratione iste corrupti sit est omnis asperiores eos? Nisi quis, aperiam officiis dolor ipsum corporis aut, aspernatur eum cum at inventore atque quisquam esse sequi, accusamus reiciendis quasi quaerat voluptatum cumque vitae velit sunt! Veritatis, provident suscipit consectetur natus eaque adipisci sint, ut, mollitia neque rem magni ab maiores quo. Voluptatum vero a maiores harum dicta provident illum? Aliquid doloremque dolores rem repellendus?',
            'category_id' => 1,
            'user_id' => 2
        ]);
    }
}
