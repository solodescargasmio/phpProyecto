<?php /* Smarty version Smarty-3.1.20, created on 2015-11-29 15:33:59
         compiled from "vistas\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3731564e4482db2e13-97795982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '227e6d75df7ae1e104ccb0b23321820a626249f3' => 
    array (
      0 => 'vistas\\nuevo.tpl',
      1 => 1447975490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3731564e4482db2e13-97795982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_564e448320e8a9_69959390',
  'variables' => 
  array (
    'titulo' => 0,
    'mensage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564e448320e8a9_69959390')) {function content_564e448320e8a9_69959390($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

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
          <h3>Usuario a modificar</h3>     
 

          <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="nombre" id="nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="imagen" class="col-lg-2 control-label">Imagen</label>
    <div class="col-lg-10">
        <input type="file" name="foto" id="foto">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Alta usuario</button>
    </div>
  </div>
</form>


             
      </div>
    </div>
  </body>
</html><?php }} ?>
