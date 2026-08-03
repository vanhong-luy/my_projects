<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiLoginController;
use App\Http\Controllers\ApiContactController;

/**Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// === /api/....
// http://127.0.0.1:8000/api/....

// http://127.0.0.1:8000/api/testAPI
Route::get('/ping', function () {

    return response()->json(
        [
            'server'=> "API Server is working..."
        ],
        200
    );
});
*/

Route::get('/logins',[ApiLoginController::class,'getlogin'] );
Route::post('/recordLogin', [ApiLoginController::class, 'recordlogin']);

Route::get('/contacts', [ApiContactController::class, 'getcontact']);
Route::post('/contacts', [ApiContactController::class, 'recordcontact']);
