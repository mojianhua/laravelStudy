<table>
	<thead>
		<tr>
			<th>mid</th>
			<th>姓名</th>
			<th>头像</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $val)
		<tr>
			<th>{{$val->mid}}</th>
			<th>{{$val->name}}</th>
			<th><img src="{{ltrim($val->avatar,'.')}}" width="90px"></th>
		</tr>
		@endforeach
	</tbody>
	<!-- 显示分页形式 -->
	{{$data->links()}}
</table>