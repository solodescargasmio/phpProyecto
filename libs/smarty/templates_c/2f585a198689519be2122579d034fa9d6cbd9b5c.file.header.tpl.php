<?php /* Smarty version Smarty-3.1.20, created on 2015-11-19 23:33:20
         compiled from "vistas\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21678564de6ee762fd5-00236543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f585a198689519be2122579d034fa9d6cbd9b5c' => 
    array (
      0 => 'vistas\\header.tpl',
      1 => 1447975485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21678564de6ee762fd5-00236543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_564de6ee832a29_62330393',
  'variables' => 
  array (
    'proyecto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564de6ee832a29_62330393')) {function content_564de6ee832a29_62330393($_smarty_tpl) {?>    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
             <a class="navbar-brand" href="index.php"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</a>
             <img src="./imagenes/celiaquia.jpg" width="50" height="50">
              
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav nav-tabs">
                <li class="dropdown" data-toggle="dropdown">Menú 1
                    <ul class="dropdown-menu">
                        <li>SubMenu 1.1</li> 
                          <li>SubMenu 1.2</li> 
                           <li>SubMenu 1.3</li> 
                            <li>SubMenu 1.4</li> 
                    </ul>
                </li> 
                 <li>Menú 2</li> 
                  <li>Menú 3</li> 
                   <li>Menú 4
                     <ul>
                        <li>SubMenu 4.1</li> 
                          <li>SubMenu 4.2</li> 
                           <li>SubMenu 4.3</li> 
                            <li>SubMenu 4.4</li> 
                    </ul>   
                   </li> 
                    <li>Menú 5</li> 
            </ul>
            </div>
      </div>
</nav>  <?php }} ?>
