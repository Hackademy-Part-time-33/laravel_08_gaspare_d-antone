<?php

use App\Http\Controllers\BookController;

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/',[BookController::class, 'homepage'] )->name('homepage');

route::middleware(['auth'])->group(function(){

    Route::get('/book/create',[BookController::class, 'create'] )->name('books.create');
    Route::get('/book/show/{book}',[BookController::class, 'show'] )->name('books.show');
    Route::post('/book/save',[BookController::class, 'store'] )->name('books.store');
});
Route::get('/book',[BookController::class, 'index'] )->name('books.index');
