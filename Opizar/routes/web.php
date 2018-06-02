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
Route::get('{reactRoutes}', function () {
    return view('welcome'); // your start view
})->where('reactRoutes', '^((?!admin|api).)*');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('admin.index');
});
	
// admin group begin
Route::group(['prefix' => 'admin'],function()
{
    //Contacts Begin
    Route::get('/contact/edit',['uses' => 'Admin\ContactController@editContact','as' => 'contactEdit']);
    Route::post('/contact/edit',['uses' => 'Admin\ContactController@editRequestContact','as' => 'contactEditRequest']);
    //END
});