<?php /* Smarty version Smarty-3.1.20, created on 2016-01-14 04:25:52
         compiled from "vistas\ficha_patronimica2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2547556971540e4e1c2-46554309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '688e1cb9e8fcf289572b271b044eaf1702c499a7' => 
    array (
      0 => 'vistas\\ficha_patronimica2.tpl',
      1 => 1452740231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2547556971540e4e1c2-46554309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'mensage' => 0,
    'fecha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_569715411ab3f9_69572368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569715411ab3f9_69572368')) {function content_569715411ab3f9_69572368($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.js" type="text/javascript"></script> 
    <link href="css/ficha.css" rel="stylesheet" type="text/css">
    <link href="css/dashboard.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>

<body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   
    <div class="container-fluid">
    <div class="row">
        <?php if (isset($_smarty_tpl->tpl_vars['mensage']->value)) {?>
           <?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>

        <?php }?>    
        <h2>Datos patronimicos</h2>
                  <form id="FormularioPatronimico" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    <fieldset> <legend>Datos patronimicos</legend>
        <div class="form-group"> 
        <label  for="ci" class="col-lg-2 control-label">Peso </label>
                <div class="col-lg-10">
                        <input type="text" class="form-control" name="peso" required="requiered" id="peso">
                </div>
            </div>
            <div class="form-group"> 
                <label  for="ci" class="col-lg-2 control-label">Altura </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="altura" required="required" id="altura">
                </div>
            </div>
              
            <div class="form-group"> 
                <label  for="ci" class="col-lg-2 control-label">Fecha de Estudio </label>
                <div class="col-lg-10">
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
" class="texto" readonly="">
                    <div id="masInfo" style="float: right"></div>
                </div>
            </div>
    
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">ingresar datos</button>
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
            });
    </script>
    </div>
    
</body>
</html>
<?php }} ?>
