<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 
use App\Models\Post; 
use App\Models\User; 

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

// Route::get('/', function () {
//     return view('welcome');
// });// Route::get('/test', function () {
//     return view('test');
// });
// Route::get('/post/{id}', function($id) {
//     return $id;
// });
// Route::get('named-route', array('as' => 'admin.test', function() {
//     $url = route('admin.test');
//     return $url;
// }));

// Route::get('/post/{id}', [PostController::class, 'index']);
Route::get('/post/contact', [PostController::class, 'contact']);
Route::get('/post/{id}', [PostController::class, 'contact_id']);
Route::resource('posts', PostController::class);

//ELOQUENT
//FUNCTION
Route::get('/read', function() {
    //RETURN ALL INSTANCES OF MODEL
    // $posts = Post::all();
    // foreach($posts as $post) {
    //     return $post->title;
    // }
    //FIND AN INSTANCE
    // $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
    //CREATING OBJECT AND PUSHING TO ARRAY
    // $posts = [];
    // $postsCheck = Post::all();
    // foreach($postsCheck as $p) {
    //     $title = $p->title;
    //     $body = $p->body;
    //     $object = (object) ['title' => $title, 'content' => $body];
    //     $posts[] = $object;
    // }
    // return $posts;
    //RETURN MULTIPLE CONDITIONAL INSTANCES
    // $posts = Post::where('title', 'lorem ipsum 2')->get();
    // return $posts;
    
    return User::find(1)->post()->get();
});

//CONTROLLER
