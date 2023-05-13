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
    SettingsController
};

Route::get('/dashboard', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/study-plan', [StudyPlanController::class, 'index'])->name('study-plan');
    Route::get('/friends', [FriendsController::class, 'index'])->name('friends');
    Route::get('/progress', [ProgressController::class, 'index'])->name('progress');
    Route::get('/discussion', [DiscussionController::class, 'index'])->name('discussion');
    Route::get('/study-now', [StudyNowController::class, 'index'])->name('study-now');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
});

require __DIR__.'/auth.php';

