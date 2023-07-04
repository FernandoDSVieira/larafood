<?php

use App\Http\Controllers\PlanController;


Route::get('admin/plans', [PlanController::class, 'index'])->name('plans.index');


?>
