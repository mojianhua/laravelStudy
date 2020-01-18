<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# 别名配置，在config的app.php里面的aliases配置
use Input;
use DB;

class TestController extends Controller
{
    public function test1(){
		/*
		a = Input::all(); # 获取所有的用户输入
		b = Input::get('b','default'); # 获取单个的用户输入,反之default没传值使用该默认值
		c = Input::only([]); # 获取指定的几个用户输入,数组返回
		d = Input::except([]); # 获取指定几个用户的输入以外的所有参数
		e = Input::has('name'); # 判断某个输入的参数是否存在
		*/
		
		$id = Input::get('id','default');
		echo $id;
		$id2 = Input::only(['id1','id2']);
		var_dump($id2);
		$id3 = Input::all();
		var_dump($id3);
		$id4 = Input::except(['id1','id2']);
		var_dump($id4);
		$id5 = Input::has('id22');
		dd($id5);
	}
}
