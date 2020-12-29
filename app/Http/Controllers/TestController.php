<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessPodcast;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{

    public function __invoke(Request $request)
    {

        //使用队列发送任务
        ProcessPodcast::dispatch();
        return 'HelloWord';
    }
}
