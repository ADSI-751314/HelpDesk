<?php
session_start();
require_once 'conexion_class.php';

class login_class {
    private $conexion;

    public function __construct() {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM USUARIOS WHERE usu_username = '".$username."' AND usu_password = '".$password."'";
        $query_result = $this->conexion->consultarQuery($sql);
        
        if ($query_result) {
            $_SESSION['username'] = $query_result[0]["usu_username"];
            $_SESSION['password'] = $query_result[0]["usu_password"];
            $_SESSION['fullname'] = $query_result[0]["usu_primer_nombre"]." ".$query_result[0]["usu_primer_apellido"];
            return true;
        }
        return false;
    }

    public function logout(){
        $_SESSION = array();
        session_destroy();
    }
}
