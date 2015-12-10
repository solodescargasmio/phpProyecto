<?php /* Smarty version Smarty-3.1.20, created on 2015-11-30 01:38:26
         compiled from "vistas\ficha_patronimica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9275565b5c0da117a4-32307494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aeb54e1ffcb40f6f08c1d9772735fb1df7da122' => 
    array (
      0 => 'vistas\\ficha_patronimica.tpl',
      1 => 1448847501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9275565b5c0da117a4-32307494',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_565b5c0de88006_84952268',
  'variables' => 
  array (
    'titulo' => 0,
    'mensage' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565b5c0de88006_84952268')) {function content_565b5c0de88006_84952268($_smarty_tpl) {?><!DOCTYPE html>
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
    </div>
<form id="FormularioPatronimico" action="" class="form-horizontal">
    <fieldset> <legend>Datos Personales</legend>
                         <div class="form-group">     
                    <label  class="col-sm-4 control-label">Nombre Procedencia : </label>
                    <div class="col-sm-8">
                        <input type="text" name="usuario" id="usuario" placeholder="Nick :" class="success" size ="50">
                    </div> 
                </div> 
                 <div class="form-group"> 
                     <label  class="col-sm-4 control-label">Fecha Estudio :</label>
                     <div class="col-sm-8">
                        <input type="date" name="datapicker" id="datapicker" size ="50" class="success">
                     </div>
                 </div>
                         
                                     <div class="form-group"> 
                <label  class="col-sm-4 control-label">Ingrese Nombre : </label>
                <div class="col-sm-6">
                        <input type="text" name="nombre" placeholder="Nombre :" required="required" size ="50" class="texto">
                </div>
            </div>
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Ingrese Apellido :</label>
                <div class="col-sm-6">
                    <input type="text" name="apellido" placeholder="Apellido :" required="required" size ="50" class="texto">
                </div>
            </div>
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Ingrese Fecha Nacimiento : </label>
                <div class="col-sm-6">
                    <input type="date" name="nacimiento" required="required" size ="50">
                </div>
            </div>
                         
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Edad : </label>
                <div class="col-sm-6">
                    <input type="password" name="pass" id="pass" size ="50" class="texto">
                    <div id="masInfo" style="float: right"></div>
                </div>
            </div>
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Documento de Identidad :</label>
                <div class="col-sm-6">
                    <input type="password" name="otrapass" id="otrapass" placeholder="Ingrese Documento :" required="required" size ="50" class="texto">
                    <div id="otraInfo" style="float: right"></div>
                </div>
            </div>
                         
                         
                
             <div class="form-group">     
                    <label  class="col-sm-4 control-label">Telefono de Contacto : </label>
                    <div class="col-sm-8">
                        <input type="text" name="usuario" id="usuario" placeholder="Telefono :" class="success" size ="50">
                    </div> 
                </div> 
                 <div class="form-group"> 
                     <label  class="col-sm-4 control-label">Celular de Contacto  :</label>
                     <div class="col-sm-8">
                         <input type="text" placeholder="Celular de Contacto :" size ="50" class="success">
                     </div>
                 </div>
                 </fieldset>
    
    <fieldset><legend>Segundo Paso</legend>
               <div class="form-group"> 
                <label  class="col-sm-4 control-label">Sexo : </label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">Masculino</option>
                    <option value="proveedor">Femenino</option>
                    </select>
                </div>
            </div>

                           
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Fumador :</label>
                <div class="col-sm-6">
                    <select name="menuFumador" id="menuFumador"  onchange="menuFum();">
                    <option selected="selected" value="cliente">No</option>
                    <option value="proveedor">Si</option>
                    </select>
                    <input type="text" id="cuantos" name="cuantos" placeholder=" Cantidad por dia" style="display: none;">
                </div>
            </div>

                                       
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">HTA :</label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">Si</option>
                    <option value="proveedor">No</option>
                    </select>
                </div>
            </div>

                         
                         
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Dislipemia :</label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">Si</option>
                    <option value="proveedor">No</option>
                    </select>
                </div>
            </div>
                             
                    <div class="form-group"> 
                <label  class="col-sm-4 control-label">Diabetes : </label>
                <div class="col-sm-6">
                    <select name="menuDiabetes" id="menuDiabetes"  onchange="mostrarDiabetes();">
                    <option selected="selected" value="cliente">No</option>
                    <option value="proveedor">Si</option>
                    </select>
                </div>
            </div>
         
        <div class="form-group" id="diabetes" style="display: none;"> 
                <label  class="col-sm-4 control-label">Tipo : </label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">1</option>
                    <option value="proveedor">2</option>
                    </select>
                </div>
            </div>
                           
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Cardiopatía Izquemica :</label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">Si</option>
                    <option value="proveedor">No</option>
                    </select>
                </div>
            </div>

                                       
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">ACV :</label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">Si</option>
                    <option value="proveedor">No</option>
                    </select>
                </div>
            </div>

                         
                         
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Insuficiensia Cardiaca :</label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">Si</option>
                    <option value="proveedor">No</option>
                    </select>
                </div>
            </div>     
                              
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">ERC :</label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">Si</option>
                    <option value="proveedor">No</option>
                    </select>
                </div>
            </div>

                         
                         
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Enfermedad Tiroidea :</label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">Si</option>
                    <option value="proveedor">No</option>
                    </select>
                </div>
            </div>
                             
                    <div class="form-group"> 
                <label  class="col-sm-4 control-label">Sedentarismo : </label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">Si</option>
                    <option value="proveedor">No</option>
                    </select>
                </div>
            </div>
         
                              <div class="form-group"> 
                <label  class="col-sm-4 control-label">Strees : </label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">Si</option>
                    <option value="proveedor">No</option>
                    </select>
                </div>
            </div>
                           
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Antecedentes Familiares :</label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">Si</option>
                    <option value="proveedor">No</option>
                    </select>
                </div>
            </div>
 <div class="form-group"> 
                <label  class="col-sm-4 control-label">Insuficiensia Cardiaca :</label>
                <div class="col-sm-6">
                    <select name="menu" id="menu"  onchange="cambiarDisplay();">
                    <option selected="selected" value="cliente">Si</option>
                    <option value="proveedor">No</option>
                    </select>
                </div>
            </div> 
    </fieldset>
    
      <fieldset> <legend>Otros datos</legend>
               <div class="form-group"> 
                <label  class="col-sm-4 control-label">Farmacos :</label>
                <div class="col-sm-6">
                    <select name="menu1" id="menu1"  onchange="cambiarDisplay();">
                    <option selected="selected" value="no">No</option>
                    <option value="si">Si</option>
                    </select>
                    <div id="ocultar" style="display: none;"> 
<input name="cbipeliculas" type="checkbox" />IECA
<br/>
<input name="cbilibros" type="checkbox"/>ARA
<br/>
<input name="cbiinternet" type="checkbox" />Diureticos
<br/>
<input name="cbipeliculas" type="checkbox" />Beta Bloqueantes
<br/>
<input name="cbilibros" type="checkbox"/>Calcio Antagonista
<br/>
<input name="cbiinternet" type="checkbox" />Antag. Aldosterona
<br/>
<input name="cbipeliculas" type="checkbox" />Aspirina
<br/>
<input name="cbilibros" type="checkbox"/>Clopidogrel
<br/>
<input name="cbiinternet" type="checkbox" />Estatinas
<br/>
<input name="cbipeliculas" type="checkbox" />Anticuagulantes
<br/>
<input name="cbilibros" type="checkbox" />Hipoglicemiantes Orales
<br/>
<input name="cbiinternet" type="checkbox" />Insulina
<br/>
<input name="cbiinternet" type="checkbox" />T4
<br/>
<input class="ejemploCheckbox3" name="checkbox1" type="checkbox" />Otros
<br>
                    </div>
                </div>
            </div> 
    <div class="form-group" id="otrosremedios" style="display: none;"> 
                     <label  class="col-sm-4 control-label">Otros farmacos:</label>
                     <div class="col-sm-8">
                        <textarea></textarea>
                     </div>
                 </div>      
                 <div class="form-group"> 
                     <label  class="col-sm-4 control-label">Peso :</label>
                     <div class="col-sm-8">
                        <input type="text" name="peso" id="datapicker" size ="50" class="success">
                     </div>
                 </div>
                         
                                     <div class="form-group"> 
                <label  class="col-sm-4 control-label">Altura : </label>
                <div class="col-sm-6">
                        <input type="text" name="nombre" placeholder="Nombre :" required="required" size ="50" class="texto">
                </div>
            </div>
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">IMC :</label>
                <div class="col-sm-6">
                    <input type="text" name="apellido" placeholder="Apellido :" required="required" size ="50" class="texto">
                </div>
            </div>
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Perimetro Abdominal : </label>
                <div class="col-sm-6">
                    <input type="text" name="nacimiento" required="required" size ="50">
                </div>
            </div>
                
    <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Alta Datos</button>
    </div>
  </div>
 </fieldset>
</form>
      <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="bootstrap-hover-dropdown.js"></script>
  <script src="js/formToWizard.js" type="text/javascript"></script>
  <script type="text/javascript">
        $(document).ready(function(){
            $("#FormularioPatronimico").formToWizard({ })
        });
        function cambiarDisplay(){
       var elementoCiudad = document.getElementById('menu1');
       indiceSeleccionado=elementoCiudad.selectedIndex;
       if(elementoCiudad.options[indiceSeleccionado].text=="Si"){
       document.getElementById('ocultar').style.display='block'; 
        }else{
            document.getElementById('ocultar').style.display='none'; 
        }
       //alert(elementoCiudad.options[indiceSeleccionado].text);
}

function menuFum(){
    var elementoCiudad = document.getElementById('menuFumador');
       indiceSeleccionado=elementoCiudad.selectedIndex;
       if(elementoCiudad.options[indiceSeleccionado].text=="Si"){
       document.getElementById('cuantos').style.display='block'; 
        }else{
            document.getElementById('cuantos').style.display='none'; 
        }
}
function mostrarDiabetes(){
    var elementoCiudad = document.getElementById('menuDiabetes');
       indiceSeleccionado=elementoCiudad.selectedIndex;
       if(elementoCiudad.options[indiceSeleccionado].text=="Si"){
       document.getElementById('diabetes').style.display='block'; 
        }else{
            document.getElementById('diabetes').style.display='none'; 
        }
}
$('[name="checkbox1"].ejemploCheckbox3').click(function() {
  if($(this).is(':checked')) {
    document.getElementById('otrosremedios').style.display='block';
  } else {
    document.getElementById('otrosremedios').style.display='none';
  }
});
    </script>
</body>

</html><?php }} ?>
