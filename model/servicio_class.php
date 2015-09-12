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
include '/helpdesk/model/conexion_class.php';

class servicio_class {
    //put your code here
    private $conexion;
    
    public function __construct() {
        $this->conexion=new conexion_class();
        $this->conexion=  conexion;
        
    }
    
    public function guardar($pTic, $pFec, $pHor, $pDes, $pEst, $pPrio, $pFecMod, $pUsu, $pEqu)
    {
        $sql="INSERT INTO servicios VALUES('$pTic','$pFec','$pHor','$pDes','$pEst','$pPrio','$pFecMod','$pUsu','$pEqu')";
        
        $query=  $this->conexion->ejecutarQuery($sql);
    }
    
    public function modificar($pTic, $pFec, $pHor, $pDes, $pEst, $pPrio, $pFecMod, $pUsu, $pEqu)
    {
        $sql="UPDATE servicios SET('$pTic','$pFec','$pHor','$pDes','$pEst','$pPrio','$pFecMod','$pUsu','$pEqu')";
        
        $query=  $this->conexion->ejecutarQuery($sql);
    }
    
    public function eliminar($pTic)
    {
        $sql="DELETE FROM servicios WHERE pk_ser_ticket = $pTic"; 
           
        $query= $this->conexion->ejecutarQuery($sql);
    }
    
    public function consultar($pTic)
    {
        include_once 'conexion.php';
        
        $objConexion= new conexion_class();
        $objconecta->$objConexion->conexion;
        
        $sql="SELECT * FROM servicios WHERE pk_ser_ticket = $pTic";
        
        $query=  mysql_query($sql,$objconecta);
        
        $numCampos=  mysql_num_rows($query);
        
        for($i=0;$i<$numCampos;$i++)
        {
            $registro_servicios=  mysql_fetch_array($query);
            
            $contenido ="<tr>
                    <td>".$registro_servicios[0]."</td>,
                    <td>".$registro_servicios[1]."</td>,
                    <td>".$registro_servicios[2]."</td>,
                    <td>".$registro_servicios[3]."</td>,
                    <td>".$registro_servicios[4]."</td>,
                    <td>".$registro_servicios[5]."</td>,
                    <td>".$registro_servicios[6]."</td>,
                    <td>".$registro_servicios[7]."</td>,
                    <td>".$registro_servicios[8]."</td>";
            
            echo $contenido;

        }//fin del For
        
        
        
        
    }
    
}
