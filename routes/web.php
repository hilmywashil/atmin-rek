<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.dashboard')->name('dashboard');
Route::view('/ecommerce', 'pages.ecommerce')->name('ecommerce');
Route::view('/crm', 'pages.crm')->name('crm');
Route::view('/analytics', 'pages.analytics')->name('analytics');
