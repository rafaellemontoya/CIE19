/*****RECORRER BOTONES EDITAR*****///////
console.log("listo");
var idSesion = document.getElementById('id_sesion').value;
function recorrerBotonesAceptarComprobantes() {
  var tableBody = document.getElementsByTagName('tBody');
	var btnEditar = tableBody[0].querySelectorAll('.aceptar');
  console.log(btnEditar);
	for (var i = 0; i < btnEditar.length; i++) {
		btnEditar[i].addEventListener('click', function (event) {
			event.preventDefault();
			// deshabilitarEdicionProductos();
			var registroActivo = this.parentNode.parentNode;
      var idUser = registroActivo.id;
      var user = {
        //TODO AGTRGAR LAS DEMAS VARIABLES
        id: idUser,
        idSesion: idSesion
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
  // cambiadoCorrecto(idUser.id);
	var jsonProducto = JSON.stringify(idUser);
	console.log(jsonProducto);
	//creo la conexion
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'php/aceptar_asistencia.php?datos='+ jsonProducto, true);
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
  var tableBody = document.getElementsByTagName('tBody');
  var aceptado=document.getElementById(idUser);
  console.log(aceptado);
  var textoAceptado = document.createTextNode("Aceptado");
  var tdProducto = document.createElement('TD');
  tdProducto.setAttribute('colspan',4);
  tdProducto.appendChild(textoAceptado);

  var trProducto = document.createElement('TR');
  trProducto.appendChild(tdProducto);
  trProducto.classList.add("aceptadoAdmin");
  aceptado.replaceWith(trProducto);
  // console.log(tableBody[1]);
  setTimeout(function(){
    trProducto.classList.add('ocultar');
    tableBody[1].removeChild(trProducto);


  },3000);


}
document.addEventListener('DOMContentLoaded', function (event) {
	recorrerBotonesAceptarComprobantes();
});
