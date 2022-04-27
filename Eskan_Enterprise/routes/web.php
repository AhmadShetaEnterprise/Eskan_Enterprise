<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\MainProjectController;

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
// ConstructionController start
// ConstructionController start
// ConstructionController start
Route::controller(ConstructionController::class)->group(function () {
    Route::get('/constructionsIndex', 'index')->name('constructionsIndex');
    Route::get('/addProject', 'create')->name('addProject');
    Route::post('/insertConstruction', 'store')->name('insertConstruction');
    Route::get('/editConstruction/{id}', 'edit')->name('editConstruction');
});
// ConstructionController end
// ConstructionController end
// ConstructionController end

// PropertyController start
// PropertyController start
// PropertyController start

Route::controller(PropertyController::class)->group(function () {
    Route::get('/propertiesIndex', 'index')->name('constructionsIndex');
});
// PropertyController end
// PropertyController end
// PropertyController end

// MainProjectController start
// MainProjectController start
// MainProjectController start

Route::controller(MainProjectController::class)->group(function () {
    Route::get('/mainProjectsIndex', 'index')->name('constructionsIndex');
});
// MainProjectController end
// MainProjectController end
// MainProjectController end


Route::controller(UnitController::class)->group(function () {
    Route::get('/unitsIndex', 'index')->name('unitsIndex');
});
// MainProjectController end
// MainProjectController end
// MainProjectController end



