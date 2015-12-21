<?php /* Smarty version Smarty-3.1.20, created on 2015-12-16 16:48:02
         compiled from "vistas\fecha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268575670526e4bc189-25579988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96a8fcdccd78b5ee762c4e81a29b467337220715' => 
    array (
      0 => 'vistas\\fecha.tpl',
      1 => 1450231117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268575670526e4bc189-25579988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5670526e52d498_90266413',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5670526e52d498_90266413')) {function content_5670526e52d498_90266413($_smarty_tpl) {?><link href="css/bootstrap.min.css" rel="stylesheet">

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
 dateFormat: 'dd-mm-yy',
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

    
    <div class="col-lg-10">
        <input type="date" id="datepicker" name="datepicker">
    </div>


</body>
</html>
<?php }} ?>
