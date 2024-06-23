<?php

use Ashumizi\ContactPackage\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('contact', ContactController::class);