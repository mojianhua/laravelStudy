<!-- 通过路径来引入，目录从public开始 -->
<link rel="stylesheet" type="text/css" href="/css/app.css">

<!-- 用asset方法引入 -->
<link rel="stylesheet" type="text/css" href="{{asset('css')}}/app.css">

<h1>我是头部</h1>
<!-- 可变区域 -->
@yield('mainbody')
<!-- 可变区域 -->
<h1>我是尾部</h1>