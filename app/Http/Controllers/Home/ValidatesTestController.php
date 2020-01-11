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
    			'name' => 'request|min:2|max:20',
    			'age' => 'request|integer|min:1|max:100',
    			'email'=> 'request|email'
    		]);
    		echo 123;
    	}else{
    		return view('home.ValidatesTest.ValidatesTest');
    	}
    }
}
