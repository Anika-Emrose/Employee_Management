<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use App\models\Employeeadd;
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

Route::get('/',[HomeController::class,"index"])->name('home');

Route::get('/shop-page',[HomeController::class,"shop"])->name('shop');
Route::get('/single-product',[HomeController::class,"singleproduct"])->name('singleproduct');
Route::get('/cart-page',[HomeController::class,"cart"])->name('cart');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[AdminController::class,"index"])->name('dashboard');
    Route::get('/add-employee',[AdminController::class,"addEmployee"])->name('add.employee');
    Route::post('/store-employee',[AdminController::class,"store"])->name('store.employee');
    Route::get('/employee-list',[AdminController::class,"employeelist"])->name('employee.list');
    Route::get('/employee-details',[AdminController::class,"employeeDetails"])->name('employee.details');
    Route::get('/employee-contact',[AdminController::class,"employeeContact"])->name('employee.contact');
    Route::get('/edit-employee/{p}', [AdminController::class, "pedit"])->name('employee.edit');
    Route::post('/update-employee/{p}', [AdminController::class, "pupdate"])->name('employee.update');
    Route::get('/delete-employee/{p}', [AdminController::class, "pdelete"])->name('employee.delete');
    
});
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard',[Controller::class,"index"])->name('dashboard');
//     Route::get('/add-employee',[Controller::class,"addEmployee"])->name('add.employee');
//     Route::post('/store-employee',[Controller::class,"store"])->name('store.employee');
//     Route::get('/employee-list',[Controller::class,"employeelist"])->name('employee.list');
//     Route::get('/employee-details',[Controller::class,"employeeDetails"])->name('employee.details');
//     Route::get('/employee-contact',[Controller::class,"employeeContact"])->name('employee.contact');
    
// });
