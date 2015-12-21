<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of riesgo
 *
 * @author Yo
 */
require_once ('clase_base.php');
class riesgo extends clase_base{
    private $id=0;
    private $id_usuario;
    private $fuma;
    private $presion;
    private $colesterol;
    private $hiperglicemia;
    private $ant_fliares;
    private $sedentarismo;
    private $ejercicio;
    private $medicacion;
    
             //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="riesgo";
        parent::__construct($tabla);

    }
        
        public function getId() {
            return $this->id;
        }

        public function getId_usuario() {
            return $this->id_usuario;
        }

        public function getFuma() {
            return $this->fuma;
        }

        public function getPresion() {
            return $this->presion;
        }

        public function getColesterol() {
            return $this->colesterol;
        }

        public function getHiperglicemia() {
            return $this->hiperglicemia;
        }

        public function getAnt_fliares() {
            return $this->ant_fliares;
        }

        public function getSedentarismo() {
            return $this->sedentarismo;
        }

        public function getEjercicio() {
            return $this->ejercicio;
        }

        public function getMedicacion() {
            return $this->medicacion;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setId_usuario($id_usuario) {
            $this->id_usuario = $id_usuario;
        }

        public function setFuma($fuma) {
            $this->fuma = $fuma;
        }

        public function setPresion($presion) {
            $this->presion = $presion;
        }

        public function setColesterol($colesterol) {
            $this->colesterol = $colesterol;
        }

        public function setHiperglicemia($hiperglicemia) {
            $this->hiperglicemia = $hiperglicemia;
        }

        public function setAnt_fliares($ant_fliares) {
            $this->ant_fliares = $ant_fliares;
        }

        public function setSedentarismo($sedentarismo) {
            $this->sedentarismo = $sedentarismo;
        }

        public function setEjercicio($ejercicio) {
            $this->ejercicio = $ejercicio;
        }

        public function setMedicacion($medicacion) {
            $this->medicacion = $medicacion;
        }

               public function mostrarRiesgo($id_user){
        $stmt = $this->getDB()->prepare( 
"SELECT * FROM riesgo WHERE id_usuario=?" );
        $stmt->bind_param( "i",$id_user);
        $stmt->execute();
        $resultado = $stmt->get_result();
 while ($fila=$resultado->fetch_object()) {
            $riesgo= new riesgo($fila);          
}
        return $riesgo;
}
        
        
        function insertarRiesgo(){
    $id_user=  $this->getId_usuario();
    $fuma=  $this->getFuma();
    $presion=  $this->getPresion();
    $colesterol= $this->getColesterol(); 
    $hiper= $this->getHiperglicemia();
    $ant=  $this->getAnt_fliares();
    $seden=  $this->getSedentarismo();
    $ejer=  $this->getEjercicio();
    $medic=  $this->getMedicacion();
    $smtp=  $this->getDB()->prepare("INSERT INTO riesgo(id_usuario,fuma,presion,colesterol,hiperglicemia,ant_fliares,sedentarismo,ejercicio,medicacion)VALUES (?,?,?,?,?,?,?,?,?)");
    $smtp->bind_param('iiiiiiiii',$id_user,$fuma,$presion,$colesterol,$hiper,$ant,$seden,$ejer,$medic);
    $smtp->execute();
    $res=false;
      if($this->getDB()->affected_rows>0){
        $res=true;
    }
    return $res;
    }
}
