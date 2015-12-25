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
require_once ('./clases/ficha_patronimica.php');
require_once ('./clases/riesgo.php');
require_once ('./clases/template.php');
require_once ('./clases/presion_braquial.php');
require_once ('./clases/presion_central.php');
require_once ('./clases/session.php');
require_once ('./clases/vop.php');
require_once ('./clases/imt.php');
require_once ('./clases/distancia.php');
require_once ('./clases/usuario.php');
     Session::init();  
       $mensage="";
     error_reporting(0);
     $usu=new usuario();
     $resultados=$usu->getListado();
     $tpl= new Template();
     if($_POST['user']){
        // 
         $id_user=$_POST['user'];
        $usuario=$usu->mostrarUser($id_user);
        Session::init();
       // var_dump($usuario->getFecha_nac());exit();
        $edad=$usu->calcularEdad($usuario->getFecha_nac());
        Session::set('cedula', $id_user);
        Session::set('edad', $edad);
        Session::set('apellido', $usuario->getApellido());
    $fptr=new ficha_patronimica();
    $dist=new distancia();
    $imt=new imt();
    $vop=new vop();
    $riesgo=new riesgo();
    $presb=new presion_braquial();
    $presc=new presion_central();
    $resficha=$fptr->mostrarFicha($id_user);
    $resdist=$dist->mostrarDistancia($id_user);
    $resimt=$imt->mostrarImt($id_user);
    $resries=$riesgo->mostrarRiesgo($id_user);
    $resvop=$vop->mostrarVop($id_user);
    //var_dump($resvop);exit();
    $respreb=$presb->mostrarPb($id_user);
    $resprec=$presc->mostrarPc($id_user);  ?>
        <table class="table table-condensed">
                      <tr class="success">
                          <td>Cedula</td>
                          <td>Apellido</td>
                          <td>Ficha P</td>
                          <td>Distancias</td>  
                          <td>IMT</td>
                          <td>Riesgo CV</td>
                          <td>VOP</td>
                          <td>Presion Br</td>
                          <td>Presion Ce</td>
              </tr>
              <tr>
                  <td><?php echo $usuario->getId(); ?></td>
                  <td><?php echo $usuario->getApellido(); ?></td>
                  <td><?php if(isset($resficha)){
            echo '<img src="./imagenes/si.png"/>';}else{
        echo '<img src="./imagenes/no.png" />';} ?></td>
                  <td><?php if(isset($resdist)){
            echo '<img src="./imagenes/si.png"/>';}else{
        echo '<img src="./imagenes/no.png" />';} ?></td>
                  <td><?php if(isset($resimt)){
            echo '<img src="./imagenes/si.png"/>';}else{
        echo '<img src="./imagenes/no.png" />';} ?></td>
                  <td><?php if(isset($resries)){
            echo '<img src="./imagenes/si.png"/>';}else{
        echo '<img src="./imagenes/no.png" />';} ?></td>
                  <td><?php if(isset($resvop)){
            echo '<img src="./imagenes/si.png"/>';}else{
        echo '<img src="./imagenes/no.png" />';} ?></td>
                  <td><?php if(isset($respreb)){
            echo '<img src="./imagenes/si.png"/>';}else{
        echo '<img src="./imagenes/no.png" />';} ?></td>
                  <td><?php if(isset($resprec)){
            echo '<img src="./imagenes/si.png"/>';}else{
        echo '<img src="./imagenes/no.png" />';} ?></td>
              </tr>      
              
</table>
        
        <?php
     
     
     }     
//        
////        $anos="1980-12-15";
//// $fecha = time() - strtotime($anos);
////$edad = floor((($fecha / 31536000) / 24) / 360);
////echo '<p>La edad es '.$edad.' años</p>';
//        $fecha=date('Y-m-d');
//        list($ano,$mes,$dia)=  explode('-', $fecha);
////fecha de nacimiento
//
//$dianaz=18;
//$mesnaz=12;
//$anonaz=1980;
//
////si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual
//
//if (($mesnaz == $mes) && ($dianaz > $dia)) {
//$ano=($ano-1); }
//
////si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
//
//if ($mesnaz > $mes) {
//$ano=($ano-1);}
//
////ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
//
//$edad=($ano-$anonaz)+1;
//
//$peso='76';
//$altura='1.89';
//$indice=$peso/($altura*$altura);
////number_format($indice,2,".",",");
//echo $edad." ".number_format($indice,2,".",",");
        ?>
    </body>
</html>
