<?php /* Smarty version Smarty-3.1.20, created on 2015-12-15 17:00:59
         compiled from "vistas\pruebadata.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2680356703c4c2ffd89-45258144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c58b58af6659fba1607acacb96bb1e2caaccaad' => 
    array (
      0 => 'vistas\\pruebadata.tpl',
      1 => 1450198854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2680356703c4c2ffd89-45258144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_56703c4c53ae50_70348903',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56703c4c53ae50_70348903')) {function content_56703c4c53ae50_70348903($_smarty_tpl) {?><link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/dateFechamio.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/dateFechamio.js"></script>

<script>
     $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '<Ant',
 nextText: 'Sig>',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'dd/mm/yy',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
$(function () {
$("#datepicker").datepicker(
        {
firstDay: 1,
onSelect: function (date) {
},
} );

});
</script>          
              <div class="form-group">
    <label for="fecha" class="col-lg-2 control-label">Fecha de Nacimiento</label>
    <div class="col-lg-10">
        <input type="date" id="datepicker" name="datepicker">
    </div>
  </div>

</body>
</html>
<?php }} ?>
