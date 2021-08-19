<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// タスク一覧
Route::get('/tasks', [TaskController::class, 'index']);

// タスク登録
Route::post('/tasks', [TaskController::class, 'store']);

// タスク詳細
Route::get('/tasks/{task}', [TaskController::class, 'show']);

// タスク更新
Route::put('/tasks/{task}', [TaskController::class, 'update']);

// タスク削除
Route::delete('tasks/{task}', [TaskController::class, 'destroy']);
