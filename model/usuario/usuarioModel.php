<?php 

	
	class usuarioModel extends masterModel
	{
		

		function getAll(){

			$sql="select * from usuario";
			$resultado = masterModel::select($sql);
			return $resultado;
		}	



		function setUser($nombre,$apellido){

			$sql="INSERT INTO usuario (id, Nombre, Apellido) VALUES (0, '$nombre', '$apellido');";

			$resultado = masterModel::add($sql);
			
			return $resultado;



		}






	}



 ?>