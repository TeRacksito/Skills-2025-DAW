<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\WelcomePhraseController;
use App\Models\Administrators;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('health', function () {
    return response()->json(['status' => 'ok']);
});

Route::apiResource("clients", ClientsController::class);
Route::apiResource("administrators", ClientsController::class);
Route::apiResource("businesses", ClientsController::class);
Route::apiResource("categories", CategoriesController::class);
Route::apiResource("products", ClientsController::class);
Route::apiResource("services", ClientsController::class);
Route::apiResource("events", ClientsController::class);
Route::apiResource("businessmen", ClientsController::class);




// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
