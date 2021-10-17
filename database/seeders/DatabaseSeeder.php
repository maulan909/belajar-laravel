<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

use function PHPSTORM_META\map;

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
            'name' => 'Hilmi Maulana',
            'email' => 'maulanahilmi909@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
        User::create([
            'name' => 'Rendy Winata',
            'email' => 'rendy@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
        User::create([
            'name' => 'Rahmadytha',
            'email' => 'dytha@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Database',
            'slug' => 'database'
        ]);
        Post::create([
            'title' => 'Judul Post Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-post-pertama',
            'excerpt' => 'excerpt pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde error enim laudantium. Voluptas explicabo ipsum odio perspiciatis officia porro laborum suscipit placeat ea, iusto laboriosam, sunt molestias tempore quisquam illo repellat nam, non officiis modi nisi enim ullam! Repudiandae maiores, dicta accusantium sint eligendi nisi ipsam quia veritatis beatae consectetur minus, facilis harum odit magnam atque assumenda saepe corporis illum fuga. Temporibus perspiciatis nihil voluptates, facere doloremque quasi beatae culpa veritatis saepe natus vel molestias eum vero animi quaerat voluptas sunt eius eveniet non! Optio, temporibus cupiditate. Suscipit debitis illo voluptas pariatur ex exercitationem deleniti, beatae ea? Voluptatem, voluptatum sapiente!'
        ]);
        Post::create([
            'title' => 'Judul Post Kedua',
            'category_id' => 1,
            'user_id' => 2,
            'slug' => 'judul-post-kedua',
            'excerpt' => 'excerpt kedua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde error enim laudantium. Voluptas explicabo ipsum odio perspiciatis officia porro laborum suscipit placeat ea, iusto laboriosam, sunt molestias tempore quisquam illo repellat nam, non officiis modi nisi enim ullam! Repudiandae maiores, dicta accusantium sint eligendi nisi ipsam quia veritatis beatae consectetur minus, facilis harum odit magnam atque assumenda saepe corporis illum fuga. Temporibus perspiciatis nihil voluptates, facere doloremque quasi beatae culpa veritatis saepe natus vel molestias eum vero animi quaerat voluptas sunt eius eveniet non! Optio, temporibus cupiditate. Suscipit debitis illo voluptas pariatur ex exercitationem deleniti, beatae ea? Voluptatem, voluptatum sapiente!'
        ]);
        Post::create([
            'title' => 'Judul Post Ketiga',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-post-ketiga',
            'excerpt' => 'excerpt ketiga',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde error enim laudantium. Voluptas explicabo ipsum odio perspiciatis officia porro laborum suscipit placeat ea, iusto laboriosam, sunt molestias tempore quisquam illo repellat nam, non officiis modi nisi enim ullam! Repudiandae maiores, dicta accusantium sint eligendi nisi ipsam quia veritatis beatae consectetur minus, facilis harum odit magnam atque assumenda saepe corporis illum fuga. Temporibus perspiciatis nihil voluptates, facere doloremque quasi beatae culpa veritatis saepe natus vel molestias eum vero animi quaerat voluptas sunt eius eveniet non! Optio, temporibus cupiditate. Suscipit debitis illo voluptas pariatur ex exercitationem deleniti, beatae ea? Voluptatem, voluptatum sapiente!'
        ]);
    }
}
