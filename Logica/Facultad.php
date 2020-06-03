<?php

require_once "Persistencia/Conexion.php";
require_once "Persistencia/FacultadDAO.php";

Class Facultad{
    private $idFacultad;
    private $nombre;
    private $direccion;
    private $telefono;
    private $FacultadDAO;
    private $conexion;

    public function Facultad($idFacultad = "", $nombre = "", $direccion = "", $telefono=""){

        $this -> idFacultad = $idFacultad;
        $this -> nombre = $nombre;
        $this -> direccion = $direccion;
        $this -> telefono = $telefono;

        $this -> FacultadDAO = new FacultadDAO($idFacultad, $nombre, $direccion, $telefono);
        $this -> conexion = new Conexion();

    }

    public function getIdFacultad(){
        return $this -> idFacultad;
    }

    
    public function getNombre(){
        return $this -> nombre;
    }

    
    public function getDireccion(){
        return $this -> direccion;
    }

    
    public function getTelefono(){
        return $this -> telefono;
    }

    public function guardar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> FacultadDAO -> guardar());
        $this -> conexion -> cerrar();
    }

    public function consultarTodo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> FacultadDAO -> consultarTodo());
        $result = Array();
        while($res = $this -> conexion -> extraer()){
            array_push($result, new Facultad($res[0], $res[1], $res[2], $res[3]));
        }
        
        $this -> conexion -> cerrar();
        return $result;
        
    }
    public function cantidadFacultades(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> FacultadDAO -> cantidadFacultades());
        $res = $this -> conexion -> extraer();
        $this -> conexion -> cerrar();
        return $res[0];

    }
}

?>