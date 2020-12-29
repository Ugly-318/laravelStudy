<?php

namespace App\Http\Controllers;

use App\Jobs\CommentEmail;
use App\Mail\BlogComment;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $comment = $blog->comments()->create([
            'user_id' => auth()->id(),
            'content' => $request->input('content')
        ]);
        if ($comment) {
            $retDate = [
                'avatar_url' => avatar(auth()->user()->avatar),
                'user_name' => auth()->user()->name,
                'content' => $request->input('content')
            ];
//            //发送邮件通知作者有新的评论
//            Mail::to($blog->user)->send(new BlogComment($comment));

            //使用队列发送邮件--使用自定义队列
//            CommentEmail::dispatch($comment);

            //使用自带邮箱队列
            Mail::to($blog->user)->queue(new BlogComment($comment));


            return response()->api('评论成功',200,$retDate);
        }else {
            return  response()->api('评论失败',400);
        }
    }
}
