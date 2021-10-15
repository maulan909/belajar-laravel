<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Hilmi Maulana Mukhlis',
        'job' => 'Programmer'
    ]);
});

Route::get('blog', function () {
    $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Hilmi Maulana',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tempora dignissimos unde inventore deserunt ducimus. A modi qui, blanditiis, id vitae aspernatur sed temporibus exercitationem ex impedit optio in illo asperiores suscipit, culpa repellendus aliquam facere illum dolore! Sunt voluptatum totam, neque ratione, architecto illum dolore nulla, fugit ducimus quisquam cupiditate assumenda repudiandae esse harum tempore pariatur adipisci magnam sapiente qui. Et deserunt distinctio saepe soluta similique nemo illum, doloribus optio, repellendus ut nostrum! Cupiditate fugiat illum incidunt explicabo ad, quam beatae sequi dolore, nemo necessitatibus voluptates perspiciatis deleniti ea inventore fuga consectetur sed blanditiis laborum libero, molestiae eius eveniet?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Rendy Wirawinata',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt minima similique quas, dolor totam necessitatibus nobis repudiandae id rerum atque iste, suscipit odio amet optio perferendis magni! Impedit, hic esse velit eaque quia perferendis sint reprehenderit repellat repellendus reiciendis, aliquid voluptatem vero accusamus earum nisi nihil in architecto voluptas, minus a quae. Unde possimus laudantium, repellendus ex dolorum esse voluptate, quia officiis non odio voluptates cumque mollitia perspiciatis animi debitis iure, recusandae quidem perferendis tenetur nisi omnis sed officia reiciendis! Ratione nam blanditiis deleniti quae alias, accusantium possimus doloribus quam rem rerum tempore voluptatum sed voluptatibus? Repudiandae hic sit perferendis corporis commodi vel, expedita inventore autem cumque! Amet voluptas illo voluptatum est in tempore tempora reiciendis, sint suscipit labore delectus consectetur libero optio alias, dicta natus. Officia ratione qui reiciendis illum beatae illo doloribus et dolorem. Harum cumque voluptates neque quo delectus eligendi laudantium, nostrum voluptatum, beatae hic molestiae quasi tempora fugiat enim quod illo sunt amet eius eveniet alias sed perspiciatis, quia dolorum. Maxime, modi quos totam porro aliquam facere voluptates! Aliquid blanditiis, officia tenetur id velit dignissimos ad praesentium debitis quas! Ad facilis iste ut vero, illum, est veritatis dolorum ducimus, maiores consequuntur similique alias. Atque, eos dicta!'
        ]
    ];
    return view('blog', [
        'title' => 'Blog',
        'posts' => $blog_post
    ]);
});
Route::get('blog/{slug}', function ($slug) {
    $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Hilmi Maulana',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tempora dignissimos unde inventore deserunt ducimus. A modi qui, blanditiis, id vitae aspernatur sed temporibus exercitationem ex impedit optio in illo asperiores suscipit, culpa repellendus aliquam facere illum dolore! Sunt voluptatum totam, neque ratione, architecto illum dolore nulla, fugit ducimus quisquam cupiditate assumenda repudiandae esse harum tempore pariatur adipisci magnam sapiente qui. Et deserunt distinctio saepe soluta similique nemo illum, doloribus optio, repellendus ut nostrum! Cupiditate fugiat illum incidunt explicabo ad, quam beatae sequi dolore, nemo necessitatibus voluptates perspiciatis deleniti ea inventore fuga consectetur sed blanditiis laborum libero, molestiae eius eveniet?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Rendy Wirawinata',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt minima similique quas, dolor totam necessitatibus nobis repudiandae id rerum atque iste, suscipit odio amet optio perferendis magni! Impedit, hic esse velit eaque quia perferendis sint reprehenderit repellat repellendus reiciendis, aliquid voluptatem vero accusamus earum nisi nihil in architecto voluptas, minus a quae. Unde possimus laudantium, repellendus ex dolorum esse voluptate, quia officiis non odio voluptates cumque mollitia perspiciatis animi debitis iure, recusandae quidem perferendis tenetur nisi omnis sed officia reiciendis! Ratione nam blanditiis deleniti quae alias, accusantium possimus doloribus quam rem rerum tempore voluptatum sed voluptatibus? Repudiandae hic sit perferendis corporis commodi vel, expedita inventore autem cumque! Amet voluptas illo voluptatum est in tempore tempora reiciendis, sint suscipit labore delectus consectetur libero optio alias, dicta natus. Officia ratione qui reiciendis illum beatae illo doloribus et dolorem. Harum cumque voluptates neque quo delectus eligendi laudantium, nostrum voluptatum, beatae hic molestiae quasi tempora fugiat enim quod illo sunt amet eius eveniet alias sed perspiciatis, quia dolorum. Maxime, modi quos totam porro aliquam facere voluptates! Aliquid blanditiis, officia tenetur id velit dignissimos ad praesentium debitis quas! Ad facilis iste ut vero, illum, est veritatis dolorum ducimus, maiores consequuntur similique alias. Atque, eos dicta!'
        ]
    ];
    $single_post = [];
    foreach($blog_post as $bp){
        if($bp['slug'] == $slug){
            $single_post = $bp;
        }
    }
    return view('single_blog', [
        'title' => 'Blog',
        'post' => $single_post
    ]);
});
