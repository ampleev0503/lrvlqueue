<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {

        $tasks=DB::table('tasks')->get();


//        foreach ($tasks as $task) {
//            echo $task->name;
//
//        dump($tasks);
        return view('main', ['tasks' => $tasks]);
    }
}
