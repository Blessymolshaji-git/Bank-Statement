<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
Route::any('/transfer', [BankController::class, 'createtransfer'])->name('transfer.bank');
Route::any('/transferpage', [BankController::class, 'transferpage'])->name('transferpage');
Route::get('/list', [BankController::class, 'liststatment'])->name('statement.bank');
Route::get('/show/{id}', [BankController::class, 'showbankuser'])->name('bank.student');






?>