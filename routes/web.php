<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
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
Route::get('/duman', function () {
    return view('cv_website');
})->name('home');
Route::get('/about', function(){
    return view('about');
})->name('about');
Route::get('/contacts', function(){
    return view('contacts');
})->name('contacts');
Route::get('/post/create', function(){
    DB::table('post')->insert([
        'id'=>1,
        'title'=>'FirstPost',
        'body'=>'Some text to first post'

    ]);
});
Route::get('/post', function(){
    $post = Post::find(1);
    return $post;
});

