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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/login', function () {
    return view('admin.admin_login');
});

Route::get('/register', function () {
    return view('admin.admin_register');
});

Route::get('/', [
  'uses' => 'PropertyController@index',
  'as' => 'property.index',
]);

Route::get('/property/show', [
  'uses' => 'PropertyController@property',
  'as' => 'properties.show',
]);

Route::get('/single', function () {
    return view('frontend.property');
});

Route::get('/news_events', function () {
    return view('frontend.news_events');
});

Route::get('/news_event', function () {
    return view('frontend.news_event');
});

Route::get('/about_us', function () {
    return view('frontend.about_us');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});
