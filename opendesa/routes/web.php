<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengurusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

//Route::resource('pengurus', PengurusController::class);
Route::get('/pengurus', [PengurusController::class, 'index']);
Route::get('/pengurus/create', [PengurusController::class, 'create']);
Route::post('/pengurus/create', [PengurusController::class, 'store']);
Route::get('/pengurus/edit', [PengurusController::class, 'edit']);
Route::put('/pengurus/edit', [PengurusController::class, 'update']);