/**********BUSCADOR**********/
var tableBody = document.getElementsByTagName('tBody');
var inputBuscadorProductos = document.getElementById('buscador_comprobantes');
function ocultarRegistrosProductos(nombre){
  //variable para los registros
  var registros = tableBody[1].getElementsByTagName('tr');
  //expresion regular que busca el nombre con case insensitive
  var expression = new RegExp(nombre,"i");
  for (var i = 0; i < registros.length; i++) {
    registros[i].style.display = 'none';
		if(registros[i].childNodes[1].textContent.replace(/\s/g, "").search(expression)!=-1||nombre==''||registros[i].childNodes[3].textContent.replace(/\s/g, "").search(expression)!=-1||nombre==''){
			//registros[i].classList.add('mostrar');
			//registros[i].classList.remove('ocultar');
			registros[i].style.display='table-row';
		}

  }
}


inputBuscadorProductos.addEventListener('input', function(){
  ocultarRegistrosProductos(this.value);


});
