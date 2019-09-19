$(document).ready(function(){

	$('.toast').toast('show');
	$('#message-or').hide();
	$('#message-av').hide();


	$('#btnClosingOr').click(function(){
		$('#card-orcamento').hide();
		$('#message-or').show();
	});

	$('#btnClosingAv').click(function(){
		$('#card-avaliacao').hide();
		$('#message-av').show();
	});

	$('#btn-or').click(function(){
		$('#message-or').hide();
		$('#card-orcamento').show();
	});

	$('#message-av').click(function(){
		$('#message-av').hide();
		$('#card-avaliacao').show();
	});


	$('.kt2pm').on('click',function(){
		var key = $(this).data('key');
		$(this).toggleClass('like');

		var LSZ59 = $('.LSZ59').html();

		$('.LSZ59').html(LSZ59 + ' +1');


	});



});
