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

// Route::get('/', function () {
//     return view('users.home');
// });

Route::get('/', function () {
    return view('users.home');
});
Route::get('/about', function () {
    return view('users.about');
});
Route::get('/contact', function () {
    return view('users.contact');
});
//------------------User function-------------------------------------------
Auth::routes();
Route::get('/index', 'HomeController@viewAll')->name('view_all');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/profile', 'HomeController@updateProfile')->name('profile');
Route::get('/user', 'HomeController@viewIndivisual')->name('view_indivisual');
Route::post('/search', 'HomeController@search')->name('search');
Route::post('/add_request', 'RequestController@store')->name('add_request');
Route::get('/ug', function () {
    return view('users.catagory.undergraduate');
});
Route::get('/pg', function () {
    return view('users.catagory.postgraduate');
});

Route::get('/ot', function () {
    return view('users.catagory.others');
});

Route::get('/eng', function () {
    return view('users.subcatagory.engineering');
});
Route::get('/bba', function () {
    return view('users.subcatagory.bba');
});
Route::get('/civil', function () {
    return view('users.subcatagory.civil');
});
Route::get('/cse', function () {
    return view('users.subcatagory.cse');
});
Route::get('/law', function () {
    return view('users.subcatagory.law');
});
Route::get('/english', function () {
    return view('users.subcatagory.english');
});
Route::get('/sociology', function () {
    return view('users.subcatagory.sociology');
});
Route::get('/pharmacy', function () {
    return view('users.subcatagory.pharmacy');
});


Route::get('/it', function () {
    return view('users.subcatagory.information');
});

Route::get('/cp', function () {
    return view('users.subcatagory.conference');
});

Route::get('/jn', function () {
    return view('users.subcatagory.journal');
});
Route::get('/sf', function () {
    return view('users.subcatagory.software');
});
Route::get('/nv', function () {
    return view('users.subcatagory.novel');
});
//---------------Admin function----------------------------------------------

Route::get('/resource/view', 'ResourcesController@index')->name('index');
Route::post('/add_resource', 'ResourcesController@store')->name('add_resource');
Route::post('/destroy/{id}', 'ResourcesController@destroy')->name('destroy');
Route::get('/edit/{id}', 'ResourcesController@edit')->name('edit');
Route::post('/update_resource', 'ResourcesController@update')->name('update_resource');
Route::get('/request/view', 'RequestController@index')->name('view_request');
