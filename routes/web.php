<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BankController;


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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [LoginController::class, 'index'])->name('login');
Route::any('custom-login', [LoginController::class, 'customLogin'])->name('login.custom');
Route::get('register', [LoginController::class, 'registration'])->name('register');
Route::post('custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');
Route::any('/form/{id}', [BankController::class, 'form'])->name('form');
Route::any('/depositpage', [BankController::class, 'depositpage'])->name('depositpage');
Route::any('/deposit', [BankController::class, 'createdeposit'])->name('deposit.bank');
Route::any('/withdraw', [BankController::class, 'createwithdraw'])->name('withdraw.bank');
Route::any('/withdrawpage', [BankController::class, 'withdrawpage'])->name('withdrawpage');
Route::get('/list', [StudentController::class, 'liststudent'])->name('list.student');
Route::get('/show/{id}', [BankController::class, 'showbankuser'])->name('bank.student');
Route::get('/edit/{id}', [StudentController::class, 'editstudent'])->name('edit.student');
Route::any('/update', [StudentController::class, 'studentupdate'])->name('update.student');
Route::delete('/delete/{student}', [StudentController::class, 'destroy'])->name('delect.student');
//Route::resource('students',StudentController::class);






?>