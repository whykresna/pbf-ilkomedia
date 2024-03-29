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
    return redirect('/login');
});

//Route::get('/', [
//    'as' => 'login',
//    'uses' => 'Auth\LoginController@showLoginForm'
//]);
//Route::post('/', [
//    'as' => '',
//    'uses' => 'Auth\LoginController@login'
//]);

Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);

Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);

Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
    'as' => 'password.update',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...
Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
    'as' => '',
    'uses' => 'Auth\RegisterController@register'
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chat', 'ChatController@index')->name('chat');

Route::get('/chat/{id}', 'ChatController@getChat')->name('chats');

Route::post('chat', 'ChatController@sendChat');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::post('/profile', 'ProfileController@update_profile');