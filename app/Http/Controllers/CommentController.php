<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * 博客的评论
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,Blog $blog)
    {
//        dd($blog);
        $res = $blog->comments()->create([
            'user_id' => auth()->id(),
            'content' => $request->input('content')
        ]);
        if ($res) {
            $retDate = [
                'avatar_url' => avatar(auth()->user()->avatar),
                'user_name' => auth()->user()->name,
                'content' => $request->input('content')
            ];
            return response()->api('评论成功',200,$retDate);
        }else {
            return  response()->api('评论失败',400);
        }
    }
}
