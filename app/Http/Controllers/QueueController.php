<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueueController extends Controller
{
    public function index()
    {
        $logs = DB::table('logs')
            ->where('status', 0)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('queue', ['logs' => $logs]);
    }

    public function update()
    {
        $firstItem = DB::table('logs')->where('status', 0)->first();

        DB::table('logs')
            ->where('id', $firstItem->id)
            ->update(['status' => 1]);

        return view('update', ['firstItem' => $firstItem]);
    }
}
