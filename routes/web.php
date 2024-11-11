<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\ApiController;

Route::get('/call-external-api', [ApiController::class, 'callExternalApi']);

Route::get('/fetch-github-repos', [App\Http\Controllers\MultiApiController::class,
'fetchGithubRepos']);

Route::get('/fetch-astronomy-picture', [App\Http\Controllers\MultiApiController::class,
'fetchAstronomyPicture']);