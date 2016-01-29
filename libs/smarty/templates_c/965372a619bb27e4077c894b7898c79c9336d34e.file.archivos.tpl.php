<?php /* Smarty version Smarty-3.1.20, created on 2016-01-24 20:30:48
         compiled from "vistas\archivos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22607569e7f5581b320-10036767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '965372a619bb27e4077c894b7898c79c9336d34e' => 
    array (
      0 => 'vistas\\archivos.tpl',
      1 => 1453663841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22607569e7f5581b320-10036767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_569e7f5590f561_77608344',
  'variables' => 
  array (
    'archivos' => 0,
    'archivo' => 0,
    'cedula' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569e7f5590f561_77608344')) {function content_569e7f5590f561_77608344($_smarty_tpl) {?> <link href="css/dashboard.css" rel="stylesheet" type="text/css">
<div> <h4>Archivo actuales de paciente</h4>
    
    <?php if (isset($_smarty_tpl->tpl_vars['archivos']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['archivo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['archivo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archivos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['archivo']->key => $_smarty_tpl->tpl_vars['archivo']->value) {
$_smarty_tpl->tpl_vars['archivo']->_loop = true;
?>
        <div class="encuadro">
        <h5><?php echo $_smarty_tpl->tpl_vars['archivo']->value->getNombre();?>
</h5>
        <?php if (strcmp($_smarty_tpl->tpl_vars['archivo']->value->getExtension(),"jpg")==0||strcmp($_smarty_tpl->tpl_vars['archivo']->value->getExtension(),"png")==0) {?>
<img src="./multimedia/<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getNombre();?>
.<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getExtension();?>
" width="150" height="80">
        <?php } else { ?>
            
            
            
                 <video width="250" height="80" controls>
	<!-- MP4 must be first for iPad! -->
        <source src="./multimedia/<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getNombre();?>
.<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getExtension();?>
" type="video/<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getExtension();?>
" />
        <!--<source src="videos/bunny.webm" type="video/webm" /><!-- Firefox / Opera / Chrome10 -->
</video>
            
               <!-- <video id="conejito" controls preload="metadata">
                    <source src="./multimedia/<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getNombre();?>
.<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getExtension();?>
" type="video/<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getExtension();?>
" />
    </video>

        <embed type="video/<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getExtension();?>
" pluginspage="http://www.microsoft.com/Windows/MediaPlayer/" 
               src="./multimedia/<?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getNombre();?>
.<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getExtension();?>
" width="150" height="80" autostart="0" 
ShowStatusBar="0" ShowControls="0" DisplaySize="0">
</embed>-->
   
        <?php }?>
        <a class="btn btn-primary btn-lg btn-block" href="descargas.php? archivo=<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getNombre();?>
& extension=<?php echo $_smarty_tpl->tpl_vars['archivo']->value->getExtension();?>
">Descargar</a>

        </div>
    <?php } ?>
    <?php }?>

</div><?php }} ?>
