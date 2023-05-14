<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\StudyPost;

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

    public function store()
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'timestamp' => 'required|date',
        ]);

        $task->update($validated);

        return response()->json($task);
    }
}
