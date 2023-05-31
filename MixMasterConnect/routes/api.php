<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\UserRolesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    //module api url
    Route::post('module/all', [ModuleController::class, 'showAll']);
    Route::get('module/get', [ModuleController::class, 'show']);
    Route::post('module/create', [ModuleController::class, 'store']);
    Route::get('module/edit/{id}', [ModuleController::class, 'edit']);
    Route::post('module/update/{id}', [ModuleController::class, 'update']);
    //user role api url
    Route::get('user-role/show', [UserRolesController::class, 'show']);
    Route::post('user-role/all', [UserRolesController::class, 'showAll']);
    Route::post('user-role/create', [UserRolesController::class, 'store']);
    Route::get('user-role/edit/{id}', [UserRolesController::class, 'edit']);
    Route::post('user-role/update/{id}', [UserRolesController::class, 'update']);
    Route::get('user-role/get-permission/{module_code}/{role_id}', [UserRolesController::class, 'getModulePerission']);

