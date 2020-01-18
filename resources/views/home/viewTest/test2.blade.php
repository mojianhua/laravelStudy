mid---名字
<br/>
@foreach($data as $val)
    {{$val->mid}}-----{{$val->name}}
    <br/>
@endforeach
<hr/>
今天是星期
@if($day == '1')
    一
@elseif($day == '4')
    四
@else
    不知道
@endif