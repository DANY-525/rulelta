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


	function Editar(){

		$id   =  $_GET['id'];


		$respuesta= usuarioModel::getUser($id);
	
		include './vista/editar.php';

	}


	function Update(){
		$id   =  $_POST['id'];
		$nombre   =  $_POST['nombre'];
		$apellido =  $_POST['apellido'];
		$cantidad =  $_POST['cantidad'];


		$actualizarUsuario = usuarioModel::setUpdate($id,$nombre,$apellido,$cantidad );


		if($actualizarUsuario){

			echo '<mark><h1>el usuario '.$nombre.' Ah sido actualizado exitosamente</h1></mark>';
		}else{

			echo 'ah ocurrido un error ';
		}


	}



	function Eliminar(){


		$id   =  $_GET['id'];

		$actualizarUsuario = usuarioModel::deleteUser($id);


		if($actualizarUsuario){

			echo '<mark><h1>el usuario  Ah sido eliminado exitosamente</h1></mark>';
		}else{

			echo 'ah ocurrido un error ';
		}

	}




}



 ?>