<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{$titulo}</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/dashboard.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
 <script src="js/jquery.js" type="text/javascript"></script> 
 <link href="css/ficha.css" rel="stylesheet" type="text/css">
</head>

<body>
            {include file="header.tpl"}
    <div class="container-fluid">
  
          {if isset($mensage)}
          {$mensage}
          {/if}
          <h3>Datos Paciente</h3>  
          {if isset($cedula)}
             <form id="FormularioPatronimico" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    <fieldset> <legend>Agregar una apresiacion</legend>
        <div class="form-group">
    <label for="ci" class="col-lg-2 control-label">Seccion del titulo</label>
    <div class="col-lg-10">
    <select name="titulo" id="titulo">
<option value="0">Seleccione una opcion</option>
            <option value="Ecografia Vasos de Cuello y Femoral">Ecografía Vasos de Cuello y Femoral</option>
            <option value="Rigidez Arterial Aortica">Rigidez Arterial Aórtica </option>
            <option value="Resumen">Resumen</option>
    </select>
    </div>
    <div id="respuestauser"></div>
   </div>
          <div class="form-group">
    <label for="ci" class="col-lg-2 control-label">Texto</label>
    <div class="col-lg-10">
       <textarea name="texto" style="width: 500px; height: 300px;">

</textarea>
    </div>
        </div>
    <input type="submit" class="btn btn-primary btn-lg btn-block">
    </fieldset>
</form>
          {else}
              <h4><font style="color: red;">No puede ingresar los datos. No está trabajando con ningun paciente</font></h4>
          {/if}
  
             
                    <script src="bootstrap-hover-dropdown.js"></script>
  <script src="js/formToWizard.js" type="text/javascript"></script>
                  <script type="text/javascript" src="js/nicEdit.js"></script>
                     <script src="js/jquery.js" type="text/javascript"></script>
  <script type="text/javascript">
        $(function(){
	//Aqui se coge el elemento y con la propiedad .on que requiere dos  parametros : change (cuando el valor de ese id cambie, que es cuando se elige otra opcion en la desplegable)y ejecutar la siguiente funcion cuando se haga change
	$('#titulo').on('change', function(){
              user=$('#titulo').val();
          //    alert(user);
             datatypo='user='+user;//genero un array con indice
    $.ajax({
         url: 'controlarComentario.php',//llamo a la pagina q hace el control
         type:'POST',//metodo por el cual paso el dato
         data:datatypo,
             success: function (data) { //funcion q recoge la respuesta de la pagina q hace el control
                  $("#respuestauser").fadeIn(1000).html(data); //imprimo el mensaje en el div      
                
    }
     });     
    });  
});</script>
        <script type="text/javascript">
  bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });

        $(document).ready(function(){
            $("#FormularioPatronimico").formToWizard({ })
        });</script>
        </div>
</body>

</html>