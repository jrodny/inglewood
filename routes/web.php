<?php


use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;




//dashboard index or main view
use App\Http\Controllers\DashboardController;
//end dashboard

//admin dashboard
use App\Http\Controllers\Admin\AdminDashBoardController;
use App\Http\Controllers\Admin\UserController;
//end admin dashboard

//crm controllers
use App\Http\Controllers\Crm\CrmController;
use App\Http\Controllers\Crm\FindCustomerController;
use App\Http\Middleware\CheckPermission;

// end crm controllers

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

Route::get('/', function () { return view('auth.login'); })->middleware('guest');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    // middleware only admin can view and visit routes
    Route::middleware([CheckPermission::class . ':ModuleAdmin'])->group(function () {
        Route::group(['as'=> 'admin.'], function () {
            Route::get('/', AdminDashBoardController::class)->name('dashboard');

            //user
            Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
                Route::get('/', [UserController::class, 'index'])->name('index');
                Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
                Route::post('/store', [UserController::class, 'store'])->name('store');
                Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
            });
        });
    });

    Route::prefix('crm')->group(function () {
        Route::get('/', CrmController::class)->name('crm');
        Route::get('/find_customer', FindCustomerController::class)->name('find_customer');
    });
});


//Route::get('/perm', [PermissionController::class, 'index']);
