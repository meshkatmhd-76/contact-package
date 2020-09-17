<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::group(['namespace'=>'Meshkat\Contact\Http\Controllers'],function (){});

Route::get('contact', [\Meshkat\Contact\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::post('contact',[\Meshkat\Contact\Http\Controllers\ContactController::class, 'send']);
