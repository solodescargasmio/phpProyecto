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
  
   //declaramos el namespace 
$ns="http://localhost/phpProyecto/webService/Servicios.php?wsdl"; 

//Setup del WSDL 
$server = new soap_server(); 
$server->configureWSDL('webservice',$ns); 
$server->wsdl->schemaTargetNamespace=$ns; 

//Definimos la estructura de cada registro 
$server->wsdl->addComplexType( 
'registro', 
'complexType', 
'struct', 
'all', 
'', 
array( 
    'id'=>array('name' => 'id', 'type' => 'xsd:string'),
'nombre'=>array('name' => 'nombre', 'type' => 'xsd:string'), 
'apellido'=>array('name' => 'apellido', 'type' => 'xsd:string'), 
'fecha_nac'=>array('name' => 'fecha_nac', 'type' => 'xsd:string'),
    'sexo'=>array('name' => 'sexo', 'type' => 'xsd:string') 
) 
); 

//Definimos la estructura de la matriz que usa los registros 
$server->wsdl->addComplexType('estructura', 'complexType', 'array', '', 
'SOAP-ENC:Array', array(), 
array(array('ref' => 'SOAP-ENC:arrayType', 'wsdl:arrayType' => 'tns:registro[]')), 
'tns:registro'); 

//Registramos el método para devolver los valores de la tabla, en este caso es una consulta simple, mediante la cual se devuelven todos los registros de la tabla sin recibir ningún dato del cliente: 

$server->register('traer',array(),array('return'=>'tns:registro')); //Definimos que lo que vamos a retornar es una matriz con la estructura "estructura 
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
