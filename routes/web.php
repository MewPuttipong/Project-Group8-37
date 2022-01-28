<?php

use App\Http\Controllers\CategoryController;
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
    return view('welcome');
});

//admin
Route::get('/admin/index','AdminController@index')->name('index');

//content
Route::get('admin/content/index','Admin\Content\ContentController@index')->name('content.index');
Route::get('admin/content/addcontent','Admin\Content\ContentController@add')->name('content.addcontent');
Route::get('admin/content/editcontent/{id}','Admin\Content\ContentController@edit')->name('content.editcontent');
Route::post('admin/content/addcontent','Admin\Content\ContentController@create')->name('content.create');
Route::get('admin/content/delete/{id}','Admin\Content\ContentController@destroy');
Route::post('admin/content/update/{id}','Admin\Content\ContentController@update');

//user
Route::get('admin/users/index','Admin\Users\UserController@index')->name('user.index');
Route::get('admin/users/adduser','Admin\Users\AddUserController@add')->name('user.adduser');
Route::post('admin/users/edituser','Admin\Users\AddUserController@create')->name('user.create');
Route::get('admin/users/delete/{id}','Admin\Users\UserController@destroy');
Route::get('admin/users/edit/{id}','Admin\Users\UserController@edit');
Route::post('admin/users/update/{id}','Admin\Users\UserController@update');

//service
Route::get('admin/service/index','Admin\Service\ServiceController@index')->name('service.index');
Route::get('admin/service/addservice','Admin\Service\AddServiceController@add')->name('service.addservice');
Route::post('admin/service/addservice','Admin\Service\AddServiceController@create')->name('service.create');
Route::get('admin/service/delete/{id}','Admin\Service\ServiceController@destroy');
Route::get('admin/service/edit/{id}','Admin\Service\ServiceController@edit');
Route::post('admin/service/update/{id}','Admin\Service\ServiceController@update');

//background
Route::get('admin/background/index','Admin\Background\BackgroundController@index')->name('background.index');
Route::get('admin/background/addbackground','Admin\Background\BackgroundController@add')->name('background.addbackground');
Route::get('admin/background/editbackground/{id}','Admin\Background\BackgroundController@edit')->name('background.editbackground');
Route::post('admin/background/addbackground','Admin\Background\BackgroundController@create')->name('background.create');
Route::get('admin/background/delete/{id}','Admin\Background\BackgroundController@destroy');
Route::post('admin/background/update/{id}','Admin\Background\BackgroundController@update');

Route::get('/','MainController@service');

Auth::routes();

Route::get('/about','HomeController@about');
Route::get('/home', 'HomeController@index')->name('home');
