<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::post('/test-api', function () {
//     return response()->json([
//         'message' => 'API is working'
//     ]);
// });

Route::apiResource('tasks' , TaskController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::post('/tasks', [TaskController::class, 'store']);
