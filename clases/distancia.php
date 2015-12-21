<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of distancia
 *
 * @author Yo
 */
require_once ('clase_base.php');
class distancia extends clase_base{
     private $id=0;
    private $id_usuario;
    private $car_fem;
    private $car_hueco;
    private $hueco_hombro;
    private $hombro_braq;
    private $hombro_rad;
    private $hueco_cuffxell;
    private $cuffxell_fem;

    
             //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="distancia";
        parent::__construct($tabla);

    }
    public function getId() {
        return $this->id;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getCar_fem() {
        return $this->car_fem;
    }

    public function getCar_hueco() {
        return $this->car_hueco;
    }

    public function getHueco_hombro() {
        return $this->hueco_hombro;
    }

    public function getHombro_braq() {
        return $this->hombro_braq;
    }

    public function getHombro_rad() {
        return $this->hombro_rad;
    }

    public function getHueco_cuffxell() {
        return $this->hueco_cuffxell;
    }

    public function getCuffxell_fem() {
        return $this->cuffxell_fem;
    }

public function setId($id) {
        $this->id = $id;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setCar_fem($car_fem) {
        $this->car_fem = $car_fem;
    }

    public function setCar_hueco($car_hueco) {
        $this->car_hueco = $car_hueco;
    }

    public function setHueco_hombro($hueco_hombro) {
        $this->hueco_hombro = $hueco_hombro;
    }

    public function setHombro_braq($hombro_braq) {
        $this->hombro_braq = $hombro_braq;
    }

    public function setHombro_rad($hombro_rad) {
        $this->hombro_rad = $hombro_rad;
    }

    public function setHueco_cuffxell($hueco_cuffxell) {
        $this->hueco_cuffxell = $hueco_cuffxell;
    }

    public function setCuffxell_fem($cuffxell_fem) {
        $this->cuffxell_fem = $cuffxell_fem;
    }

     public function mostrarDistancia($id_user){
        $stmt = $this->getDB()->prepare( 
"SELECT * FROM distancia WHERE id_usuario=?" );
        $stmt->bind_param( "i",$id_user);
        $stmt->execute();
        $resultado = $stmt->get_result();
 while ($fila=$resultado->fetch_object()) {
            $distancia= new distancia($fila);          
}
        return $distancia;
}
      
        function insertarDistancia(){
    $id_user=  $this->getId_usuario();
    $car_fem=  $this->getCar_fem();
    $car_hueco=$this->getCar_hueco();
    $hueco_hombro=$this->getHueco_hombro();
    $hombro_braq=$this->getHombro_braq();
    $hombro_rad=$this->getHombro_rad();
    $hueco_cuffxell=$this->getHueco_cuffxell();
    $cuffxell_fem=$this->getCuffxell_fem();
    $smtp=  $this->getDB()->prepare("INSERT INTO distancia (id_usuario,car_fem,car_hueco,hueco_hombro,hombro_braq,hombro_rad,hueco_cuffxell,cuffxell_fem)VALUES (?,?,?,?,?,?,?,?)");
    $smtp->bind_param('iiiiiiii',$id_user,$car_fem,$car_hueco,$hueco_hombro,$hombro_braq,$hombro_rad,$hueco_cuffxell,$cuffxell_fem);
    $smtp->execute();
    $res=false;
      if($this->getDB()->affected_rows>0){
        $res=true;
    }
    return $res;
    }
}
