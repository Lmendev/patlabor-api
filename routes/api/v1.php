<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\CharacterController;
use App\Http\Controllers\api\v1\LaborController;


Route::apiResource('/characters', CharacterController::class)->only(['index', 'show']);

Route::apiResource('/labors', LaborController::class)->only(['index', 'show']);
