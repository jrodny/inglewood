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
    Route::middleware([CheckPermission::class . ':ModuleAdmin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', AdminDashBoardController::class)->name('dashboard');
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
        Route::put('/user/change-status/{id}', [UserController::class, 'updateStatus'])->name('user.change-status');
    });

    Route::prefix('crm')->group(function () {
        Route::get('/', CrmController::class)->name('crm');
        Route::get('/find_customer', FindCustomerController::class)->name('find_customer');
    });
});


//Route::get('/perm', [PermissionController::class, 'index']);
