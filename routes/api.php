<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function (){
//    Route::get('linku', [\App\Http\Controllers\UrlController::class, 'index']);
    Route::post('linku', [\App\Http\Controllers\UrlController::class, 'store']);
    Route::get('linku/{url}', [\App\Http\Controllers\UrlController::class, 'show'])->name('shortUrl');
    Route::put('linku/{url}', [\App\Http\Controllers\UrlController::class, 'update'])->name('update-shortUrl');
    Route::delete('linku/{url}', [\App\Http\Controllers\UrlController::class, 'destroy'])->name('delete-shortUrl');
});
