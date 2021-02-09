jQuery(document).on('submit', '#login-form', function(event) {
	event.preventDefault();
	jQuery.ajax({
		url: 'prueba.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function() {

			$('.form-submit').val('Validando....');
		}
	})

		.done(function(respuesta) {
			console.log(respuesta);
			if (!respuesta.error) {
				if (respuesta.tipo == 'noAdmin') {
					location.href = 'BienvenidaPage.php';

				} else if (respuesta.tipo == 'admin') {
					location.href = 'BienvenidaPage.php';
				}

			} else {
				$('.error').slideDown('slow');
				setTimeout(function() {
					$('.error').slideUp('slow');
				}, 3000);
				$('.form-submit').val('Iniciar Secion');
			}
		})
		.fail(function(resp) {
			console.log(resp.responseText);
		})
		.always(function() {
			console.log("complete");
		});
});
