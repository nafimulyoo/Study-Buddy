<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ToDoListController extends Controller
{
    public function index()
    {
        $tasks = ToDoList::where('user_id', auth()->user()->id)->get();
        return Inertia::render('StudyPlan', compact('tasks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'taskName' => 'required|max:255',
            'taskTimestamp' => 'required|date',
        ]);

        $task = ToDoList::create([
            'user_id' => auth()->user()->id,
            'name' => $validated['taskName'],
            'timestamp' => $validated['taskTimestamp'],
        ]);

        // return redirect()->route('study-plan');
    }

    public function update(Request $request, ToDoList $task)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'timestamp' => 'required|date',
        ]);

        $task->update($validated);

    }

    public function destroy(ToDoList $task)
    {
        $task->delete();

        return redirect()->route('study-plan');
    }
}
