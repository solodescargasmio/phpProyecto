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
          <script src="js/nicEdit.js" type="text/javascript"></script>
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
     bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
   </script>
    </head>
    <body>
             <a href="javascript:imprSelec('cuadros')" >
   <button id="buscar" name="buscar" class="btn btn-success">
       <img src="./imagenes/boton_imprimir.gif" width="90" height="50"></button>  
     </a>
      <div class="cuadros" id="cuadros">
        <h4>Second Textarea</h4>
<textarea name="area2" style="width: 500px; height: 300px;">
	Some Initial Content was in this textarea
</textarea>
        <?php 
        $param="06-01-1980";
        echo calcularEdad($param);
     function calcularEdad($param) {
        
                 $fecha=date('d-m-Y');
                list($dia,$mes,$ano)=  explode('-', $fecha);
//fecha de nacimiento
        list($diae,$mese,$anoe)=  explode('-', $param);

//si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual

if (($mese == $mes) && ($diae > $dia)) {
$ano=($ano-1); }

//si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual

if ($mese > $mes) {
$ano=($ano-1);}

//ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad

$edad=($ano-$anoe);

return $edad;
    }
        ?></div>
            <script language="Javascript">
function imprSelec(nombre)
{
  var ficha = document.getElementById(nombre);
  var ventimp = window.open(' ', 'popimpr');
  ventimp.document.write( ficha.innerHTML );
  ventimp.document.close();
  ventimp.print( );
  ventimp.close();
}
</script>
    </body>
</html>
