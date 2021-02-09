$(document).ready(cargarlibros1(18));
function cargarlibros1(limite) {

	var url = "LibrosDatosDB1.php";
	$.post(url, { limiteParam: limite }, function(responseText) {
		$("#imprimirLibros1").html(responseText);
	});
}