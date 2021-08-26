<?php

use App\Http\Controllers\BranchController;
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
    return view('welcome');
});

Route::get('/Branch/branchhome', [BranchController::class, 'branchhome'] );

Route::get('/Branch/allowances', [BranchController::class, 'allowances'] );

Route::get('/Branch/btcpayroll', [BranchController::class, 'btcpayroll'] );

Route::get('/Branch/b2callowance', [BranchController::class, 'btcallowance'] );

Route::get('/Branch/AttendanceHistory', [BranchController::class, 'attendancehistory'] );

Route::get('/Branch/loan', [BranchController::class, 'loan'] );

Route::get('/Branch/advance', [BranchController::class, 'advance'] );

Route::get('/Branch/generalpayroll', [BranchController::class, 'generalpayroll'] );

Route::get('/Branch/attendance', [BranchController::class, 'attendance'] );

Route::get('/Branch/payroll', [BranchController::class, 'payroll'] );

Route::get('/Branch/insurance', [BranchController::class, 'insurance'] );

Route::get('/Branch/leave', [BranchController::class, 'leave'] );





