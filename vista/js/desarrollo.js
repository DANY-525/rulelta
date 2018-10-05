


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


  $( "#formularioEditar" ).click(function( event ) {
    
        event.preventDefault();

     var url="index.php?modulo=usuario&funcion=update";

      jQuery.ajax({
            url: url,
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data){
               
               document.getElementById("respuestaEditar").innerHTML= data

            }
        })



  })//fin de formulario editar





   $(".eliminar").click(function(event) {


     event.preventDefault();

     var id = event.currentTarget.id;
     

        var url="index.php?modulo=usuario&funcion=Eliminar&id="+id;

         jQuery.ajax({
            url: url,
            success: function(data){

               document.getElementById("respuestaEliminar").innerHTML= data

                setInterval( function refresh(){
                    location.reload(true);
                  },1000);
                 
                 

            }
        })
     
   }); 

   





   $("#test").click(function( event ) {
   
 
       location.reload(true)
        
  })







}




window.onload = cargar()