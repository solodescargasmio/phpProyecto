<?php /* Smarty version Smarty-3.1.20, created on 2015-12-25 18:09:37
         compiled from "vistas\distancia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27725679c909ca2dd9-09548218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36b6a13e9160a76f6a6d31e44ac7b8120e11ee6b' => 
    array (
      0 => 'vistas\\distancia.tpl',
      1 => 1451063317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27725679c909ca2dd9-09548218',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5679c90a000000_66766242',
  'variables' => 
  array (
    'titulo' => 0,
    'mensage' => 0,
    'mensaje' => 0,
    'cedula' => 0,
    'distancias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5679c90a000000_66766242')) {function content_5679c90a000000_66766242($_smarty_tpl) {?><!DOCTYPE html>
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
    <?php if (isset($_smarty_tpl->tpl_vars['mensage']->value)) {?><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?>
    <h3>Datos Paciente</h3> 
    <?php if (isset($_smarty_tpl->tpl_vars['cedula']->value)) {?>
        <?php if (!isset($_smarty_tpl->tpl_vars['distancias']->value)) {?>
    <form id="FormularioPatronimico" method="POST" class="form-horizontal">
    <fieldset> <legend>Datos Distancia</legend>
                         <div class="form-group">     
                    <label  class="col-sm-4 control-label">Car. Fem. : </label>
                    <div class="col-sm-8">
                        <input type="text" name="carfem" class="success" size ="50" required="">
                    </div> 
                </div> 
        
                  <div class="form-group">     
                    <label  class="col-sm-4 control-label">Car. Hueco : </label>
                    <div class="col-sm-8">
                        <input type="text" name="carhueco"  class="success" size ="50" required="">
                    </div> 
                </div> 
        
                         
                                     <div class="form-group"> 
                <label  class="col-sm-4 control-label">Hueco Hombro : </label>
                <div class="col-sm-6">
                        <input type="text" name="huecohombro" required="required" size ="50" class="texto" required="">
                </div>
            </div>
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Hombro Braq. :</label>
                <div class="col-sm-6">
                    <input type="text" name="hombrobraq" required="required" size ="50" class="texto" required="">
                </div>
            </div>
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Hombro Rad. : </label>
                <div class="col-sm-6">
                    <input type="text" name="hombrorad" required="required" size ="50" required="">
                </div>
            </div>
                         
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Hueco Cuffxell : </label>
                <div class="col-sm-6">
                    <input type="text" name="huecocuff" size ="50" class="texto" required="">
                </div>
            </div>
   
        
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Cuffxell Fem. :</label>
                <div class="col-sm-6">
                    <input type="text" name="cuffem" required="required" size ="50" class="texto" required="">
                </div>
            </div> </fieldset>            
    <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Alta Datos</button>
    </div>
  </div>
 
</form>
     <?php } else { ?>
              <h4><font style="color: red;">Los datos de Distancias para este paciente,<br>yá fueron ingresados en la base de datos</font></h4>
         
    <?php }?>
     <?php } else { ?>
              <h4><font style="color: red;">No puede ingresar los datos. No está trabajando con ningun paciente</font></h4>
          <?php }?>
      <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="bootstrap-hover-dropdown.js"></script>
  <script src="js/formToWizard.js" type="text/javascript"></script>
  <script type="text/javascript">
        $(document).ready(function(){
            //$("#FormularioPatronimico").formToWizard({ })
        });
       
    </script></div>
</body>

</html><?php }} ?>
