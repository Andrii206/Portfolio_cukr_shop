<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace'=>'App\Http\Controllers'], function(){
    Route::get('/', 'MainController@index')->name('main');
    Route::group(['namespace'=>'Admin', 'prefix' => 'admin'], function(){
        Route::get('', 'AdminController')->name('admin.admin');
        Route::group(['namespace'=>'Post'], function(){
            Route::get('/posts', 'IndexController')->name('admin.post.index');
            Route::post('/posts', 'StoreController')->name('admin.post.store');
            Route::get('/posts/{post}', 'ShowController')->name('admin.post.show');
            Route::get('/posts/{post}/edit', 'EditController')->name('admin.post.edit');
            Route::patch('/posts/{post}', 'UpdateController')->name('admin.post.update');
            Route::delete('/posts/{post}', 'DestroyController')->name('admin.post.delete');
            Route::get('/post/create', 'CreateController')->name('admin.post.create'); 
        });
    });
});
