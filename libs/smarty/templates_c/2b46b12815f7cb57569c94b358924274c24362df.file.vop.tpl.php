<?php /* Smarty version Smarty-3.1.20, created on 2015-12-17 18:20:33
         compiled from "vistas\vop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245135672fcf1256082-29231993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b46b12815f7cb57569c94b358924274c24362df' => 
    array (
      0 => 'vistas\\vop.tpl',
      1 => 1450376128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245135672fcf1256082-29231993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'mensage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5672fcf17b0625_48224375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5672fcf17b0625_48224375')) {function content_5672fcf17b0625_48224375($_smarty_tpl) {?><!DOCTYPE html>
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

    <div class="container-fluid" style="background: #fff;opacity: 0.9;">
      <div class="row">
          <?php if (isset($_smarty_tpl->tpl_vars['mensage']->value)) {?>
          <?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>

          <?php }?>
          <h3>Datos Paciente</h3>     
          <form id="FormularioPatronimico" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    <fieldset> <legend>Datos VOP</legend>
    <div class="form-group">
    <label for="ci" class="col-lg-2 control-label">Hemo</label>
    <div class="col-lg-10">
        <input type="text" class="form-control" name="hemo" id="hemo" required="">
    </div>
  </div>          
              
  <div class="form-group">
    <label for="nombre" class="col-lg-2 control-label">XCELL</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="xcell" id="xcell" required="">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Alta Datos</button>
    </div>
  </div>
    </fieldset>
</form>
      </div>
             
                    <script src="bootstrap-hover-dropdown.js"></script>
  <script src="js/formToWizard.js" type="text/javascript"></script>
  <script type="text/javascript">
        $(document).ready(function(){
            $("#FormularioPatronimico").formToWizard({ })
        });</script>
</body>

</html><?php }} ?>
