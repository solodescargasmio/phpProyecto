<?php /* Smarty version Smarty-3.1.20, created on 2015-12-26 14:54:30
         compiled from "vistas\multimedia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64835679f26fa7d8c1-71060648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32460bcaaae3103bda364915dc0dcad57d3e07a9' => 
    array (
      0 => 'vistas\\multimedia.tpl',
      1 => 1451138037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64835679f26fa7d8c1-71060648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5679f26fe4e1c7_06858370',
  'variables' => 
  array (
    'titulo' => 0,
    'mensaje' => 0,
    'cedula' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5679f26fe4e1c7_06858370')) {function content_5679f26fe4e1c7_06858370($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

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
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid">
    <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?>
    <h3>Datos Paciente</h3> 
    <?php if (isset($_smarty_tpl->tpl_vars['cedula']->value)) {?>
      <form id="FormularioPatronimico" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    <fieldset> <legend>Agregar Archivos (Imagenes o Videos)</legend>
        <div class="form-group">
    <label for="ci" class="col-lg-2 control-label">Seccion del archivo</label>
    <div class="col-lg-10">
    <select name="cursos" id="cursos">
<option value="0">Seleccione una opcion</option>
            <option value="Ecografia Carotidea Izquierda">Ecografía Carotídea Izquierda</option>
            <option value="Ecografia Femoral Comun Izquierda">Ecografía Femoral Común Izquierda</option>
            <option value="Arteria Vertebral Izquierda">Arteria Vertebral Izquierda</option>
            <option value="Ecografia Carotidea Derecha">Ecografía Carotídea Derecha</option>
            <option value="Ecografia Femoral Comun Derecha">Ecografía Femoral Común Derecha</option>
            <option value="Arteria Vertebral Derecha">Arteria Vertebral Derecha</option>
            <option value="Ecografia Radial Derecha">Ecografía Radial Derecha</option>
            <option value="Ecografia Braquial Derecha">Ecografía Braquial Derecha</option>
    </select>
    </div>
    <div id="respuestauser"></div>
   </div>
          <div class="form-group">
    <label for="ci" class="col-lg-2 control-label">O introducir nombre de archivo (Sin extencion, este nombre es el que se usara para identificar el archivo en BD)</label>
    <div class="col-lg-10">
        <input type="text" name="nombre" id="nombre" class="success">
    </div>
        </div>
        <div class="form-group">
    <label for="ci" class="col-lg-2 control-label">Seleccione el archivo a subir</label>
    <div class="col-lg-10">
        <input type="file" name="archivo">
    </div>
        </div>
    <input type="submit" class="btn btn-primary btn-lg btn-block">
</form>
      <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="bootstrap-hover-dropdown.js"></script>
  <script src="js/formToWizard.js" type="text/javascript"></script>
   <script src="js/jquery.js" type="text/javascript"></script>
  <script type="text/javascript">
        $(function(){
	//Aqui se coge el elemento y con la propiedad .on que requiere dos  parametros : change (cuando el valor de ese id cambie, que es cuando se elige otra opcion en la desplegable)y ejecutar la siguiente funcion cuando se haga change
	$('#cursos').on('change', function(){
              user=$('#cursos').val();
          //    alert(user);
             datatypo='user='+user;//genero un array con indice
    $.ajax({
         url: 'controlArchivos.php',//llamo a la pagina q hace el control
         type:'POST',//metodo por el cual paso el dato
         data:datatypo,
             success: function (data) { //funcion q recoge la respuesta de la pagina q hace el control
                  $("#respuestauser").fadeIn(1000).html(data); //imprimo el mensaje en el div      
                
    }
     });     
    });  
    });
      $(function(){
	//Aqui se coge el elemento y con la propiedad .on que requiere dos  parametros : change (cuando el valor de ese id cambie, que es cuando se elige otra opcion en la desplegable)y ejecutar la siguiente funcion cuando se haga change
	$('#nombre').on('blur', function(){
              user=$('#nombre').val();
          //    alert(user);
             datatypo='user='+user;//genero un array con indice
    $.ajax({
         url: 'controlArchivos.php',//llamo a la pagina q hace el control
         type:'POST',//metodo por el cual paso el dato
         data:datatypo,
             success: function (data) { //funcion q recoge la respuesta de la pagina q hace el control
                  $("#respuestauser").fadeIn(1000).html(data); //imprimo el mensaje en el div      
                
    }
     });     
    });  
    });

   </script>
  <script type="text/javascript">
        $(document).ready(function(){
            //$("#FormularioPatronimico").formToWizard({ })
        });
       
    </script>
    <?php echo $_smarty_tpl->getSubTemplate ("archivos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
              <h4><font style="color: red;">No puede ingresar los datos. No está trabajando con ningun paciente</font></h4>
          <?php }?>
</div>
 
</body>

</html><?php }} ?>
