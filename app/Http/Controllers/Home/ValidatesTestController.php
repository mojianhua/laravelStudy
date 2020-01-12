<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;

class ValidatesTestController extends Controller
{
    //
    public function ValidatesTestStudy(Request $request){
    	if(Input::method()=='POST'){
    		//自动验证
    		$this->validate($request,[
    			//字段 => 规则1|规则2|
    			'name' => 'required|min:2|max:20',
    			'age' => 'required|integer|min:1|max:100',
    			'email' => 'required|max:255|email',
                # 验证码验证规则,如出现validation.captcha验证不对，则在语音包自定义验证字段
                'captcha'=>'required|captcha'
    		]);
    		echo 123;
    	}else{
    		return view('home.ValidatesTest.ValidatesTest');
    	}
    }
}
