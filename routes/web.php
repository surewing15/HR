<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddEmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/architect', [DepartmentController::class, 'architect'])->name('designation.architect');



Route::get('/department/register', [DepartmentController::class, 'create'])->name('department.create');
Route::post('/department/register', [DepartmentController::class, 'store'])->name('department.store');
Route::get('/departments/filter', [AddEmployeeController::class, 'filterDepartments'])->name('departments.filter');



Route::get('/staff/job', [StaffController::class, 'job'])->name('staff.job');
Route::get('/staff/permanent', [StaffController::class, 'permanent'])->name('staff.permanent');

Route::get('/others/coe', [OtherController::class, 'coe'])->name(name: 'others.coe');


Route::get('pds_form', function () {
    return view('employee.pds.index');
})->name('eemployee.pds.index');

Route::get('/employee_theme/request', function () {
    return view('employee_theme.request.index');
})->name('employee.request');

Route::get('files/', function () {
    return view('employee.files.index');
})->name('employee.files');





Route::get('/faculty', function () {
    return view('admin.masterlist.faculty.index');
})->name('admin.masterlist.faculty.index');

Route::get('/staff', function () {
    return view('admin.masterlist.staff.index');
})->name('admin.masterlist.staff.index');

Route::get('/reports', function () {
    return view('admin.others.reports');
})->name('admin.others.reports');

Route::get('/ranks', function () {
    return view('admin.ranks.index');
})->name('admin.ranks.index');




Route::get('/pds_form', function () {
    return view('employee_theme.pds.index');
})->name('employee.pds');

Route::get('/request', function () {
    return view('request.index');
})->name('employee.request');

// Employee request Form Route
Route::get('/files', function () {
    return view('employee_theme.files.index');
})->name('employee.request');

// Employee file Route
Route::get('/request/coe', function () {
    return view('employee_theme.request.index');
})->name('employee.files');

Route::get('/emp', function () {
    return view('.employee.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard_emp');

Route::get('/request', function () {
    return view('admin.others.request');
})->name('admin.others.request');

Route::get('/import', [ImportController::class, 'showImportForm'])->name('import.form');
Route::post('/import', [ImportController::class, 'import'])->name('import');



Route::get('/test', function () {
    return view('test');
})->name('test');




Route::prefix('masterlist')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('masterlist.index');
    Route::post('/', [EmployeeController::class, 'store'])->name('masterlist.store');
    Route::get('/{id}/edit', [EmployeeController::class, 'edit'])->name('masterlist.edit');
    Route::post('/{id}/update', [EmployeeController::class, 'update'])->name('masterlist.update'); // Changed to POST
    Route::get('/{id}/delete', [EmployeeController::class, 'destroy'])->name('masterlist.destroy'); // Changed to GET for simplicity
    Route::post('/import', [EmployeeController::class, 'import'])->name('employees.import');
});
// Route::get('/masterlist', [EmployeeController::class, 'index'])->name('admin.masterlist.index');

Route::post('/employees/import', [EmployeeController::class, 'import'])->name('employees.import');

// Authentication Routes
// require __DIR__ . '/auth.php';