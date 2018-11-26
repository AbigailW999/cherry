$(function(){
	$('#filter').change(function(){
		var id = $(this).val();
		$.ajax({
			'url':'/filter',
			'type':'Get',
			'data':'id='+id,
			'success':function(data){
				$('.card').html(data);
				console.log("ok");
			},
			'beforeSend':function(){
				$('.card').html("<img>");
			},
			error: function(msg){
				$('.card').append(msg);
				console.log("error");
			} 
		})
	})
})