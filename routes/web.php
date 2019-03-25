<?php

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

Route::get('/', 'HomeController@index');
Route::get('/articles', 'HomeController@articles');
Route::get('/articles2', 'HomeController@articles2');
Route::get('/articles3', 'HomeController@articles3');
Route::get('/article1', 'HomeController@article1');
Route::get('/chat', 'HomeController@chat');
Route::get('/register', 'HomeController@register');
Route::get('/aboutUs', 'HomeController@aboutUs');
Route::get('/clicker', 'HomeController@clicker');
Route::get('/calculator', 'HomeController@calculator');


// Route::post('/create', 'MessageController@create');

// Route::get('/', function() {
//     return view ('catpage/home')->with(['page' => 'index']);
// });

// Route::get('/articles', function() {
//     return view ('catpage/articles')->with(['page' => 'articles']);
// });

// Route::get('/articles1', function() {
//     return view ('catpage/articles1')->with(['page' => 'articles1']);
// });

// Route::get('/chat', function() {
//     return view ('catpage/chat')->with(['page' => 'chat']);
// });

// Route::get('/about_us', function() {
//     return view ('catpage/about_us')->with(['page' => 'about_us']);
// });

// Route::get('/404', function() {
//     return view ('catpage/404')->with(['page' => '404']);
// });

// Route::get('/register', function() {
//     return view ('catpage/register')->with(['page' => 'register']);
// });


// Route::post('/register', 'AccountController@storeUser');

// Route::post('/chat/save-message', 'AccountController@saveChatMessage');

// Route::get('/chat/get-messages', 'AccountController@getChatMessages');

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function() {
//     return 'articles page';
// });
