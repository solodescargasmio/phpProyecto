<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ('./clases/ficha_patronimica.php');
require_once ('./clases/usuario.php');
require_once ('./clases/template.php');
require_once ('./clases/session.php');
require_once ('ctrl_datos.php');
require_once ('./multimedia/crearMKdir.php');

 function mostrarTodos(){
     $id_user=  Session::get('cedula');
     $apell=  Session::get('apellido');
     $mensage="";
     error_reporting(0);
     $tpl= new Template();
     $fptr=new ficha_patronimica();
//    $usu=new usuario();
//   
//    $resultados=$usu->getListado();
//    foreach ($resultados as $key => $value) {
//        $usu=$value;
//        $usuarios[]=$usu;
//    }
    
     $resficha=$fptr->getListado();
     foreach ($resficha as $key => $value) {
        $fptr=$value;
        $fichas[]=$fptr;
    }
    
   $data = array(
       
       'titulo' => 'Proyecto final',
       'mensaje' => $mensage
   );
       $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
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
        $fechah=$_POST['datepicker'];
        $sexo=$_POST['selector'];
        $user->setId($id);
        $user->setNombre($nombre);
        $user->setApellido($apellido);
        $user->setFecha_nac($fechah);
        $user->setSexo($sexo);

        if($user->ingresarUsuario()){
            crearDir($id);
            }
    }
    $data=array(
        'fecha' => $fecha,
        'mensage' => $mensage,
        'titulo' => 'Proyecto final'
    );
    $tpl->mostrar("nuevo", $data);
}




function cerrar() {
    Session::init();
    Session::destroy();
    principal();
}



