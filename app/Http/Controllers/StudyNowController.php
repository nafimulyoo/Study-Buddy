<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudyNowController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Retrieve related data from the user's relationships
        $achievements = $user->userAchievements;
        $badges = $user->userBadges;
        $studyPosts = $user->userStudyPosts;
        $studySessions = $user->userStudySessions;

        return Inertia::render('StudyNow', [
            'user' => $user,
            'achievements' => $achievements,
            'badges' => $badges,
            'studyPosts' => $studyPosts,
            'studySessions' => $studySessions
        ]);
    }
}
