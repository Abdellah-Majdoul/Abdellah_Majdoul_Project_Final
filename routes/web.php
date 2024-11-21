<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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
Route::post("/teams/store",[TeamController::class,"store"])->name("teams.store");

Route::resource("calendar" , CalendarController::class);
Route::put("/calendar/update/{calendar}" , [CalendarController::class , "update"])->name("updateCalendar");
Route::delete("/calendar/delete/{calendar}" , [CalendarController::class , "destroy"])->name("deleteCalendar");




Route::get('/payment', [PaymentController::class, 'show'])->name('payment');
Route::post('/invite/store/{teamId}',[InvitationController::class,"store"])->name("invitation.store");



Route::get("/invitation/{id}/rejected",[InvitationController::class,"reject"])->name("rejected");
Route::get("/invitation/{id}/accept",[InvitationController::class,"accept"])->name("accept");

Route::get('/checkout', [TeamController::class, 'checkOut'])->name('checkout');
Route::get('/payment/succes', [TeamController::class, 'payment'])->name('payment.succes');


Route::post("/task/store",[TaskController::class,"store"])->name("task.store");
require __DIR__.'/auth.php';
