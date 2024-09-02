<?php

use FleetCart\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('add_products', [TestController::class, 'addProducts']);
