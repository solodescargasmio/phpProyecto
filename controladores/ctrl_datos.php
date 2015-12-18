<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ('./clases/riesgo.php');
require_once ('./clases/template.php');
require_once ('ctrl_usuario.php');
require_once ('./clases/presion_braquial.php');
require_once ('./clases/presion_central.php');
require_once ('./clases/session.php');
require_once ('./clases/vop.php');
require_once ('./clases/imt.php');
require_once ('./clases/distancia.php');
function ingresarRiesgos(){
    error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $tpl=new Template();
    $riesgo=new riesgo();
    $mensaje="";
    $titulo="Riesgos CV"; 
    $id_usuario=$id_user;
    $fuma=0;
    $presion=0;
    $colesterol=0;
    $hiperglicemia=0;
    $ant_fliares=0;
    $sedentarismo=0;
    $ejercicio=0;
    $medicacion=0;
    
    if($_POST){
    if($_POST['fuma']){$fuma=1;}
    if($_POST['presion']){$presion=1;}
    if($_POST['colesterol']){$colesterol=1;}
    if($_POST['hiperglisemia']){$hiperglicemia=1;}
    if($_POST['antecedentes']){$ant_fliares=1;}
    if($_POST['sedentarismo']){$sedentarismo=1;}
    if($_POST['ejercicio']){$ejercicio=1;}
    if($_POST['medicacion']){$medicacion=1;}
     $riesgo->setId_usuario($id_usuario);
     $riesgo->setFuma($fuma);
     $riesgo->setPresion($presion);
     $riesgo->setColesterol($colesterol);
     $riesgo->setHiperglicemia($hiperglicemia);
     $riesgo->setAnt_fliares($ant_fliares);
     $riesgo->setSedentarismo($sedentarismo);
     $riesgo->setEjercicio($ejercicio);
     $riesgo->setMedicacion($medicacion);
     if($riesgo->insertarRiesgo()){
          header('Location: index.php');
         exit();
     }
     else{$mensaje="Error al ingresar los riesgos. Verifique";}
    }
    $datos=array(
        'fecha' => $fecha,
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("riesgos", $datos);
}

function ingresaPbraquial() {
      error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $id_user=123456;
    $tpl=new Template();
    $mensaje="";
    $titulo="Presion Braquial"; 
    $id_usuario=$id_user; 
    if($_POST['psis']){
         $pbraquial=new presion_braquial();
        $psis=$_POST['psis'];
        $pdias=$_POST['pdias'];
        $pbraquial->setId_usuario($id_usuario);
        $pbraquial->setPsis_br($psis);
        $pbraquial->setPdias_br($pdias);
        if($pbraquial->insertarPresionB()){
           header('Location: index.php');
            exit();
        }
        else{$mensaje="Error al ingresar Presion Branquial. Verifique";}
    }
    
      $datos=array(
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("presion_braquial", $datos);
    
}
function ingresaPcentral() {
      error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $id_user=123456;
    $tpl=new Template();
    $mensaje="";
    $titulo="Presion Central"; 
    $id_usuario=$id_user; 
    
    if($_POST['psis']){
       $pcen=new presion_central();  
        $psis=$_POST['psis'];
        $pdias=$_POST['pdias'];
        $pcen->setId_usuario($id_usuario);
         $pcen->setPsis($psis);
         $pcen->setPdias($pdias);
        if($pcen->insertarPresionC()){
            header('Location: index.php');
            exit();
        }
        else{$mensaje="Error al ingresar Presion Central. Verifique";}
    }
    
      $datos=array(
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("presion_central", $datos);
    
}

function ingresaVop() {
      error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $id_user=123456;
    $tpl=new Template();
    $mensaje="";
    $titulo="VOP"; 
    $id_usuario=$id_user; 
    
    if($_POST['hemo']){
       $vop=new vop();  
        $hemo=$_POST['hemo'];
        $xcell=$_POST['xcell'];
       
         $vop->setId_usuario($id_usuario);
         $vop->setHemo($hemo);
         $vop->setXcell($xcell);
        if($vop->insertarVop()){
            header('Location: index.php');
            exit();
        }
        else{$mensaje="Error al ingresar VOP. Verifique";}
    }
    
      $datos=array(
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("vop", $datos);
    
}

function ingresaImt() {
      error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $id_user=123456;
    $tpl=new Template();
    $mensaje="";
    $titulo="IMT"; 
    $id_usuario=$id_user; 
    
    if($_POST['cd']){
       $imt=new imt();  
        $cd=$_POST['cd'];
        $ci=$_POST['ci'];
       
         $imt->setId_usuario($id_usuario);
         $imt->setCd($cd);
         $imt->setCi($ci);
        if($imt->insertarImt()){
            header('Location: index.php');
            exit();
        }
        else{$mensaje="Error al ingresar IMT. Verifique";}
    }
    
      $datos=array(
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("imt", $datos);
    
}

function ingresarDis(){
         error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $id_user=123456;
    $tpl=new Template();
    $mensaje="";
    $titulo="Distancias"; 
    $id_usuario=$id_user; 
    if($_POST['carfem']){
        $distancia=new distancia();
        $carfem=$_POST['carfem'];
        $carhueco=$_POST['carhueco'];
        $huecohombro=$_POST['huecohombro'];
        $hombrobraq=$_POST['hombrobraq'];
        $hombrorad=$_POST['hombrorad'];
        $huecocuff=$_POST['huecocuff'];
        $cuffem=$_POST['cuffem'];
        
        $distancia->setId_usuario($id_usuario);
        $distancia->setCar_fem($carfem);
        $distancia->setCar_hueco($carhueco);
        $distancia->setHueco_hombro($huecohombro);
        $distancia->setHombro_braq($hombrobraq);
        $distancia->setHombro_rad($hombrorad);
        $distancia->setHueco_cuffxell($huecocuff);
        $distancia->setCuffxell_fem($cuffem);
         if($distancia->insertarDistancia()){
            header('Location: index.php');
            exit();
        }
        else{$mensaje="Error al ingresar IMT. Verifique";}
    }
      $datos=array(
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("distancia", $datos);    
}