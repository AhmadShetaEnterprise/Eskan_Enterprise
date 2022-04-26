<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SubPropertyController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(AdminController::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/addCustomer', 'create')->name('addCustomer');
    Route::post('/insertCustomer', 'store')->name('insertCustomer');

});
// ProjectController start
// ProjectController start
// ProjectController start
Route::controller(ProjectController::class)->group(function () {
    Route::get('/projectsIndex', 'index')->name('projectsIndex');
    Route::get('/addProject', 'create')->name('addProject');
});
// ProjectController end
// ProjectController end
// ProjectController end

// PropertyController start
// PropertyController start
// PropertyController start

Route::controller(PropertyController::class)->group(function () {
    Route::get('/propertiesIndex', 'index')->name('projectsIndex');
});
// PropertyController end
// PropertyController end
// PropertyController end

// SubPropertyController start
// SubPropertyController start
// SubPropertyController start

Route::controller(SubPropertyController::class)->group(function () {
    Route::get('/subPropertiesIndex', 'index')->name('projectsIndex');
});
// SubPropertyController end
// SubPropertyController end
// SubPropertyController end



