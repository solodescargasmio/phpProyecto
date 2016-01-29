<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ('../vendor/deviservi/nusoap/lib/nusoap.php');
require_once ('../conexion/config.php');
$cliente=new nusoap_client("http://localhost/phpProyecto/webService/webservice.php?wsdl",true);
 $error = $cliente->getError();
    if ($error) {
        echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
    }/*
$id=25896314;
$nombre="Felipe";
$apellido="Loco";
$fecha="1986-05-03";
$sexo="masculino";
$datos['usuario']=array(
    'id' => $id,
    'nombre' => $nombre,
    'apellido' => $apellido,
    'fecha' => $fecha,
    'sexo' => $sexo
);*/
    $id='';
  $result=$cliente->call("traer", array('id' => $id));
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
$id=44128169;
        $result = $cliente->call("traerFicha",array("id" => $id));
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
            echo "<h2>Ficha</h2><pre>";
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

















