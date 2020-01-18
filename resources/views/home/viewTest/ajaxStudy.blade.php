<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<input type="button" value="点击" id="btu">
<script type="text/javascript">
	$(function(){
		$('#btu').click(function(){
			$.get('http://test.studylaravel.com:8888/Home/ajaxStudy2',function(data){
				console.log(data);
			},'json');
		});
	});
</script>