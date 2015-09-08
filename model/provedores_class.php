<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of provedores_class
 *
 * @author sena
 */

include 'HelpDesk/model/conexion_class.php';
class provedores_class {
    
    
    private $conexion; 
    public function __construct()
    {
        $this->conexion=new conexion_class();
        $this->conexion->conexion();
        
  }
    
    
    public function guardar($pro_codigo,$pro_nombre, $pro_telefono,$pro_telefono,$pro_direccion,$pro_correo,$pro_direccion)
    {
       $sql= " insert into provedores values ('$pro_codigo','$pro_nombre', '$pro_telefono','$pro_telefono','$pro_direccion','$pro_correo','$pro_direccion')";
        
        
        $query = $this->conexion->ejecutarQuery($sql);
    }
}
