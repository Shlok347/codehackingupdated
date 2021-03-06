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

Auth::routes();

// Route::get('/', 'HomeController@mainIndex');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/post/{slug}', ['as'=>'home.post','uses'=>'HomeController@post']);

Route::group(['middleware'=>'admin'], function(){

  Route::get('/admin', 'AdminController@index');
  Route::resource('admin/users', 'AdminUsersController');
  Route::resource('admin/posts', 'AdminPostsController');
  Route::resource('admin/categories', 'AdminCategoriesController');
  Route::resource('admin/media', 'AdminMediasController');
  Route::resource('admin/comments', 'PostCommentsController');
  Route::resource('admin/comments/replies', 'CommentRepliesController');

  Route::delete('admin/delete/media', 'AdminMediasController@deleteMedia');

});

Route::group(['middleware'=>'auth'], function(){
  Route::Post('/comment/reply', 'CommentRepliesController@createReply');
});

//
