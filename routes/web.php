<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

   Route::get('/','HomeController@index')->name('/');
   Route::get('/categories-for-blog/{slug}','HomeController@single_category')->name('single_category');
   Route::get('/categories-for-blog/single/{id}','HomeController@readmore_single')->name('readmore');

   Auth::routes();

   Route::middleware('auth')->group(function(){
      Route::get('/dashboard', 'AdminController@index')->name('admin_dashboard');
      Route::get('/view-users', 'AdminController@view_users')->name('view_users');
      Route::get('/assign-roles/{id}','AdminController@assign_roles')->name('assign-role');
      Route::put('/assign-roles/assigned/{id}','AdminController@assigned')->name('assigned');
      Route::delete('/assign-roles/detached/{id}','AdminController@detached')->name('detached');
      Route::get('/view-user-roles','AdminController@view_roles_user')->name('view-user-roles');
   });


   Route::middleware('auth')->group(function() {
      Route::get('/add-posts','PostController@add_posts')->name('add-posts');
      Route::post('/add-posts/check','PostController@store')->name('checked');
      Route::get('/not-published-blog','PostController@view_blog_not')->name('view-blog-not');
      Route::put('/view-blog/publish-this-blog/{id}','PostController@publish')->name('publish');
      Route::get('/view-blog/published-blogs','PostController@Published_blog')->name('published-blog-view');
      Route::get('/view-all-blogs','PostController@view_blogs')->name('total-blogs');
      Route::delete('/view-all-blogs/delete/{id}','PostController@delete')->name('delete-blog');
   });

   Route::middleware(['auth','web'])->group(function() {
      Route::post('/create_category','CategoryController@create')->name('create-category');
      Route::get('/create-view-categories','CategoryController@category')->name('view-create-category');
      Route::delete('/create-view-categories/{id}','CategoryController@delete')->name('delete-category');
   });

   Route::middleware('auth')->group(function() {
      Route::get('/view-roles','RoleController@index')->name('role-view');
      Route::post('/create-roles','RoleController@create')->name('create-role');
      Route::delete('/create-roles/{id}','RoleController@delete')->name('delete-role');
   });
