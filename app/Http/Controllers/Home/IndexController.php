<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
# 获取用户的用户的输入
use Illuminate\Support\Facades\Input;

//引入session
use Session;

//引入cache
use Cache;
use DB;

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

	# session使用
	public function sessionStudy(){
		// session 中储存变量
		Session::put('key1','val1');
		Session::put('key3','val3');
		// 获取session一个变量
		$val = Session::get('key1');
		// session中获取一个变量或返回一个默认值，（如果变量不存在）
		$val = Session::get('key2','defalut');
		// 获取session中所有的变量
		$allVal = Session::all();
		// 检查一个session是否存在
		$val = Session::has('key2');
		// 删除一个变量
		$del = Session::forget('key1');
		dd($del);

		// 删除session所有变量
		$delAll = Session::flush();

		//视图中获取session
		//{{ Session::get('key1')}}
	}

	# cache使用
	public function cacheStudy(){
		// 设置缓存，如果已经存在则直接覆盖,Cache::put('key','val',分钟为单位);
		Cache::put('key1','val1',1);
		// 设置缓存，如果已经存在则不添加,Cache::add('key','val',分钟为单位);
		Cache::add('key2','val2',1);
		//永久存储
		Cache::forever('key3','val3');
		// 获取缓存数据，如果不存在则返回default,作为默认值
		$val = Cache::get('key1','default');
		// 判断缓存是否存在
		$has = Cache::has('key1');
		// 判断缓存值是否存在，不存在返回匿名函数
		$val = Cache::get('key4',function(){
			return DB::table('paper')->get();
		});
		// 从缓存中获取值后删除，如果缓存不存在直接回调null
		$val = Cache::pull('key1');
		var_dump($val);
		// 删除存储
		Cache::forget('key3');
		//删除所有缓存
		// Cache::flush();

		//缓存++
		Cache::increment('count');
		//缓存+10
		Cache::increment('count',10);
		//缓存--
		Cache::decrement('count');
		//缓存-10
		Cache::decrement('count',10);

		// 获取数据并保存
		// $min = 1;
		// $val = Cache::remember('key20',$min,function(){
		// 	return DB::table('paper')->get();
		// });
		// var_dump($val);

		// // 永久保存结果
		// $val = Cache::rememberForever('key12',function(){
		// 	return DB::table('paper')->get();
		// });
		$val = Cache::get('key20');
		var_dump($val);
	}

	//链表查询
	public function lianbiaoStudy(){

		//DB操作类
		$data = DB::table('article as t1')->select('t1.id','t1.article_name','t2.author_name')
		->leftJoin('author as t2','t1.author_id','=','t2.id')
		->get();

		//一对一模型操作
		$data = \App\Models\Article::get();
		foreach ($data as $key => $value) {
			//其中$value->OneToOneAuthor->author_name是链表得到的，OneToOneAuthor是关联author表的方法，author_name是关联表的字段
			// echo $value->id.'---'.'article_name---'.$value->article_name.'---author_name---'.$value->OneToOneAuthor->author_name.'<br/>';
		}

		//一对多
		$data = \App\Models\Article::get();
		foreach ($data as $key => $value) {
			//其中$value->OneToOneAuthor->author_name是链表得到的，OneToOneAuthor是关联author表的方法，author_name是关联表的字段
			// echo $value->id.'---'.'article_name---'.$value->article_name.'---comment---';
			// 	foreach ($value->OneToManyComment as $key2 => $value2) {
			// 		echo $value2->comment.';';
			// 	}
			// echo '<br/>';
		}

		//多对多
		$data = \App\Models\Article::get();
		foreach ($data as $key => $value) {
			echo "当前的文章名称为：".$value->article_name.'关键词为：<br/>';
			foreach ($value->MamyToManyKeyword as $k => $val) {
				echo '&emsp;'.$val->keyword.'<br/>';
			}
		}
	}
}
