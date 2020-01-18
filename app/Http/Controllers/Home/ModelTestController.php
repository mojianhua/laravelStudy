<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 引入模型类
use App\Models\Member;
class ModelTestController extends Controller
{
    public function Modeltest(){
    	//同model查询数据
    	$res = Member::get();
    	$model = new Member();
    	var_dump($model->get());
    }

    //添加数据
    public function ModeltestAdd(Request $request){
    	$model = new Member();
    	//AR模式添加数据
    	/*
    	$model->name = 'aji';
    	$model->save();
    	//如果使用create方法，要在model定义fillable字段
    	$res = $model->create($request->all());
    	dd($res);
    	*/
    }

    //查询数据
    public function ModeltestSelect(){
    	//通过主键查询书
    	$data = Member::find(4)->toArray();
    	//获取符合条件的第一条数据
    	$data = Member::where("mid",">","4")->first();
    	//查询多行数据
    	$data = Member::all();
    	//查询多行指定字段数据
    	$data = Member::all('mid','name');
    	//查询多行指定字段数据
    	$data = Member::get(['mid','name']);
    	//按照条件查询指定字段
    	$data = Member::where('mid','>','3')->select('name','email')->get();
    	dd($data);
    }

    //更新操作
    public function ModeltestUpdate(){
    	//AR模型修改操作
    	$data = Member::find(3);
    	$data->name = 'jim3';
    	$res = $data->save();

    	//模式二
    	$model = new Member();
    	$res = $model->where('mid','=','4')->update(['name'=>'jim4']);
    	dd($res);
    }

    //删除数据
    public function ModeltestDel(){
    	$member = Member::find(3);
    	$del = $member->delete();
    	dd($del);
    }
}