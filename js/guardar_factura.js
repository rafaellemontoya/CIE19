/*****RECORRER BOTONES EDITAR*****///////

function recorrerBotonesAceptarFacturas() {
	var btnEditar = document.querySelectorAll('.aceptar_factura');
  console.log(btnEditar);
	for (var i = 0; i < btnEditar.length; i++) {
		btnEditar[i].addEventListener('click', function (event) {
			event.preventDefault();
      console.log('click');
			// deshabilitarEdicionProductos();
			var registroActivo = this.parentNode.parentNode;
      var idUser = registroActivo.id;

      var usuario_factura = document.getElementById('usuario_factura').value;

      var noFactura= registroActivo.childNodes[1].childNodes[1].value;
      if(noFactura == ""){

      }else{}

      var user = {
        //TODO AGTRGAR LAS DEMAS VARIABLES
        id: idUser,
        noFactura : noFactura,
        usuario_factura :usuario_factura
      };
      console.log(user);
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
	xhr.open('GET', 'php/guardar_factura.php?datos='+ jsonProducto, true);
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
  console.log(aceptado);
  var textoAceptado = document.createTextNode("Aceptado");
  var tdProducto = document.createElement('TD');
  tdProducto.setAttribute('colspan',4);
  tdProducto.appendChild(textoAceptado);

  var trProducto = document.createElement('TR');
  trProducto.appendChild(tdProducto);
  trProducto.classList.add("aceptadoAdmin");
  aceptado.replaceWith(trProducto);
  //Oculto el fieldset
  var fieldset = document.getElementById('fieldset'+idUser);

  setTimeout(function(){
    trProducto.classList.add('ocultar');
    fieldset.classList.add('ocultar');
  },3000);


}
document.addEventListener('DOMContentLoaded', function (event) {
	recorrerBotonesAceptarFacturas();
});
