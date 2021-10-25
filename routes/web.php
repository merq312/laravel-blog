<?php

use App\Models\Category;
use App\Models\Post;
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
//  \Illuminate\Support\Facades\DB::listen(function ($query) {
////    \Illuminate\Support\Facades\Log::info('foo');
//      logger($query->sql, $query->bindings);
//  });

    // with() will prevent lazy loading to avoid the N+1 problem
    return view('posts', [
        'posts' => Post::with('category')->get()
    ]);
});

// Route model binding (:slug) automatically binds view and db model
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

// Notes

// Dump and Die
// dd(...);

// Dump, Die, Debug
// ddd(...);

// Send 404
// abort(404);

// Redirect to /
// return redirect('/');

// Regex match a uri
// ->where('post', '[A-z_\-]+');
