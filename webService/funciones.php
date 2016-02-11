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

function buscar($id_user){   
   $sql="SELECT * FROM usuario WHERE id like '%$id_user%' OR nombre like '%$id_user%' OR apellido like '%$id_user%'";
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
  
     function ingresarUsuario($id,$nombre,$apellido,$fecha,$sexo) {
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
 
 function calcularEdad($param) {
        
                 $fecha=date('d-m-Y');
                list($dia,$mes,$ano)=  explode('-', $fecha);
//fecha de nacimiento
        list($anoe,$mese,$diae)=  explode('-', $param);

//si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual

if (($mese == $mes) && ($diae > $dia)) {
$ano=($ano-1); }

//si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual

if ($mese > $mes) {
$ano=($ano-1);}

//ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad

$edad=($ano-$anoe);

return $edad;
    }

function ingresarFicha($id,$peso,$altura,$fecha,$imc,$edad) {
   // calcularEdad($fecha);
        $conexion=  conectar();
    $smtp=$conexion->prepare("INSERT INTO ficha_patronimica (id_usuario,peso,altura,fecha_estudio,imc,edad) VALUES(?,?,?,?,?,?)" );
       $smtp->bind_param("issssi",$id,$peso,$altura,$fecha,$imc,$edad);
       $smtp->execute();
       $res=false;
       if($conexion->affected_rows>0){
       $res=true;}
       return $res;
}

function ingresarDistancia($id,$car_fem,$car_hueco,$hueco_hombro,$hombro_braq,$hombro_rad,$hueco_cuffxell,$cuffxell_fem) {
        $conexion=  conectar();
    $smtp=$conexion->prepare("INSERT INTO distancia (id_usuario,car_fem,car_hueco,hueco_hombro,hombro_braq,hombro_rad,hueco_cuffxell,cuffxell_fem) VALUES(?,?,?,?,?,?,?,?)" );
       $smtp->bind_param("ssssssss",$id,$car_fem,$car_hueco,$hueco_hombro,$hombro_braq,$hombro_rad,$hueco_cuffxell,$cuffxell_fem);
       $smtp->execute();
       $res=false;
       if($conexion->affected_rows>0){
       $res=true;}
       return $res;
}
function ingresarImt($id,$ci,$cd){
        $conexion=  conectar();
    $smtp=$conexion->prepare("INSERT INTO imt (id_usuario,ci,cd) VALUES(?,?,?)" );
       $smtp->bind_param("sss",$id,$ci,$cd);
       $smtp->execute();
       $res=false;
       if($conexion->affected_rows>0){
       $res=true;}
       return $res;
}

function ingresarRiesgo($id,$fuma,$presion,$colesterol,$hiper,$ant,$seden,$ejer,$medic,$dia) {
       $conexion=  conectar();
    $smtp=$conexion->prepare("INSERT INTO riesgo(id_usuario,fuma,presion,colesterol,hiperglicemia,ant_fliares,sedentarismo,ejercicio,medicacion,diabetes)VALUES (?,?,?,?,?,?,?,?,?,?)");
    $smtp->bind_param('ssssssssss',$id,$fuma,$presion,$colesterol,$hiper,$ant,$seden,$ejer,$medic,$dia);
    $smtp->execute();
    $res=$id+"  "+$fuma+" "+$colesterol+"  "+$hiper;
      if($conexion->affected_rows>0){
       // $res=true;
    }
    return $res;
    }

function ingresarVop($id,$hemo,$xcell) {
        $conexion=  conectar();
    $smtp=$conexion->prepare("INSERT INTO vop(id_usuario,hemo,xcell)VALUES (?,?,?)" );
       $smtp->bind_param('sss',$id,$hemo,$xcell);
       $smtp->execute();
       $res=false;
       if($conexion->affected_rows>0){
       $res=true;}
       return $res;
}

function ingresarComentario($id,$titulo,$texto) {
        $conexion=  conectar();
    $smtp=$conexion->prepare("INSERT INTO comentario(id_usuario,titulo,texto)VALUES (?,?,?)");
    $smtp->bind_param('sss',$id,$titulo,$texto);
    $smtp->execute();
    $res=false;
       if($conexion->affected_rows>0){
       $res=true;}
       return $res;
}
function ingresarPresionB($id,$psis,$pdia) {
        $conexion=  conectar();
    $smtp=$conexion->prepare("INSERT INTO presion_braquial(id_usuario,psis,pdias)VALUES (?,?,?)" );
      $smtp->bind_param('sss',$id,$psis,$pdia);
       $smtp->execute();
       $res=false;
       if($conexion->affected_rows>0){
       $res=true;}
       return $res;

}

function ingresarPresionC($id,$psis,$pdia) {
        $conexion=  conectar();
    $smtp=$conexion->prepare("INSERT INTO presion_central(id_usuario,psis,pdias)VALUES (?,?,?)" );
      $smtp->bind_param('sss',$id,$psis,$pdia);
       $smtp->execute();
       $res=false;
       if($conexion->affected_rows>0){
       $res=true;}
       return $res;

}

function subirArchivo($id,$img) {
       
       $res=false;
       if($conexion->affected_rows>0){
       $res=true;}
       return $res;

}
