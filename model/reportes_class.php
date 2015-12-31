<?php

// enlaza con la clase conexion
include 'conexion_class.php';

class reportes_class {

    private $conexion;
    private $fechaInicio;
    private $fechaFin;

    public function __construct() {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
    }

    public function consultarUsuarios($fechaInicio, $fechaFinal) {
        // ejecucion de la consulta sql
        $sql = "SELECT usu_primer_nombre,usu_segundo_nombre,usu_primer_apellido,usu_segundo_apellido,dep_nombre,ser_fecha FROM servicios s 
             INNER JOIN usuarios u ON s.fk_usu_codigo = u.pk_usu_codigo 
             INNER JOIN dependencias  d ON d.pk_dep_codigo= u.fk_dep_codigo
             WHERE ser_fecha between '$fechaInicio' and '$fechaFinal'";
        //retorno de la base de datos 
        $query = $this->conexion->consultarQuery($sql);
        return $query;
    }

}
