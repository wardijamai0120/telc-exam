<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccessCodeController;

/*
|--------------------------------------------------------------------------
| Routes مفتوحة
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login-code', [AuthController::class, 'loginWithCode'])->name('login.code');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Routes ديال USER (بالكود)
|--------------------------------------------------------------------------
*/
Route::middleware('access.code')->group(function () {

    Route::get('/home', function () {
        return view('exams.home');
    });

    Route::get('/b1', function () {
        return view('exams.b1');
    });

    Route::get('/b2', function () {
        return view('exams.b2');
    });

    // ✅ quiz محمي بالكود
    Route::get('/quiz/{file}', function ($file) {

        $path = resource_path("exams/quiz/{$file}.html");

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);

    })->where('file', '[0-9]+');

});


/*
|--------------------------------------------------------------------------
| Routes ديال ADMIN فقط
|--------------------------------------------------------------------------
*/
Route::middleware(['access.code', 'admin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/admin/access-codes', [AccessCodeController::class, 'index']);
    Route::get('/admin/access-codes/create', [AccessCodeController::class, 'create']);
    Route::post('/admin/access-codes', [AccessCodeController::class, 'store']);
    Route::delete('/admin/access-codes/{id}', [AccessCodeController::class, 'destroy']);

});
