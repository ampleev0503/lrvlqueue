<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index($id)
    {
        DB::table('tasks')->where('id', $id)->increment('counter');
        DB::table('logs')->insert(['task_id' => $id, 'status' => 0, 'created_at' => date("Y-m-d H:i:s")]);
        return redirect('/');
    }
}
