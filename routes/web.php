<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/Item');
});

Route::resource('/Item', ItemController::class);
