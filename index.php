<?php


/**
 * 
 */
class Index 
{

	private $m = "";
	private $f = "";
	
	function __construct($metodo,$funcion)
	{


		$this->m = $metodo;
		$this->f = $funcion;

	
	}

    function   genararUlr(){



    include 'model/masterModel/masterModel.php';

       $metodo  = ''.$this->m.'Controlador';
       $funcion = $this->f;

     include 'controlador/'.$this->m.'/'.$this->m.'Controlador.php';

      $newController = new $metodo();
    	
      $newController->$funcion();


    } 


}


$metodo = $_REQUEST['modulo'];




$funcion = $_REQUEST['funcion'];


$objEnviar = new Index($metodo,$funcion);

$objEnviar->genararUlr();



?>