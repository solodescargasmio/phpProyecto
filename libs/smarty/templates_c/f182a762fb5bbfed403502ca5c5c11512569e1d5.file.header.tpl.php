<?php /* Smarty version Smarty-3.1.20, created on 2015-12-25 17:31:21
         compiled from "vistas\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2831056799bf1f05375-02067113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f182a762fb5bbfed403502ca5c5c11512569e1d5' => 
    array (
      0 => 'vistas\\header.tpl',
      1 => 1451061031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2831056799bf1f05375-02067113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_56799bf25f5e17_43914563',
  'variables' => 
  array (
    'cedula' => 0,
    'apellido' => 0,
    'edad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56799bf25f5e17_43914563')) {function content_56799bf25f5e17_43914563($_smarty_tpl) {?><header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a tabindex="-1" class="navbar-brand" href="index.php">Inicio</a>
        
        <a tabindex="-1" class="navbar-brand" href="cerrar.php" style="  margin-left: auto; margin-right: auto;;">Cerrar</a>
        <?php if (isset($_smarty_tpl->tpl_vars['cedula']->value)) {?>
            <div style="float: right;"><font style="color: #fff;">Apellido: <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
<br>Cedula : <?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
 <br>Edad : <?php echo $_smarty_tpl->tpl_vars['edad']->value;?>
</font></div>
        <?php }?>
      <div class="navbar-collapse nav-collapse collapse navbar-header">
        <ul class="nav navbar-nav">
          <li class="dropdown"><?php if (!isset($_smarty_tpl->tpl_vars['cedula']->value)) {?>
            <a tabindex="-1" href="nuevo.php">Ingresar Paciente</a>
              <?php }?>

          </li>
          <li> <a tabindex="-1" href="imts.php">IMT </a></li>
          <li class="dropdown">
            <a tabindex="-1" href="guardarmultimedia.php">Archivos</a>
          </li>
          <li class="dropdown">
            <a tabindex="-1" href="riesgos.php">Riesgo CV</a>
          </li>
          <li class="dropdown">
            <a tabindex="-1" href="vops.php">Velocidad de Onda de Pulso</a>
          <!--  <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">PWV SPHYGMOCOR Carotido-Femoral</a></li>
              <li><a tabindex="-1" href="#">PWE Hemodin</a></li>
            </ul>-->
          </li>
          <li class="dropdown">
            <a tabindex="-1" href="distancias.php">Distancia</a>
          <!--  <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">PWV SPHYGMOCOR Carotido-Femoral</a></li>
              <li><a tabindex="-1" href="#">PWE Hemodin</a></li>
            </ul>-->
          </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Presión<b class="caret"></b></a>
           <ul class="dropdown-menu">
              <li><a tabindex="-1" href="pres_central.php">Presión Central</a></li>
              <li><a tabindex="-1" href="pres_braquial.php">Presión Braquial</a></li>
            </ul>  
        </li>
       
      <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Reactividad Vascular <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Basal</a></li>
              <li><a tabindex="-1" href="#">Basal-Oclusión</a></li>
              <li><a tabindex="-1" href="#">Oclusion Inmediata</a></li>
              <li><a tabindex="-1" href="#">Minimo Post Oclusión</a></li>
              <li><a tabindex="-1" href="#">Máximo Post Oclusión</a></li>
              <li class="divider"></li>
               <li><a tabindex="-1" href="#">Preliberación</a></li>
              <li><a tabindex="-1" href="#">Liberación Inmediata</a></li>
              <li><a tabindex="-1" href="#">Mínimo Post Liberación</a></li>
              <li><a tabindex="-1" href="#">Máximo Post Liberación</a></li>
      <li class="divider"></li>
      <li><a tabindex="-1" href="cifras.php">Cifras</a></li>
            </ul>
          </li>    
        </ul>
      </div> <!-- .nav-collapse -->
    </div> <!-- .container -->
  </header> <!-- .navbar -->

  

  <!-- latest jQuery, Boostrap JS and hover dropdown plugin -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="bootstrap-hover-dropdown.js"></script>

  <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
    
</script><?php }} ?>
