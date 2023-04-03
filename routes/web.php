<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MigrationController;
use App\Http\Controllers\GeneralController;


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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/blog',  [GeneralController::class, 'blog']);
Route::get('/blog/{id}',  [GeneralController::class, 'postDetail']);

//MIGRATION
Route::get('/migration/up',  [MigrationController::class, 'up']);

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin', [HomeController::class, 'adminPanel'])->name('admin');

    //Settings
    Route::get('/admin/settings', '\App\Http\Controllers\Admin\SettingsController@index');
    Route::post('/admin/settings', '\App\Http\Controllers\Admin\SettingsController@index');
    Route::post('/admin/passwordchange', '\App\Http\Controllers\Admin\SettingsController@updatePassword')->name('updatePassword');

    //image
    Route::get('/admin/image/{model}/{id}', '\App\Http\Controllers\Admin\ImageController@index');
    Route::post('/admin/image/upload', '\App\Http\Controllers\Admin\ImageController@upload');
    Route::get('/admin/image/delete/{model}/{id}', '\App\Http\Controllers\Admin\ImageController@delete');

    //articles
    Route::get('/admin/article/create', '\App\Http\Controllers\Admin\ArticleController@create');
    Route::post('/admin/article/store', '\App\Http\Controllers\Admin\ArticleController@store')->name('createArticle');

    Route::get('/admin/article/edit/{id}', '\App\Http\Controllers\Admin\ArticleController@edit');
    Route::post('/admin/article/update', '\App\Http\Controllers\Admin\ArticleController@update')->name('updateArticle');
    Route::get('/admin/article/delete/{id}', '\App\Http\Controllers\Admin\ArticleController@delete');
    Route::get('/admin/articles/{page?}/{orderBy?}/{value?}/{how?}', '\App\Http\Controllers\Admin\ArticleController@index')->name('indexArticles');

});
