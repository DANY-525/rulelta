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
        <th>

         <a id="'.$value['id'].'" class="verde" href="index.php?modulo=jugador&funcion=Verde&id='.$value['id'].'">verde</a>

         <a id="'.$value['id'].'" class="negro" href="index.php?modulo=jugador&funcion=Negro&id='.$value['id'].'">negro</a>
          <a id="'.$value['id'].'" class="rojo" href="index.php?modulo=jugador&funcion=Rojo&id='.$value['id'].'">rojo</a>
         </th>
      </tr>';


	}

	$html .='</tbody>
	    </table>
	</div>';

	echo $html;



?>