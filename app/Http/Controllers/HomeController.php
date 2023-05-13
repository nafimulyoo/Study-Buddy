<?php

namespace App\Http\Controllers;

use App\Models\UserStudyPost;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $posts = UserStudyPost::with('user')->get();

        return Inertia::render('Dashboard', compact('posts'));
    }
}
