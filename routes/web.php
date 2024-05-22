<?php

use App\Http\Controllers\PageController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class, 'homepage'] )->name('homepage');

Route::get('/index',[PageController::class, 'index'] )->name('index');

Route::post('/save',[PageController::class, 'store'] )->name('store');
