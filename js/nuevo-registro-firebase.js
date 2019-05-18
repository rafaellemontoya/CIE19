/*****RECORRER BOTONES EDITAR*****///////
console.log("listo");
var idCreado= document.getElementById('id_creado').value;

function actualizarFirebaseGafetes(estado, idCreado) {

	//firebase
	var updates = {};

	updates['/gafetes/estado/'] = estado;
	updates['/gafetes/id/'] = idCreado;
	return firebase.database().ref().update(updates);
}

document.addEventListener('DOMContentLoaded', function (event) {
	actualizarFirebaseGafetes(1, idCreado);
	actualizarFirebaseGafetes(0, 0);
});
