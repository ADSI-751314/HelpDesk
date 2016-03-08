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
        $sql = "SELECT
                    COUNT(s.pk_ser_ticket) AS 'Cantidad Fallas', 
                    d.dep_nombre AS 'Dependencia',
                    u.usu_primer_nombre AS 'Primer Nombre',
                    u.usu_segundo_nombre AS 'Segundo Nombre',
                    u.usu_primer_apellido AS 'Primer Apellido',
                    u.usu_segundo_apellido AS 'Segundo Apellido'
                    FROM servicios s 
                    RIGHT JOIN usuarios u ON s.fk_usu_codigo = u.pk_usu_codigo
                    INNER JOIN dependencias  d ON d.pk_dep_codigo= u.fk_dep_codigo
                    WHERE s.ser_fecha between '$fechaInicio' and '$fechaFinal'
                    GROUP BY s.fk_usu_codigo";
        //retorno de la base de datos 
         return $query = $this->conexion->consultarQuery($sql); 
    }
    public function consultarFallasComunes($fechaInicio, $fechaFinal) {
        // ejecucion de la consulta sql
        $sql = " ";
        //retorno de la base de datos 
         return $query = $this->conexion->consultarQuery($sql); 
    }

}
