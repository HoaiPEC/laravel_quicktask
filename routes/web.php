<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@welcome');
Route::group(['middleware' => 'localization'], function() {
    Route::get('lang/{locale}', 'LangController@index')
        ->name('lang');
});
Route::resource('tasks', 'TaskController', [
    'names' => [
        'store' => 'task.store',
        'destroy' => 'task.destroy',
    ]
]);
