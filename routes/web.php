<?php

use Illuminate\Support\Facades\Route;

Route::get('welcome', function () {
    return view('welcome');
});
//测试控制器,用于测试代码
Route::get('/test',\App\Http\Controllers\TestController::class);

//首页路由
Route::get('/',[\App\Http\Controllers\IndexController::class,'index'])
    ->name('index');

//博客资源路由
Route::resource('blog',\App\Http\Controllers\BlogController::class)
    ->except(['index']);

//需要登录的页面
Route::middleware('auth')->group(function () {

    //登陆后，博客相关路由
    Route::prefix('blog')->name('blog.')->group(function () {
        //改变博客的状态,发布于不发布
        Route::patch('/{id}',[\App\Http\Controllers\BlogController::class,'status'])
            ->name('status');

        //评论路由
        Route::post('/{blog}/comment',\App\Http\Controllers\CommentController::class)
            ->name('comment');
    });


    //个人中心相关路由
    Route::prefix('user')->name('user.')->group(function () {
        //个人中心-修改个人信息-页面
        Route::get('/',[\App\Http\Controllers\UserController::class,'infoPage'])
            ->name('info');

        //个人中心-修改个人信息-更新数据
        Route::put('/',[\App\Http\Controllers\UserController::class,'infoUpdate'])
            ->name('info.update');

        //个人中心-头像-页面
        Route::get('/avatar',[\App\Http\Controllers\UserController::class,'avatarPage'])
            ->name('avatar');

        //个人中心-头像-更新数据
        Route::put('/avatar',[\App\Http\Controllers\UserController::class,'avatarUpdate'])
            ->name('avatar.update');

        //个人中心--所有博客
        Route::get('/blog',[\App\Http\Controllers\UserController::class,'blog'])
            ->name('blog');
    });


});



////博客的首页
//Route::get('/',function (){
//    dd('博客的搜夜');
//})->name('index');
//
////博客的详情
//Route::get('/blog/{id}',function ($id){
//    dd('查看博客的详情ID'.$id);
//})->name('blog.show')->where('id','[0-9]+');
//
////博客发布页面
//Route::get('/blog/create',function (){
//    dd('添加博客的页面');
//})->name('blog.create');
//
////提交发布的博客,进行保存
//Route::post('/blog',function (){
//    dd('保存博客');
//})->name('blog.store');
//
////修改博客的页面
//Route::get('/blog/{id}/edit',function ($id){
//    dd('修改的博客页面,博客是: ' . $id);
//})->name('blog.edit');
//
////提交数据,执行修改操作
//Route::put('/blog/{id}',function ($id){
//    dd('执行修改,修改的博客是: ' . $id);
//})->name('blog.update');
//
////删除博客的路由
//Route::delete('/blog/{id}',function($id){
//    dd('删除的博客是: ' .$id);
//})->name('blog.destroy');
//
////改变博客状态,发布与不发布
//Route::patch('/blog/{id}',function($id){
//    dd('要改变状态的博客是: ' .$id);
//})->name('blog.status');
//
//// 个人中中心-修改个人信息-页面
//Route::get('/user',function(){
//    dd('修改个人信息页面');
//})->name('user.info');
//
////个人中心-修改个人信息-更新数据
//Route::put('/user',function(){
//    dd('执行修改个人信息');
//})->name('user.update');
//
////个人中心-更改头像
//Route::get('user/avatar',function (){
//    dd('修改头像页面');
//})->name('user.avatar');
//
////个人中心-更改头像-更新数据
//Route::patch('/user/avatar',function (){
//    dd('执行修改头像');
//})->name('user.avatar.update');
//
////个人中心-我的boke
//Route::get('user/blog',function(){
//    dd('我的所有博客');
//})->name('user.blog');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
