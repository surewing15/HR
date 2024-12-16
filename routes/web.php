<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddEmployeeController;
use App\Http\Controllers\EmpDashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\PersonalDataSheetController;
use App\Http\Controllers\ContructualController;
use App\Http\Controllers\COSController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\MasterlistModel;




Route::post('/employee/login', [LoginController::class, 'login'])->name('employee.login');





Route::middleware(['auth:web'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/addemployees', [AddEmployeeController::class, 'index'])->name('employee.index');
    // Route::get('/addemployees', [AddEmployeeController::class, 'showForm'])->name('employee.index');
    Route::post('/employee/registration', [AddEmployeeController::class, 'store'])->name('employee.save');
    Route::post('/addemployees/save', [AddEmployeeController::class, 'store'])->name('addemployees.save');

    Route::get('/departments/register', [DepartmentController::class, 'registration'])->name('departments.register');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('faculty')->name('faculty.')->group(function () {
        Route::get('/', [FacultyController::class, 'index'])->name('index');
        Route::get('/create', [FacultyController::class, 'create'])->name('create');
        Route::post('/', [FacultyController::class, 'store'])->name('store');
        Route::get('/{id}', [FacultyController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [FacultyController::class, 'edit'])->name('edit');
        Route::put('/{id}', [FacultyController::class, 'update'])->name('update');
        Route::delete('/{id}', [FacultyController::class, 'destroy'])->name('destroy');
    });
    //Reports
    Route::get('/record/employee', function () {
        return view('admin.record.employee');
    })->name('admin.record.employee');

    Route::get('/record', function () {
        return view('admin.others.record');
    })->name('admin.others.record');
    Route::get('/ranks', function () {
        return view('admin.ranks.index');
    })->name('admin.ranks.index');

    Route::get('/contractuals', [ContructualController::class, 'index'])->name('contractuals.index');
    Route::post('/contractuals', [ContructualController::class, 'save'])->name('contractuals.save');
    Route::get('/contractuals/searchMasterlist', [ContructualController::class, 'searchMasterlist'])->name('contractuals.searchMasterlist');

    Route::get('/cosreps', [COSController::class, 'index'])->name('cosreps.index');
    Route::post('/cosreps', [COSController::class, 'store'])->name('cosreps.store');
    Route::get('/cosreps/searchMasterlist', [COSController::class, 'searchMasterlist'])->name('cosreps.searchMasterlist');


    Route::get('/RankingRecord', function () {
        return view('admin.record.ranking');
    })->name('admin.record.daily');

    Route::get('/record/daily', function () {
        return view('admin.record.daily');
    })->name('admin.record.daily');

    Route::prefix('masterlist')->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('masterlist.index');
        Route::post('/', [EmployeeController::class, 'store'])->name('masterlist.store');
        Route::get('/{id}/edit', [EmployeeController::class, 'edit'])->name('masterlist.edit');
        Route::post('/{id}/update', [EmployeeController::class, 'update'])->name('masterlist.update'); // Changed to POST
        Route::get('/{id}/delete', [EmployeeController::class, 'destroy'])->name('masterlist.destroy'); // Changed to GET for simplicity
        Route::post('/import', [EmployeeController::class, 'import'])->name('employees.import');
        Route::get('/{id}', [EmployeeController::class, 'show'])->name('masterlist.show');
    });
    Route::post('/employees/import', [EmployeeController::class, 'import'])->name('employees.import');


    Route::post('/rank/update', [RankController::class, 'update'])->name('rank.update');

    Route::get('/search', [RankController::class, 'searchUpdate']);

    Route::get('/search-employees', [RankController::class, 'search'])->name('employees.search');
    Route::get('/search-masterlist', [RankController::class, 'searchMasterlist'])->name('masterlist.search');
    Route::post('/employee/save', [RankController::class, 'save'])->name('employee.save');
    Route::get('/ranks', [RankController::class, 'index']);

    Route::get('/search', [RankController::class, 'search'])->name('rank.search');
    Route::get('/search', [RankController::class, 'search'])->name('search');


    Route::get('/staff', [StaffController::class, 'index'])->name('staff.job');
    Route::get('/staff/permanent', [StaffController::class, 'permanent'])->name('staff.permanent');

    Route::get('/others/coe', [OtherController::class, 'coe'])->name(name: 'others.coe');
    Route::get('/department/register', [DepartmentController::class, 'create'])->name('department.create');
    Route::post('/department/register', [DepartmentController::class, 'store'])->name('department.store');
    Route::get('/departments/filter', [AddEmployeeController::class, 'filterDepartments'])->name('departments.filter');


    Route::post('/request-certificate', [RequestController::class, 'store'])->name('request.store');

    Route::get('/others/request', [OtherController::class, 'coe_request'])->name(name: 'admin.others.request');

});







// Employee auth routes
// Employee authentication routes
Route::middleware(['web'])->group(function () {

    Route::post('/emp/login', function (Request $request) {
        $validated = $request->validate([
            'employee_id' => ['required', 'string'],
            'password' => ['required'],
        ]);

        $employee = MasterlistModel::where('employee_id', $request->employee_id)->first();

        if ($employee && Hash::check($request->password, $employee->password)) {
            Auth::guard('employee')->login($employee);
            return redirect('/emp/dashboard');
        }

        return back()->withErrors(['employee_id' => 'Invalid credentials'])->withInput($request->only('employee_id'));
    })->name('employee.login.submit');
});

// Protected employee routes
Route::middleware(['auth:employee'])->group(function () {
    Route::get('/emp/dashboard', [EmpDashboardController::class, 'index'])
        ->middleware('auth')
        ->name('employee.dashboard');

    //request in admin
    // Route::get('/request', [OtherController::class, 'coe_request']);

    Route::get('/import', [ImportController::class, 'showImportForm'])->name('import.form');
    Route::post('/import', [ImportController::class, 'import'])->name('import');

    Route::get('pds_form', function () {
        return view('employee.pds.index');
    })->name('eemployee.pds.index');
    Route::get('/request', [RequestController::class, 'index'])->name('request.index');

    Route::post('/personal-data-sheet', [PersonalDataSheetController::class, 'store'])->name('personal.data.sheet.store');
    Route::get('/files', function () {
        return view('employee.files.index');
    })->name('employee.request');


});