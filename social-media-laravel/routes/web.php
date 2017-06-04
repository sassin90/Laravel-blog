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
use Illuminate\Http\Request;

Route::resource('/','PagesController');

Route::get('/blog/{slug}', 'PagesController@single')->where('slug','[\w\d\_\-]+');

Route::get('/blog', 'PagesController@archive');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::resource('posts','PostsController');

Route::resource('categories','CategoryController',['except' =>['create']]);

Route::resource('tags','TagController',['except' =>['create']]);

Route::get('/test', function () {
    return view('pages.test');
});

Route::get('/test1', function () {
    return view('test');
});

Route::get('/test/{name}','TestController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/news', 'PostsController@index')->name('posts');

Route::get('/news/create', 'PostsController@create')->name('create');
Route::post('/news/create', 'PostsController@store')->name('create');*/

Route::get('/koko',function(Request $request, $token = null)
    {
         return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
            
    });