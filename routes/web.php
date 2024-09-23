<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\Setting\RolesController;
use App\Http\Controllers\Doctor\DoctorsController;
use App\Http\Controllers\Reports\ReportsController;
use App\Http\Controllers\Patient\PatientsController;
use App\Http\Controllers\Invoices\invoicesController;
use App\Http\Controllers\Dashboard\DashboardController;

use App\Http\Controllers\Users\UserPreferencesController;
use App\Http\Controllers\Department\DepartmentsController;
use App\Http\Controllers\Setting\ServiceCategoryController;
use App\Http\Controllers\Prescription\PrescriptionController;
use App\Http\Controllers\Setting\InvoicePaymentStatusesController;


Route::middleware('auth')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('user-preferences')->group(function () {
        Route::post('/change-preferences', [UserPreferencesController::class, 'change_preferences'])->name('user_preferences.change');
    });

    $modules = [

        'users' => UsersController::class,
        'doctors' => DoctorsController::class,
        'patients' => PatientsController::class,
        'prescriptions' => PrescriptionController::class,
        'roles' => RolesController::class,
        'service_categories' => ServiceCategoryController::class,
        'departments' => DepartmentsController::class,
        'invoice_payment_statuses' => InvoicePaymentStatusesController::class,
        'invoices' => invoicesController::class,
        'reports' => ReportsController::class,

    ];

    Route::prefix('prescriptions')->group(function () {
        Route::get('/downlaod/{id}', [PrescriptionController::class, 'download_prescription'])->name('prescriptions.downlaod');
    });

    Route::prefix('invoices')->group(function () {
        Route::get('/downlaod/{id}', [invoicesController::class, 'download_invoice'])->name('invoices.downlaod');
    });

    Route::prefix('patients')->group(function () {
        Route::get('/downlaod/{id}', [PatientsController::class, 'download_visiting_card'])->name('patients.downlaod');
    });

    foreach ($modules as $key => $moduleClass) {

        Route::get($key, [$moduleClass, 'index'])->name($key . '.index');
        Route::get($key . '/create', [$moduleClass, 'create'])->name($key . '.create');
        Route::post($key . '/store', [$moduleClass, 'store'])->name($key . '.store');
        Route::get($key . '/{id}/edit', [$moduleClass, 'edit'])->name($key . '.edit');
        Route::patch($key . '/{id}/update', [$moduleClass, 'update'])->name($key . '.update');
        Route::delete($key . '/{id}', [$moduleClass, 'delete'])->name($key . '.delete');

    }

});

require __DIR__ . '/auth.php';
