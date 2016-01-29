<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ('../conexion/config.php');
//require_once ('../clases/usuario.php');
function conectar(){
    $localhost=DB_HOST;
        $root=DB_USR;
        $pass=DB_PASS;
        $db=DB_DB;
      $conexion =mysqli_connect($localhost,$root,$pass,$db)or die("Error al conectar");
          mysqli_set_charset($conexion,"utf8"); 
          return $conexion;
}
function consultar($sql){
   
  
//$pdo=new PDO("mysql:host=$localhost;dbname=$db;",$root,$pass);
  $conexion = conectar(); 
          $resultados=$conexion->query($sql)
        or die("Fallo en la conexion");
return $resultados;
}



 function traer($id){   
          if($id!=0){$sql="SELECT * FROM usuario WHERE id=".$id;}
          else{$sql="SELECT * FROM usuario";}
     $resultados=  consultar($sql);
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
     
  function traerFicha($id){   
 $sql="SELECT * FROM ficha_patronimica WHERE id_usuario=".$id;
     $resultados=  consultar($sql);
      //  $pdo->query("SELECT * FROM usuario WHERE id=$id");
     // var_dump($resultados['nombre']);exit();
      while ($row = mysqli_fetch_array($resultados)) {
         $dato[]=array(
            "id_usuario" => $row['id_usuario'],
            "peso" =>  $row['peso'],
           "altura" => $row['altura'],
            "fecha" => $row['fecha_estudio'],
           "imc" =>  $row['imc']
         );
}//var_dump($dato);exit();
return json_encode($dato);

     }    

      function traerImt($id){   
 $sql="SELECT * FROM imt WHERE id_usuario=".$id;
     $resultados=  consultar($sql);
      //  $pdo->query("SELECT * FROM usuario WHERE id=$id");
     // var_dump($resultados['nombre']);exit();
      while ($row = mysqli_fetch_array($resultados)) {
         $dato[]=array(
            "id_usuario" => $row['id_usuario'],
            "ci" =>  $row['ci'],
           "cd" => $row['cd']
         );
}//var_dump($dato);exit();
return json_encode($dato);

     } 
     
      function traerDistancias($id){   
 $sql="SELECT * FROM distancia WHERE id_usuario=".$id;
     $resultados=  consultar($sql);
      //  $pdo->query("SELECT * FROM usuario WHERE id=$id");
     // var_dump($resultados['nombre']);exit();
      while ($row = mysqli_fetch_array($resultados)) {
         $dato[]=array(
            "id_usuario" => $row['id_usuario'],
            "car_fem" =>  $row['car_fem'],
           "car_hueco" => $row['car_hueco'],
            "hueco_hombro" => $row['hueco_hombro'],
             "hombro_braq" => $row['hombro_braq'],
            "hombro_rad" => $row['hombro_rad'],
             "hueco_cuffxell" => $row['hueco_cuffxell'],
           "cuffxell_fem" =>  $row['cuffxell_fem']
         );
}//var_dump($dato);exit();
return json_encode($dato);

     } 
     
          function traerComentarios($id){   
 $sql="SELECT * FROM comentario WHERE id_usuario=".$id;
     $resultados=  consultar($sql);
      //  $pdo->query("SELECT * FROM usuario WHERE id=$id");
     // var_dump($resultados['nombre']);exit();
      while ($row = mysqli_fetch_array($resultados)) {
         $dato[]=array(
            "id_usuario" => $row['id_usuario'],
            "titulo" =>  $row['titulo'],
           "texto" => $row['texto']
         );
}//var_dump($dato);exit();
return json_encode($dato);

     }
       function traerPreBraq($id){   
 $sql="SELECT * FROM presion_braquial WHERE id_usuario=".$id;
     $resultados=  consultar($sql);
      //  $pdo->query("SELECT * FROM usuario WHERE id=$id");
     // var_dump($resultados['nombre']);exit();
      while ($row = mysqli_fetch_array($resultados)) {
         $dato[]=array(
            "id_usuario" => $row['id_usuario'],
            "psis" =>  $row['psis'],
           "pdias" => $row['dias']
         );
}//var_dump($dato);exit();
return json_encode($dato);

     }
     
     function traerPreCent($id){   
 $sql="SELECT * FROM presion_central WHERE id_usuario=".$id;
     $resultados=  consultar($sql);
      //  $pdo->query("SELECT * FROM usuario WHERE id=$id");
     // var_dump($resultados['nombre']);exit();
      while ($row = mysqli_fetch_array($resultados)) {
         $dato[]=array(
            "id_usuario" => $row['id_usuario'],
            "psis" =>  $row['psis'],
           "pdias" => $row['dias']
         );
}//var_dump($dato);exit();
return json_encode($dato);

     }
     
      function traerRiesgo($id){   
 $sql="SELECT * FROM riesgo WHERE id_usuario=".$id;
     $resultados=  consultar($sql);
      //  $pdo->query("SELECT * FROM usuario WHERE id=$id");
     // var_dump($resultados['nombre']);exit();
      while ($row = mysqli_fetch_array($resultados)) {
         $dato[]=array(
             "id_usuario" => $row['id_usuario'],
             "fuma" =>  $row['fuma'],
             "presion" => $row['presion'],
             "colesterol" => $row['colesterol'],
             "hiperglicemia" => $row['hiperglicemia'],
             "ant_fliares" => $row['ant_fliares'],
             "sedentarismo" => $row['sedentarismo'],
             "ejercicio" => $row['ejercicio'],
             "medicacion" => $row['medicacion'],
             "diabetes" =>  $row['diabetes']
         );
}//var_dump($dato);exit();
return json_encode($dato);

     }
     
      function traerVop($id){   
 $sql="SELECT * FROM vop WHERE id_usuario=".$id;
     $resultados=  consultar($sql);
      //  $pdo->query("SELECT * FROM usuario WHERE id=$id");
     // var_dump($resultados['nombre']);exit();
      while ($row = mysqli_fetch_array($resultados)) {
         $dato[]=array(
            "id_usuario" => $row['id_usuario'],
            "hemo" =>  $row['hemo'],
           "xcell" => $row['xcell']
         );
}//var_dump($dato);exit();
return json_encode($dato);

     }
  
     function ingresarUsuario($dato) {
         $arreglo=json_decode($dato,true);
              foreach ($arreglo as $key => $value) {
            $id=$value['id']; 
            $nombre=$value['nombre']; 
            $apellido=$value['apellido']; 
            $fecha=$value['fecha']; 
            $sexo=$value['sexo']; 
        }
        $conexion=  conectar();
    $smtp=$conexion->prepare("INSERT INTO usuario (id,nombre,apellido,fecha_nac,sexo) VALUES(?,?,?,?,?)" );
       $smtp->bind_param("sssss",$id,$nombre,$apellido,$fecha,$sexo);
       $smtp->execute();
       $res=false;
       if($conexion->affected_rows>0){
       $res=true;}
       return $res;
//        foreach ($dato as $value) {
//            var_dump($value);exit();    
//        }
   // $sql="SELECT * FROM vop WHERE id_usuario=".$id;
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
 

