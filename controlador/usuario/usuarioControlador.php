<?php 

/**
 * 
 */


include'./model/usuario/usuarioModel.php';
class usuarioControlador extends usuarioModel
{
	
	
	function listar(){

	$getUser = usuarioModel::getAll();
	
	include './vista/listar.php';



	}

	function agregar(){

		$nombre   =  $_POST['nombre'];
		$apellido =  $_POST['apellido'];


		$insertar = usuarioModel::setUser($nombre,$apellido);

		if($insertar){

			echo '<mark><h1>el usuario '.$nombre.' Ah sido agregado exitosamente</h1></mark>';
		}else{

			echo 'ah ocurrido un error ';
		}

	}




}



 ?>