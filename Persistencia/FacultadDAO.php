<?php

Class FacultadDAO{
    private $idFacultad;
    private $nombre;
    private $direccion;
    private $telefono;

    public function FacultadDAO($idFacultad = "", $nombre = "", $direccion = "", $telefono=""){

        $this -> idFacultad = $idFacultad;
        $this -> nombre = $nombre;
        $this -> direccion = $direccion;
        $this -> telefono = $telefono;

    }


    public function consultarTodo(){
        return "SELECT idFacultad, nombre, direccion, telefono 
                FROM facultad";
    }

    public function consultarPartes(){
        return "SELECT idFacultad, nombre, direccion, telefono 
                FROM facultad
                LIMIT  ";
    }

    public function guardar(){
        return "INSERT INTO facultad (nombre, direccion, telefono)
                VALUES ('" . $this -> nombre . "', '" . $this -> direccion . "' , " . $this -> telefono . " )";
    }

    public function cantidadFacultades(){
        return "SELECT count(*)
                FROM facultad";
    }
}

?>