<?php
/*
1、创建项目
	composer create-project laravel/Laravel=5.6.* --prefer-dist ./
命令说明
	create-project:通过composer去创建项目；
	laravel/Laravel：项目名称
	=5.6.*代表版本号
--	prefer-dist：优先下载压缩方式而不是直接从github上下载源码（克隆）
2、启动方式
php artisan serve
指定运行端口
php artisan serve --host=0.0.0.0 --port=8080
3、查看已有的路由命令
php artisan route:list
4、创建控制器(TestController未控制器名称)
php artisan make:controller TestController
如果需要分目录生成控制器(在admin文件夹里面生成IndexConroller控制器)
php artisan make:conroller Admin/IndexConroller