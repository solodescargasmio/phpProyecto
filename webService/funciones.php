<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ('../conexion/config.php');
 function traer($id){
        $localhost=DB_HOST;
        $root=DB_USR;
        $pass=DB_PASS;
        $db=DB_DB;
       $sql="";
  
//$pdo=new PDO("mysql:host=$localhost;dbname=$db;",$root,$pass);
  $conexion =mysqli_connect($localhost,$root,$pass,$db)or die("Error al conectar");
          mysqli_set_charset($conexion,"utf8");
          if($id!=0){$sql="SELECT * FROM usuario WHERE id=".$id;}
          else{$sql="SELECT * FROM usuario";}
$resultados=$conexion->query($sql)
        or die("Fallo en la conexion");
      //  $pdo->query("SELECT * FROM usuario WHERE id=$id");
     // var_dump($resultados['nombre']);exit();
      while ($row = mysqli_fetch_array($resultados)) {
         $dato[]=array(
            "id" => $row['id'],
            "nombre" =>  $row['nombre'],
           "apellido" => $row['apellido'],
            "nacimiento" => $row['fecha_nac'],
           "sexo" =>  $row['sexo']
         );
}//var_dump($dato);exit();
return json_encode($dato);

     }  

//foreach ($resultados as $key => $value) {
//       return $dato=join(",", array(
//                $value['nombre'],
//              $value['apellido'],
//               
//              ));
//        }}
//        else {
//            return "No hay productos de esta categoria";
//        }
 

