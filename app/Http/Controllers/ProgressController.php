<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProgressController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Retrieve related data from the user's relationships
        $studySessions = $user->userStudySessions;

        return Inertia::render('Progress', [
            'user' => $user,
            'studySessions' => $studySessions
        ]);
    }
}
