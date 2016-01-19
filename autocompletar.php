<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('./conexion/config.php');
require_once ('./clases/usuario.php');
$host=DB_HOST;
$root=DB_USR;
$pass=DB_PASS;
$db=DB_DB;

$id_user = $_POST['service'];
$conexion=  mysqli_connect($host, $root,$pass, $db)or die("Imposible conectar");
//$resultado=$conexion->query("SELECT * FROM usuario WHERE id like '%Leidy%' OR nombre like '%Leidy%'");
$resultado=$conexion->query("SELECT * FROM usuario WHERE id like '%$id_user%' OR nombre like '%$id_user%' OR apellido like '%$id_user%'");

 while ($fila=$resultado->fetch_object()) {
            $usr= new usuario($fila);
 echo '<div class="suggest-element"><a data="'.$usr->getId().'" id="'.$usr->getId().'">'.$usr->getId().'</a></div>';
            
}




