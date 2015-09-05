<?php

require_once 'conexion_class.php';

class login_class {

    private $conexion;

    public function __construct() {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
    }

    public function validacion($username, $password) {

        $sql = "SELECT * FROM usuarios";
        $query = $this->conexion->consultarQuery($sql);

        foreach ($query as $row):
                         
            if ($username == $row['usu_username'] && $password == $row['usu_password']) {

                $validacion = 1;   
                
            } else {

                $validacion = 0;            
            }  
        endforeach;
        return $validacion;
    }

}
