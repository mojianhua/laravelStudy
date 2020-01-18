<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
# 获取用户的用户的输入
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    public function index(){
		echo 'Home的Index';
	}

	// 路由跳转
	public function redirectStudy(){
		// return redirect('/Home/index');
		return redirect('http://www.baidu.com');
	}
}
