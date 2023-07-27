<?php

use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\DetailPlanController;

Route::prefix('admin')
        ->namespace('Admin')
        ->group(function() {

    // Route Details Plans
    Route::get('plans/{url}/details', [DetailPlanController::class, 'index'])->name('details.plan.index');


    // Route Plans
    Route::get('plans/create', [PlanController::class, 'create'])->name('plans.create');
    Route::put('plans/{url}/edit', [PlanController::class, 'update'])->name('plans.update');
    Route::get('plans/{url}/edit', [PlanController::class, 'edit'])->name('plans.edit');
    Route::any('plans/search', [PlanController::class, 'search'])->name('plans.search');
    Route::delete('plans/{url}', [PlanController::class, 'destroy'])->name('plans.destroy');
    Route::get('plans/{url}', [PlanController::class, 'show'])->name('plans.show');
    Route::post('plans', [PlanController::class, 'store'])->name('plans.store');
    Route::get('plans', [PlanController::class, 'index'])->name('plans.index');

    // Home Dashboard
    Route::get('/', [PlanController::class, 'index'])->name('admin.index');
});





?>
