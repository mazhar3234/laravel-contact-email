<?php


use Illuminate\Support\Facades\Route;
use Mazhar\Contact\Http\Controllers\ContactController;

Route::get('contact',[ContactController::class,'index'])->name('contact');

Route::post('save-contact',[ContactController::class,'send'])->name('save-contact');