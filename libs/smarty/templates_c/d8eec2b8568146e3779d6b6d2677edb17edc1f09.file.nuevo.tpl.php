<?php /* Smarty version Smarty-3.1.20, created on 2016-01-17 20:43:30
         compiled from "vistas\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29095569bcc454f79a9-10650571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8eec2b8568146e3779d6b6d2677edb17edc1f09' => 
    array (
      0 => 'vistas\\nuevo.tpl',
      1 => 1453052319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29095569bcc454f79a9-10650571',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_569bcc482d2491_86638509',
  'variables' => 
  array (
    'titulo' => 0,
    'mensage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569bcc482d2491_86638509')) {function content_569bcc482d2491_86638509($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.js" type="text/javascript"></script> 
    <link href="css/ficha.css" rel="stylesheet" type="text/css">
    <link href="css/dashboard.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid" style="background: #fff;opacity: 0.8; height: 130%;">
    <div class="row">
        <?php if (isset($_smarty_tpl->tpl_vars['mensage']->value)) {?>
           <?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>

        <?php }?>    
    <form id="FormularioPatronimico" class="form-horizontal" role="form" method="POST">
    <h2>Datos Personales</h2>
    
    <div class="form-group">
        <label for="ci" class="col-lg-3 control-label">Cedula de Identidad (sin puntos '.', coma ',' o guiones '- _')</label>
        <div class="col-lg-10">
            <input type="number" class="form-control" name="ci" id="ci" placeholder="123456789" required="">
        </div>
    </div>          
              
    <div class="form-group">
        <label for="nombre" class="col-lg-2 control-label">Nombre</label>
        <div class="col-lg-10">
            <input type="text" class="form-control" name="nombre" id="nombre" required="">
        </div>
    </div>
              
    <div class="form-group">
        <label for="apellido" class="col-lg-2 control-label">Apellido</label>
        <div class="col-lg-10">
            <input type="text" class="form-control" name="apellido" id="apellido" required="">
        </div>
    </div>  
    
    <div class="form-group" >
        <label for="sexo" class="col-lg-2 control-label">Sexo</label>
        <div class="col-lg-10">
            <select name="selector">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>
        </div>
    </div>
    
    <div class="form-group">
        <label for="fecha" class="col-lg-2 control-label">Fecha de Nacimiento</label>
            <?php echo $_smarty_tpl->getSubTemplate ("fecha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
         
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Alta usuario</button>
        </div>
    </div>
    
    </form>
    </div>
             
    <script src="bootstrap-hover-dropdown.js"></script>
    <script src="js/formToWizard.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#FormularioPatronimico").formToWizard({ })
            });
    </script>
    </div>
    
</body>
</html>
<?php }} ?>
