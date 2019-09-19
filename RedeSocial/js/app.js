$(document).ready(function(){

	$('input.form-control').on('keyup', function(e){
		
		var val = $(this).val();
		var code = $(this).data('key');

		if(e.keyCode == 13){		

			console.log(code);
			console.log(val);
			

		$.ajax({
				url:'enviar.php',
				method: 'POST',
				data: {val : val},
				success: function(result) { /*
					$('form').trigger("reset");
					$('#alert').addClass("alert-success");
					$('#alert').fadeIn().html(result);
					setTimeout(function(){
						$('#alert').fadeOut('Slow');
					},3000);*/

					alert("dada send successfully!");

					$('p.lead').html(result);

				}
			});
	}
});
});