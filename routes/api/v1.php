<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\CharacterController;
use App\Http\Controllers\api\v1\LaborController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('/characters', CharacterController::class)->only(['index', 'show']);

Route::apiResource('/labors', LaborController::class)->only(['index', 'show']);
