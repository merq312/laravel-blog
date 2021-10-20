<?php

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
    return view('posts', [
        'posts' => Post::all()
    ]);
});

// Route model binding automatically binds view and db model
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
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
