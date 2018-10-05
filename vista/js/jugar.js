function cargar(){

$( "#selecionarUsuario").submit(function( event ) {
     // alert( "Handler for .submit() called." );
      event.preventDefault();

      console.log("entre")

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



 $("a").click(function(event) {


     event.preventDefault();

     var id = event.currentTarget.id;
     
     	alert("entre")
     
   }); 








}





window.onload = cargar()