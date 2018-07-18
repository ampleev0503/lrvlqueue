<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function index()
    {
        $logs = Log::queued()
            ->orderBy('created_at', 'desc')
            ->get();

        return view('queue', ['logs' => $logs]);
    }

    public function update()
    {
        $firstItem = Log::queued()->orderBy('created_at')->first();

        if($firstItem)
        {
            $firstItem->update(['status' => 1]);
        }

        return view('update', ['firstItem' => $firstItem]);
    }


    public function done()
    {
        $logsDone = Log::done()->get();
        return view('done', ['logs' => $logsDone]);
    }
}
