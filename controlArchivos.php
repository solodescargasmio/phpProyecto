<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
             require_once ('./clases/archivo.php');
             require_once ('./clases/session.php');
             require_once ('./conexion/config.php');
//           
//             $cid=ftp_connect(FTP_HOST);
//             ftp_login($cid, FTP_USR,FTP_PASS);
           error_reporting(0);
         Session::init();
    $id_user=Session::get("cedula");
        $archivo=new archivo();
        $dato=$_POST['user'];
        $ok=false;
        $archivo=$archivo->mostrarArchivo($id_user,$dato);
        if(isset($archivo)){
 echo '<h4><font style="color:red;">El archivo que intenta subir ya está en la base de datos.<br> Si "Selecciona archivo", el que elija, remplazará al existente en la base de datos.</font></h4>';     
        }


        ?>
    </body>
</html>
