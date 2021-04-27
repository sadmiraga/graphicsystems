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




Auth::routes();


Route::get('/test', 'adminController@test');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mainLayout', function () {
    return view('layouts.mainLayout');
});

//display routes
Route::get('/', 'displayController@customIndex');
Route::get('/stocklist/{categoryID}/{manufacturerID}', 'displayController@showMachinesBy');
Route::get('/show-machine/{machineID}', 'displayController@showMachine');
Route::get('/references', 'displayController@references');

Route::get('/search/{query}', 'displayController@search');

Route::get('/services', 'HomeController@services');
Route::get('/about-us', 'HomeController@about');

Route::get('/newSubscriber/{type}/{email}', 'adminController@newSubscriber');

Route::post('/send-machine-inquiry', 'shareController@sendMachineInquiry');


Route::middleware(['adminMiddleware'])->group(function () {

    Route::get('/admin', 'adminController@dashboard');

    //share routes
    Route::get('/share-machine/{machineID}', 'shareController@shareMachine');
    Route::post('share-machine-exe', 'shareController@shareMachineExe');
    Route::get('/newsletter', 'shareController@newsletter');
    Route::post('/send-newsletter', 'shareController@sendNewsletter');

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

    //search
    Route::get('/search-my-machines/{query}', 'searchController@searchMyMachines');

    //newsletter
    Route::get('/subscribers', 'adminController@subscribers');
    Route::get('/delete-subscriber/{subscriberID}', 'adminController@deleteSubscriber');


    //categories
    Route::get('/categories', 'categoriesController@index');
    Route::post('/add-category', 'categoriesController@addCategory');
    Route::get('/deleteCategory/{categoryID}', 'categoriesController@deleteCategory');
    Route::get('/editCategory/{categoryID}', 'categoriesController@editCategoryIndex');
    Route::post('/updateCategory', 'categoriesController@editCategoryExe');
});
