<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ('./clases/ficha_patronimica.php');
require_once ('./clases/riesgo.php');
require_once ('./clases/template.php');
require_once ('./controladores/ctrl_usuario.php');
require_once ('./controladores/ctrl_datos.php');
require_once ('./clases/presion_braquial.php');
require_once ('./clases/presion_central.php');
require_once ('./clases/session.php');
require_once ('./clases/vop.php');
require_once ('./clases/imt.php');
require_once ('./clases/distancia.php');
require_once ('./clases/usuario.php');
require_once ('./clases/archivo.php');
require_once ('./conexion/config.php');
function subirDatos(){
    error_reporting(0);
 Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $edad=Session::get('edad'); 
    $tpl=new Template();
    $mensaje="";
    $titulo="Multimedia"; 
    $archivo=new archivo();
    if(isset($_POST['cursos'])){    
$serv = $ruta=dirname(__FILE__).'/'.$id_user.'/';
$varia=$_POST['cursos'];
  $exten=explode(".",$_FILES['archivo']['name']);
        $ex=  end($exten);
        $var=$varia.'.'.$ex;
  $ruta=$serv.$_FILES['archivo']['name'];
  
  	// Primero creamos un ID de conexión a nuestro servidor
	$cid = ftp_connect(FTP_HOST);
	// Luego creamos un login al mismo con nuestro usuario y contraseña
	$resultado = ftp_login($cid, FTP_USR,FTP_PASS);
	// Comprobamos que se creo el Id de conexión y se pudo hacer el login
	if ((!$cid) || (!$resultado)) {
		echo "Fallo en la conexión"; die;
	}
	// Cambiamos a modo pasivo, esto es importante porque, de esta manera le decimos al 
	//servidor que seremos nosotros quienes comenzaremos la transmisión de datos.
	ftp_pasv ($cid, true) ;
	// Nos cambiamos al directorio, donde queremos subir los archivos, si se van a subir a la raíz
	// esta por demás decir que este paso no es necesario. En mi caso uso un directorio llamado boca
	ftp_chdir($cid, $$id_user);
	// Tomamos el nombre del archivo a transmitir, pero en lugar de usar $_POST, usamos $_FILES que le indica a PHP
	// Que estamos transmitiendo un archivo, esto es en realidad un matriz, el segundo argumento de la matriz, indica
	// el nombre del archivo
	$local =$var;
	// Este es el nombre temporal del archivo mientras dura la transmisión
	$remoto = $_FILES["archivo"]["tmp_name"];
	// Juntamos la ruta del servidor con el nombre real del archivo
	$ruta = $serv.$local;
	// Verificamos si no hemos excedido el tamaño del archivo
//	if (!$tama<=$_POST["MAX_FILE_SIZE"]){
//		echo "Excede el tamaño del archivo...<br />";
//	} else {
		// Verificamos si ya se subio el archivo temporal
		if (is_uploaded_file($remoto)){
			// copiamos el archivo temporal, del directorio de temporales de nuestro servidor a la ruta que creamos	
                        $archivo->setId_usuario($id_user);
                        $archivo->setNombre($varia);
                        $archivo->setExtension($ex);
                        if($archivo->insertarArchivo()){
                          copy($remoto, $ruta);  
                        }else{$mensaje="error al guardar archivo";}
                      
		}
		// Sino se pudo subir el temporal
		else {
			echo "no se pudo subir el archivo " . $local;
		}
	//}
	//cerramos la conexión FTP
	ftp_close($cid);
  
}
$archivos=$archivo->listarArchivos($id_user);
$imagen=$archivo->mostrarArchivo($id_user,$_POST['cursos']);
//var_dump($imagen);exit();
   $datos=array(
       'archivos' => $archivos,
       'imagen' => $imagen,
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
     $tpl->asignar('edad', $edad);
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("multimedia", $datos); 
                } 
  
  
//  if(ftp_connect('localhost',21)){
//      echo 'correcto';
//  }
//                @move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
//if($_FILES){            
//if (!file_exists($carpeta)) {  
//    mkdir($carpeta, 0777, true);
//    
//}  else {
//        echo 'Ya existe la carpeta';
//        if(chmod($carpeta,777)){
//        echo 'Joya';
//    }else{echo 'Algun error en los permisos';}
//}
//echo '<br>'.$_FILES['foto']['name'];
// $carpeta = $serv.$_FILES['foto']['name'];
//@move_uploaded_file($_FILES['foto']['tmp_name'], $carpeta);
//}

//for ($i=0;$i<$_POST;$i++) {
//    echo '<br>'.$_POST['field'][$i].'  :  '.$_POST['value'][$i];
//
//}
//print_r($_POST);
/*ALTER TABLE  `usuario` ADD  `apellido` VARCHAR( 20 ) NOT NULL*/
