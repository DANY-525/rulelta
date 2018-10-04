<?php 


	/**
	 * 
	 */
	class conexion
	{

		function conectarse(){

			$conexion  = new Mysqli("localhost","root","","prueba");

			return $conexion;

		}


		
	}







 ?>