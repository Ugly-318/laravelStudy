<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * 添加博客的页面
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * 执行博客的添加
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('自信博客的添加');
    }

    /**
     * 查看一条博客的详情
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('blog.show');
    }

    /**
     * 编辑页面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('blog.edit');
    }

    /**
     * 执行更新
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('执行更新 ' .$id);
    }

    /**
     * 执行删除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('执行删除 ' .$id);
    }

    /**
     * 博客的状态,发布于不发布
     */

    public function status($id){
        dd('博客的状态,发布于不发布 ' .$id);
    }
}
