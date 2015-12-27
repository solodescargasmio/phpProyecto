<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of comentario
 *
 * @author Yo
 */
 require_once ('clase_base.php');
class comentario extends clase_base{
    private $id=0;
    private $id_usuario;
    private $titulo;
    private $texto;
    
             //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="comentario";
        parent::__construct($tabla);

    }
    public function getId() {
        return $this->id;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

public function mostrarComentario($id_user){
        $stmt = $this->getDB()->prepare( 
"SELECT * FROM comentario WHERE id_usuario=?" );
        $stmt->bind_param( "i",$id_user);
        $stmt->execute();
        $resultado = $stmt->get_result();
 while ($fila=$resultado->fetch_object()) {
            $comentario= new comentario($fila);
            $comentarios[]=$comentario;
}
        return $comentarios;
}
    
    function insertarComentario(){
    $id_user=  $this->getId_usuario();
    $titulo=  $this->getTitulo();
    $texto=  $this->getTexto();
    $smtp=  $this->getDB()->prepare("INSERT INTO comentario(id_usuario,titulo,texto)VALUES (?,?,?)");
    $smtp->bind_param('iss',$id_user,$titulo,$texto);
    $smtp->execute();
    $res=false;
      if($this->getDB()->affected_rows>0){
        $res=true;
    }
    return $res;
    }
}
