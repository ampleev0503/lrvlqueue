<?php

namespace App\Http\Controllers;

use App\Log;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks=Task::get();

        return view('main', ['tasks' => $tasks]);
    }

    public function create($id)
    {
        Task::findOrFail($id)->increment('counter');
        Log::create(['task_id' => $id]);

        return redirect('/');
    }
}
