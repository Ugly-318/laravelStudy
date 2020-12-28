<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    /**
     * 实例化一个新的控制器实例
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

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
    public function store(BlogRequest $request)
    {
        //方式1:使用DB构造器添加
        $res = Blog::create([
            'user_id' => auth()->id(),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category_id' => $request ->input('category_id'),
        ]);

        if ($res) {
            return back()->with(['success'=>'添加成功']);
        }else {
            return back()->withErrors('添加失败')->withInput();
        }
    }

    /**
     * 查看一条博客的详情
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::with('comment.user')->where('id',$id)->first();

        $blog->timestamps = false;
        $blog->increment('view');
        $blog->timestamps = true;
        dd($blog);
        return view('blog.show',['blog'=>$blog]);
    }

    /**
     * 编辑页面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
//        dd($blog);
        return view('blog.edit',['blog' => $blog]);
    }

    /**
     * 执行更新
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
//        dd($request->all());

        //方式1:
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->category_id = $request->input('category_id');
        $blog->save();

//        dd($request->all());
//        //方式2:
//        $blog -> fill($request->except(['_token','_method']));
//        $blog->save();

        if ($blog) {
            return back()->with(['success'=>'更新成功']);
        }else{
            return back()->withErrors('更新失败');
        }
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
