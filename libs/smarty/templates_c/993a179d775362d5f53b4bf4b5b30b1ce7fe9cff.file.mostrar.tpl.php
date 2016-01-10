<?php /* Smarty version Smarty-3.1.20, created on 2015-12-22 20:03:18
         compiled from "vistas\mostrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1479956799e76bebc23-59959992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993a179d775362d5f53b4bf4b5b30b1ce7fe9cff' => 
    array (
      0 => 'vistas\\mostrar.tpl',
      1 => 1450202229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1479956799e76bebc23-59959992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'mensage' => 0,
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_56799e771ab3f4_21419566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56799e771ab3f4_21419566')) {function content_56799e771ab3f4_21419566($_smarty_tpl) {?><!DOCTYPE html>
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
          <h3>Esto es la pagina principal</h3>     
          <table class="table table-condensed">
                      <tr>
                          <td>Cedula</td>
                          <td>Nombre</td>
                          <td>Apellido</td>
                          
              </tr>
             
              
              <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?> <tr class="success">
                 <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId();?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getApellido();?>
</td>
                 <td><a class="btn btn-lg btn-primary" href="editarUsuario.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId();?>
">Editar</a></td>
 <td><a class="btn btn-lg btn-primary" href="eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId();?>
">Eliminar</a></td>
                 </tr> 
             <?php } ?>
             
</table>
             <a href="nuevo.php" class="btn btn-primary btn-lg btn-block">Ingresar nuevo</a>
      </div>
    </div>
  </body>
</html><?php }} ?>
