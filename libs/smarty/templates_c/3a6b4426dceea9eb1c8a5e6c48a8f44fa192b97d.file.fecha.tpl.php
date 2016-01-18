<?php /* Smarty version Smarty-3.1.20, created on 2016-01-17 18:15:54
         compiled from "vistas\fecha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30292569bcc4a796fd3-88627932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a6b4426dceea9eb1c8a5e6c48a8f44fa192b97d' => 
    array (
      0 => 'vistas\\fecha.tpl',
      1 => 1451054157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30292569bcc4a796fd3-88627932',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_569bcc4ad4fd57_51584884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569bcc4ad4fd57_51584884')) {function content_569bcc4ad4fd57_51584884($_smarty_tpl) {?><link href="css/bootstrap.min.css" rel="stylesheet">

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
        <input type="date" id="datepicker" name="datepicker" required="">
    </div>

</body>
</html>
<?php }} ?>
