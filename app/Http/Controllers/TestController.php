<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __invoke(Request $request)
    {
     //增
//    $flight = new Flight();
//    $flight ->name ='Beijing';
//    $res = $flight->save();
//    dd($flight,$res);
        //批量添加
//        $res = Flight::create(['name'=>'广州']);
//        dd($res);

        //批量添加多个字段 insert 不维护时间字段
//        $res = Flight::insert([
//                ['name'=>'广州'],
//                ['name'=>'广州'],
//            ]);
//        dd($res);

        //fill添加
//        $flight = new Flight();
//        $flight -> fill (['name' => '南京']);
//        $flight->save();
//        dd($flight,$flight->save());

        //删
        //删除一个
//        $flight = Flight::find(2);
//        $res = $flight->delete();
//        dd($res);

        //删除多个
//        $res = Flight::where('name','广州')->delete();
//        dd($res);
        //复制
//        $flight = Flight::find(12);
//        $copy=$flight->replicate();
//        $copy->name = '北京';
//        $copy->save();
//        dd($copy);

        //改
        //使用模型更新
//        $flight = Flight::find(1);
//        $flight -> name = '上海';
//        $flight->save();
        //批量更新
//        Flight::where('name', '上海')
//            ->update(['name' => '广州']);

        //获取属性原始值
//        $flight = Flight::find(1);
//        $flight ->name = '广州';
//        dd($flight->name,$flight->getOriginal());

        //查

    }
}
