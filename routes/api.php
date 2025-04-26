<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController;

/**
 * API Routes
 *
 * Here is where API routes for the application are registered.
 */

Route::post('/tasks', [TaskController::class, 'store']);
