<?php 

	class jugadorModel extends masterModel
	{

		function get($jugador){	

			$sql="select * from usuario where Nombre='$jugador'";
		
			$resultado = masterModel::select($sql);
			
			return $resultado;

		}

	}	


 ?>