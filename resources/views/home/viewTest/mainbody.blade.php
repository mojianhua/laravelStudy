<!-- 继承模板 -->
@extends('home.viewTest.parent')

<!-- 指定yield标签的名称，绑定区块 -->
@section('mainbody')
<div>
    我是内容内容内容内容内容
    内容
    内容内容
    内容内容内容
    内容
</div>
@endsection

<!-- 文件包含 -->
@include('home.viewTest.parent')