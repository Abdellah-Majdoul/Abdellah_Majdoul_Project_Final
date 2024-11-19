<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get("/createTeam",[TeamController::class,"index"])->name("createTeam");
Route::get("/teams",[TeamController::class,"create"]);
Route::post("/teams/store",[TeamController::class,"store"])->name("task.store");

Route::resource("calendar" , CalendarController::class);
Route::put("/calendar/update/{calendar}" , [CalendarController::class , "update"])->name("updateCalendar");
Route::delete("/calendar/delete/{calendar}" , [CalendarController::class , "destroy"])->name("deleteCalendar");
require __DIR__.'/auth.php';
