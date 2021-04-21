<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Nhrrob\Contact\Http\Controllers\ContactController;


Route::group( ['namespace'=>'Nhrrob\Contact\Http\Controllers'], function(){

    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('contact',[ContactController::class, 'store'])->name('contact.store');

});
