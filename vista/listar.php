<?php include'header.php'; ?>

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
        <button id="test" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<!-- Trigger the modal with a button -->
<button id="editarmodal"type="button2" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModaldos">Editar</button>

<!-- Modal -->
<div id="myModaldos" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Editar Persona</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
  

        <div id="respuestaEditar"></div>
 
      </div>
      <div class="modal-footer">
        <button id="test" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  


  <div id="respuestaEliminar"></div>











<?php

$html = '	<div class="table-responsive">
  <table class="table">';

$html .='  <thead>
      <tr>
        <th>Nombre</th>
        <th>Apelido</th>
        <th>Cantidad</th>

      </tr>
    </thead>
    <tbody>';
   

foreach ($getUser as $key => $value) {


    $html .='
          
      <tr class="success">
        <td>'.$value['Nombre'].'</td>
        <td>'.$value['Apellido'].'</td>
        <td>'.$value['Cantidad'].'</td>
        <th>

         <a id="'.$value['id'].'" class="editar" href="index.php?modulo=usuario&funcion=Editar&id='.$value['id'].'"> <img class="icon" src="vista/img/editar.png"></a>
          <a id="'.$value['id'].'" class="eliminar" href="index.php?modulo=usuario&funcion=Eliminar&id='.$value['id'].'"> <img class="icon" src="vista/img/borar.png">

         </th>
      </tr>';
     
  
}

$html .='</tbody>
    </table>
</div>';

echo $html;

?>

<?php include'footer.php'; ?>

</body>
</html>