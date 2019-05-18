/**
 *
 */

(function(){
	"use strict";

	document.addEventListener('DOMContentLoaded', function(){

		console.log("Listoaa");

		//Inscripción
		var total=0;

		//Estudiante o profesionale
		// var estProf = document.getElementsByName("proest").value;
		var estProf = 0;

		var radio = document.getElementsByName('proest');
		for (var i = 0; i < radio.length; i++) {
			radio[i].addEventListener('click', function functionName() {
				if(radio[0].checked == true){
					console.log("click Estudiante");
					estProf = 2;
				}else if (radio[1].checked == true) {
					console.log("click Profesional");
					estProf = 1;
				}

			});
		}



		//Talleres
		var taller1 = document.getElementById("taller1");
		var taller2 = document.getElementById("taller2");
		var taller3 = document.getElementById("taller3");
		var taller4 = document.getElementById("taller4");
		var taller5 = document.getElementById("taller5");
		var taller6 = document.getElementById("taller5");

		//Cultural
		var cult1 = document.getElementById("cult1");

		//Botones y divs
		var calcular = document.getElementById("calcular");
		var listaProductos = document.getElementById("lista-productos");
		var impresionTotal = document.getElementById("suma-total");
		var btnRegistro = document.getElementById("btnRegistro");
		var inputTotal = document.getElementById("total_pedido");

		btnRegistro.disabled="true";

		calcular.addEventListener('click', calcularMontos);

		/**********************Calcular Montos**************/
		function calcularMontos(event){
			console.log(estProf);
			event.preventDefault();
			btnRegistro.disabled="true";
			total=0;
			console.log("Click en calculare->"+estProf);


			var inscripcion = document.getElementById("inscripcion");

			if(estProf=='1'){
				//Si es profesionale

				//Costos inscripcion
				var cInscripcion = 4500;

				if(inscripcion.checked){
					//Hay inscripcion
					//Coatos talleres
					var cTaller1 = 600 ;
					var cTaller2 = 1000;
					var cTaller3 = 600;
					var cTaller4 = 600;
					var cTaller5 = 1000;


				}else{
					//No hay inscripcion
					var cTaller1 = 1600;
					var cTaller2 = 2000;
					var cTaller3 = 1600;
					var cTaller4 = 1600;
					var cTaller5 = 2000;
				}//no hay inscripcion




				console.log("Es profesionale");


			}else if(estProf=='2'){
				//Estudiante
				console.log("Es estudiante");
				//Costo inscripción
				var cInscripcion = 1500;
				/*****COSTOS TALLERES******/
				if(inscripcion.checked){
					//Hay inscripcion
					//Coatos talleres
					var cTaller1 = 300 ;
					var cTaller2 = 600;
					var cTaller3 = 300;
					var cTaller4 = 300;
					var cTaller5 = 600;


				}else{
					//No hay inscripcion
					var cTaller1 = 1300;
					var cTaller2 = 1600;
					var cTaller3 = 1300;
					var cTaller4 = 1300;
					var cTaller5 = 1600;
				}//no hay inscripcion
				/*****FIN COSTOS TALLERES******/
			}//FIN CALCULAR COSTOS

			/**********REVISAR SELECCIONADOS******/

			var resumen = [];


			if(inscripcion.checked){
				resumen.push("$ "+ cInscripcion+ " MX Inscripción ") ;

				total+= cInscripcion;
			}
			if(taller1.checked){
				//Agrego a array
				resumen.push("$ "+  cTaller1+ " MX Diagnósticos energéticos. Nivel básico ") ;
				//sumo total
				total+=cTaller1;
			}
			if(taller2.checked){
				//Agrego a array
				resumen.push("$ "+ cTaller2+ " MX Diseño paramétrico ") ;
				//sumo total
				total+=cTaller2;
			}
			if(taller3.checked){
				//Agrego a array
				resumen.push("$ "+  cTaller3 + " MX Introducción para la Realización de un Diagnóstico Energético ") ;
				//sumo total
				total+=cTaller3;
			}
			if(taller4.checked){
				//Agrego a array
				resumen.push("$ "+ cTaller4 + " MX Taller de eficiencia energética aplicado a la industria alimenticia láctea ") ;
				//sumo total
				total+=cTaller4;
			}
			if(taller5.checked){
				//Agrego a array
				resumen.push("$ "+ cTaller5 + " MX Análisis de redes eléctricas mediante simulación computacional") ;
				//sumo total
				total+=cTaller5;
			}
			if(cult1.checked){
				//Agrego a array
				resumen.push("$ 200 MX Visita guiada al Museo Nacional de Arte (MUNAL)") ;
				//sumo total
				total+=200;
			}

			console.log(resumen);
			/**********FIN REVISAR SELECCIONADOS******/
			listaProductos.innerHTML='';
			for( var i=0; i<resumen.length; i++){
				listaProductos.innerHTML += resumen[i] + '<br>';
			}//for
			impresionTotal.innerHTML = "$ "+total+" MX";

			if(total > 0){
				btnRegistro.disabled = false ;
				console.log("habilitado");
				inputTotal.value= total;
			}
//

			/**********************FIN Calcular Montos**************/
		}

		//Taller1 Diagnósticos energéticos. Nivel básico

		/*
		inscripcion.addEventListener('change', function(){
			if(this.checked){
			console.log("Click en inscripcion");
			total+=200;
			}else{
				total-=200;
			}
			console.log(total);
		});*/
		//Taller 2


	});
})();
