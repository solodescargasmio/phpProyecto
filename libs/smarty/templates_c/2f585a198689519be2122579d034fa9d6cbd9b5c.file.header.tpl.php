<?php /* Smarty version Smarty-3.1.20, created on 2015-11-29 20:07:13
         compiled from "vistas\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21678564de6ee762fd5-00236543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f585a198689519be2122579d034fa9d6cbd9b5c' => 
    array (
      0 => 'vistas\\header.tpl',
      1 => 1448827557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21678564de6ee762fd5-00236543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_564de6ee832a29_62330393',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564de6ee832a29_62330393')) {function content_564de6ee832a29_62330393($_smarty_tpl) {?><header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="submenu.php">Demo Proyecto Final</a>
      <div class="navbar-collapse nav-collapse collapse navbar-header">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Ficha y Riesgos <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="ficha_patronimica.php">Ficha Patronimica</a></li>
              <li><a tabindex="-1" href="#">Riesgo CV</a></li>
            </ul>
          </li>
          <li> <a tabindex="-1" href="#">Paraclinica </a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Ecografia <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Ecografía Carotídea Izquierda</a></li>
              <li><a tabindex="-1" href="#">Ecografía Femoral Común Izquierda</a></li>
              <li><a tabindex="-1" href="#">Arteria Vertebral Izquierda</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Ecografía Carotídea Derecha</a></li>
              <li><a tabindex="-1" href="#">Ecografía Femoral Común Derecha</a></li>
              <li><a tabindex="-1" href="#">Arteria Vertebral Derecha</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Ecografía Radial Derecha</a></li>
              <li><a tabindex="-1" href="#">Ecografía Braquial Derecha</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Caracterización de Placa</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Velocidad de Onda de Pulso <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">PWV SPHYGMOCOR Carotido-Femoral</a></li>
              <li><a tabindex="-1" href="#">PWE Hemodin</a></li>
            </ul>
          </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Presión Central</a>
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
