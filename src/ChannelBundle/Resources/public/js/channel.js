(function($){
	$('#regions').change(
		function (){
		//alert($('#regions').val());
		var pac=$('#package').val();
			$.ajax({
			url:'/virginmedia/web/app_dev.php/mapping'+'/S',
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
			url:'/virginmedia/web/app_dev.php/mapping'+'/'+pac,
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