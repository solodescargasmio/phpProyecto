<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of patronimica
 *
 * @author Yo
 */
require_once ('clase_base.php');
require_once ('session.php');
class ficha_patronimica extends clase_base{
     private $id=0;
     private $id_usuario=0;
    private $peso;
    private $altura;
    private $fecha_estudio;
    private $imc;
    private $edad;

    //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="ficha_patronimica";
        parent::__construct($tabla);

    }
    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

        public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getFecha_estudio() {
        return $this->fecha_estudio;
    }

    public function getImc() {
        return $this->imc;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setFecha_estudio($fecha_estudio) {
        $this->fecha_estudio = $fecha_estudio;
    }

    public function setImc($imc) {
        $this->imc = $imc;
    }

    
 public function mostrarFicha($id_user){
        $stmt = $this->getDB()->prepare( 
"SELECT * FROM ficha_patronimica WHERE id_usuario=?" );
        $stmt->bind_param( "i",$id_user);
        $stmt->execute();
        $resultado = $stmt->get_result();
 while ($fila=$resultado->fetch_object()) {
            $ficha= new ficha_patronimica($fila);          
}
        return $ficha;
}
     function ingresaFicha(){
         $edad=Session::get('edad'); 
        $id=$this->getId_usuario();
         $peso=$this->getPeso();
        $altura=$this->getAltura();
        $imc=$this->getImc();
        $fecha=$this->getFecha_estudio();
        $smtp=  $this->getDB()->prepare("INSERT INTO ficha_patronimica (id_usuario,peso,altura,fecha_estudio,imc,edad) VALUES(?,?,?,?,?,?)" );
       $smtp->bind_param("issssi",$id,$peso,$altura,$fecha,$imc,$edad);
       $smtp->execute();
       $res=false;
       if($this->getDB()->affected_rows>0){
        $res=true;  
        
       }
       return $res;  
    }

    
     function valoresIMC($menor,$mayor){
     $valor=0;
        $stmt = $this->getDB()->prepare( 
"SELECT count(*) FROM `ficha_patronimica` WHERE `imc`>? AND `imc`<?" );
          $stmt->bind_param( "dd",$menor,$mayor);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($fila=$resultado->fetch_object()) {
            foreach ($fila as $value) {
              $valor=$value;   
            }
                    
}
        
        return $valor; 
    }
    
     function modificarFicha(){
         $id=$this->getId_usuario(); 
         $peso=$this->getPeso();
        $altura=$this->getAltura();
        $imc=$this->getImc();
        $smtp=  $this->getDB()->prepare("UPDATE ficha_patronimica SET peso=?,altura=?,imc=? WHERE id_usuario=?" );
       $smtp->bind_param("ddsi",$peso,$altura,$imc,$id);
       $smtp->execute();
       $res=false;
       if($this->getDB()->affected_rows>0){
        $res=true;  
        
       }
       return $res;  
    }
    
}
