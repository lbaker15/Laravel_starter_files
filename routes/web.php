<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 
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
// });

// Route::get('/test', function () {
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

//CONTROLLER