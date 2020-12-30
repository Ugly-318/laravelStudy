<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessPodcast;
use App\Mail\OrderShipped;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{

    public function __invoke(Request $request)
    {

         Blog::find(11)->delete();
    }
}
