<?php include'header.php'; ?>

<body>

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

	foreach ($jugador as $key => $value) {

			$html .='
          
      <tr class="success">
        <td>'.$value['Nombre'].'</td>
        <td>'.$value['Apellido'].'</td>
        <td>'.$value['Cantidad'].'</td>

         <td>

         <a id="'.$value['id'].'" class="verde" href="index.php?modulo=jugador&funcion=Verde&id='.$value['id'].'">verde</a>

         <a id="'.$value['id'].'" class="negro" href="index.php?modulo=jugador&funcion=Negro&id='.$value['id'].'">negro</a>
          <a id="'.$value['id'].'" class="rojo" href="index.php?modulo=jugador&funcion=Rojo&id='.$value['id'].'">rojo</a>
         </td>
      </tr>';


	}

	$html .='</tbody>
	    </table>
	</div>';



	echo $html;



?>
</br>




<form id="exampleFormControlSelect1">


	<?php

	foreach ($jugador as $key => $value) {

	$html ='<input type="hidden" name="cantidad" value="'.$value['Cantidad'].'">';

	$html .='<input type="hidden" name="id" value="'.$value['id'].'">';

	echo "$html";

   }


	?>

	<div class="form-group">
	<label for="exampleFormControlSelect1">Por Favor Seleccione el valor de la apuesta</label>


	<?php


	$html = '<select name="selecionable" class="form-control" id="exampleFormControlSelect1">';
	foreach ($valores as $key => $value) {

		


		
	$html .='<option value="'.$value.'">'.$value.'</option>';
	
  		
  	}	

  	$html .='</select>';  


  

  	echo $html;
  
	?>



</br>



  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Seleccione el color </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Verde" checked>
          <label class="form-check-label" for="gridRadios1">
            Verde
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Rojo">
          <label class="form-check-label" for="gridRadios2">
            Rojo
          </label>
        </div>

         <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Negro">
          <label class="form-check-label" for="gridRadios2">
           Negro
          </label>
        </div>
     
      </div>
    </div>
  </fieldset>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Apostar</button>
    </div>
  </div>
</form>



<div id="respuestaJugar"></div>


<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>



<?php include'footer.php'; ?>

</body>
</html>

