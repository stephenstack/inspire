<?php

use Illuminate\Support\Facades\Route;
use Rconfig\Inspire\Controllers;
use Rconfig\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);
