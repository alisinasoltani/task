<?php

<<<<<<< Updated upstream
=======
use App\Http\Controllers\ApiController;
>>>>>>> Stashed changes
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

<<<<<<< Updated upstream
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
=======
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/customers', [ApiController::class, 'getAllCustomers']);

Route::get('/customers/{id}', [ApiController::class, 'getCustomer'])->where("id", "\d+");

Route::post('/customers/post', [ApiController::class, 'post']);

Route::put('/customers/{id}/update/', [ApiController::class, 'updateCustomer'])->where("id", "\d+");

Route::delete('/customers/{id}/delete/', [ApiController::class, 'deleteCustomer'])->where("id", "\d+");
>>>>>>> Stashed changes
