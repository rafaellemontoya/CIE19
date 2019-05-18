var tablaGafetes = document.getElementById('tabla_gafetes');
console.log('hola');
function crearPlantilla(id, grado, nombre, apellido, institucion) {
  //boton entregar
  var textoEntregado = document.createTextNode("Entregado");
  var inputEntregado = document.createElement('INPUT');
  inputEntregado.disabled=true;
  inputEntregado.type = 'submit';
  inputEntregado.classList.add('btn','btn-icon', 'btn-icon-left', 'btn-default', 'btn-sm', 'entregado');
  inputEntregado.value = "Entregado";
  //Boton creado
  var textoCreado = document.createTextNode("Creado");
  var inputCreado = document.createElement('INPUT');
  inputCreado.disabled=false;
  inputCreado.type = 'submit';
  inputCreado.classList.add('btn','btn-icon', 'btn-icon-left', 'btn-default', 'btn-sm', 'creado');
  inputCreado.value = "Creado";
  //TextNodes
  var textoGrado = document.createTextNode(grado);
  var textoPuntoEspacio = document.createTextNode(". ");
  var textoEspacio = document.createTextNode(" ");
  var textoNombre = document.createTextNode(nombre);
  var textoApellido = document.createTextNode(apellido);
  var textoInstitucion = document.createTextNode(institucion);
  //Tds
  var tdEntregado = document.createElement('TD');
  var tdCreado = document.createElement('TD');
  var tdInstitucion = document.createElement('TD');
  var tdNombre = document.createElement('TD');
  //Anexo Tds
  tdEntregado.appendChild(inputEntregado);
  tdCreado.appendChild(inputCreado);
  tdInstitucion.appendChild(textoInstitucion);
  tdNombre.appendChild(textoGrado);
  tdNombre.appendChild(textoPuntoEspacio);
  tdNombre.appendChild(textoNombre);
  tdNombre.appendChild(textoEspacio);
  tdNombre.appendChild(textoApellido);
  //creo tr
  var trNuevo = document.createElement('TR');
  trNuevo.id = id;
  trNuevo.appendChild(tdNombre);
  trNuevo.appendChild(tdInstitucion);
  trNuevo.appendChild(tdCreado);
  trNuevo.appendChild(tdEntregado);
  //agrego a tabla
  tablaGafetes.childNodes[1].appendChild(trNuevo);

}
