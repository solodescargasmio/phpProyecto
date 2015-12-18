<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ('./clases/ficha_patronimica.php');
require_once ('./clases/usuario.php');
require_once ('./clases/template.php');
require_once ('ctrl_datos.php');
function principal(){
       $mensage="";
     error_reporting(0);
     $tpl= new Template();
   $data = array(
       'usuarios' => $usuarios,
       'titulo' => 'Proyecto final',
       'mensaje' => $mensage
   );
   $tpl->mostrar("principal", $data); 
}
 function mostrarTodos(){
     $mensage="";
     error_reporting(0);
     $tpl= new Template();
     $fptr=new ficha_patronimica();
    $usu=new usuario();
   
    $resultados=$usu->getListado();
    foreach ($resultados as $key => $value) {
        $usu=$value;
        $usuarios[]=$usu;
    }
    
     $resficha=$fptr->getListado();
     foreach ($resficha as $key => $value) {
        $fptr=$value;
        $fichas[]=$fptr;
    }
    
   $data = array(
       'usuarios' => $usuarios,
       'titulo' => 'Proyecto final',
       'mensaje' => $mensage
   );
   $tpl->mostrar("mostrar", $data);
}


function ingresarNuevo(){
    $fecha=date('d-m-Y');
     error_reporting(0);
    $tpl = new Template();
    if($_POST['ci']){
        $user= new usuario();
        $id=$_POST['ci'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $fecha=$_POST['datepicker'];
        $sexo=$_POST['selector'];
        $user->setId($id);
        $user->setNombre($nombre);
        $user->setApellido($apellido);
        $user->setFecha_nac($fecha);
        $user->setSexo($sexo);
//        $imagen=$_FILES['foto']['name'];
//        $user->setNombre($nombre);
//        $user->setImagen($imagen);
//     
//        $ruta="imagenes/".$_FILES['foto']['name'];
//        @move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
        if($user->ingresarUsuario()){
         $fpat=new ficha_patronimica();
        $peso=$_POST['peso'];
        $altura=$_POST['altura'];
        $indice=$peso/($altura*$altura);
        $imc= number_format($indice,2,".",",");
        $fpat->setId_usuario($_POST['ci']);
        $fpat->setPeso($peso);
        $fpat->setAltura($altura);
        $fpat->setFecha_estudio($fecha);
        $fpat->setImc($imc);
        
          if($fpat->ingresaFicha()){
           mostrarTodos();
            exit();
        }else{$mensaje="Error al guardar ficha patronimica. Verifique los datos";}
    //   mostrarTodos();
            exit();
        }else{ $mensage="Error al ingresar usuario. Verifique los datos";}
    }
    $data=array(
        'fecha' => $fecha,
        'mensage' => $mensage,
        'titulo' => 'Proyecto final'
    );
    $tpl->mostrar("nuevo", $data);
}


function traerFicha($param) {
    $fptr=new ficha_patronimica();
    
}



