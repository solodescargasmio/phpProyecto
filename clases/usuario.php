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
require_once ('session.php');
class usuario extends clase_base{
    private $id;
    private $nombre;
    private $apellido;
    private $fecha_nac;
    private $sexo;
 

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
    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

        
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

   public function getFecha_nac() {
        return $this->fecha_nac;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setFecha_nac($fecha_nac) {
        $this->fecha_nac = $fecha_nac;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
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
    
           public function mostrarUser($id_user){
        $stmt = $this->getDB()->prepare( 
"SELECT * FROM usuario WHERE id=?" );
        $stmt->bind_param( "i",$id_user);
        $stmt->execute();
        $resultado = $stmt->get_result();
 while ($fila=$resultado->fetch_object()) {
            $usuario= new usuario($fila);          
}
        return $usuario;
}
    
     function ingresarUsuario(){
        $id=  $this->getId();
         $nombre=  $this->getNombre();
        $apellido= $this->getApellido();
        $sexo=  $this->getSexo();
        $fecha=$this->getFecha_nac();
         $edad=$this->calcularEdad($fecha);
        $smtp=  $this->getDB()->prepare("INSERT INTO usuario (id,nombre,apellido,fecha_nac,sexo) VALUES(?,?,?,?,?)" );
       $smtp->bind_param("sssss",$id,$nombre,$apellido,$fecha,$sexo);
       $smtp->execute();
       $res=false;
       if($this->getDB()->affected_rows>0){
        $res=true;
         Session::init();
        Session::set('cedula', $id);
        Session::set('edad', $edad);
        Session::set('apellido', $apellido);
      //  var_dump(Session::get('edad'));exit();
       }
         
       return $res;  
    }
 
    function calcularEdad($param) {
        
                 $fecha=date('d-m-Y');
                list($dia,$mes,$ano)=  explode('-', $fecha);
//fecha de nacimiento
        list($anoe,$mese,$diae)=  explode('-', $param);

//si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual

if (($mese == $mes) && ($diae > $dia)) {
$ano=($ano-1); }

//si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual

if ($mese > $mes) {
$ano=($ano-1);}

//ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad

$edad=($ano-$anoe);

return $edad;
    }
    
     function contarSexo($sexo){
     $valor=0;
        $stmt = $this->getDB()->prepare( 
"SELECT count(*) FROM usuario WHERE sexo=?" );
          $stmt->bind_param( "s",$sexo);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($fila=$resultado->fetch_object()) {
            foreach ($fila as $value) {
              $valor=$value;   
            }
                    
}
        
        return $valor; 
    }

}
