
<?php include'header.php'; ?>

<body>

<?php


	foreach ($respuesta as $key => $value) {
		
	}


	$formulario = '<form id="formularioEditar">
            		<input type="hidden" name="id" value="'.$value['id'].'"></br>
            		<input type="text" name="nombre" value="'.$value['Nombre'].'"></br>
            		<input type="text" name="apellido" value="'.$value['Apellido'].'"></br>
            		<input type="text" name="cantidad" value="'.$value['Cantidad'].'"></br>

            		<input type="submit" name="enviar">

      	     </form>';

     echo $formulario;

?>


	<div id="respuestaEditar"></div>

<?php include'footer.php'; ?>

</body>
</html>