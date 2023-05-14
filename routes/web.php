<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

use App\Http\Controllers\{
    HomeController,
    StudyPlanController,
    FriendsController,
    ProgressController,
    DiscussionController,
    StudyNowController,
    SettingsController,
    ToDoListController
};

Route::get('/dashboard', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/study-plan', [ToDoListController::class, 'index'])->name('study-plan');
    Route::post('/study-plan', [ToDoListController::class, 'store'])->name('study-plan.store');
    Route::get('/study-now', [StudyNowController::class, 'index'])->name('study-now');
    Route::delete('/study-plan/{task}', [ToDoListController::class, 'destroy'])->name('study-plan.destroy');
    Route::post('/study-now', [StudyNowController::class, 'store'])->name('study-now.store');
    Route::get('/settings', function () {
        return Inertia::render('ComingSoon');
    })->name('settings');
    Route::get('/progress', function () {
        return Inertia::render('ComingSoon');
    })->name('progress');
    Route::get('/friends', function () {
        return Inertia::render('ComingSoon');
    })->name('friends');
    Route::get('/disccusion', function () {
        return Inertia::render('ComingSoon');
    })->name('discussion');
});

require __DIR__.'/auth.php';

