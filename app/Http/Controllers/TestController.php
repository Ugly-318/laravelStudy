<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function __invoke(Request $request)
    {
        //响应字符串
//        return 'heelloworld!';

        //响应json
//        return [1,2,3,4];
//        return ['name'=>'yangyang','sex'=>'男'];

        //完整响应
//        return response('Hello World', 200)
//            ->header('Content-Type', 'text/plain')
//            ->header('MyHeader','text/plain');

        //添加响应头
//        return response($content='添加响应头')
//            ->withHeaders([
//                'Content-Type' => 'text/plain',
//                'X-Header-One' => 'Header Value',
//                'X-Header-Two' => 'Header Value',
//            ]);

        //添加cookies到响应
//        return response($content='添加cookies')
//            ->header('Content-Type', 'text/plain')
//            ->cookie('name', 'value', 1);

        //重定向响应
//        return redirect('/welcome');

        //重定向到命名路由
//        return redirect()->route('blog.show',['blog'=>1]);

        //重定向并使用闪存的 Session 数据
        return redirect('blog/create')->with('status', 'Profile updated!');



    }
}
