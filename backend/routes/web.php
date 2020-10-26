<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    return redirect()->route('employees');
});

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}/update', [EmployeeController::class, 'update'])->name('employees.update');
