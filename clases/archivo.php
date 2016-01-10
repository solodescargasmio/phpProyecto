<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of archivo
 *
 * @author Yo
 */
require_once ('clase_base.php');
class archivo  extends clase_base{
    private $id=0;
    private $id_usuario;
    private $nombre;
    private $extension;
            //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="archivo";
        parent::__construct($tabla);

    }
    
    public function getId() {
        return $this->id;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getExtension() {
        return $this->extension;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setExtension($extension) {
        $this->extension = $extension;
    }

               public function mostrarArchivo($id_user,$nombre){
        $stmt = $this->getDB()->prepare( 
"SELECT nombre,extension FROM archivo WHERE id_usuario=? AND nombre=?" );
        $stmt->bind_param( "is",$id_user,$nombre);
        $stmt->execute();
        $resultado = $stmt->get_result();
 while ($fila=$resultado->fetch_object()) {
            $archivo= new archivo($fila);          
}
        return $archivo;
}
        

 public function listarArchivos($id_user){
        $stmt = $this->getDB()->prepare( 
"SELECT * FROM archivo WHERE id_usuario=?" );
        $stmt->bind_param( "i",$id_user);
        $stmt->execute();
        $resultado = $stmt->get_result();
 while ($fila=$resultado->fetch_object()) {
            $archivo= new archivo($fila); 
            $total[]=$archivo;
}
        return $total;
}
        
        function insertarArchivo(){
    $id_user=  $this->getId_usuario();
    $nombre=  $this->getNombre();
    $extension=  $this->getExtension();
    $smtp=  $this->getDB()->prepare("INSERT INTO archivo(id_usuario,nombre,extension)VALUES (?,?,?)");
    $smtp->bind_param('iss',$id_user,$nombre,$extension);
    $smtp->execute();
    $res=false;
      if($this->getDB()->affected_rows>0){
        $res=true;
    }
    return $res;
    }
 

}
