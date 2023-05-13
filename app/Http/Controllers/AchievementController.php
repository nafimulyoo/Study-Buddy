<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Badge;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::all();
        $badges = Badge::all();

        return Inertia::render('Achievements', [
            'achievements' => $achievements,
            'badges' => $badges
        ]);
    }
}
