<?php /* Smarty version Smarty-3.1.20, created on 2015-12-17 15:42:28
         compiled from "vistas\riesgos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28815672cb3ce47a90-41366013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eeeecbbfb9d424aa787eff54f8ddf0381e60b82' => 
    array (
      0 => 'vistas\\riesgos.tpl',
      1 => 1450366944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28815672cb3ce47a90-41366013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5672cb3d538325_74859019',
  'variables' => 
  array (
    'titulo' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5672cb3d538325_74859019')) {function content_5672cb3d538325_74859019($_smarty_tpl) {?><!DOCTYPE html>
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
       <font style="color:red;" size=4> <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></font>
    </div>
    <form method="POST" class="form-horizontal">
    <fieldset> <legend>Datos Riesgos</legend>
  <input name="fuma" type="checkbox" /> <font face="caption" style="color: #fff;" size=4>Fuma
<br/>
<input name="presion" type="checkbox"/> Presíon
<br/>
<input name="colesterol" type="checkbox" /> Colesteról
<br/>
<input name="hiperglisemia" type="checkbox" /> Hiperglisémia
<br/>
<input name="antecedentes" type="checkbox"/> Antecedentes Familiares
<br/>
<input name="sedentarismo" type="checkbox" /> Sedentarísmo
<br/>
<input name="ejercicio" type="checkbox" /> Realiza Ejercicios
<br/>
<input name="medicacion" type="checkbox"/>  Medicacíon
<br/>
<br>
                
    <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar Datos</button>
    </div>
  </div>
 </fieldset>
</form>
      <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="bootstrap-hover-dropdown.js"></script>
 
</body>

</html><?php }} ?>
