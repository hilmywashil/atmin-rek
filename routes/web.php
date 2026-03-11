<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::prefix('dashboard')->group(function () {
    Route::view('/', 'pages.dashboard.default')->name('dashboard');
    Route::view('/ecommerce', 'pages.dashboard.ecommerce')->name('ecommerce');
    Route::view('/crm', 'pages.dashboard.crm')->name('crm');
    Route::view('/analytics', 'pages.dashboard.analytics')->name('analytics');
    Route::view('/crypto', 'pages.dashboard.crypto')->name('crypto');
    Route::view('/finance', 'pages.dashboard.finance')->name('finance');
    Route::view('/project', 'pages.dashboard.project')->name('project');
});