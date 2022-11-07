<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; //add ProductController
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/products', 'ProductController@index')->name('index');
Route::get('/create', 'ProductController@create')->name('create');
Route::post('store/', 'ProductController@store')->name('store');
Route::get('show/{product}', 'ProductController@show')->name('show');
Route::get('edit/{product}', 'ProductController@edit')->name('edit');
Route::put('edit/{product}','ProductController@update')->name('update');
Route::delete('/{product}','ProductController@destroy')->name('destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
