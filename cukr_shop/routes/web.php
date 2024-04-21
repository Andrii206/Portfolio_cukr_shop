<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
 
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'MainController')->name('main');
    Route::get('/toBasket/{post}', 'Post\ToBasketController@__invoke')->name('toBasket');
    Route::group(['namespace'=>'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function(){
        Route::delete('/postUser/{postUser}', 'PostUser\DestroyController@__invoke')->name('admin.postUser.delete');
        Route::get('', 'AdminController')->name('admin.admin');
        Route::group(['namespace'=>'Post'], function(){
            Route::get('/posts', 'IndexController')->name('admin.post.index');
            Route::post('/post', 'StoreController')->name('admin.post.store');
            Route::get('/post/{post}', 'ShowController')->name('admin.post.show');
            Route::get('/post/{post}/edit', 'EditController')->name('admin.post.edit');
            Route::patch('/post/{post}', 'UpdateController')->name('admin.post.update');
            Route::delete('/post/{post}', 'DestroyController')->name('admin.post.delete');
            Route::get('/posts/create', 'CreateController')->name('admin.post.create'); 
        });
    });
});

Auth::routes();
