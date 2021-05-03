<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//posts 
// crud is baisacally
// 1. get all (GET) /api/posts
// 2. create a post (post) /api/posts
// 3. get a single (GET) /api/post/{id}
// 4. update and single (put/patch) /api/posts/{id}
// 5.delete (delete) /api/posts/{id}

Route::get('/posts', function() {
    $post = Post::create([
        'title' => 'my first post', 
        'slug' => 'my-first-post'
    ]);
    return $post;
});
Route::resource('posts', 'App\Http\Controllers\PostController');



//to create a resource (posts) in laravel
//1. create the database and migrations
//2. create  model
//2.5 create a service? Eloquent
//3. create controller to get info from database
//4. return that info

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
