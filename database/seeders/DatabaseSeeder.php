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
       
    // User::create([
    //     'name' => 'xyy azzaky',
    //     'email' => 'seckyy@gmail.com',
    //     'password' => bcrypt('12345')
    // ]);

    // User::create([
    //     'name' => 'slamet kopling',
    //     'email' => 'haxxkyy@gmail.com',
    //     'password' => bcrypt('12345')
    // ]);

    User::factory(3)->create();

    Category::create([
        'name' => 'web programming',
        'slug' => 'web-programming'
    ]);

    Category::create([
        'name' => 'web-design',
        'slug' => 'web-design'
    ]);

    Category::create([
        'name' => 'personal',
        'slug' => 'personal'
    ]);


    Post::factory(20)->create();

//     Post::create([
//         'title' => 'judul pertama',
//         'slug'  => 'judul-pertama',
//         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quae explicabo aperiam',
//         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quae explicabo aperiam nobis, quis similique repellat doloribus, assumenda cum in commodi sint iste? Eius cum porro, voluptate inventore nesciunt accusamus nostrum id maxime odit veniam, est autem vitae explicabo excepturi dicta error debitis consequuntur quaerat expedita doloremque voluptatem nam quod? Provident eius alias amet possimus similique porro, nemo laboriosam',
//         'category_id' => 1,
//         'user_id' => 1
        
//     ]);
    
//     Post::create([
//         'title' => 'judul kedua',
//         'slug'  => 'judul-kedua',
//         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quae explicabo aperiam',
//         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quae explicabo aperiam nobis, quis similique repellat doloribus, assumenda cum in commodi sint iste? Eius cum porro, voluptate inventore nesciunt accusamus nostrum id maxime odit veniam, est autem vitae explicabo excepturi dicta error debitis consequuntur quaerat expedita doloremque voluptatem nam quod? Provident eius alias amet possimus similique porro, nemo laboriosam',
//         'category_id' => 1,
//         'user_id' => 1

//     ]);
    
//     Post::create([
//         'title' => 'judul ketiga',
//         'slug'  => 'judul-ketiga',
//         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quae explicabo aperiam',
//         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quae explicabo aperiam nobis, quis similique repellat doloribus, assumenda cum in commodi sint iste? Eius cum porro, voluptate inventore nesciunt accusamus nostrum id maxime odit veniam, est autem vitae explicabo excepturi dicta error debitis consequuntur quaerat expedita doloremque voluptatem nam quod? Provident eius alias amet possimus similique porro, nemo laboriosam',
//         'category_id' => 2,
//         'user_id' => 2

//    ]);

//    Post::create([
//     'title' => 'judul keempat',
//     'slug'  => 'judul-keempat',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quae explicabo aperiam',
//     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quae explicabo aperiam nobis, quis similique repellat doloribus, assumenda cum in commodi sint iste? Eius cum porro, voluptate inventore nesciunt accusamus nostrum id maxime odit veniam, est autem vitae explicabo excepturi dicta error debitis consequuntur quaerat expedita doloremque voluptatem nam quod? Provident eius alias amet possimus similique porro, nemo laboriosam',
//     'category_id' => 2,
//     'user_id' => 1

//    ]);

   }

 }
