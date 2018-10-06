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




	}	


 ?>