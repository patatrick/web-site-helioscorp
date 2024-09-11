$('form').on('submit', document, function(event) {
	event.preventDefault();
	$.ajax({
		url: 'php/indice.php',
		type: 'POST',
		dataType: 'JSON',
		data: {
				metodo: 'login',
				username: $('[name="username"]').val(),
				password: $('[name="password"]').val()
			  }
	})
	.done(function(Json) {
		if (Json.Code == 200) {
			location.reload();
		}
		else{
			swal("Error", Json.Message, "error" );
		}
	})
	.fail(function(e) {
		swal('Ha ocurrido un error interno', e.statusText, "error" );
	})	
});