<?php
include '../../HelpDesk/model/conexion_class.php';

class base_conocimiento_class{
    
    private $conexion;
    public function _construct()
    {
           $this->conexion = new conexion_class();
           $this->conexion->conexion();
    }
    
    public function consultar($pk_det_codigo,$det_descripcion,$det_fecha){
        
        
        $sql="select * from detalles_servicios";
        $query = $this->conexion->ejecutarQuery($sql);
        
    }
    
    
}

