<?php

use App\Http\Controllers\API\WorldcupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(
    ['namespace' => 'API'], function(){
        Route::group(
            ['prefix' => 'worldcup'], function(){
                Route::get('/teams', [WorldcupController::class, 'getTeams']);
            }
        );
    }
);

Route::group(
    ['namespace' => 'API'], function(){
        Route::group(
            ['prefix' => 'worldcup'], function(){
                Route::get('/fixtures', [WorldcupController::class, 'getFixtures']);
            }
        );
    }
);

Route::group(
    ['namespace' => 'API'], function(){
        Route::group(
            ['prefix' => 'worldcup'], function(){
                Route::get('/scores', [WorldcupController::class, 'getScores']);
            }
        );
    }
);

Route::group(
    ['namespace' => 'API'], function(){
        Route::group(
            ['prefix' => 'worldcup'], function(){
                Route::get('/blogs', [WorldcupController::class, 'getBlogPost']);
            }
        );
    }
);