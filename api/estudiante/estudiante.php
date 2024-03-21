<?php
include_once 'bd/db.php';

class Estudiante extends DB{

    function obtenerEstudiante(){
        $query = $this->connect()->query('SELECT * FROM estudiante');

        return $query;
    }
}

?>