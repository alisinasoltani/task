<?php

<<<<<<< Updated upstream
use App\Http\Controllers\InputController;
use Illuminate\Support\Facades\Route;
=======
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\ProfileController;
>>>>>>> Stashed changes

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

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('home');
});

Route::get('/input', [InputController::class, 'inputForm']);
=======
Route::get('/', [InputController::class, 'getHomePage']);

Route::get('/edit/{id}', [InputController::class, 'edit'])->where('id', '\d+');
Route::post('edit/{id}/validate', [InputController::class, 'editValidate'])->where('id', '\d+');

Route::get('/delete/{id}', [InputController::class, 'delete'])->where('id', '\d+');

Route::get('/input', [InputController::class, 'inputForm']);

Route::post('/post', [InputController::class, 'postForm']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
>>>>>>> Stashed changes
