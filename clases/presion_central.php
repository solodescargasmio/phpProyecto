<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of presion_central
 *
 * @author Yo
 */
require_once ('clase_base.php');
class presion_central extends clase_base{

    private $id=0;
    private $id_usuario;
    private $psis;
    private $pdias;

    
             //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="presion_central";
        parent::__construct($tabla);

    }
    
    public function getId() {
        return $this->id;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getPsis() {
        return $this->psis;
    }

    public function getPdias() {
        return $this->pdias;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setPsis($psis) {
        $this->psis = $psis;
    }

    public function setPdias($pdias) {
        $this->pdias = $pdias;
    }

    
  
      function insertarPresionC(){
    $id_user=  $this->getId_usuario();
    $psis=  $this->getPsis();
    $pdias=  $this->getPdias();
    $smtp=  $this->getDB()->prepare("INSERT INTO presion_central(id_usuario,psis,pdias)VALUES (?,?,?)");
    $smtp->bind_param('iii',$id_user,$psis,$pdias);
    $smtp->execute();
    $res=false;
      if($this->getDB()->affected_rows>0){
        $res=true;
    }
    return $res;
    }
    
}
