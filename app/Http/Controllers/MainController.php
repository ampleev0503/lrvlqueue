<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
        $tasks=Task::get();

        return view('main', ['tasks' => $tasks]);
    }
}
