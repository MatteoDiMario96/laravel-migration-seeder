<?php
use App\Http\Controllers\Guest\PageController as GuestPageController;
use App\Http\Controllers\Guest\TrainController as GuestTrainController;
use App\Http\Controllers\Guest\FantasyTrainController as GuestFantasyTrainController;
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

Route::get('/', [GuestPageController::class, 'view'])->name('guest.home');

Route::get('/trains', [GuestTrainController::class, 'index'])->name('guest.trains.index');

Route::get('/trains/{id}', [GuestTrainController::class, 'show'])->name('guest.train.show');

Route::get('/fantasy-trains', [GuestFantasyTrainController::class, 'index'])->name('guest.fantasy-trains.index');

Route::get('/fantasy-trains/{id}', [GuestFantasyTrainController::class, 'show'])->name('guest.fantasy-train.show');

