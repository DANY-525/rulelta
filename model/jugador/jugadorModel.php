<?php 

	class jugadorModel extends masterModel
	{

		function get($jugador){	

			$sql="select * from usuario where Nombre='$jugador'";
		
			$resultado = masterModel::select($sql);
			
			return $resultado;

		}


		function sumarCantidad($idUsuario,$ganancia,$cantidad){

			$resultado = $ganancia + $cantidad;


			$sql = "UPDATE usuario SET Cantidad = '$resultado' WHERE id = $idUsuario;";

			$resultado = masterModel::add($sql);


			return $resultado;




		}

		function restarCantidad($idUsuario,$valorApuesta,$cantidad){

			$resultado =  $cantidad - $valorApuesta;

			$sql = "UPDATE usuario SET Cantidad = '$resultado' WHERE id = $idUsuario;";

			$resultado = masterModel::add($sql);

			return $resultado;


		}



		function guardarApuesta($idusuario,$colorApuesta,$valorApuesta,$resultadoApuesta,$ganancia,$perdida,$ganador){


			$sql ="INSERT INTO jugada (idJugada, idUsuario,colorApostado, valorApuesta, resultadoApuesta, ganancia, perdida, ganador) VALUES (0, '$idusuario', '$colorApuesta,', '$valorApuesta', '$resultadoApuesta', '$ganancia', '$perdida', '$ganador')";


			$resultado = masterModel::ultimo($sql);

			return $resultado;





		}//guardar apuesta fin




		function UltimasApuestas(){


			$sql = "SELECT * FROM jugada  ORDER by idJugada DESC LIMIT 5";
			$resultado = masterModel::select($sql);
			return $resultado;


		}








	}	


 ?>