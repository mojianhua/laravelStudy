<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	echo 1234586;
    return view('welcome');
});

# get 请求
Route::get('/test1', function () {
	return '当前是test1';
});

# post 请求
Route::post('/testpost', function () {
	return '当前是test_post';
});

# 多请求方式
Route::match(['get','post'],'/test2', function () {
	return '当前是test2,包含test和post';
});

# 任何请求方式
Route::any('/testpostany', function () {
	return '当前是test_post_any';
});


# 必选参数
Route::any('/test3/{id}', function ($id = 0) {
	echo '当前test3的id是' . $id;
});

# 可选参数
Route::any('/test4/{id?}', function ($id = 0) {
	echo '当前test4的id是' . $id;
});

# 传统方式传参（?方式）
Route::any('/test5', function () {
	echo '当前test5的id是' . $_GET['id'];
});

# 路由别名
Route::any('/test6', function () {
	echo '当前test6';
})->name('route6');

# 路由群组
Route::group(['prefix'=>'test'],function(){
	Route::any('/test1', function () {
		echo '当前test/test1';
	});
	Route::any('/test2', function () {
		echo '当前test/test2';
	});
	# 控制器路由,Route::请求方式(路由表达式，控制器@方法)
	Route::get('/test/testPhpInfo','TestController@test1');
});


Route::group(['prefix'=>'Admin'],function(){
	# 控制器路由,Route::请求方式(路由表达式，控制器@方法,带'\'线指定目录)
	Route::get('/index','Admin\IndexController@index');
});


Route::group(['prefix'=>'Home'],function(){
	# 控制器路由,Route::请求方式(路由表达式，控制器@方法,带'\'线指定目录)
	Route::get('/index','Home\IndexController@index');
	Route::get('/test/add','Home\TestController@add');
	Route::get('/test/del','Home\TestController@del');
	Route::get('/test/update','Home\TestController@update');
	Route::get('/test/select','Home\TestController@select');
	# 模板学习
    Route::get('/testView/test1','Home\ViewTestController@test1');
    Route::get('/testView/test2','Home\ViewTestController@test2');
    Route::get('/testView/mainbody','Home\ViewTestController@mainbody');
    # csrf验证
    Route::get('/testcsrf/csrfweb','Home\ViewTestController@csrfweb');
    Route::post('/testcsrf/csrfsave','Home\ViewTestController@csrfsave')->name('csrfsave');
    # model的运用
    Route::get('/Modeltest','Home\ModelTestController@Modeltest');
    Route::get('/ModeltestAdd','Home\ModelTestController@ModeltestAdd');
    Route::get('/ModeltestSelect','Home\ModelTestController@ModeltestSelect');
    Route::get('/ModeltestUpdate','Home\ModelTestController@ModeltestUpdate');
    Route::get('/ModeltestDel','Home\ModelTestController@ModeltestDel');
    # 自动验证
    Route::any('/ValidatesTestStudy','Home\ValidatesTestController@ValidatesTestStudy');
    #文件上传
    Route::any('/UploadTestStudy','Home\UploadTestStudyController@UploadTestStudy');
    #数据分页
    Route::any('/FenyeTestStudy','Home\FenyeTestStudyController@FenyeTestStudy');
    #响应方式
    Route::any('/ajaxStudy1','Home\AjaxStudyController@ajaxStudy1');
    Route::any('/ajaxStudy2','Home\AjaxStudyController@ajaxStudy2');
    # 跳转响应
    Route::get('/redirectStudy','Home\IndexController@redirectStudy');
    # session使用
    Route::get('/sessionStudy','Home\IndexController@sessionStudy');
    # cache使用
    Route::get('/cacheStudy','Home\IndexController@cacheStudy');
    # 链表查询
    Route::get('/lianbiaoStudy','Home\IndexController@lianbiaoStudy');
});

