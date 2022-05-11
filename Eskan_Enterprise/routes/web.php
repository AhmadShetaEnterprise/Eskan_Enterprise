<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\InstallmentController;
use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\Main_ProjectController;

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

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::controller(AdminController::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    // Route::get('/addCustomer', 'create')->name('addCustomer');
    // Route::post('/insertCustomer', 'store')->name('insertCustomer');

});

                // CustomerController start
                // CustomerController start
                // CustomerController start
Route::controller(CustomerController::class)->group(function () {
    Route::get('/customerIndex', 'index')->name('customerIndex');
    Route::get('/addCustomer', 'create')->name('addCustomer');
    Route::post('/insertCustomer', 'store')->name('insertCustomer');
    Route::get('/editCustomer/{id}', 'edit')->name('editCustomer');
    Route::put('updateCustomer/{id}', 'update')->name('updateCustomer');
    Route::get('/customerShow/{id}', 'show')->name('customerShow');
});
                // CustomerController end
                // CustomerController end
                // CustomerController end


                // ConstructionController start
                // ConstructionController start
                // ConstructionController start
Route::controller(ConstructionController::class)->group(function () {
    Route::get('/constructionsIndex', 'index')->name('constructionsIndex');
    Route::get('/addConstruction', 'create')->name('addConstruction');
    Route::post('/insertConstruction', 'store')->name('insertConstruction');
    Route::get('/showConstruction/{id}', 'show')->name('showConstruction');
    Route::get('/showConstructionLevels/{id}', 'showConstructionLevels')->name('showConstructionLevels');
    Route::get('/showConstructionUnits/{id}', 'showConstructionUnits')->name('showConstructionUnits');
    Route::get('/searchConstruction/{id}', 'search')->name('searchConstruction');
    Route::get('/editConstruction/{id}', 'edit')->name('editConstruction');
    Route::put('updateConstruction/{id}', 'update')->name('updateConstruction');
    Route::get('deleteConstruction/{id}', 'destroy');
});
                // ConstructionController end
                // ConstructionController end
                // ConstructionController end


                // PropertyController start
                // PropertyController start
                // PropertyController start
Route::controller(PropertyController::class)->group(function () {
    Route::get('/propertiesIndex', 'index')->name('propertiesIndex');
    Route::get('/addProperty', 'create')->name('addProperty');
    Route::get('/showProperties/{id}', 'show')->name('showProperties');
    Route::post('/insertProperty', 'store')->name('insertProperty');
    Route::get('/editProperty/{id}', 'edit')->name('editProperty');
    Route::put('updateProperty/{id}', 'update')->name('updateProperty');
    Route::get('deleteProperty/{id}', 'destroy');
});
Route::get('/showProperties/{id}', [App\Http\Controllers\PropertyController::class, 'show'])->name('showProperties');
                // PropertyController end
                // PropertyController end
                // PropertyController end


                // Main_ProjectController start
                // Main_ProjectController start
                // Main_ProjectController start
Route::controller(Main_ProjectController::class)->group(function () {
    Route::get('/main_projectsIndex', 'index')->name('main_projectsIndex');
    Route::get('/add_main_project', 'create')->name('add_main_project');
    Route::post('/insert_main_project', 'store')->name('insert_main_project');
    Route::get('/show_main_project/{id}', 'show')->name('show_main_project');
    Route::get('/search_main_project/{id}', 'search')->name('search_main_project');
    Route::get('/edit_main_project/{id}', 'edit')->name('edit_main_project');
    Route::put('update_main_project/{id}', 'update')->name('update_main_project');
    Route::get('/show_main_project/{id}', 'show')->name('show_main_project');
});
                // Main_ProjectController end
                // Main_ProjectController end
                // Main_ProjectController end


                // LevelController start
                // LevelController start
                // LevelController start
Route::controller(LevelController::class)->group(function () {
    Route::get('/levelsIndex', 'index')->name('levelsIndex');
    // Route::get('/showLevel/{id}/{constructions}', 'showLevel')->name('showLevel');
    Route::get('singleLevel{id}', 'show')->name('singleLevel');
    Route::get('/addLevel', 'create')->name('addLevel');
    Route::post('/insertLevel', 'store')->name('insertLevel');
    Route::get('/editLevel/{id}', 'edit')->name('editLevel');
    Route::put('updateLevel/{id}', 'update')->name('updateLevel');
});
Route::get('/showLevel{id}/{constructions}', [App\Http\Controllers\LevelController::class, 'showLevel'])->name('showLevel');
Route::get('showLevel/{id}', function ($id) {
});
// Route::get('/showLevel/{id}'         , 'LevelController@showLevel');
Route::get('showLevel/{id}/{constructions}'  , [LevelController::class, 'showLevel']);
                // LevelController end
                // LevelController end
                // LevelController end


                // UnitController start
                // UnitController start
                // UnitController start
Route::controller(UnitController::class)->group(function () {
    Route::get('/unitsIndex', 'index')->name('unitsIndex');
    Route::get('/addUnit', 'create')->name('addUnit');
    Route::post('/insertUnit', 'store')->name('insertUnit');
    Route::get('/editUnit/{id}', 'edit')->name('editUnit');
    Route::put('updateUnit/{id}', 'update')->name('updateUnit');
    Route::put('updateStatusUnit/{status}', 'updateStatusUnit')->name('updateStatusUnit');
    Route::get('deleteUnit/{id}', 'destroy');
    Route::get('/unitShow/{id}', 'show')->name('unitShow');
});
                // UnitController end
                // UnitController end
                // UnitController end


                // FinanceController start
                // FinanceController start
                // FinanceController start
Route::controller(FinanceController::class)->group(function () {
    Route::get('/financesIndex', 'index')->name('financesIndex');
    Route::get('/addFinance', 'create')->name('addFinance');
    Route::post('/insertFinance', 'store')->name('insertFinance');
    Route::get('/unitFinance/{id}', 'show')->name('unitFinance');
    Route::get('/editFinance/{id}', 'edit')->name('editFinance');
    Route::put('updateFinance{id}', 'update')->name('updatFinance');
    Route::get('deleteFinance/{id}', 'destroy');
});
                // FinanceController end
                // FinanceController end
                // FinanceController end


                // InstallmentController start
                // InstallmentController start
                // InstallmentController start
Route::controller(InstallmentController::class)->group(function () {
    Route::get('/installmentsIndex', 'index')->name('installmentsIndex');
    Route::get('/addInstallment', 'create')->name('addInstallment');
    Route::post('/insertInstallment', 'store')->name('insertInstallment');
    Route::get('/unitInstallment/{id}', 'show')->name('unitInstallment');
    Route::get('/editInstallment/{id}', 'edit')->name('editInstallment');
    Route::put('updateInstallment{id}', 'update')->name('updatInstallment');
    Route::get('deleteInstallment/{id}', 'destroy');
});
                // paymentController end
                // paymentController end
                // paymentController end


                // paymentController start
                // paymentController start
                // paymentController start
Route::controller(PaymentController::class)->group(function () {
    Route::get('/paymentsIndex', 'index')->name('paymentsIndex');
    Route::get('/addpayment', 'create')->name('addpayment');
    Route::post('/insertPayment', 'store')->name('insertPayment');
    Route::get('/unitPayment/{id}', 'show')->name('unitPayment');
    Route::get('/editPayment/{id}', 'edit')->name('editPayment');
    Route::put('updatePayment{id}', 'update')->name('updatPayment');
    Route::get('deletePayment/{id}', 'destroy');
});
                // paymentController end
                // paymentController end
                // paymentController end




