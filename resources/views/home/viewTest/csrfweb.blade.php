<!-- 继承模板 -->
@extends('home.viewTest.parent')

<!-- 指定yield标签的名称，绑定区块 -->
@section('mainbody')
<body>
    <form action="{{route('csrfsave')}}" method="post">
        姓名：<input type="text" name="name" value="" placeholder="请输入姓名">
        {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
        <input type="submit" value="提交">
    </form>
</body>
@endsection

<!-- 文件包含 -->
{{--@include('home.viewTest.parent')--}}