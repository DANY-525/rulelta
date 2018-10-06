 function guardarDatosApuesta(usuario,ganador,colorApuesta,valorApuesta,resultadoApuesta,ganancia,perdida) {

    var url="index.php?modulo=jugador&funcion=Guardar&id="+usuario+"&ganador="+ganador+"&colorApuesta="+colorApuesta+"&valorApuesta="+valorApuesta+"&resultadoApuesta="+resultadoApuesta+"&ganancia="+ganancia+"&perdida="+perdida;
    var informacion;
       jQuery.ajax({
            url: url,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data){
               
               informacion = data
            }
        })

        return informacion

}



 function GetLastDatos(usuario){

      var url="index.php?modulo=jugador&funcion=ObtenerUltimaJugada&id="+usuario

       jQuery.ajax({
            url: url,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data){
               
                document.getElementById("respuestaGuardar").innerHTML= data
            }
        })

 

 } 




function cargar(){



$( "#exampleFormControlSelect1").submit(function( event ) {
     // alert( "Handler for .submit() called." );
      event.preventDefault();
    
     document.getElementById("respuestaHistorial").innerHTML= ""

    var url="index.php?modulo=jugador&funcion=play";

      jQuery.ajax({
            url: url,
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data){



            var json = jQuery.parseJSON(data)
   
            htm = ""
            htm = "<ol>"
             htm = "<h1>Datos Apuesta</hi>"

            htm+="<li>Color Apostado: "+json.colorApuesta+" </li>"
            htm+="<li>Color Ganador: "+json.ganador+"</li>"
            htm+="<li>Valor Apostatado: "+json.valorApuesta+"</li>"
            htm+="<li>resultado: "+json.resultadoApuesta+"</li>"
            htm+="<li>ganancia: "+json.ganancia+"</li>"
             htm+="<li>perdida: "+json.perdida+"</li></ol>"

               document.getElementById("respuestaJugar").innerHTML= htm

               guardarDatosApuesta(json.usuario,json.ganador,json.colorApuesta,json.valorApuesta,json.resultadoApuesta,json.ganancia,json.perdida)    
  

             //  GetLastDatos(json.usuario) 
          
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

               document.getElementById("respuestaJugar").innerHTML= data

            }
        })

  })

  $("#historial").click(function(event) {

        event.preventDefault();

        document.getElementById("respuestaJugar").innerHTML=  ""

       var url="index.php?modulo=jugador&funcion=UltimasJugadas"


       jQuery.ajax({
            url: url,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data){



                var json = jQuery.parseJSON(data)
        
          
            var tamano = json.length

            htm = ""
             htm+="<h1>Ultimas Jugadas Ruleta</h1>"


            for (let index = 0; index < tamano; index++) {


                htm+="<table>\
                <th scope='row'>usuario: "+json[index]['idUsuario']+"</th>\
                <td>jugado : "+json[index]['idJugada']+"</td>\
                <td>color Apostado :"+json[index]['colorApostado']+"</td>\
                <td>valor Apuestado : "+json[index]['valorApuesta']+"</td>\
                <td>resultado Apuestado :"+json[index]['resultadoApuesta']+"</td>\
                <td> ganancia :"+json[index]['ganancia']+"</td>\
                <td>perdida :"+json[index]['perdida']+"</td>\
                <td> ganador :"+json[index]['ganador']+"</td>\
                <td></td>\
                </table>";
                 
            }



                document.getElementById("respuestaHistorial").innerHTML=  htm
            }
        })





     
   }); 






}





window.onload = cargar()