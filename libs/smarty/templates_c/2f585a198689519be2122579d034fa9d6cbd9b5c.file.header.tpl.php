<?php /* Smarty version Smarty-3.1.20, created on 2016-01-18 18:19:59
         compiled from "vistas\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30849569d2ccfb7fd09-17161477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f585a198689519be2122579d034fa9d6cbd9b5c' => 
    array (
      0 => 'vistas\\header.tpl',
      1 => 1453141019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30849569d2ccfb7fd09-17161477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cedula' => 0,
    'apellido' => 0,
    'edad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_569d2ccfca18a5_24058458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569d2ccfca18a5_24058458')) {function content_569d2ccfca18a5_24058458($_smarty_tpl) {?> <script type="text/javascript">
  $(document).ready(function() {  
      $('#suggestions').hide();//oculto el div que muestra las opciones que vá encontrando
    //Al escribr dentro del input con id="service"
    $('#service').keyup(function(){
        //Obtenemos el value del input
        largo=0;
        
        var service = $(this).val();
        if(service.length>largo){
         var dataString = 'service='+service;   
    
        
         
        //Le pasamos el valor del input al ajax
        $.ajax({
            type: "POST",
            url: "autocompletar.php",
            data: dataString,
            success: function(data) {
                //Escribimos las sugerencias que nos manda la consulta
                $('#suggestions').fadeIn(1000).html(data);
                //Al hacer click en algua de las sugerencias
                var id="";
                $('a').on('click', function(){
                    //Obtenemos la id unica de la sugerencia pulsada
                    id= $(this).attr('id') ;

                    //Editamos el valor del input con data de la sugerencia pulsada
                    $('#service').val($('#'+id).attr('data')); 
       /////////////////////////////////////////////////////////////
       //de aca hasta las lineas de abajo es lo mismo que uso en principal
                      datatypo='user='+id;//genero un array con indice
     $.ajax({
         url: 'cargaAjax.php',//llamo a la pagina q hace el control
         type:'POST',//metodo por el cual paso el dato
         data:datatypo,
             success: function (data) { //funcion q recoge la respuesta de la pagina q hace el control
                  $("#respuestauser").fadeIn(1000).html(data); //imprimo el mensaje en el div      
                
    }
     });  
    /////////////////////////////////////////////////////////////   
//  $('#service').val($('#'+id).attr('data'));
                    //Hacemos desaparecer el resto de sugerencias
                    $('#suggestions').fadeOut(1000);
                });              
            }
        });}
    });              
}); 
   </script>
   <style>
.suggest-element{
    
margin-left:5px;
margin-top:5px;
width:350px;
cursor:pointer;
}
#suggestions {
width:350px;
height:150px;
overflow: auto;
}
</style>
<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a tabindex="-1" class="navbar-brand" href="index.php">Inicio</a>
        <a tabindex="-1" class="navbar-brand" href="cerrar.php" style="  margin-left: auto; margin-right: auto;">Cerrar</a>
       <?php if (!isset($_smarty_tpl->tpl_vars['cedula']->value)) {?> 
           <a tabindex="-1" class="navbar-brand" href="ver_estadisticas.php">Estadisticas</a>         
        <?php }?>
           <form class="navbar-form navbar-right">
        <input type="text" id="service" name="service" class="form-control" placeholder="paciente" >
         <div id="suggestions"></div>
        
    
        <?php if (isset($_smarty_tpl->tpl_vars['cedula']->value)) {?>
            <div style="float: right;"><font style="color: #fff;">Apellido: <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
<br>Cedula : <?php echo $_smarty_tpl->tpl_vars['cedula']->value;?>
 <br>Edad : <?php echo $_smarty_tpl->tpl_vars['edad']->value;?>
</font></div>
        <?php }?>
        </form>
        
        <div class="navbar-collapse nav-collapse collapse navbar-header">
        <?php if (isset($_smarty_tpl->tpl_vars['cedula']->value)) {?>

        <ul class="nav navbar-nav">
              <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Datos<b class="caret"></b></a>
           <ul class="dropdown-menu">
           <li class="dropdown">
            <a tabindex="-1" href="ficha_patronimica.php">Datos Patronimicos</a>
          </li>
          <li> <a tabindex="-1" href="imts.php">IMT </a></li>
           <li class="dropdown">
            <a tabindex="-1" href="riesgos.php">Riesgo CV</a>
          </li>
          <li class="dropdown">
              <a tabindex="-1" href="vops.php">Velocidad de Onda de Pulso</a></li>
            <li class="dropdown">
            <a tabindex="-1" href="distancias.php">Distancia</a>
          </li>
            </ul>  
        </li>

          <li class="dropdown">
            <a tabindex="-1" href="guardarmultimedia.php">Archivos</a>
          </li>

        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Presión<b class="caret"></b></a>
           <ul class="dropdown-menu">
              <li><a tabindex="-1" href="pres_central.php">Presión Central</a></li>
              <li><a tabindex="-1" href="pres_braquial.php">Presión Braquial</a></li>
            </ul>  
        </li>
        <li class="dropdown">
            <a tabindex="-1" href="comentarios.php">Comentarios</a>
          </li>
           <li class="dropdown">
            <a tabindex="-1" href="imprimir.php">Ver Ficha</a>
          </li>
        </ul>
        <?php }?>
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
