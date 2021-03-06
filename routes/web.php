<?php
use App\Post;
use Illuminate\Support\Facades\Route;
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
    return view('home');
});
Route::get('/about_me', function () {
    return view('about_me');
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




Route::get('blog', [BlogController::class, 'index' ]);
Route::get('blog/create', function(){
    return view('post.create');
});

Route::post('blog/create', [BlogController::class,'store'])->name('add-post');

Route::get('post/{id}', [BlogController::class, 'get_post']);

\Route::get('lang/{locale}', 'LocalizationController@index');
