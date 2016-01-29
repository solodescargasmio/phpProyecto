<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
ini_set ('display_errors', 'Off');
error_reporting();
require_once ('../vendor/deviservi/nusoap/lib/nusoap.php');
require_once ('../conexion/config.php');
require_once ('funciones.php');
  
    $server = new soap_server();
    $server->configureWSDL("servicio", "urn:servicio");
//    function traer($id){
//        $localhost=DB_HOST;
//        $root=DB_USR;
//        $pass=DB_PASS;
//        $db=DB_DB;
//       $sql="";
//  
////$pdo=new PDO("mysql:host=$localhost;dbname=$db;",$root,$pass);
//  $conexion =mysqli_connect($localhost,$root,$pass,$db)or die("Error al conectar");
//          mysqli_set_charset($conexion,"utf8");
//          if($id!=0){$sql="SELECT * FROM usuario WHERE id=".$id;}
//          else{$sql="SELECT * FROM usuario";}
//$resultados=$conexion->query($sql)
//        or die("Fallo en la conexion");
//      //  $pdo->query("SELECT * FROM usuario WHERE id=$id");
//     // var_dump($resultados['nombre']);exit();
//      while ($row = mysqli_fetch_array($resultados)) {
//         $dato[]=array(
//            "id" => $row['id'],
//            "nombre" =>  $row['nombre'],
//           "apellido" => $row['apellido'],
//            "nacimiento" => $row['fecha_nac'],
//           "sexo" =>  $row['sexo']
//         );
//}//var_dump($dato);exit();
//return json_encode($dato);
//
//     }  
    $server->register("traer",
            array("id" => "xsd:string"),
        array("return" => "xsd:string"));
      $server->register("traerFicha",
            array("id" => "xsd:string"),
        array("return" => "xsd:string"));
      $server->register("traerImt",
            array("id" => "xsd:string"),
        array("return" => "xsd:string"));
      $server->register("traerDistancias",
            array("id" => "xsd:string"),
        array("return" => "xsd:string"));
      $server->register("traerComentarios",
            array("id" => "xsd:string"),
        array("return" => "xsd:string"));
      $server->register("traerPreBraq",
            array("id" => "xsd:string"),
        array("return" => "xsd:string"));
       $server->register("traerPreCent",
            array("id" => "xsd:string"),
        array("return" => "xsd:string"));
      $server->register("traerRiesgo",
            array("id" => "xsd:string"),
        array("return" => "xsd:string"));
      $server->register("traerVop",
            array("id" => "xsd:string"),
        array("return" => "xsd:string"));
       $server->register("ingresarUsuario",
            array("dato" => "xsd:string"),
        array("return" => "xsd:string"));
 $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
    $server->service($HTTP_RAW_POST_DATA);

















//     function getProd($categoria) {
//        if ($categoria == "libros") {
//
//            return join(",", array(
//                "El señor de los anillos",
//                "Los límites de la Fundación",
//                "The Rails Way"
//               // $usr->getNombre()
//                    ));
//        }
//        else {
//                return "No hay productos de esta categoria";
//        }
//    }
//    
//      $server->configureWSDL("webservice", "urn:webservice");
//      
//    $server->register("getProd",
//        array("categoria" => "xsd:string"),
//        array("return" => "xsd:string"),
//        "urn:webservice",
//        "urn:webservice#getProd",
//        "rpc",
//        "encoded",
//        "Nos da una lista de productos de cada categoría");
//    
      
  

