var btnImprimit = document.getElementById('btnImprimir');
btnImprimir.addEventListener('click',function (event) {
  event.preventDefault();
  imprimir();
});
function imprimir(){
  var tableBody = document.getElementsByTagName('tr');
  var titulo=document.getElementById('titulo');  //obtenemos el objeto a imprimir
  var objeto=document.getElementById('imprimir');  //obtenemos el objeto a imprimir
  var ventana=window.open('','_blank');  //abrimos una ventana vacía nueva

  for (var i = 0; i < tableBody.length; i++) {
    ventana.document.write(tableBody[i].innerHTML);  //imprimimos el HTML del objeto en la nueva ventana
  }
  ventana.document.write(titulo.innerHTML);  //imprimimos el HTML del objeto en la nueva ventana
  ventana.document.close();  //cerramos el documento
  ventana.print();  //imprimimos la ventana
  ventana.close();  //cerramos la ventana
}
