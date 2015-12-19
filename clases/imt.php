<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of imt
 *
 * @author Yo
 */
require_once ('clase_base.php');
class imt extends clase_base{
    private $id=0;
    private $id_usuario;
    private $ci;
    private $cd;
             //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="imt";
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
    public function getCi() {
        return $this->ci;
    }

    public function getCd() {
        return $this->cd;
    }

    public function setCi($ci) {
        $this->ci = $ci;
    }

    public function setCd($cd) {
        $this->cd = $cd;
    }

       public function mostrarImt($id_user){
        $stmt = $this->getDB()->prepare( 
"SELECT * FROM imt WHERE id_usuario=?" );
        $stmt->bind_param( "i",$id_user);
        $stmt->execute();
        $resultado = $stmt->get_result();
 while ($fila=$resultado->fetch_object()) {
            $imt= new imt($fila);          
}
        return $imt;
}
    
    function insertarImt(){
    $id_user=  $this->getId_usuario();
    $cd=  $this->getCd();
    $ci=  $this->getCi();
    $smtp=  $this->getDB()->prepare("INSERT INTO imt(id_usuario,cd,ci)VALUES (?,?,?)");
    $smtp->bind_param('iss',$id_user,$cd,$ci);
    $smtp->execute();
    $res=false;
      if($this->getDB()->affected_rows>0){
        $res=true;
    }
    return $res;
    }
}
