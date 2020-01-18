<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ViewTestController extends Controller
{
    public function test1(){
        //展示模板
        //return view('home.viewTest.test1');

        $data = date('Y-m-d H:i:s',time());

        $day = '一';

        # return view('home/viewTest/test1',['data'=>$data,'day'=>$day]);

        $time = strtotime('+1 year');
        # compact函数，将来变量变成下标，赋值变成值
        return view('home.viewTest.test1',compact('data','day','time'));
    }

    //循环标签
    public function test2(){
        $data = DB::table('member')->get();
        // 获取今天的星期数字
        $day = date('N');
        return view('home.viewTest.test2',compact('data','day'));
    }

    //模板继承
    public function mainbody(){
        return view('home.viewTest.mainbody');
    }

    //csrf验证页面
    public function csrfweb(){
        return view('home.viewTest.csrfweb');
    }

    //csrf页面提交
    public function csrfsave(){
        return '提交成功';
    }
}
