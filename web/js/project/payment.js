$(".listPay").on('click', function(event) {
	var id =$(this).parent().parent().attr('id');
	$.ajax({
		url: listPath,
		type: 'post',
		data: {id: id},
	})
	.done(function(data) {
		$(".listBody").html(data);
	});
	
});