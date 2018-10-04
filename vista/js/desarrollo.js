


function cargar(){

  $( "#formulario" ).submit(function( event ) {
     // alert( "Handler for .submit() called." );
      event.preventDefault();

      var url="index.php?modulo=usuario&funcion=agregar";

      jQuery.ajax({
            url: url,
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data){
               

               document.getElementById("respuesta").innerHTML= data

            }
        })



  })


}




window.onload = cargar()