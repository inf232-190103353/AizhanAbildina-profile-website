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

Route::get('/post/create', function () {
    $post = new Post;
    $post->title="Laravel's Market Share";
    $post->body="The companies using Laravel are most often in information technology services, real estate, and the retail industry.

                 Now, let’s learn some of the technical advantages of Laravel and why it is still the best PHP framework
                 to use in 2020 for software developers.";
    $post->save();
});


Route::get('/post', function () {
    $posts = Post :: all();
    foreach($posts as $post){
    echo $post -> id.' ) ';
    echo $post -> title.' ||| ';
    echo $post -> body;
    echo"<br>";
    }
});
