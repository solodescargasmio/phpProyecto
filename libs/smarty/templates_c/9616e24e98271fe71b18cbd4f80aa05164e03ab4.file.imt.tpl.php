<?php /* Smarty version Smarty-3.1.20, created on 2016-01-19 20:10:37
         compiled from "vistas\imt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19710569e8a2d0f4246-46132586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9616e24e98271fe71b18cbd4f80aa05164e03ab4' => 
    array (
      0 => 'vistas\\imt.tpl',
      1 => 1453230443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19710569e8a2d0f4246-46132586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'mensage' => 0,
    'cedula' => 0,
    'imts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_569e8a2d1ab3f9_77999236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569e8a2d1ab3f9_77999236')) {function content_569e8a2d1ab3f9_77999236($_smarty_tpl) {?><!DOCTYPE html>
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
      <div class="row">
          <?php if (isset($_smarty_tpl->tpl_vars['mensage']->value)) {?>
          <?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>

          <?php }?>
          <h3>Datos Paciente</h3>  
          <?php if (isset($_smarty_tpl->tpl_vars['cedula']->value)) {?>
              <?php if (!isset($_smarty_tpl->tpl_vars['imts']->value)) {?>
          <form id="FormularioPatronimico" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    <fieldset> <legend>Datos IMT</legend>
    <div class="form-group">
    <label for="ci" class="col-lg-2 control-label">CD</label>
    <div class="col-lg-10">
        <input type="text" class="form-control" name="cd" id="cd" required="">
    </div>
  </div>          
              
  <div class="form-group">
    <label for="nombre" class="col-lg-2 control-label">CI</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="ci" id="ci" required="">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Alta Datos</button>
    </div>
  </div>
    </fieldset>
</form>
           <?php } else { ?>
     <form id="FormularioPatronimico" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    <fieldset> <legend>Datos IMT</legend>
    <div class="form-group">
    <label for="ci" class="col-lg-2 control-label">CD</label>
    <div class="col-lg-10">
        <input type="text" class="form-control" name="cd" id="cd" value="<?php echo $_smarty_tpl->tpl_vars['imts']->value->getCd();?>
" required="">
    </div>
  </div>          
              
  <div class="form-group">
    <label for="nombre" class="col-lg-2 control-label">CI</label>
    <div class="col-lg-10">
        <input type="text" class="form-control" name="ci" id="ci" value="<?php echo $_smarty_tpl->tpl_vars['imts']->value->getCi();?>
" required="">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <input type="submit" name="modificar" class="btn btn-primary btn-lg btn-block" value="Modificar datos">
    </div>
  </div>
    </fieldset>
</form> 
    <?php }?>
          <?php } else { ?>
              <h4><font style="color: red;">No puede ingresar los datos. No está trabajando con ningun paciente</font></h4>
          <?php }?>
      </div>
             
                    <script src="bootstrap-hover-dropdown.js"></script>
  <script src="js/formToWizard.js" type="text/javascript"></script>
  <script type="text/javascript">
        $(document).ready(function(){
            $("#FormularioPatronimico").formToWizard({ })
        });</script>
        </div>
</body>

</html><?php }} ?>
