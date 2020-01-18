<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;

class UploadTestStudyController extends Controller
{
   //文件上传
    public function UploadTestStudy(Request $request){
    	if(Input::method() == 'POST'){
    		//判断文件是否正常&&判断文件是否上传成功
    		if($request->hasFile('file') && $request->file('file')->isValid()){
    			// //获取文件原始文件名字
    			// dump($request->file('file')->getClientOriginalName());
    			// //获取上传文件大小
    			// dump($request->file('file')->getClientSize());

    			$file=$request->file('file');
    			//获取文件的扩展名 
    			$ext = $file->getClientOriginalExtension();
    			//文件的移动move(目录，文件名)
    			$path = $file->move('./uploads',md5(time().rand(10000, 99999)).'.'.$ext);
                dump($path);
    		}
    	}else{
    		return view('home.UploadTestStudy.UploadTestStudy');
    	}
    }
}
