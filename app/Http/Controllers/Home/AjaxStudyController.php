<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;

class AjaxStudyController extends Controller
{
    //ajax响应方式
    public function ajaxStudy1(){
    	if(Input::method()=='POST'){
    		//自动验证
    		echo 123;
    	}else{
    		return view('home.viewTest.ajaxStudy');
    	}
    }

    public function ajaxStudy2(){
    	$data = [
    		[
    			'one'=>1,
    			'two'=>2,
    		],
    		[
    			'three'=>3,
    			'four'=>4,
    		]
    	];
    	# 返回json格式，bool值不能响应的
    	return response()->json($data);
    }
}
