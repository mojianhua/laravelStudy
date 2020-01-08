<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class TestController extends Controller
{
	# 新增
	public function add(){
		# 增加一条或者多条数据,一条数据一条数组，返回bool
		
		$db = DB::table('member');
		
		/*
		$ret = $db->insert([
			[
				'name'=>'jj3',
				'age'=>'3',
				'email'=>'3333@qq.com',
			],
			[
				'name'=>'jj2',
				'age'=>'2',
				'email'=>'2222@qq.com',
			],
			[
				'name'=>'jj4',
				'age'=>'4',
				'email'=>'2444442@qq.com',
			]
		]);
		dd($ret);
		
		# 插入一条数据,返回主键ID
		$ret2 = $db->insertGetId([
			'name'=>'jjjj',
			'age'=>'123',
			'email'=>'222222222222222@qq.com',
		]);
		dd($ret2);
		
		# 直接执行sql
		$add = DB::statement("insert into member value(null,'jj2','33','1677@qq.com',1)");
		dd($add);
		*/
	}
	
	# 删除
	public function del(){
		$db = DB::table('member');
		$ret = $db->where('mid','=','2')->delete();
		dd($ret);
	}
	
	# 更新
	public function update(){
		
		$db = DB::table('member');
		# 返回类型bool,成功修改行数1，反之是0，不能说是返回失败，只能说没变化
		/*
		$res = $db->where('mid','=','1')->update([
			'name'=>'aji'
		]);
		dd($res);
		# 每次自增1
		$res2 = $db->where('mid','=',2)->increment('votes');
		dd($res2);
		# 每次自减1
		$res3 = $db->where('mid','=',2)->decrement('votes');
		dd($res3);
		# 每次自增5
		$res4 = $db->where('mid','=',2)->increment('votes',5);
		dd($res4);
		*/
		# 每次自减5
		$res5 = $db->where('mid','=',2)->decrement('votes',5);
		dd($res5);
	}
	
	# 查询
	public function select(){
		$db = DB::table('member');
		/*
		# 查询所有数据
		$res = $db->get();
		foreach($res as $key=>$val){
			echo "mid是{$val->mid},name是{$val->name}.<br/>";
		}
		
		$res = $db->where('mid','>','5')->get();
		foreach($res as $key=>$val){
			echo "mid是{$val->mid},name是{$val->name}.<br>
		}
		
		
		# where and 查询
		$res = $db->where('mid','>','5')->where('mid','<','10')->get();
		foreach($res as $key=>$val){
			echo "mid是{$val->mid},name是{$val->name}.<br/>";
		}
		
		# where or 查询
		$res = $db->where('mid','>','5')->OrWhere('mid','=','1')->get();
		foreach($res as $key=>$val){
			echo "mid是{$val->mid},name是{$val->name}.<br/>";
		}
		
		
		# 取出单行数据
		$res = $db->where('mid','>','10')->first();
		dd($res);
		
		# 获取单个字段,只拿单行数据
		$res = $db->where('mid','>','10')->value('name');
		dd($res);
		
		
		# 获取某些字段数据（多个字段）
		$res = $db->select('name','email')->get();
		var_dump($res);
		# 别名操作
		$res = $db->select('name as n','email')->get();
		var_dump($res);
		
		
		# 排序
		$res = $db->select('name as n','email','mid')->orderBy('mid','DESC')->get();
		dd($res);
		
		# 分页操作,Limit表示限制输出的条数，Offset,开始位置
		$res = $db->select('name as n','email','mid')->limit(3)->offset(1)->orderBy('mid','DESC')->get();
		dd($res);
		*/
		$res = DB::select('select * from member');
		dd($res);
	}
	
}
