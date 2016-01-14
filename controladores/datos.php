<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ('./clases/ficha_patronimica.php');
require_once ('./clases/riesgo.php');
require_once ('./clases/template.php');

require_once ('ctrl_usuario.php');
require_once ('./clases/presion_braquial.php');
require_once ('./clases/presion_central.php');
require_once ('./clases/session.php');
require_once ('./clases/vop.php');
require_once ('./clases/imt.php');
require_once ('./clases/comentario.php');
require_once ('./clases/distancia.php');
require_once ('./clases/usuario.php');
require_once ('./conexion/config.php');
require_once ('./multimedia/guardarMultimedia.php');

function principal(){
    Session::init();
    $id_user=Session::get('cedula');
    $apell= Session::get('apellido');
    $edad=  Session::get('edad');
       $mensage="";
     error_reporting(0);
     $usu=new usuario();
     $resultados=$usu->getListado();
     $tpl= new Template();
     if($_POST['elejir']){
         $id_user=$_POST['elejir'];
        $usuario=$usu->mostrarUser($id_user);
        Session::init();
        $edad=$usu->calcularEdad($usuario->getFecha_nac());
        Session::set('cedula', $id_user);
        Session::set('edad', $edad);
        Session::set('apellido', $usuario->getApellido());
    $fptr=new ficha_patronimica();
    $dist=new distancia();
    $imt=new imt();
    $vop=new vop();
    $riesgo=new riesgo();
    $presb=new presion_braquial();
    $presc=new presion_central();
    $resficha=$fptr->mostrarFicha($id_user);
    $resdist=$dist->mostrarDistancia($id_user);
    $resimt=$imt->mostrarImt($id_user);
    $resries=$riesgo->mostrarRiesgo($id_user);
    $resvop=$vop->mostrarVop($id_user);
    $respreb=$presb->mostrarPb($id_user);
    $resprec=$presc->mostrarPc($id_user);
         $data = array(
             'usuarios' => $resultados,
       'resultados' => $usuario,
       'ficha' => $resficha,
       'distancia' => $resdist,
       'imts' => $resimt,
       'riesgo' => $resries,
       'vops' => $resvop,
       'presb' => $respreb,
       'presc' => $resprec,
       'titulo' => 'Proyecto final',
       'mensaje' => $mensage
   );
     }else{
  
   $data = array(
       'usuarios' => $resultados,
       'titulo' => 'Proyecto final',
       'mensaje' => $mensage
   );}

   $tpl->asignar('edad', $edad);
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
   $tpl->mostrar("principal", $data); 
}
function ingresarRiesgos(){
    error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $edad=  Session::get('edad');
    $tpl=new Template();
    $riesgo=new riesgo();
    $resries=$riesgo->mostrarRiesgo($id_user);
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
    $diabetes=0;
    
    if($_POST){
    if($_POST['fuma']){$fuma=1;}
    if($_POST['presion']){$presion=1;}
    if($_POST['colesterol']){$colesterol=1;}
    if($_POST['hiperglisemia']){$hiperglicemia=1;}
    if($_POST['antecedentes']){$ant_fliares=1;}
    if($_POST['sedentarismo']){$sedentarismo=1;}
    if($_POST['ejercicio']){$ejercicio=1;}
    if($_POST['medicacion']){$medicacion=1;}
    if($_POST['diabetes']){$diabetes=1;}
     $riesgo->setId_usuario($id_usuario);
     $riesgo->setFuma($fuma);
     $riesgo->setPresion($presion);
     $riesgo->setColesterol($colesterol);
     $riesgo->setHiperglicemia($hiperglicemia);
     $riesgo->setAnt_fliares($ant_fliares);
     $riesgo->setSedentarismo($sedentarismo);
     $riesgo->setEjercicio($ejercicio);
     $riesgo->setMedicacion($medicacion);
     $riesgo->setDiabetes($diabetes);
     if($riesgo->insertarRiesgo()){
          header('Location: index.php');
         exit();
     }
     else{$mensaje="Error al ingresar los riesgos. Verifique";}
    }
    $datos=array(
        'riesgo' => $resries,
        'fecha' => $fecha,
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
    $tpl->asignar('edad', $edad);
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("riesgos", $datos);
}

function ingresaPbraquial() {
      error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $edad=  Session::get('edad');
    $tpl=new Template();
    $mensaje="";
    $titulo="Presion Braquial"; 
    $id_usuario=$id_user; 
    $pbraquial=new presion_braquial();
    $respreb=$pbraquial->mostrarPb($id_user);
    if($_POST['psis']){  
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
         'presionb' => $respreb, 
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
      $tpl->asignar('edad', $edad);
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("presion_braquial", $datos);
    
}
function ingresaPcentral() {
      error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $edad=  Session::get('edad');
    $tpl=new Template();
    $mensaje="";
    $titulo="Presion Central"; 
    $id_usuario=$id_user; 
    $pcen=new presion_central(); 
    $resprec=$pcen->mostrarPc($id_user);
    if($_POST['psis']){
        
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
          'presionc' => $resprec,
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
      $tpl->asignar('edad', $edad);
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("presion_central", $datos);
    
}

function ingresaVop() {
      error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $edad=  Session::get('edad');
    $tpl=new Template();
    $mensaje="";
    $titulo="VOP"; 
    $id_usuario=$id_user; 
     $vop=new vop();
     $resvop=$vop->mostrarVop($id_user);
     
    if($_POST['hemo']){  
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
          'vops' => $resvop,
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
      $tpl->asignar('edad', $edad);
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("vop", $datos);
    
}

function ingresaImt() {
      error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $edad=  Session::get('edad');
    $tpl=new Template();
    $mensaje="";
    $titulo="IMT"; 
    $id_usuario=$id_user; 
    $imt=new imt(); 
    $resimt=$imt->mostrarImt($id_user);
    if($_POST['cd']){
        
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
          'imts' => $resimt,
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
      $tpl->asignar('edad', $edad);
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("imt", $datos);
    
}

function ingresarDis(){
         error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $edad=  Session::get('edad');
    $tpl=new Template();
    $mensaje="";
    $titulo="Distancias"; 
    $id_usuario=$id_user; 
    $distancia=new distancia();
    $resdis=$distancia->mostrarDistancia($id_user);
    if($_POST['carfem']){
        
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
          'distancias' => $resdis,
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
      $tpl->asignar('edad', $edad);
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("distancia", $datos);    
}

function ingresarComentarios(){
         error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $edad= Session::get('edad');
    $tpl=new Template();
    $mensaje="";
    $titulo="Comentarios"; 
    $id_usuario=$id_user; 
    $comentario=new comentario();
    if($_POST['titulo']){
        $titu=$_POST['titulo'];
        $texto=$_POST['texto'];
        $comentario->setId_usuario($id_usuario);
        $comentario->setTitulo($titu);
        $comentario->setTexto($texto);
         if($comentario->insertarComentario()){
            header('Location: index.php');
            exit();
        }
        else{$mensaje="Error al ingresar ".$_POST['titulo'].". Verifique";}
    }
      $datos=array(
        'mensaje' => $mensaje,
        'titulo' => $titulo,
    );
      $tpl->asignar('edad', $edad);
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("comentario", $datos);    
}

function fichaImrimir(){
         error_reporting(0);
    Session::init();
    $id_user=Session::get("cedula");
    $apell=Session::get("apellido");
    $edad= Session::get('edad');
    $tpl=new Template();
    $mensaje="";
    $titulo="Ficha para imprimir"; 
    $usu=new usuario();
 $usuario=$usu->mostrarUser($id_user);
    $fptr=new ficha_patronimica();
    $dist=new distancia();
    $imt=new imt();
    $vop=new vop();
    $riesgo=new riesgo();
    $comentario=new comentario();
    $presb=new presion_braquial();
    $presc=new presion_central();
    $resficha=$fptr->mostrarFicha($id_user);
    $resdist=$dist->mostrarDistancia($id_user);
    $resimt=$imt->mostrarImt($id_user);
    $resries=$riesgo->mostrarRiesgo($id_user);
    $resvop=$vop->mostrarVop($id_user);
    $respreb=$presb->mostrarPb($id_user);
    $resprec=$presc->mostrarPc($id_user);
    $rescom=$comentario->mostrarComentario($id_user);
//    foreach ($rescom as $key => $value) { 
//        if(strcmp($value->getTitulo(),"Resumen")==0){
//            $resumen=new comentario();
//            $resumen=$value;  
//        }
//        else  if(strcmp($value->getTitulo(),"Resumen")==0){
//            $resumen=new comentario();
//            $resumen=$value;  
//        }
//        
//        
//    }
    /*      
       'distancia' => $resdist,
       'imts' => $resimt,
       
       'vops' => $resvop,
       
       */
    //var_dump($usuario);exit();
   $datos = array(
       'usuarios' => $usuario,
       'ficha' => $resficha,
       'riesgo' => $resries,
       'comentarios' => $rescom,
       'presb' => $respreb,
       'presc' => $resprec,
       'mensaje' => $mensage
   );
      $tpl->asignar('edad', $edad);
    $tpl->asignar('cedula', $id_user);
    $tpl->asignar('apellido', $apell);
    $tpl->mostrar("fichaImprimir", $datos);    
}

function guardarArchivos(){
    subirDatos();//Esta funcion esta en la carpeta multimedia 
    //en el archivo guardar...php
}
