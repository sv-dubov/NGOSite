<?php

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

Route::get('/', 'HomeController@index');
Route::get('/posts', 'PostController@index');
Route::get('/posts/{slug}', 'PostController@show')->name('post.show');
Route::get('/posts/tag/{slug}', 'PostController@tag')->name('ptag.show');
Route::get('/posts/category/{slug}', 'PostController@category')->name('pcategory.show');
Route::get('/team', 'TeamController@index')->name('team.index');
Route::get('/member/{slug}', 'TeamController@show')->name('member.show');
Route::get('/projects', 'ProjectController@index');
Route::get('/reports', 'ReportController@index');
Route::get('/about', 'AboutUsController@index');
Route::get('/contact', 'ContactController@contactForm');
Route::post('/contact', 'ContactController@contact');
Route::get('/gallery', 'GalleryController@index')->name('gallery.index');
//Route::get('/gallery/{id}', 'GalleryController@show')->name('gallery.show');
Route::get('/gallery/{slug}', 'GalleryController@show')->name('gallery.show');
Route::get('/photo/{id}', 'GalleryController@photo')->name('gallery.photo');
Route::get('/videos', 'VideoController@index');
Route::get('/videos/{slug}', 'VideoController@show')->name('videos.show');
Route::get('/videos/tag/{slug}', 'VideoController@tag')->name('vtag.show');
Route::get('/videos/category/{slug}', 'VideoController@category')->name('vcategory.show');
Route::get('/articles', 'ArticleController@index');
Route::get('/articles/{slug}', 'ArticleController@show')->name('article.show');
Route::get('/articles/tag/{slug}', 'ArticleController@tag')->name('atag.show');
Route::get('/articles/category/{slug}', 'ArticleController@category')->name('acategory.show');

Route::group(['middleware'	=>	'auth'], function(){
    Route::get('/profile', 'ProfileController@index');
	Route::post('/profile', 'ProfileController@store');
	Route::get('/logout', 'AuthController@logout');
});

Route::group(['middleware'	=>	'guest'], function(){
	Route::get('/register', 'AuthController@registerForm');
	Route::post('/register', 'AuthController@register');
	Route::get('/login','AuthController@loginForm')->name('login');
	Route::post('/login', 'AuthController@login');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware'	=>	'admin'], function () {
    Route::get('/users/toggle/{id}', 'UsersController@toggle');
    Route::get('/users/toggleEditor/{id}', 'UsersController@toggleEditor');
    Route::get('/users/status/{id}', 'UsersController@status');
    Route::resource('/about', 'AboutController');
    Route::resource('/members', 'MembersController');
    Route::resource('/albums', 'AlbumsController');
    Route::resource('/projects', 'ProjectsController');
    Route::resource('/reports', 'ReportsController');
    Route::resource('/facts', 'FactsController');
    Route::resource('/contacts', 'ContactsController');
    Route::resource('/missions', 'MissionController');
    Route::get('/contacts/{id}', 'ContactsController@show')->name('contacts.show');
    Route::get('/contacts/status/{id}', 'ContactsController@status');
    Route::get('/photos/create/{id}', 'PhotosController@create')->name('photos.create');
    Route::get('/photos/edit/{id}', 'PhotosController@edit')->name('photos.edit');
    Route::put('/photos/update/{id}', 'PhotosController@update')->name('photos.update');
    Route::post('/photos/store', 'PhotosController@store')->name('photos.store');
    Route::get('/photos/{id}', 'PhotosController@show')->name('photos.show');
    Route::delete('/photos/{id}/destroy', 'PhotosController@destroy')->name('photos.destroy');
    Route::get('/image-slider', 'ImageSlidersController@index')->name('image-slider.index');
    Route::post('/image-slider', 'ImageSlidersController@upload');
    Route::delete('/image-slider/{id}', 'ImageSlidersController@destroy');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', ['middleware' => ['admin','editor']]], function () {
    Route::get('/', 'DashboardController@index');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/tags', 'TagsController');
    Route::resource('/posts', 'PostsController');
    Route::resource('/articles', 'ArticlesController');
    Route::resource('/videoposts', 'VideopostsController');
    Route::resource('/users', 'UsersController');
});
