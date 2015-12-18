<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
//        $anos="1980-12-15";
// $fecha = time() - strtotime($anos);
//$edad = floor((($fecha / 31536000) / 24) / 360);
//echo '<p>La edad es '.$edad.' años</p>';
        $fecha=date('Y-m-d');
        list($ano,$mes,$dia)=  explode('-', $fecha);
//fecha de nacimiento

$dianaz=18;
$mesnaz=12;
$anonaz=1980;

//si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual

if (($mesnaz == $mes) && ($dianaz > $dia)) {
$ano=($ano-1); }

//si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual

if ($mesnaz > $mes) {
$ano=($ano-1);}

//ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad

$edad=($ano-$anonaz)+1;

$peso='76';
$altura='1.89';
$indice=$peso/($altura*$altura);
//number_format($indice,2,".",",");
echo $edad." ".number_format($indice,2,".",",");
        ?>
    </body>
</html>
