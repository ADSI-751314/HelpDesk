<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of servicio_class
 *
 * @author USUARIO
 */
include 'conexion_class.php';

class servicio_class {
    //put your code here
    private $conexion;
    
    public function __construct() {
        $this->conexion=new conexion_class();
        $this->conexion->conexion();
        
    }
    
    public function guardar($pTic, $pFec, $pHor, $pDes, $pEst, $pPrio, $pFecMod, $pUsu, $pEqu)
    {
        $sql="INSERT INTO servicios VALUES($pTic,'$pFec','$pHor','$pDes','$pEst','$pPrio','$pFecMod','$pUsu','$pEqu')";
        
        $query=  $this->conexion->ejecutarQuery($sql);
    }
    
    public function modificar($pTic, $pDes, $pEst, $pPrio, $pFecMod)
    {
        
        $sql="UPDATE servicios SET ser_descripcion='".$pDes."', ser_estado='".$pEst."', ser_prioridad='".$pPrio."',ser_fecha_modificacion='".$pFecMod."' WHERE pk_ser_ticket='".$pTic."'";
        
        $query=  $this->conexion->ejecutarQuery($sql);
    }
    
    public function eliminar($pTic)
    {
        $sql="DELETE FROM servicios WHERE pk_ser_ticket = $pTic"; 
           
        $query= $this->conexion->ejecutarQuery($sql);
    }
    
    public function consultar($pTic)
    {
        $sql="SELECT * FROM servicios WHERE pk_ser_ticket = '".$pTic."'";
        
        $query = $this->conexion->consultarQuery($sql);
        return $query;
       
       }
       public function consultar_todo1()
    {
        $sql="select * from garantias";
        $query = $this->conexion->consultarQuery($sql);
        
    }
}