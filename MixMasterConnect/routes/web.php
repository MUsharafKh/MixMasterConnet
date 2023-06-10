<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Api\SpotifyController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\UserRolesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[PageController::class,'getIndexPage']);

Route::get('/about-us',[PageController::class,'getAboutUsPage']);

Route::get('/contact-us',[PageController::class,'getContactUsPage']);

Route::get('/events',[PageController::class,'getEventsPage']);

Route::get('/privacy-policy',[PageController::class,'getPrivacyPolicyPage']);

Route::get('/request',[PageController::class,'getSongRequestPage']);

Route::get('/spotify', [SpotifyController::class, 'index']);

Route::group(['prefix' => 'wyse-cms'], function () {
    Route::group(['middleware'=>['permission']],function(){
        Route::get('modules',[ ModuleController::class, 'index' ]);
        Route::get('user-roles',[ UserRolesController::class, 'index' ]);
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
