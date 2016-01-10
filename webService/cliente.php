<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ('../vendor/deviservi/nusoap/lib/nusoap.php');
require_once ('../conexion/config.php');
$cliente=new nusoap_client("usuarios.wsdl",true);
 $error = $cliente->getError();
    if ($error) {
        echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
    }
$id='';
    $result = $cliente->call("traer",array("id" => $id));
    print_r($result);  
    $resultado=$result;
    if ($cliente->fault) {
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else {
        $error = $cliente->getError();
        if ($error) {
            echo "<h2>Error</h2><pre>" . $error . "</pre>";
        }
        else {
            echo "<h2>Usuarios</h2><pre>";
            $dato=json_decode($result);
     
            
            print_r($dato);
            foreach ($dato as $key) {
               foreach ($key as $key1 => $value) {
                   echo mb_strtoupper($key1)."  :  ".$value."<br>"; 
                   
               }
            }
            
            
            echo $result;
            echo "</pre>";
        }
    }


















//   $localhost=DB_HOST;
//        $root=DB_USR;
//        $pass=DB_PASS;
//        $db=DB_DB;
//      //  var_dump(DB_DB);exit();
//$pdo=new PDO("mysql:host=$localhost;dbname=$db;",$root,$pass);
//
//$resultados=$pdo->query("SELECT * FROM usuario");
//foreach ($resultados as $key => $value) {
//   // var_dump($value['titulo']);exit();
//    $datos[]=array('nombre' => $value['nombre'], 'apellido' => $value['apellido']);
//}
//$cliente=new nusoap_client("libros.wsdl",true);
// $error = $cliente->getError();
// 
//    if ($error) {
//        echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
//    }     
////$parametro = '44128169';
////$l_stResult = $cliente->call(obtenerUsuario($parametro));
//////var_dump($l_stResult);exit();
////
////   print '<h1>Producto :</h1>'
////           . '<br>Id Producto: '  . $l_stResult['id']
////           . '<br>Titulo : '   . $l_stResult['nombre']
////           . '<br>Descripcion ' . $l_stResult['apellido']
////           . '<br>Precio ' . $l_stResult['fecha']
////            . '<br>Sexo ' . $l_stResult['sexo'];
//    
//    
//    $resultado = $cliente->call("obtenerUsuario", array("id" => "44128169"));
//     var_dump($resultado);exit(); 
//    if ($cliente->fault) {
//        echo "<h2>Fault</h2><pre>";
//        print_r($resultado);
//        echo "</pre>";
//    }
//    else {
//        $error = $cliente->getError();
//        if ($error) {
//            echo "<h2>Error</h2><pre>" . $error . "</pre>";
//        }
//        else {
//            echo "<h2>Usuario</h2><pre>";
//            echo '<br>'.$resultado;
////            foreach ($datos as $key => $value) {
////   // var_dump($value['titulo']);exit();
////     echo $value['nombre'].'  =>   '.$value['apellido'].'<br>';
////} 
//           
//            echo "</pre>";
//        }
//    }
