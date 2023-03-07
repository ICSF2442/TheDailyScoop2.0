<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;

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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group([
    'middleware' => 'auth:sanctum',
], function () {
    Route::get('/logout',  [AuthController::class, 'logout']);

    Route::get('/user',  function (Request $request) {
                                return $request->user();
                         });
    Route::get("like/{id}", function(Request $request, $id) {
        $request->user()->likes()->toggle($id);
    });
});


Route::get("/articles", function() {
    return \App\Models\Article::all();
});

Route::get("/countarticlelikes/{id}", function(Request $request, $id) {
    return \App\Models\Article::findOrFail($id)->likes()->count();
});