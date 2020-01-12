<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Member;

class FenyeTestStudyController extends Controller
{
	public function FenyeTestStudy(){
		$data = Member::paginate(2);
		# 修改分页了在larvel扩展包里面

		# 当前页码条数
		// dump($data->count());
		// # 当前页码
		// dump($data->currentPage());
		// # 是否有后续页码
		// dump($data->hasMorePages());
		// # 当前页最后一条数据序号
		// dump($data->lastItem());

		#最后页序号
		# dump($data->lastPage());
		# 下一页连接
		# dump($data->nextPageUrl());
		# 每页数据条数
		# dump($data->perPage());
		# 上一页的链接地址
		// dump($data->previousPageUrl());
		# 记录总数
		//dump($data->total());
		# 指定页码链接
		# dump($data->url(1));

		return view('home.viewTest.FenyeTestStudy',compact('data'));
	}
}
