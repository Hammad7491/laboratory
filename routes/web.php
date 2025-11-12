<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])
         ->name('index');

Route::get('/phlebotomy', [PagesController::class, 'phlebotomy'])
     ->name('phlebotomy');

     Route::get('/covid', [PagesController::class, 'covid'])
     ->name('covid');


     Route::get('/background', [PagesController::class, 'background'])
     ->name('background');


       Route::get('/vital', [PagesController::class, 'vital'])
     ->name('vital');

       Route::get('/employment', [PagesController::class, 'employment'])
     ->name('employment');

        Route::get('/drug', [PagesController::class, 'drug'])
     ->name('drug');

        Route::get('/dna', [PagesController::class, 'dna'])
     ->name('dna');

       Route::get('/live', [PagesController::class, 'live'])
     ->name('live');

        Route::get('/hydration', [PagesController::class, 'hydration'])
     ->name('hydration');


       Route::get('/aboutus', [PagesController::class, 'aboutus'])
     ->name('aboutus');


      Route::get('/contactus', [PagesController::class, 'contactus'])
     ->name('contactus');