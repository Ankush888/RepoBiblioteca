/**
 * 
 */
function combrobarLogin() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("respuestaComporob").innerHTML = this.response;
		}
	};

	var numero01 = document.getElementById("your_name").value;
	var numero02 = document.getElementById("your_pass").value;
	xhttp.open("POST", "ComprobarLogin.php?numero01=" + numero01 + "&numero02=" + numero02, true);
	xhttp.send();
}

function pageRegistrar() {
	$.ajax({
		url: 'Registrar.php',
		type: 'get',
		success: function(response) {
			$('#aqui').html(response);
		},
	});
};
