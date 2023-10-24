<?php


use App\Http\Controllers\Pages\DashboardController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;

//crm controllers
use App\Http\Controllers\Pages\CrmController;
use App\Http\Controllers\Pages\Crm\FindCustomerController;
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


    Route::prefix('crm')->group(function () {
        Route::get('/', CrmController::class)->name('crm');
        Route::get('/find_customer', FindCustomerController::class)->name('find_customer');
    });
});


//Route::get('/perm', [PermissionController::class, 'index']);
