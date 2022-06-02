<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PrivilegeController;
use App\Http\Controllers\InstallmentController;
use App\Http\Controllers\MainProjectController;
use App\Http\Controllers\ManagerFundController;
use App\Http\Controllers\PaymentKindController;
use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\UnitStatusDateController;

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
Route::post("/logout",[LogoutController::class,"store"])->name("logout");

Route::controller(AdminController::class)->group(function () {
    Route::get('/index', 'index')->name('index');
});

                // ManagerFundController start
                // ManagerFundController start
                // ManagerFundController start
Route::controller(PrivilegeController::class)->group(function () {
    Route::get('/privilegesIndex', 'index')->name('privilegesIndex');
    Route::get('/addPrivilege', 'create')->name('addPrivilege');
    Route::post('/insertPrivilege', 'store')->name('insertPrivilege');
    Route::get('/editPrivilege/{id}', 'edit')->name('editPrivilege');
    Route::put('updatePrivilege/{id}', 'update')->name('updatePrivilege');
    Route::get('/showPrivilege/{id}', 'show')->name('showPrivilege');
});


                // ManagerFundController end
                // ManagerFundController end
                // ManagerFundController end



                // ManagerFundController start
                // ManagerFundController start
                // ManagerFundController start
Route::controller(ManagerFundController::class)->group(function () {
    Route::get('/managerFundIndex', 'index')->name('managerFundIndex');
    Route::get('/addManagerFund', 'create')->name('addManagerFund');
    Route::post('/insertManagerFund', 'store')->name('insertManagerFund');
    Route::get('/searchManagerFund/{id}', 'search')->name('searchManagerFund');
    Route::get('/editManagerFund/{id}', 'edit')->name('editManagerFund');
    Route::put('updateManagerFund/{id}', 'update')->name('updateManagerFund');
    Route::get('/showManagerFund/{id}', 'show')->name('showManagerFund');
});
Route::put('/updateManagerFund', [App\Http\Controllers\ManagerFundController::class, 'update'])->name('updateManagerFund');
// Route::get('/addManagerFund', [App\Http\Controllers\ManagerFundController::class, 'index'])->name('addManagerFund');

                // ManagerFundController end
                // ManagerFundController end
                // ManagerFundController end



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
    Route::get('/addConstructions', 'createConstructionsRows')->name('addConstructions');
    Route::post('/insertMultipleConstructions', 'storeMultipleConstructions')->name('insertMultipleConstructions');
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


                // MainProjectcoController start
                // MainProjectcoController start
                // MainProjectcoController start
Route::controller(MainProjectController::class)->group(function () {
    Route::get('/main_projectsIndex', 'index')->name('main_projectsIndex');
    Route::get('/add_main_project', 'create')->name('add_main_project');
    Route::post('/insert_main_project', 'store')->name('insert_main_project');
    Route::get('/show_main_project/{id}', 'show')->name('show_main_project');
    Route::get('/search_main_project/{id}', 'search')->name('search_main_project');
    Route::get('/edit_main_project/{id}', 'edit')->name('edit_main_project');
    Route::put('update_main_project/{id}', 'update')->name('update_main_project');
    Route::get('/show_main_project/{id}', 'show')->name('show_main_project');
});
                // MainProjectcoController end
                // MainProjectcoController end
                // MainProjectcoController end


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
    Route::get('/addUnitTest', 'create')->name('addUnitTest');
    Route::get('/createUnitCustom', 'createUnitCustom')->name('createUnitCustom');
    Route::post('/insertUnit', 'store')->name('insertUnit');
    Route::post('/unitMultipleStore', 'unitMultipleStore')->name('unitMultipleStore');
    Route::get('/editUnit/{id}', 'edit')->name('editUnit')->name('editUnit');
    Route::put('updateUnit/{id}', 'update')->name('updateUnit')->name('updateUnit');
    Route::put('firstUnitPayment{id}', 'firstUnitPayment')->name('firstUnitPayment');
    Route::get('/editUnitStatus/{id}', 'editUnitStatus')->name('editUnitStatus');
    Route::put('updateUnitStatus{id}', 'updateUnitStatus')->name('updateUnitStatus');
    Route::get('deleteUnit/{id}', 'destroy');
    Route::get('/unitShow/{id}', 'show')->name('unitShow');
});
Route::get('/editUnitStatus/{id}', [App\Http\Controllers\UnitController::class, 'editUnitStatus'])->name('editUnitStatus');
Route::Put('/updateUnitStatus/{id}', [App\Http\Controllers\UnitController::class, 'updateUnitStatus'])->name('updateUnitStatus');

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
    Route::get('/financeShow/{id}', 'show')->name('financeShow');
    Route::get('/editFinance/{id}', 'edit')->name('editFinance');
    Route::put('updateFinance{id}', 'update')->name('updatFinance');
    Route::get('deleteFinance/{id}', 'destroy');
});
                // FinanceController end
                // FinanceController end
                // FinanceController end


                // paymentController start
                // paymentController start
                // paymentController start
