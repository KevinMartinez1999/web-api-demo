<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Book;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get('/books', function () {
//         return Book::all();
//     });
//     Route::post('/books', function (Request $request) {
//         return Book::create($request->all());
//     });
//     Route::delete('/books/{id}', function ($id) {
//         Book::destroy($id);
//         return response('null', '204');
//     });
//     Route::get('/books/{id}', function ($id) {
//         return Book::find($id);
//     });
//     Route::put('/books/{id}', function (Request $request, $id) {
//         $book = Book::find($id);
//         return $book->update($request->all());
//     });
// });

Route::post('login', 'App\Http\Controllers\AuthController@login');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('books', 'App\Http\Controllers\BookController');
});