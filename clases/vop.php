<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of vop
 *
 * @author Yo
 */require_once ('clase_base.php');
class vop extends clase_base{
 
    private $id=0;
    private $id_usuario;
    private $hemo;
    private $xcell;
             //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="vop";
        parent::__construct($tabla);

    }
    
    public function getId() {
        return $this->id;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    public function getHemo() {
        return $this->hemo;
    }

    public function getXcell() {
        return $this->xcell;
    }

    public function setHemo($hemo) {
        $this->hemo = $hemo;
    }

    public function setXcell($xcell) {
        $this->xcell = $xcell;
    }

    function insertarVop(){
    $id_user=  $this->getId_usuario();
    $hemo=  $this->getHemo();
    $xcell=  $this->getXcell();
    $smtp=  $this->getDB()->prepare("INSERT INTO vop(id_usuario,hemo,xcell)VALUES (?,?,?)");
    $smtp->bind_param('iss',$id_user,$hemo,$xcell);
    $smtp->execute();
    $res=false;
      if($this->getDB()->affected_rows>0){
        $res=true;
    }
    return $res;
    }
}
