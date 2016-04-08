<?php

include_once 'conexion_class.php';

class politicas_class 
    {

    
    
    private $conexion; 
    public function __construct()
    {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
        
  }
    public function guardar($pol_codigo,$pol_descripcion)
    {
       $sql= " insert into politicas values ('$pol_codigo','$pol_descripcion')";
        
        
        $query = $this->conexion->ejecutarQuery($sql);
    }
    
     public function modificar($pol_codigo,$pol_descripcion)
    {
       $sql= " 'UPDATE politicas SET pol_codigo='" . $pol_codigo . "'pol_descripcion'" . $pol_descripcion . "'";
        
        
        $query = $this->conexion->ejecutarQuery($sql);
    }
    
    public function consultar($pol_codigo)
    {
        //cnx bd
        //consulta bd
        
        $consulta_cliente = "select pk_pol_codigo,pol_descripcion from politicas where pk_pol_codigo =" . $pol_codigo."" ;
        
       $this->conexion->ejecutarQuery($consulta_cliente);
        
        $cantidad_cliente = mysql_num_rows($fuente_cliente);
        
        
        
    }
        public function eliminar($pol_codigo) 
        {
        $sql = " DELETE FROM politicas where pk_pol_codigo=" . $pol_codigo . "";


        $query = $this->conexion->ejecutarQuery($sql);
        }
    }
  