Route::controller(PaymentController::class)->group(function () {
    Route::get('/paymentsIndex', 'index')->name('paymentsIndex');
    Route::get('/addPayment', 'create')->name('addPayment');
    Route::get('/addUnitPayment', 'createUnitPayment')->name('addUnitPayment');
    Route::post('/insertPayment', 'store')->name('insertPayment');
    Route::post('/insertUnitPayment', 'storeUnitPayment')->name('insertUnitPayment');
    Route::get('/unitPayment/{id}', 'show')->name('unitPayment');
    Route::get('/editPayment/{id}', 'edit')->name('editPayment');
    Route::put('updatePayment{id}', 'update')->name('updatPayment');
    Route::get('deletePayment/{id}', 'destroy');
});
Route::get('/addUnitPayment/{id}', [App\Http\Controllers\PaymentController::class, 'createUnitPayment'])->name('addUnitPayment');
Route::post('/insertUnitPayment', [App\Http\Controllers\PaymentController::class, 'storeUnitPayment'])->name('insertUnitPayment');

                // paymentController end
                // paymentController end
                // paymentController end


                // paymentController start
                // paymentController start
                // paymentController start
Route::controller(PaymentKindController::class)->group(function () {
    Route::get('/paymentKindsIndex', 'index')->name('paymentKindsIndex');
    Route::get('/addPaymentKind', 'create')->name('addPaymentKind');
    Route::post('/insertPaymentKind', 'store')->name('insertPaymentKind');

});


                // paymentController end
                // paymentController end
                // paymentController end



                // InstallmentController start
                // InstallmentController start
                // InstallmentController start
Route::controller(InstallmentController::class)->group(function () {
    Route::get('/installmentsIndex', 'index')->name('installmentsIndex');
    Route::get('/addInstallment', 'create')->name('addInstallment');
    Route::get('/existsInstallmentMonth', 'existsInstallmentMonth')->name('existsInstallmentMonth');
    Route::post('/insertInstallment', 'store')->name('insertInstallment');
    Route::get('/unitInstallment/{id}', 'show')->name('unitInstallment');
    Route::get('/editInstallment/{id}', 'edit')->name('editInstallment');
    Route::put('updateInstallment{id}', 'update')->name('updatInstallment');
    Route::get('deleteInstallment/{id}', 'destroy');
});
// Route::post('/insertInstallment', [App\Http\Controllers\InstallmentController::class, 'store'])->name('insertInstallment');

                // paymentController end
                // paymentController end
                // paymentController end



                // UnitStatusDateController start
                // UnitStatusDateController start
                // UnitStatusDateController start
Route::controller(UnitStatusDateController::class)->group(function () {
    Route::put('updateInstallment{id}', 'update')->name('updatInstallment');
    Route::get('deleteInstallment/{id}', 'destroy');
});
                // UnitStatusDateController end
                // UnitStatusDateController end
                // UnitStatusDateController end





