<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'getHome'])->name('getHome');
Route::get('/company-profile', [SiteController::class, 'getAbout'])->name('getAbout');
Route::get('/our-team', [SiteController::class, 'getTeam'])->name('getTeam');
Route::get('/our-services', [SiteController::class, 'getServices'])->name('getServices');
Route::get('/why-miracle', [SiteController::class, 'getWhyMiracle'])->name('getWhyMiracle');
