<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of presion_braqueal
 *
 * @author Yo
 */ require_once ('clase_base.php');
class presion_braquial extends clase_base{
    private $id=0;
    private $id_usuario;
    private $psis_br;
    private $pdias_br;

    
             //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="presion_braquial";
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

                public function getPsis_br() {
            return $this->psis_br;
        }

        public function getPdias_br() {
            return $this->pdias_br;
        }

        public function setPsis_br($psis_br) {
            $this->psis_br = $psis_br;
        }

        public function setPdias_br($pdias_br) {
            $this->pdias_br = $pdias_br;
        }
        
           public function mostrarPb($id_user){
        $stmt = $this->getDB()->prepare( 
"SELECT * FROM presion_braquial WHERE id_usuario=?" );
        $stmt->bind_param( "i",$id_user);
        $stmt->execute();
        $resultado = $stmt->get_result();
 while ($fila=$resultado->fetch_object()) {
            $presionb= new presion_braquial($fila);          
}
        return $presionb;
}
        
      function insertarPresionB(){
    $id_user=  $this->getId_usuario();
    $psis=  $this->getPsis_br();
    $pdias=  $this->getPdias_br();
    $smtp=  $this->getDB()->prepare("INSERT INTO presion_braquial(id_usuario,psis,pdias)VALUES (?,?,?)");
    $smtp->bind_param('iii',$id_user,$psis,$pdias);
    $smtp->execute();
    $res=false;
      if($this->getDB()->affected_rows>0){
        $res=true;
    }
    return $res;
    }

}
