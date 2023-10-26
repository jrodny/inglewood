<?php


use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;




//dashboard index or main view
use App\Http\Controllers\Pages\DashboardController;
//end dashboard

//admin dashboard
use App\Http\Controllers\Admin\AdminDashBoardController;
//end admin dashboard

//crm controllers
use App\Http\Controllers\Pages\CrmController;
use App\Http\Controllers\Pages\Crm\FindCustomerController;
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
        Route::prefix('admin')->group(function () {
            Route::get('/', AdminDashBoardController::class)->name('admin-dashboard');
        });
    });

    Route::prefix('crm')->group(function () {
        Route::get('/', CrmController::class)->name('crm');
        Route::get('/find_customer', FindCustomerController::class)->name('find_customer');
    });
});


Route::get('/perm', [PermissionController::class, 'index']);
