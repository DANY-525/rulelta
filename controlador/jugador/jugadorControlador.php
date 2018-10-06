
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



		function NumeroRandom(){

			return	$numeroRuleta = rand(0, 100);

		}


		function ganador($numeroRuleta){

			$ganador = "";

			if($numeroRuleta >= 49){

			 	$ganador ="rojo";

			 	   
			} if($numeroRuleta <= 52){

			 	$ganador = "negro";
			}if($numeroRuleta == 50  || $numeroRuleta == 51){

			 	$ganador = "verde";

			}



			return $ganador;



		}

		//funcion para obtener obtener la apuesta si gano o no gano
		function Rojo(){

			//obtenemos un numero random del 1 al 5

			 $numeroRuleta  = self::NumeroRandom();
			 //como l probabilidad es de 49
			 $ganador =  self::ganador($numeroRuleta);

			 echo $ganador;

		

		}//end function verde



		//funcion para obtener obtener la apuesta si gano o no gano
		function Verde(){

			//obtenemos un numero random del 1 al 5

			 $numeroRuleta  = self::NumeroRandom();

			 $ganador =  self::ganador($numeroRuleta);

			  echo $ganador;

		
		}//end function negro



		//funcion para obtener obtener la apuesta si gano o no gano
		function Negro(){

			//obtenemos un numero random del 1 al 5

			 $numeroRuleta  = self::NumeroRandom();

			 //como l probabilidad es de 49
	        
			  $ganador =  self::ganador($numeroRuleta);

			  echo $ganador;

		}//end function negro


	}
?>

