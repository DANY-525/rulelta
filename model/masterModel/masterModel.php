<?php 

	include'./lib/conexion.php'; 

	class masterModel extends conexion
	{

		function select($sql){


			$conexion  = new conexion();

	        $result =  $conexion->conectarse();
	 
	 
	        $resultado = $result->query($sql);

	         $retornar = array();

	            while($row = @mysqli_fetch_array($resultado)){

	                $retornar[] = $row;
	            }

	        return $retornar;


		}


		function add($sql){

			$conexion  = new conexion();

	        $result =  $conexion->conectarse();
	 
	 
	        $resultado = $result->query($sql);


			if($result){

				return $resultado;
			}

		}



		function ultimo($sql){

			$conexion  = new conexion();

	        $result =  $conexion->conectarse();
	 
	 
	        $resultado = $result->query($sql);


			 $retornarLastId = $result->insert_id;

       		 return $retornarLastId;
		}
		
		





	}




 ?>