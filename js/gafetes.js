/*****RECORRER BOTONES EDITAR*****///////
console.log("listo");
var idSesion = document.getElementById('id_sesion').value;

function actualizarFirebaseGafetes(estado, id) {

	//firebase
	var updates = {};

	updates['/gafetes/estado/'] = estado;
	updates['/gafetes/id/'] = id;
	return firebase.database().ref().update(updates);
}

function recorrerBotonesAceptarComprobantes() {
  var tableBody = document.getElementsByTagName('tBody');
	var btnEditar = tableBody[0].querySelectorAll('.creado');
	for (var i = 0; i < btnEditar.length; i++) {
		btnEditar[i].addEventListener('click', function (event) {
			event.preventDefault();
			// deshabilitarEdicionProductos();

			var registroActivo = this.parentNode.parentNode;
      var idUser = registroActivo.id;
      //Estado 1= creado, 2= entregado
      var user = {
        id: idUser,
        idSesion: idSesion,
        estado : 1
      };
      // console.log(user);
      estadoAjaxAceptado(user);
			// registroActivo.classList.add('modo-edicion');
			// registroActivo.classList.remove('desactivado');
      //
			// //actualizamos el producto
			// actualizarProducto(registroActivo.id);
		});
	}
}
function recorrerBotonesAceptarComprobantesFirebase() {
  var tableBody = document.getElementsByTagName('tBody');
	var btnEditar = tableBody[1].querySelectorAll('.creado');
	for (var i = 0; i < btnEditar.length; i++) {
		btnEditar[i].addEventListener('click', function (event) {
			event.preventDefault();
			// deshabilitarEdicionProductos();

			var registroActivo = this.parentNode.parentNode;
      var idUser = registroActivo.id;
      //Estado 1= creado, 2= entregado
      var user = {
        id: idUser,
        idSesion: idSesion,
        estado : 1
      };
      // console.log(user);
      estadoAjaxAceptadoFirebase(user);
			// registroActivo.classList.add('modo-edicion');
			// registroActivo.classList.remove('desactivado');
      //
			// //actualizamos el producto
			// actualizarProducto(registroActivo.id);
		});
	}
}
function recorrerBotonesEntregarComprobantes() {
  var tableBody = document.getElementsByTagName('tBody');
	var btnEditar = tableBody[0].querySelectorAll('.entregado');
	for (var i = 0; i < btnEditar.length; i++) {
    var row=btnEditar[i].parentNode.parentNode;
    var btnCreado=row.childNodes[5].childNodes[0].disabled;
    console.log(btnCreado);
    if(btnCreado==false){
      btnEditar[i].disabled=true;
    }
		btnEditar[i].addEventListener('click', function (event) {
			event.preventDefault();
			// deshabilitarEdicionProductos();
			var registroActivo = this.parentNode.parentNode;
      var idUser = registroActivo.id;
      //Estado 1= creado, 2= entregado
      var user = {
        id: idUser,
        idSesion: idSesion,
        estado : 2
      };
      // console.log(user);
      estadoAjaxAceptado(user);
			// registroActivo.classList.add('modo-edicion');
			// registroActivo.classList.remove('desactivado');
      //
			// //actualizamos el producto
			// actualizarProducto(registroActivo.id);
		});
	}
}
function recorrerBotonesEntregarComprobantesFirebase() {
  var tableBody = document.getElementsByTagName('tBody');
	var btnEditar = tableBody[1].querySelectorAll('.entregado');
	for (var i = 0; i < btnEditar.length; i++) {
    var row=btnEditar[i].parentNode.parentNode;
    var btnCreado=row.childNodes[3].childNodes[0].disabled;
    console.log(btnCreado);
    if(btnCreado==false){
      btnEditar[i].disabled=true;
    }
		btnEditar[i].addEventListener('click', function (event) {
			event.preventDefault();
			// deshabilitarEdicionProductos();
			var registroActivo = this.parentNode.parentNode;
      var idUser = registroActivo.id;
      //Estado 1= creado, 2= entregado
      var user = {
        id: idUser,
        idSesion: idSesion,
        estado : 2
      };
      estadoAjaxAceptado(user);
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
	xhr.open('GET', 'php/gafetes.php?datos='+ jsonProducto, true);
	xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
	xhr.onreadystatechange = function() {
			if(xhr.readyState == 4 && xhr.status == 200) {
					var resultado = xhr.responseText;
					console.log(resultado);
					var json = JSON.parse(resultado);
					if(json.respuesta==true){
            if(json.estado==1){

              creadoCorrecto(json.id);
            }else if (json.estado==2) {
              entregadoCorrecto(json.id);
            }
					}

			}
	}
	xhr.send();
}

/******EDITA PRODUCTO CON AJAX*******/
function estadoAjaxAceptadoFirebase(idUser) {
  // cambiadoCorrecto(idUser.id);
	var jsonProducto = JSON.stringify(idUser);
	console.log(jsonProducto);
	//creo la conexion
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'php/gafetes.php?datos='+ jsonProducto, true);
	xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
	xhr.onreadystatechange = function() {
			if(xhr.readyState == 4 && xhr.status == 200) {
					var resultado = xhr.responseText;
					console.log(resultado);
					var json = JSON.parse(resultado);
					if(json.respuesta==true){
            if(json.estado==1){

              creadoCorrectoFirebase(json.id);
            }else if (json.estado==2) {
              entregadoCorrecto(json.id);
            }
					}

			}
	}
	xhr.send();
}

function creadoCorrectoFirebase(idUser) {
  var aceptado=document.getElementById(idUser);
  aceptado.childNodes[2].childNodes[0].disabled=true;

  var entregar= aceptado.childNodes[2].nextElementSibling.childNodes[0];
  entregar.disabled=false;

}
function creadoCorrecto(idUser) {
  var aceptado=document.getElementById(idUser);
  aceptado.childNodes[5].childNodes[0].disabled=true;
  console.log(aceptado.childNodes[5].childNodes[0]);

  var entregar= aceptado.childNodes[5].nextElementSibling.childNodes[0];
  entregar.disabled=false;

}
function entregadoCorrecto(idUser) {
  var tableBody = document.getElementsByTagName('tBody');
  var aceptado=document.getElementById(idUser);
  console.log(aceptado);
  var textoAceptado = document.createTextNode("Aceptado");
  var tdProducto = document.createElement('TD');
  tdProducto.setAttribute('colspan',2);
  tdProducto.appendChild(textoAceptado);

  var trProducto = document.createElement('TR');
  trProducto.appendChild(tdProducto);
  trProducto.classList.add("aceptadoAdmin");
  aceptado.replaceWith(trProducto);
  setTimeout(function(){
    trProducto.classList.add('ocultar');
    tableBody[1].removeChild(trProducto);


  },3000);


}
/***********FIREBASE***********/
  var rootRef235 = firebase.database().ref().child('gafetes');
  rootRef235.on('value', snap=> {
    var respuesta = JSON.stringify(snap.val(), null, 2);
    leerFirebase(respuesta);
  });
	// document.addEventListener('DOMContentLoaded', function (event) {
	// 	recorrerBotonesEditarProductos();
	// });
  function leerFirebase(respuesta) {
    console.log(respuesta);
		//Convierto a string la respuesta
    var obj = JSON.parse( respuesta);
    var estado = obj['estado'];
    var idUser = obj['id'];

    switch (estado) {
      case 0:
        console.log('no hay cambio');
        break;
        case 1:
				/********VENTA NUEVA*******/
					//Si hay cambios
					//creo la conexion
					var xhr = new XMLHttpRequest();
					xhr.open('GET', 'php/consultaGafetes.php?datos='+ respuesta, true);
					xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
					xhr.onreadystatechange = function() {
						console.log("si hay cambios id->"+ idUser);
							if(xhr.readyState == 4 && xhr.status == 200) {
                console.log('hay respuesta');
								//obtengo resultado
									var resultado = xhr.responseText;
									console.log(resultado);
									//transformo resultadoa json
									var json = JSON.parse(resultado);
									if(json.respuesta==true){
                    console.log(json);
                    var grado = "";
                    //Grado
                    if(json.grado== 3){
                      grado= "Ing";
                    }
                    if(json.grado== 2){
                      grado= "Mtro";
                    }
                    if(json.grado== 1){
                      grado= "Dr";
                    }

                      crearPlantilla(json.id, grado, json.nombre, json.apellido, json.institucion);
                      recorrerBotonesAceptarComprobantesFirebase();
                      actualizarFirebaseGafetes(0,0);
                      recorrerBotonesEntregarComprobantesFirebase();
									}

							}
					}
					xhr.send();
				//  actualizarFirebaseVenta(0,0);

        break;
        case 2:
				/********EDICION *******/
	        console.log("borrar id->"+ idUser);
					//creo la conexion

        break;
				case 3:
				/********BORRAR*******/


      default:
      console.log('default no hay cambios');

    }

}


document.addEventListener('DOMContentLoaded', function (event) {
	recorrerBotonesAceptarComprobantes();
  recorrerBotonesEntregarComprobantes();
});
