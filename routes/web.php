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
use App\Mail\ContactMessageCreated;

Route::name('home_path')->get('/', 'PagesController@home');

Route::get('/text-email', function(){
    return new ContactMessageCreated(
        'haroun',
        'haroun@gmail.com',
        'hello worled im her'
    );
});

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);

Route::get('/contact', [
    'as' => 'contact.create',
    'uses' => 'ContactController@create'
]);

Route::post('/contact', [
    'as' => 'contact.store',
    'uses' => 'ContactController@store'
]);
