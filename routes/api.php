<?php

use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\API\TicketingController;
use App\Http\Controllers\BuyController;
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
Route::get('ticket', [TicketingController::class,'index']);
Route::post('ticket/date', [TicketingController::class,'showTicketFilter'])->name('ticket');
Route::post('ticket/order', [BuyController::class,'store'])->name('pesanticket');
Route::post('notification', [NotificationController::class,'getNotification'])->name('notification');

//API route for register new user
Route::post('register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('login', [App\Http\Controllers\API\AuthController::class, 'login']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
    
});
