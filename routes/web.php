<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddEmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',


])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    route::get('/home', [AdminController::class, 'index']);


    Route::get('/admin/dashboard', [DashboardController::class, 'index']);


    Route::get('/addemployees', [AddEmployeeController::class, 'index'])->name('employee.index');
    Route::get('/addemployees', [AddEmployeeController::class, 'showForm'])->name('employee.index');
    Route::post('/employee/registration', [AddEmployeeController::class, 'store'])->name('employee.save');
    Route::post('/employees/save', [AddEmployeeController::class, 'save'])->name('employee.save');

    Route::get('/departments/register', [DepartmentController::class, 'registration'])->name('departments.register');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/departments/academic', [DepartmentController::class, 'academic'])->name('departments.academic');
Route::get('/departments/artsci', [DepartmentController::class, 'artsci'])->name('departments.artsci');
Route::get('/departments/businessad', [DepartmentController::class, 'businessad'])->name('departments.businessad');
Route::get('/departments/criminal', [DepartmentController::class, 'criminal'])->name('departments.criminal');
Route::get('/departments/educ', [DepartmentController::class, 'educ'])->name('departments.educ');
Route::get('/departments/engtech', [DepartmentController::class, 'engtech'])->name('departments.engtech');
Route::get('/departments/infotech', [DepartmentController::class, 'infotech'])->name('departments.infotech');
Route::get('/departments/infotech', [DepartmentController::class, 'infotech']);


Route::get('/departments/libraryinfo', [DepartmentController::class, 'libraryinfo'])->name('departments.libraryinfo');
Route::get('/departments/medwif', [DepartmentController::class, 'medwif'])->name('departments.medwif');
Route::get('/departments/hm', [DepartmentController::class, 'hm'])->name('departments.hm');

Route::get('/department/register', [DepartmentController::class, 'create'])->name('department.create');
Route::post('/department/register', [DepartmentController::class, 'store'])->name('department.store');



Route::get('/staff/job', [StaffController::class, 'job'])->name('staff.job');
Route::get('/staff/permanent', [StaffController::class, 'permanent'])->name('staff.permanent');

Route::get('/others/coe', [OtherController::class, 'coe'])->name(name: 'others.coe');


Route::get('pds_form', function () {
    return view('employee.pds.index');
})->name('eemployee.pds.index');

Route::get('/employee_theme/request/index', function () {
    return view('employee_theme.request.index');
})->name('employee.request');

Route::get('files/', function () {
    return view('employee.files.index');
})->name('employee.files');

Route::get('/dashboard_emp', function () {
    return view('.employee.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard_emp');