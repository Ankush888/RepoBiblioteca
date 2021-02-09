$(document).ready(cargarlibros2(12));
function cargarlibros2(limite) {

	var url = "LibrosDatosDB2.php";
	$.post(url, { limiteParam: limite }, function(responseText) {
		$("#imprimirLibros2").html(responseText);
	});
}