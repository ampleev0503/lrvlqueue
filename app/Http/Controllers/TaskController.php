<?php

namespace App\Http\Controllers;

use App\Log;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($id)
    {
        Task::find($id)->increment('counter');
        Log::create(['task_id' => $id]);

        return redirect('/');
    }
}
