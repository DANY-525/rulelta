function cargar(){



$( "#exampleFormControlSelect1").submit(function( event ) {
     // alert( "Handler for .submit() called." );
      event.preventDefault();
      alert("entre");

    var url="index.php?modulo=jugador&funcion=play";

      jQuery.ajax({
            url: url,
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data){
          
               document.getElementById("respuestaJugar").innerHTML= data

            }
        })

  })









$( "#selecionarUsuario").submit(function( event ) {
     // alert( "Handler for .submit() called." );
      event.preventDefault();


      var url="index.php?modulo=jugador&funcion=login";

      jQuery.ajax({
            url: url,
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data){



          
            /*htm = ""
             htm+="<h1>resultados busqueda</h1>"


            for (let index = 0; index < tamano; index++) {


                htm+="<table>\
                <th scope='row'>"+json[index]['numero_contrato']+"</th>\
                <td>"+json[index]['objetos_contrato']+"</td>\
                <td>"+json[index]['presupuesto']+"</td>\
                <td>"+json[index]['fecha_estimada_finalizacion']+"</td>\
                <td>"+json[index]['tipo_contrato']+"</td>\
                <td>"+json[index]['fecha_hora_publicacion']+"</td>\
                <td>"+json[index]['secretaria_idsecretaria']+"</td>\
                <td>"+json[index]['fecha_hora_publicacion']+"</td>\
                <td><a href=''>Eliminar</a></td>\
                </table>";
                 
            }*/




               document.getElementById("respuestaJugar").innerHTML= data

            }
        })

  })

 $("a").click(function(event) {


     event.preventDefault();

     var id = event.currentTarget.id;
     
     	
     
   }); 






}





window.onload = cargar()