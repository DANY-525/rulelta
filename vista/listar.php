<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	

	<title></title>
</head>
<body>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Agregar</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Agregar Persona</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
      	<form id="formulario">
      		
      		<input type="text" name="nombre"></br>
      		<input type="text" name="apellido"></br>

      		<input type="submit" name="enviar">

      	</form>

        <div id="respuesta"></div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<?php


$html = '	<div class="table-responsive">
  <table class="table">';

$html .='  <thead>
      <tr>
        <th>Nombre</th>
        <th>Apelido</th>
      </tr>
    </thead>
    <tbody>';
   

foreach ($getUser as $key => $value) {


    $html .='
          
      <tr class="success">
        <td>'.$value['Nombre'].'</td>
        <td>'.$value['Apellido'].'</td>
      </tr>';
     
  
}

$html .='</tbody>
    </table>
</div>';

echo $html;

?>

<script type="text/javascript" src="vista/js/desarrollo.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

</body>
</html>