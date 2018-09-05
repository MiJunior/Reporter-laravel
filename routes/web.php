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

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin','PagesController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('ban', 'BansController@index');

Route::get('ban/add', 'BansController@add');
Route::resource('role', 'RoleController');
Route::post('ban', 'BansController@store');

Route::resource('user', 'UserController');
Route::resource('ban', 'BansController');

Route::get('/admin', [
    'as' => 'admin.index',
    'middleware'=>'role:admin',
    'uses' => function () {
        $title = "route";
        return view('admin.index', compact('title'));
    }
]);