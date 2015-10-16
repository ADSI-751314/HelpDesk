<?php

include 'HelpDesk/model/conexion_class.php';

class politicas_class {
    
    
    private $conexion; 
    public function __construct()
    {
        $this->conexion=new conexion_class();
        $this->conexion->conexion();
        
  }
    public function guardar($pol_codigo,$pol_descripcion)
    {
       $sql= " insert into politicas values ('$pol_codigo','$pol_descripcion')";
        
        
        $query = $this->conexion->ejecutarQuery($sql);
    }
    
     public function modificar($pol_codigo,$pol_descripcion)
    {
       $sql= " UPDATE politicas SET ('$pol_codigo','$pol_descripcion') where pk_pol_codigo=".$pol_codigo."";
        
        
        $query = $this->conexion->ejecutarQuery($sql);
    }
?>
