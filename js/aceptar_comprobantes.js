/*****RECORRER BOTONES EDITAR*****///////
console.log("listo");
var comprobante_aceptado = document.getElementById('id_sesion').value;
console.log('id->'+comprobante_aceptado);
function recorrerBotonesAceptarComprobantes() {

  var tableBody = document.getElementsByTagName('tBody');
  console.log(tableBody);
	var btnEditar = tableBody[0].querySelectorAll('.aceptar');
	for (var i = 0; i < btnEditar.length; i++) {
		btnEditar[i].addEventListener('click', function (event) {
			event.preventDefault();
			// deshabilitarEdicionProductos();
			var registroActivo = this.parentNode.parentNode;
      var idUser = registroActivo.id;
      var user = {
        //TODO AGTRGAR LAS DEMAS VARIABLES
        id: idUser,
        comprobante_aceptado: comprobante_aceptado
      };
      estadoAjaxAceptado(user);
			// registroActivo.classList.add('modo-edicion');
			// registroActivo.classList.remove('desactivado');
      //
			// //actualizamos el producto
			// actualizarProducto(registroActivo.id);
		});
	}
}

/******EDITA PRODUCTO CON AJAX*******/
function estadoAjaxAceptado(idUser) {
	var jsonProducto = JSON.stringify(idUser);
	console.log(jsonProducto);
	//creo la conexion
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'php/aceptar_comprobante.php?datos='+ jsonProducto, true);
	xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
	xhr.onreadystatechange = function() {
			if(xhr.readyState == 4 && xhr.status == 200) {
					var resultado = xhr.responseText;
					console.log(resultado);
					var json = JSON.parse(resultado);
					if(json.respuesta==true){
						cambiadoCorrecto(json.id);
					}

			}
	}
	xhr.send();
}

function cambiadoCorrecto(idUser) {
  var aceptado=document.getElementById(idUser);
  var textoAceptado = document.createTextNode("Aceptado");
  var tdProducto = document.createElement('TD');
  tdProducto.setAttribute('colspan',4);
  tdProducto.appendChild(textoAceptado);

  var trProducto = document.createElement('TR');
  trProducto.appendChild(tdProducto);
  trProducto.classList.add("aceptadoAdmin");
  aceptado.replaceWith(trProducto);

  setTimeout(function(){
    trProducto.classList.add('ocultar');

  },3000);


}
document.addEventListener('DOMContentLoaded', function (event) {
	recorrerBotonesAceptarComprobantes();
});
