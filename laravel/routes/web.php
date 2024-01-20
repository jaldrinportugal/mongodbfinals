<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[RegistrationController::class,'index'])->name('aldrin');
Route::post('/save-registrations',[RegistrationController::class, 'save_registrations'])->name('saveregistration');
Route::get('/delete-registrations/{id}', [RegistrationController::class, 'delete_registrations'])->name('removeregistrations');
Route::get('/update-registrations/{id}', [RegistrationController::class, 'update_registrations'])->name('updateregistrations');
Route::post('/save-updated-registrations', [RegistrationController::class, 'save_updated_registrations'])->name('saveUpdatedregistrations');