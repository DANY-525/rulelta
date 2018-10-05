<?php 

	
	class usuarioModel extends masterModel
	{
		

		function getUser($id){

			$sql="select * from usuario where id=$id";
			$resultado = masterModel::select($sql);
			return $resultado;

		}



		function getAll(){

			$sql="select * from usuario";
			$resultado = masterModel::select($sql);
			return $resultado;
		}	



		function setUser($nombre,$apellido){

			$sql="INSERT INTO usuario (id, Nombre, Apellido, Cantidad) VALUES (0, '$nombre', '$apellido',10000)";

			$resultado = masterModel::add($sql);
			
			return $resultado;

		}


		function setUpdate($id,$nombre,$apellido,$cantidad){


		   $sql  = "UPDATE usuario SET Nombre = '$nombre', Apellido = '$apellido', Cantidad = '$cantidad' WHERE id = $id";


		   $resultado = masterModel::add($sql);
		
		   return $resultado;



		}


		function deleteUser($id){

		   $sql  = "DELETE FROM usuario WHERE id = $id";

		   $resultado = masterModel::add($sql);
	
		   return $resultado;

		}






	}



 ?>