<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\HRController;
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

Route::get('/HR/hrhome', [HRController::class, 'hrhome'] );
Route::get('/HR/addvacancy', [HRController::class, 'addvacancy'] );
Route::get('/HR/allemployees', [HRController::class, 'allemp'] );
Route::get('/HR/attendance', [HRController::class, 'attendance'] );
Route::get('/HR/attsettings', [HRController::class, 'attsettings'] );
Route::get('/HR/departments', [HRController::class, 'dept'] );
Route::get('/HR/EmployeeRegistration', [HRController::class, 'empreg'] );
Route::get('/HR/EmployeeSallary', [HRController::class, 'empsalary'] );
Route::get('/HR/Expenses', [HRController::class, 'expenses'] );
Route::get('/HR/ExpensesReport', [HRController::class, 'expreport'] );
Route::get('/HR/InvoiceReport', [HRController::class, 'invoicereport'] );
Route::get('/HR/Invoice', [HRController::class, 'invoice'] );
Route::get('/HR/LeaveRequest', [HRController::class, 'leavereq'] );
Route::get('/HR/Payments', [HRController::class, 'payments'] );
Route::get('/HR/Payslip', [HRController::class, 'payslip'] );
Route::get('/HR/VacancyList', [HRController::class, 'vacancylist'] );
Route::get('/HR/LeaveSettings', [HRController::class, 'leavesettings'] );






