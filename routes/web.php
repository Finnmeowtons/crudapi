<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function(Request $request) {
    return $request->user();
});

Route::get('testing', function(){
    return 'test';
});

Route::post('add-teacher', [TeacherController::class, 'adding']); 
Route::PUT('edit-teacher', [TeacherController::class, 'edit']); 
Route::delete('delete-teacher', [TeacherController::class, 'delete']);
Route::get('getdata', [TeacherController::class, 'getData']);