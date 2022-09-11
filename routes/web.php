<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IamgesController;


Route::view('/','image');

Route::POST('upload',[IamgesController::class,'uploadimage']);
