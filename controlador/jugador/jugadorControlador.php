
<?php
	include'./model/jugador/jugadorModel.php';
	class jugadorControlador extends jugadorModel{


		function start(){

			include './vista/iniciar_secion.php';

		}

		//obtenemos los valores que puedo apostar cada jugador
		function getValores($jugador){

			$cantidad = 0;
			foreach ($jugador as $key => $value) {
				$cantidad = $value['Cantidad'];
			}

			$operacion = 10 * $cantidad/100;
			$operacion2 = 8 * $cantidad/100;
			$operacion3 = 15 * $cantidad/100;

			$array = [
			    "10" => $operacion,
			    "8" =>  $operacion2,
			    "15" => $operacion3,
			];

			return $array;

		}



		function login(){


			$nombre  = $_REQUEST['nombre'];

			$jugador = jugadorModel::get($nombre);


			$valores = self::getValores($jugador);

			include './vista/jugar.php';

		}


		/*funcion que dicide cuanto restarle o quitarle dependiendo si acierta la ruleta*/
		function Evaluaciones($ganador,$colorApostado,$valorApuesta){


			$valorApuesta;


			$nuevoValor=0;

			if($colorApostado == "Verde" and $ganador == "Verde"){


				$nuevoValor = $valorApuesta *15;



			}


			if($colorApostado == "Negro" and $ganador == "Negro"){



				$nuevoValor = $valorApuesta *2;

			}

			if($colorApostado == "Rojo" and $ganador == "Rojo"){

				$nuevoValor = $valorApuesta *2;

			}

			return $nuevoValor;


		}


		//funcion encargada de la ejecucion de los juegos
		function play(){

			$idUsuario= $_POST['id'];
			$cantidad = $_POST['cantidad'];
			$valorApuesta = $_POST['selecionable'];

			$colorApostado = $_POST['gridRadios'];

			
			$ganador =  self::$colorApostado();


			$respuesta =	self::Evaluaciones($ganador,$colorApostado,$valorApuesta);


			$resultado = "";
			$ganancia = "";

			$perdida ="";

			if($respuesta != 0){
				$ganancia = $respuesta;
				jugadorModel::sumarCantidad($idUsuario,$ganancia,$cantidad);
				$resultado = "gano la apuesta";

			}else{


				jugadorModel::restarCantidad($idUsuario,$valorApuesta,$cantidad);
				$perdida = $valorApuesta;
				$resultado = "perdio la apuesta";
			}



			$array = [
			    "ganador" => $ganador,
			    "colorApuesta" =>  $colorApostado,
			    "valorApuesta" => $valorApuesta,
			    "resultadoApuesta" => $resultado,
			    "ganancia" => $ganancia,
			    "perdida" => $perdida,
			];


			 echo json_encode($array);
			


		}





		function NumeroRandom(){

			return	$numeroRuleta = rand(0, 100);

		}


		function ganador($numeroRuleta){

			$ganador = "";

			if($numeroRuleta >= 49){

			 	$ganador ="Rojo";

			 	   
			} if($numeroRuleta <= 52){

			 	$ganador = "Negro";
			}if($numeroRuleta == 50  || $numeroRuleta == 51){

			 	$ganador = "Verde";

			}



			return $ganador;



		}

		//funcion para obtener obtener la apuesta si gano o no gano
		function Rojo(){

			//obtenemos un numero random del 1 al 5

			 $numeroRuleta  = self::NumeroRandom();
			 //como l probabilidad es de 49
			 $ganador =  self::ganador($numeroRuleta);


			return $ganador;

		

		}//end function verde



		//funcion para obtener obtener la apuesta si gano o no gano
		function Verde(){

			//obtenemos un numero random del 1 al 5

			 $numeroRuleta  = self::NumeroRandom();

			 $ganador =  self::ganador($numeroRuleta);

			  return $ganador;

		
		}//end function negro



		//funcion para obtener obtener la apuesta si gano o no gano
		function Negro(){

			//obtenemos un numero random del 1 al 5

			 $numeroRuleta  = self::NumeroRandom();

			 //como l probabilidad es de 49
	        
			  $ganador =  self::ganador($numeroRuleta);

			  return $ganador;

		}//end function negro


	}
?>

