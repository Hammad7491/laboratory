<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])
         ->name('index');

Route::get('/phlebotomy', [PagesController::class, 'phlebotomy'])
     ->name('phlebotomy');

     Route::get('/covid', [PagesController::class, 'covid'])
     ->name('covid');