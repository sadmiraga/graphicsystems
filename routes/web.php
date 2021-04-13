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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::get('/test', 'adminController@test');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mainLayout', function () {
    return view('layouts.mainLayout');
});


Route::get('/index', 'HomeController@customIndex');
Route::get('/show-machines-by', 'HomeController@showMachinesBy');
Route::get('/show-machine', 'HomeController@showMachine');



Route::middleware(['auth'])->group(function () {

    Route::get('/admin', 'adminController@dashboard');

    //machine routes
    Route::get('/new-machine', 'machineController@newMachine');
    Route::post('/new-machine-exe', 'machineController@newMachineExe');


    //categories
    Route::get('/categories', 'categoriesController@index');
    Route::post('/add-category', 'categoriesController@addCategory');
    Route::get('/deleteCategory/{categoryID}', 'categoriesController@deleteCategory');
});
