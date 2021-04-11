<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;


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
    return view('welcome');
})->name('welcome');
Route::get('/duman/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('cv_website');
})->name('home');
Route::get('/about/{lang}', function($lang){
    App::setlocale($lang);
    return view('about');
})->name('about');
Route::get('/contacts/{lang}', function($lang){
    App::setlocale($lang);
    return view('contacts');
})->name('contacts');
Route::get('/post/create', function(){
    DB::table('post')->insert([
        'id'=>2,
        'title'=>'SecondtPost',
        'body'=>'Also text to post'

    ]);
});
Route::get('/post', function(){
    $post = Post::find(2);
    return $post;
});

Route::get('/blog/index', [BlogController::class, 'index']);
Route::get('/blog/create', function(){
    return view('blog.create');
});
Route::post('/blog/create', [BlogController::class, 'store'])->name('add');
Route::get('post/{id}', [BlogController::class, 'get_post']);
