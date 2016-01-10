<?php /* Smarty version Smarty-3.1.20, created on 2015-12-27 16:32:52
         compiled from "vistas\principal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3115356799beaa7d8c6-25755120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1233dfc240dd5f15b08645d21d4a4e7737c39b9' => 
    array (
      0 => 'vistas\\principal.tpl',
      1 => 1451230365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3115356799beaa7d8c6-25755120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_56799beebaeb92_90131273',
  'variables' => 
  array (
    'titulo' => 0,
    'mensage' => 0,
    'cedula' => 0,
    'mensaje' => 0,
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56799beebaeb92_90131273')) {function content_56799beebaeb92_90131273($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <div class="container-fluid">
      <div class="row">
          <?php if (isset($_smarty_tpl->tpl_vars['mensage']->value)) {?>
          <?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>

          <?php }?>
    <?php if (is_null($_smarty_tpl->tpl_vars['cedula']->value)) {?>
    <div class="container-fluid">
    <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?>
    </div>
    <h3><font style="color: #000;">Proyecto Final Estudios Medicos</h3>
 <legend>Pacientes en Sistema</legend></font>
      <div class="form-group">
    <label for="nombre" class="col-lg-2 control-label">Seleccione paciente con el cual va a trabajar o <a tabindex="-1" href="nuevo.php">Ingresar Paciente Nuevo</a></label>
    <div class="col-lg-10">
        <select id="elejir"><option>Seleccione una opcion</option>
            <?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId();?>
 : <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getApellido();?>
</option>
 <?php } ?>

    <?php }?>
        </select>
    </div>
  </div>
        <?php } else { ?>
            <?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
          <select id="elejir"> 
              <option value="<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
">Ver avances</option>
        <option value="<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
">Ver avances</option>
    <?php }?>
        </select> 
 <?php }?>
        <div id="respuestauser"></div>
        </div>
        </div>
                       <script src="bootstrap-hover-dropdown.js"></script>
  <script src="js/formToWizard.js" type="text/javascript"></script>
  <script src="js/jquery.js" type="text/javascript"></script>
  <script type="text/javascript">
        $(function(){
	//Aqui se coge el elemento ciudad y con la propiedad .on que requiere dos  parametros : change (cuando el valor de ese id cambie, que es cuando se elige otra opcion en la desplegable)y ejecutar la siguiente funcion cuando se haga change
	$('#elejir').on('change', function(){
              user=$('#elejir').val();
                datatypo='user='+user;//genero un array con indice
     $.ajax({
         url: 'cargaAjax.php',//llamo a la pagina q hace el control
         type:'POST',//metodo por el cual paso el dato
         data:datatypo,
             success: function (data) { //funcion q recoge la respuesta de la pagina q hace el control
                  $("#respuestauser").fadeIn(1000).html(data); //imprimo el mensaje en el div      
                
    }
     });     
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
</body>

</html><?php }} ?>
