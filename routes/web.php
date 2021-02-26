<?php
use App\Post;
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
    return view('home');
});
Route::get('/about_me', function () {
    return view('about_me');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/skills', function () {
    return view('skills');
});

Route::get('/create', function () {
    $post = new Post;
    $post->title="Model title";
    $post->body="Model body";
    $post->save();
});
