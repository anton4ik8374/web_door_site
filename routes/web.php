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


#start tester
    Route::resource('/pay', 'SberbanckController');
    Route::get('/', function () {
        return view('vue.welcome');
    });
    Route::get('/lesson2', 'VueController@test');
    Route::get('/component', 'VueController@index');
    Route::get('/ya', function () {
        return view('ya');
    });
    Route::get('/event', 'EventController@index');
#end tester
    Route::get('/', function () {
        return view('i');
    })->name('home');

    Auth::routes();

    Route::middleware('auth')->group(function () {
        Route::middleware('admin')->group(function () {
            Route::get('/admin', 'Admin\AdminController@index')->name('admin');
            Route::resource('/technology', 'TechnologyController');
        });
        Route::resource('/user', 'UserController');
        Route::get('/exit', function () {
            Auth::logout();
            return redirect('/');
        })->name('exit');
    });
