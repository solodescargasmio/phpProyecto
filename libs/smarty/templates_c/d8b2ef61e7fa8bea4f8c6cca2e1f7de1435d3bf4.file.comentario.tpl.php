<?php /* Smarty version Smarty-3.1.20, created on 2016-01-19 19:39:34
         compiled from "vistas\comentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12473569e82e61e8484-42855563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8b2ef61e7fa8bea4f8c6cca2e1f7de1435d3bf4' => 
    array (
      0 => 'vistas\\comentario.tpl',
      1 => 1451157006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12473569e82e61e8484-42855563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'mensage' => 0,
    'cedula' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_569e82e62dc6c3_24675568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569e82e62dc6c3_24675568')) {function content_569e82e62dc6c3_24675568($_smarty_tpl) {?><!DOCTYPE html>
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
  
          <?php if (isset($_smarty_tpl->tpl_vars['mensage']->value)) {?>
          <?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>

          <?php }?>
          <h3>Datos Paciente</h3>  
          <?php if (isset($_smarty_tpl->tpl_vars['cedula']->value)) {?>
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
          <?php } else { ?>
              <h4><font style="color: red;">No puede ingresar los datos. No está trabajando con ningun paciente</font></h4>
          <?php }?>
  
             
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

</html><?php }} ?>
