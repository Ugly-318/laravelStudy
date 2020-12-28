<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Flight;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __invoke(Request $request)
    {
        $blogs =Blog::all();
        return response()->api('Success',200,$blogs);
    }
}
