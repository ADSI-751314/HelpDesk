<?php

include 'conexion_class.php';

class garantias_class {
    //put your code here
    private $conexion;
    public function _construct()
    {
           $this->conexion = new conexion_class();
           $this->conexion->conexion();
    }
    public function almacenar($gar_codigo)
    {
        $sql= "insert into garantias values ('$gar_codigo')";
        $query = $this->conexion->ejecutarQuery($sql);
    }
}
