<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('v1')->name('api.')->group(function () {
    Route::apiResources([
        'leaders' => 'API\LeaderController',
        'voters' => 'API\VoterController',
        'users' => 'API\UserController',
        'points' => 'API\PointController',
        'sectors' => 'API\SectorController',
        'messages' => 'API\MessagesController',
        'candidates' => 'API\CandidateController',
        'e14' => 'API\E14Controller',
        'votations' => 'API\VotationsController',
    ]);
});
