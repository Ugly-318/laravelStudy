<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{

    public function __invoke(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        dd('验证通过');

    }
}
