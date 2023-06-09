<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('category/all', [CategoryController::class, 'all']);
Route::resource('category', CategoryController::class)->except(["create", "edit"]);
Route::get('category/{category}/posts', [CategoryController::class, 'posts']);


Route::get('category/slug/{slug}', [CategoryController::class, 'slug']); //Primer forma de realizar la busqueda de slug
Route::get('post/slug/{post:slug}', [PostController::class, 'slug']); //Segunda forma de realizar la busqueda de slug

Route::get('post/all', [PostController::class, 'all']);
Route::resource('post', PostController::class)->except(["create", "edit"]);