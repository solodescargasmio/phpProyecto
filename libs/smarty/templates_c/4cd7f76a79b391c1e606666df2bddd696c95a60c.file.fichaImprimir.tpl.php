<?php /* Smarty version Smarty-3.1.20, created on 2016-01-11 17:26:17
         compiled from "vistas\fichaImprimir.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26774567f0851501bd8-05228632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cd7f76a79b391c1e606666df2bddd696c95a60c' => 
    array (
      0 => 'vistas\\fichaImprimir.tpl',
      1 => 1452056148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26774567f0851501bd8-05228632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_567f0851895448_28699277',
  'variables' => 
  array (
    'titulo' => 0,
    'ficha' => 0,
    'usuarios' => 0,
    'riesgo' => 0,
    'presb' => 0,
    'presc' => 0,
    'comentarios' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567f0851895448_28699277')) {function content_567f0851895448_28699277($_smarty_tpl) {?><!DOCTYPE html>
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

            <a href="javascript:imprSelec('imprimir')" >
   <button id="buscar" name="buscar" class="btn btn-success btn-group-justified">
      Imprimir Ficha</button>  
     </a>
            <div class="container-fluid" id="imprimir" style="width: 100%; height: 100%;" >        
            <img src="./imagenes/header.jpg" style="width: 100%; height: 15%">
            <label style="width: 100%;text-align: center;" class="bg-success"><h3><font style="font-family: fantasy;">ESTUDIO VASCULAR NO INVASIVO MULTI-PARAMÉTRICO</h3></label>
    <!--   Empiezan las tablas                -->
    <table class="table" border="1" style="width: 100%">
           <caption style="text-align: center;" class="alert-danger">Datos Patronimicos</caption>
           <thead> 
           <tr class="success">
               <td>Fecha estudio</td>
               <td>Cedula</td>
                 <td>Nombre</td>
                 <td>Sexo</td>
              </tr></thead> 
           <tbody><tr class="success">
           <td><?php echo $_smarty_tpl->tpl_vars['ficha']->value->getFecha_estudio();?>
</td>
           <?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)) {?>  
                 <td><?php echo $_smarty_tpl->tpl_vars['usuarios']->value->getId();?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['usuarios']->value->getNombre();?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['usuarios']->value->getSexo();?>
</td><?php }?>
               </tr>   
 </tbody>
       </table>
                <table class="table" border="1" style="width: 100%">
           <caption style="text-align: center;" class="alert-danger">Factores de Riesgo Cardiovacular</caption>
           <thead> 
           <tr class="success">
               <td>IMC</td>
               <td>Diabetes</td>
                 <td>Tabaquismo</td>
                 <td>Sedentarismo</td>
              </tr></thead> 
           <tbody><tr class="success">
           <td><?php echo $_smarty_tpl->tpl_vars['ficha']->value->getImc();?>
</td>
           <?php if (isset($_smarty_tpl->tpl_vars['riesgo']->value)) {?> 
               <?php if ($_smarty_tpl->tpl_vars['riesgo']->value->getDiabetes()==0) {?>
                   <td>No</td>
           <?php } else { ?>
               <td>Si</td>
           <?php }?>

               <?php if ($_smarty_tpl->tpl_vars['riesgo']->value->getFuma()==0) {?>
                   <td>No</td>
           <?php } else { ?>
               <td>Si</td>
           <?php }?>
               <?php if ($_smarty_tpl->tpl_vars['riesgo']->value->getSedentarismo()==0) {?>
                   <td>No</td>
           <?php } else { ?>
               <td>Si</td>
           <?php }?>
<?php }?>
               </tr>   
 </tbody>
       </table>
               
               
                  <table class="table" border="1" style="width: 100%">
           <caption style="text-align: center;" class="alert-danger"> Presión Arterial Periférica y Central Aórtica</caption>
           <thead> 
       <tr class="success">           
             <td colspan="3"></td><td colspan="3">Sistólica</td><td colspan="3">Diastólica</td>
             </tr>                  
           </thead> 
           <tbody>
               <tr>
                   
     <td colspan="3">PRESIÓN ARTERIAL BRAQUIAL [mmHg]</td>
     <?php if (isset($_smarty_tpl->tpl_vars['presb']->value)) {?>
     <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['presb']->value->getPsis_br();?>
</td><td colspan="3"><?php echo $_smarty_tpl->tpl_vars['presb']->value->getPdias_br();?>
</td><?php }?>
    </tr><tr>
           <td colspan="3">PRESIÓN AÓRTICA CENTRAL [mmHg]</td>
           <?php if (isset($_smarty_tpl->tpl_vars['presc']->value)) {?>
           <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['presc']->value->getPsis();?>
</td><td colspan="3"><?php echo $_smarty_tpl->tpl_vars['presc']->value->getPdias();?>
</td> <?php }?>
           </tr>    

           </tbody>
               </table>
               
               <table class="table" border="1" style="width: 100%">
           <caption style="text-align: center;" class="alert-danger">Comentarios</caption>
           <thead> 
              <?php if (isset($_smarty_tpl->tpl_vars['comentarios']->value)) {?> 
               <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value) {
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
         <tr class="success" style="text-align: center;">           
             <td><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['comentario']->value->getTitulo(), ENT_QUOTES);?>
<td
             </tr>    
               
           </thead> 
           <tbody>
               <tr>
                   <td><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['comentario']->value->getTexto(), ENT_QUOTES);?>
</td>   
               </tr>
           <?php } ?> <?php }?>
           </tbody>
               </table>
           <table class="table" border="1" style="width: 100%">
           <caption style="text-align: center;" class="alert-danger">Firma Medico Responsable</caption>
           <thead> 
         <tr class="success" style="text-align: center;">           
             <td>Firma<td
             </tr>    
               
           </thead> 
           <tbody>
               <tr >
                   <th rowspan="3" scope="col" style="text-align: center;">
                       <img src="./imagenes/firma_e.jpg" width="180" height="100">        
                   </th>   
               </tr>
           </tbody>
              </table>
           <table class="table" border="1" style="width: 100%">
           <tr style="text-align: center;"><td>Institucion responsable</td></tr>
      <tr style="text-align: center;"><td>Centro Universitario Paysandu-Universidad de la República- Florida 1065-ingenieriabiologica@cup.edu.uy </td></tr>
           </table>
               </table>  
    </div>
             <script language="Javascript">
function imprSelec(nombre)
{
  var ficha = document.getElementById(nombre);
  var ventimp = window.open(' ', 'popimpr');
  ventimp.document.write( ficha.innerHTML );
  ventimp.document.close();
  ventimp.print( );
  ventimp.close();
}
</script>  
    
</body>
</html><?php }} ?>
