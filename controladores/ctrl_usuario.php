<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ('./clases/usuario.php');
require_once ('./clases/template.php');
 function mostrarTodos(){
     $mensage="";
     error_reporting(0);
     $tpl= new Template();
    $usu=new usuario();
    $resultados=$usu->getListado();
    foreach ($resultados as $key => $value) {
        $usu=$value;
        $usuarios[]=$usu;
    }
   $data = array(
       'usuarios' => $usuarios,
       'titulo' => 'Proyecto final',
       'mensaje' => $mensage
   );
   $tpl->mostrar("mostrar", $data);
}
function editarUsuario(){error_reporting(0);
    $tpl=new Template();
    $usu=new usuario();
    $user=new usuario();
            $user=new usuario();
            
    if($_POST['id']){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $user->setId($id);
        $user->setNombre($nombre);
        if($user->modidicarUsuario()){
            mostrarTodos();
            exit();
        }else{$mensaje="Error! No se pudo modificar los datos del usuario";}
        
    }  else
    if($_GET['id']){
        $id=$_GET['id'];
        $user=$usu->obtenerPorId($id);
    } 
    $data=array(
        'usuario' => $user,
        'titulo' => 'Proyecto final',
        'mensage' => $mensaje
    );
    $tpl->mostrar("modificar", $data);  
}

function ingresarNuevo(){
    error_reporting(0);
    $tpl = new Template();
    if($_POST['nombre']){
        $user= new usuario();
        $nombre=$_POST['nombre'];
        $imagen=$_FILES['foto']['name'];
        $user->setNombre($nombre);
        $user->setImagen($imagen);
     
        $ruta="imagenes/".$_FILES['foto']['name'];
        @move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
        if($user->ingresarUsuario()){
            mostrarTodos();
            exit();
        }else{ $mensage="Error al ingresar usuario, verifique";}
    }
    $data=array(
        'mensage' => $mensage,
        'titulo' => 'Proyecto final'
    );
    $tpl->mostrar("nuevo", $data);
}
function eliminar(){
    $mensage="";
    $user= new usuario();
    if($_GET['id']){
        if($user->borrar($_GET['id'])){
            mostrarTodos();
            exit();
        }else{ $mensage="Imposible eliminar registro, varifique";}
    }
}

