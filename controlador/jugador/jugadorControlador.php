
<?php
	include'./model/jugador/jugadorModel.php';
	class jugadorControlador extends jugadorModel{


		function start(){

			include './vista/iniciar_secion.php';

		}


		function login(){


			$nombre  = $_REQUEST['nombre'];

			$jugador = jugadorModel::get($nombre);

			include './vista/jugar.php';

		}



		function NumeroRandom(){

			return	$numeroRuleta = rand(0, 100);

		}


		function ganador($numeroRuleta){

			$ganador = "";

			if($numeroRuleta >= 49){

			 	$ganador ="gano Rojo";

			 	   
			} if($numeroRuleta <= 52){

			 	$ganador = "gano Negro";
			}if($numeroRuleta == 50  || $numeroRuleta == 51){

			 	$ganador = "gano Verde";

			}



			return $ganador;



		}

		//funcion para obtener obtener la apuesta si gano o no gano
		function Rojo(){

			//obtenemos un numero random del 1 al 5

			 echo $numeroRuleta  = self::NumeroRandom();

			 //como l probabilidad es de 49
	        
			 if($numeroRuleta >= 49){

			 	echo "gano";
			 	echo "</br>";

			 	echo $numeroRuleta;

			 	 $ganador =  self::ganador($numeroRuleta);

			 	 

			}else{

				echo "perdio";
				echo "</br>";

				 $ganador =  self::ganador($numeroRuleta);

			 	 echo $ganador;

			}

		}//end function verde



		//funcion para obtener obtener la apuesta si gano o no gano
		function Verde(){

			//obtenemos un numero random del 1 al 5

			 $numeroRuleta  = self::NumeroRandom();

			 //como l probabilidad es de 49
	        
			 if($numeroRuleta == 50  || $numeroRuleta == 51){

			 	echo "gano";
			 	echo "</br>";
			 	 $ganador =  self::ganador($numeroRuleta);

			 	 echo $ganador;

			}else{

				 $ganador =  self::ganador($numeroRuleta);

			 	 echo $ganador;
			 	 echo "</br>";

				echo "perdio";
			}

		}//end function negro



		//funcion para obtener obtener la apuesta si gano o no gano
		function Negro(){

			//obtenemos un numero random del 1 al 5

			 $numeroRuleta  = self::NumeroRandom();

			 //como l probabilidad es de 49
	        
			 if($numeroRuleta <= 52){

			 	echo "gano";


			 	echo $numeroRuleta; 
			 	 $ganador =  self::ganador($numeroRuleta);
			 	 echo "</br>";
			 	 
			}else{

				echo "perdio";
					echo $numeroRuleta; 
				
				echo "</br>";
				 $ganador =  self::ganador($numeroRuleta);

			 	

			}

		}//end function negro


	}
?>

