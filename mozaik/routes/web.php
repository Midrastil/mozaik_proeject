<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\RoundController;
use App\Http\Controllers\ContestantController;
use App\Http\Controllers\ParticipateController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//add a new competition to the database
Route::post('/competitionList', [CompetitionController::class, 'newCompetition'])->name('newCompetition');

//open the new competition page from home page
Route::get('/newCompetition', function () {return view('newCompetition');})->name('openNewCompetition');

//open the Competitions page where all the competitions are listed, you can select to add a new round to a competition
Route::get('/competitions', [CompetitionController::class, 'competitions'])->name('competitions');

//open the NewRound page
Route::post('/openNewRound', [RoundController::class, 'openNewRound'])->name('openNewRound');

//add a new round to the database
Route::post('/newRound', [RoundController::class, 'newRound'])->name('newRound');

//open the Rounds page where all the round are listed, and you can select here if you want to lick a contestant to a round
Route::get('/rounds', [RoundController::class, 'rounds'])->name('rounds');

//connect a contestant to a round
Route::post('/participate', [ParticipateController::class, 'participate'])->name('participate');

//open the NewContestant page
Route::get('/openNewContestant', [ContestantController::class, 'openNewContestant'])->name('openNewContestant');

//add a new contestant to the database
Route::post('/newContestant', [ContestantController::class, 'newContestant'])->name('newContestant');

//open the page where you can link a contestant to the selected round
Route::post('/contestants', [ContestantController::class, 'contestants'])->name('contestants');

//open the page where you can link a contestant to the selected round
Route::get('/opendeleteParticipate', [ParticipateController::class, 'opendeleteParticipate'])->name('opendeleteParticipate');

//open the page where you can link a contestant to the selected round
Route::post('/deleteParticipate', [ParticipateController::class, 'delete'])->name('deleteParticipate');

require __DIR__.'/auth.php';
