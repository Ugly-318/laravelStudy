<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
    public function infoUpdate(UserRequest $request)
    {

        //快速验证
//        $validatedData = $request->validate([
//            'name' => 'required|min:4|max:32',
//            'email' => 'required|email',
//        ],[ //自定义消息
//            'name.required'=>'用户不能为空',
//            'name.min'=>'用户名不能小于4位',
//            'name.max'=>'用户名不能大于32位'
//
//        ]);




        $name = $request->input('name');
        $email = $request->input('email');

//        $errors = [];
//        if (empty($name)) array_push($errors,'用户名不能为空');
//        if (empty($email)) array_push($errors,'邮箱不能为空');
//
//        if (!empty($errors)) {
//
//            return back()->withErrors($errors);
//        }

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
            return back()->with(['warning'=>'未做更改']);
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
    public function avatarUpdate(Request $request)
    {
      //快速验证
        $validatedData = $request->validate([
            'avatar' => 'required|image',
        ],[ //自定义消息
            'avatar.required'=>'请上传过图片',
            'avatar.image'=>'请选择图片的格式'
        ]);

        //获取上传文件
        $file = $request->file('avatar');

        //上传文件不能为空
//        if (empty($file)) {
//            return back()->withErrors('请选择上传的图片');
//        }

        //指定磁盘使用public
        $path = $file->store('avatar','public');

        //在更新之前获取用户的原来头像
        $oldAvatar = auth()->user()->avatar;


        //更新当前登录用户头像
        $uid = auth()->id();
        $res = DB::table('users')
            ->where('id',$uid)
            ->update(['avatar'=>$path]);



        if ($res) {
            //用户头像更新之后,删除用户的原来头像
            Storage::disk('public')->delete($oldAvatar);


            return back()->with(['success'=>'头像更新成功']);
        }else{
            return back()->withErrors('头像未更新');
        }
    }

    /**
     * 个人中心--我的所有博客
     */
    public function blog()
    {
        return view('user.blog');
    }
}
