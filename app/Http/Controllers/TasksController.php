<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    //
    public function index()
    {

        $tasks = Task::orderByRaw('completed_at IS NOT NULL ASC')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);

        return redirect('/');
    }

    public function update($id)
    {
        $task = Task::where('id', $id)->first();
        $task->completed_at = now();
        $task->save();
        return redirect('/');
    }

    public function delete($id)
    {
        $task = Task::where('id', $id)->first();
        $task->delete();
        return redirect('/');
    }
}
