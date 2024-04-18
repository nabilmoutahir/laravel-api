<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// // INDEX
// Route::get('test', [ProjectController::class, 'index'])->name('api.projects.index');

// // SHOW
// Route::get('test/[project]', [ProjectController::class, 'show'])->name('api.projects.show');

Route::apiResource('projects', ProjectController::class)->only(['index', 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
