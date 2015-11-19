<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author Yo
 */
require_once ('clase_base.php');
class usuario extends clase_base{
    private $id=0;
    private $nombre;
    private $imagen;
       //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="usuario";
        parent::__construct($tabla);

    }
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function modidicarUsuario(){
        $id=$this->getId();
        $nombre= $this->getNombre();
        $smtp=$this->getDB()->prepare("UPDATE usuario SET nombre=? WHERE id=?" );
       $smtp->bind_param("ss",$nombre,$id);
       $smtp->execute();
       $res=false;
       if($this->getDB()->affected_rows>0){
        $res=true;   
       }
       return $res;  
    }
     function ingresarUsuario(){
        $nombre=  $this->getNombre();
        $imagen= $this->getImagen();
        // var_dump($imagen);exit();
        $smtp=  $this->getDB()->prepare("INSERT INTO usuario (nombre,imagen) VALUES(?,?)" );
       $smtp->bind_param("ss",$nombre,$imagen);
       $smtp->execute();
       $res=false;
       if($this->getDB()->affected_rows>0){
        $res=true;   
       }
       return $res;  
    }
    
}
