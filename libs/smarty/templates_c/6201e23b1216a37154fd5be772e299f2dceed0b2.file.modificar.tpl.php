<?php /* Smarty version Smarty-3.1.20, created on 2015-12-17 01:34:02
         compiled from "vistas\modificar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10276564e10799df051-03836237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6201e23b1216a37154fd5be772e299f2dceed0b2' => 
    array (
      0 => 'vistas\\modificar.tpl',
      1 => 1447975482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10276564e10799df051-03836237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_564e1079cf4501_43542122',
  'variables' => 
  array (
    'titulo' => 0,
    'mensage' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564e1079cf4501_43542122')) {function content_564e1079cf4501_43542122($_smarty_tpl) {?><!DOCTYPE html>
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
 

          <form class="form-horizontal" role="form" method="POST">
     <input type="text" class="form-control" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId();?>
">
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
">
    </div>
  </div>
  <div class="form-group">
    <label for="imagen" class="col-lg-2 control-label">Imagen</label>
    <div class="col-lg-10">
        <img src="./imagenes/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getImagen();?>
" width="100" height="100">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Modificar</button>
    </div>
  </div>
</form>


             
      </div>
    </div>
  </body>
</html><?php }} ?>
