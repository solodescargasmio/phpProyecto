<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <script src="js/jquery.js" type="text/javascript"></script>
     <script type="text/javascript">
        $(function(){
	//Aqui se coge el elemento ciudad y con la propiedad .on que requiere dos  parametros : change (cuando el valor de ese id cambie, que es cuando se elige otra opcion en la desplegable)y ejecutar la siguiente funcion cuando se haga change
	$('#elejir').on('change', function(){
              user=$('#elejir').val();
          alert(user);      
    });  
    });
  /*     $(document).ready(function(){ //comienza a leer la funcion al cargar la pagina
         $("#elejir").click(function(){  //al sacar el foco de la caja de texto se dispara la funcion
         user=$(this).val();//tomo el valor escrito en la caja de texto
         datatypo='user='+user;//genero un array con indice
     $.ajax({
         url: 'probarajax.php',//llamo a la pagina q hace el control
         type:'POST',//metodo por el cual paso el dato
         data:datatypo,
             success: function (data) { //funcion q recoge la respuesta de la pagina q hace el control
                  $("#respuestauser").fadeIn(1000).html(data); //imprimo el mensaje en el div      
                
    }
     });
     });
 });   */
   </script>
    </head>
    <body>
        <select name="elejir" id="elejir">
            <option value="uno">UNO</option>
            <option value="dos">DOS</option>
            <option value="tres">TRES</option>
            </select>
    </body>
</html>