<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClubController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\EtudiantController;
use App\Http\Controllers\Api\EvenementController;
use App\Http\Controllers\Api\FormationController;
use App\Http\Controllers\Api\CompetitionController;
use App\Http\Controllers\Api\CertificationController;

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
Route::apiResource('Clubs', ClubController::class);
Route::apiResource('Formations', FormationController::class);
Route::apiResource('Certifications', CertificationController::class);
Route::apiResource('Competition', CompetitionController::class);
Route::apiResource('Evenement', EvenementController::class);
Route::apiResource('User', UserController::class);
Route::apiResource('Etudiant', EtudiantController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
