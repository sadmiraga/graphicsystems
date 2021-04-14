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


Route::get('/', 'HomeController@customIndex');
Route::get('/show-machines-by', 'HomeController@showMachinesBy');
Route::get('/show-machine', 'HomeController@showMachine');
Route::get('/references', 'HomeController@references');



Route::middleware(['auth'])->group(function () {

    Route::get('/admin', 'adminController@dashboard');

    //machine routes
    Route::get('/new-machine', 'machineController@newMachine');
    Route::post('/new-machine-exe', 'machineController@newMachineExe');
    Route::get('/my-machines', 'machineController@index');
    Route::get('edit-machine/{machineID}', 'machineCOntroller@editMachine');
    Route::post('/edit-machine-exe', 'machineController@editMachineExe');
    Route::get('/deleteMachine/{machineID}', 'machineController@deleteMachine');

    Route::get('/sell/{machineID}', 'machineController@sell');

    //references
    Route::get('/my-references', 'machineController@myReferences');

    //picture routes
    Route::get('/edit-machine-images/{machineID}', 'pictureController@editMachineImages');
    Route::post('/addImage', 'pictureController@addImage');
    Route::get('/deleteImage/{machineID}/{pictureID}', 'pictureController@deleteImage');

    //youtube routes
    Route::post('/updateYoutubeVideo', 'pictureController@updateYoutueVideo');
    Route::get('/remove-video/{machineID}', 'pictureController@removeVideo');


    //categories
    Route::get('/categories', 'categoriesController@index');
    Route::post('/add-category', 'categoriesController@addCategory');
    Route::get('/deleteCategory/{categoryID}', 'categoriesController@deleteCategory');
    Route::get('/editCategory/{categoryID}', 'categoriesController@editCategoryIndex');
    Route::post('/updateCategory', 'categoriesController@editCategoryExe');
});
