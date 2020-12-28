<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * 注册响应宏
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('api', function ($mag = '',$code = 200,$data = '') {
            $retData = [
                'code' => 200,
                'msg' => $mag,
                'time' =>time(),
                'data' => $data

            ];
            return response()->json($retData);


        });
    }
}
