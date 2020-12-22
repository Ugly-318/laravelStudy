<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * 个人信息页面
     */
    public function infoPage()
    {
        return view('user.info');
    }

    /**
     * 个人信息-执行修改
     */
    public function infoUpdate(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        $errors = [];
        if (empty($name)) array_push($errors,'用户名不能为空');
        if (empty($email)) array_push($errors,'邮箱不能为空');

        if (!empty($errors)) {

            return back()->withErrors($errors);
        }

        //获取用户的ID
//        $uid = auth()->user()->id;
          $uid = auth()->id();

        //更新用户的数据
        $res = DB::table('users')
            ->where('id',$uid)
            ->update(['name'=>$name,'email'=>$email]);

        if ($res) {
            return back()->with(['success'=>'更新成功']);
        }else {
            return back()->withErrors('未做更改');
        }
    }

    /**
     * 头像页面
     */
    public function avatarPage()
    {
        return view('user.avatar');
    }

    /**
     * 头像--执行修改
     */
    public function avatarUpdate()
    {
        dd('头像--执行修改');
    }

    /**
     * 个人中心--我的所有博客
     */
    public function blog()
    {
        return view('user.blog');
    }
}
