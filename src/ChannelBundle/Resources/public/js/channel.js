(function($){
	$('#regions').change(
		function (){
			 
		var pac=$('#package').val();
			$.ajax({
			url:location.pathname+'mapping'+'/S',
			beforeSend:function()
			{
				$('#table_data').html('<tR><td>loading...</td></tr>');
			},
			success:function(data)
			{
				$('#table_data').html(data);
				$('#package').val('S');
			}
			});
		}
	);
	$('#package').change(
		function (){
			var pac=$('#package').val();
			$.ajax({
			url:location.pathname+'mapping/'+pac,
			beforeSend:function()
			{
				$('#table_data').html('<tR><td>loading...</td></tr>');
			},
			success:function(data)
			{
				$('#table_data').html(data);
			}
			});
		}
	);
})(jQuery);