<?php

use Illuminate\Support\Facades\Route;
use Shagor\Contact\Http\Controllers\ContactController;

Route::get('/contact', function(){
    return view('contact::contact');
});

Route::post('/contact-submit',[ContactController::class, 'submit']);