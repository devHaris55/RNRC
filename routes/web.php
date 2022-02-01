<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
})->name('welcome');



Route::get('/user', [UserController::class, 'appointment_schedule'])->name('U_appointment_schedule');

Route::get('/admin-panel', [AdminController::class, 'index'])->name('U_admin_panel');


Route::get('/cancel-appointment/{id}', [AdminController::class, 'cancel_appointment'])->name('A_cancel_appointment');
Route::get('/edit-appointment/{id}', [AdminController::class, 'edit_appointment'])->name('A_edit_appointment');
Route::get('/update-appointment/{id}', [AdminController::class, 'update_appointment'])->name('A_update_appointment');