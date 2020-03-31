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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adminhome', 'HomeController@admin')->name('adminhome');

Route::get('/hashpasswordallusers', [
    'uses' => 'ProfileController@hashpasswordallusers',
    'as' => 'hashpasswordallusers'
]);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/profile.edit', [
    'uses' => 'ProfileController@edit',
    'as' => 'profile.edit'
]);

Route::post('/profile.update', [    
    'uses' => 'ProfileController@update',
    'as' => 'profile.update'
]);


Route::post('/profile.password', [
    'uses' => 'ProfileController@password',
    'as' => 'profile.password'
]);

Route::get('/school.edit', [
    'uses' => 'SchoolController@edit',
    'as' => 'school.edit'
]);

Route::post('/profile.update', [
    'uses' => 'ProfileController@update',
    'as' => 'profile.update'
]);

Route::get('/student.view', [
    'uses' => 'StudentController@view',
    'as' => 'data.student'
]);

Route::get('/user.index', [
    'uses' => 'UserController@index',
    'as' => 'user.index'
]);

Route::get('/himpunanku', [
    'uses' => 'HimpunanController@index',
    'as' => 'himpunanku'
]);

Route::get('/achievement', [
    'uses' => 'HimpunanController@achievement',
    'as' => 'achievement'
]);

Route::get('/fmipa', [
    'uses' => 'HimpunanController@fmipa',
    'as' => 'fmipa'
]);

Route::get('/himatika', [
    'uses' => 'HimpunanController@himatika',
    'as' => 'himatika'
]);

Route::get('/himaka', [
    'uses' => 'HimpunanController@himaka',
    'as' => 'himaka'
]);

Route::get('/hifi', [
    'uses' => 'HimpunanController@hifi',
    'as' => 'hifi'
]);

Route::get('/himbio', [
    'uses' => 'HimpunanController@himbio',
    'as' => 'himbio'
]);

Route::get('/himasta', [
    'uses' => 'HimpunanController@himasta',
    'as' => 'himasta'
]);

Route::get('/pedra', [
    'uses' => 'HimpunanController@pedra',
    'as' => 'pedra'
]);

Route::get('/himatif', [
    'uses' => 'HimpunanController@himatif',
    'as' => 'himatif'
]);

Route::get('/hmte', [
    'uses' => 'HimpunanController@hmte',
    'as' => 'hmte'
]);

Route::get('/himaktu', [
    'uses' => 'HimpunanController@himaktu',
    'as' => 'himaktu'
]);

Route::get('/searchfmipa', [
    'uses' => 'HimpunanController@searchfmipa',
    'as' => 'searchfmipa'
]);

Route::get('/searchhimatika', [
    'uses' => 'HimpunanController@searchhimatika',
    'as' => 'searchhimatif'
]);

Route::get('/searchhimaka', [
    'uses' => 'HimpunanController@searchhimaka',
    'as' => 'searchhimaka'
]);

Route::get('/searchhifi', [
    'uses' => 'HimpunanController@searchhifi',
    'as' => 'searchhifi'
]);

Route::get('/searchhimbio', [
    'uses' => 'HimpunanController@searchhimbio',
    'as' => 'searchhimbio'
]);

Route::get('/searchhimasta', [
    'uses' => 'HimpunanController@searchhimasta',
    'as' => 'searchhimasta'
]);

Route::get('/searchpedra', [
    'uses' => 'HimpunanController@searchpedra',
    'as' => 'searchpedra'
]);

Route::get('/searchhimatif', [
    'uses' => 'HimpunanController@searchhimatif',
    'as' => 'searchhimatif'
]);

Route::get('/searchhmte', [
    'uses' => 'HimpunanController@searchhmte',
    'as' => 'searchhmte'
]);

Route::get('/searchhimaktu', [
    'uses' => 'HimpunanController@searchhimaktu',
    'as' => 'searchhimaktu'
]);