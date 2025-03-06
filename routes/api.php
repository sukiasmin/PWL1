
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);

Route::get('/test-api', function () {
    return response()->json(['message' => 'API is working!']);
});
