<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournamentController;
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
Route::middleware('team.check')->group(function () {
    Route::get('/',[TeamController::class,'index'])->name('home');
    Route::post('/tournament/{team}/store',[TournamentController::class,'store'])->name('tournament.store');
});
Route::middleware('tournament.check')->group(function () {
    Route::get('/tournament/index',[TournamentController::class,'index'])->name('tournament.index');
    Route::post('/tournament/create',[TournamentController::class,'create'])->name('tournament.create');
});

