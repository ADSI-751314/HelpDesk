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

include '../../HelpDesk/model/conexion_class.php';

class provedores_class {
    
    
    private $conexion; 
    public function __construct()
    {
        $this->conexion=new conexion_class();
        $this->conexion->conexion();
        
  }
    
    
    public function guardar($pro_codigo,$pro_nombre, $pro_telefono,$pro_direccion,$pro_correo,$pro_pagina_web)
    {
       $sql= " insert into proveedores values ('$pro_codigo','$pro_nombre', '$pro_telefono','$pro_direccion','$pro_correo','$pro_pagina_web')";
        
        
        $query = $this->conexion->ejecutarQuery($sql);
    }
    
     public function modificar($pro_codigo,$pro_nombre, $pro_telefono,$pro_direccion,$pro_correo,$pro_pagina_web)
    {
       $sql= " UPDATE proveedores SET pro_nombre='".$pro_nombre."', pro_telefono='".$pro_telefono."',pro_direccion='".$pro_direccion."',pro_correo='".$pro_correo."',pro_pagina_web='".$pro_pagina_web."' where pk_pro_codigo='".$pro_codigo."'";
        
        
        $query = $this->conexion->ejecutarQuery($sql);
    }
    
    
     public function consultar($pro_codigo)
    {
     
				//CONEXION CON LA BASE DE DATOS 
				
				
					
					// CONSULTA CASE DE DATOS 
					
					$consulta_cliente="select pk_pro_codigo,pro_nombre,pro_telefono,pro_direccion,pro_correo,pro_pagina_web from proveedores  ";
					
					//ejecucion de la consulta
					$fuente_cliente=$this->conexion->ejecutarQuery($consulta_cliente);
                                        
					
					
					//obtener la cantidad de registros
					$cantidad_cliente = mysql_num_rows($fuente_cliente);
				
				
				// contruir un ciclo que recorra los registros que valla desde cero hasta las cantidad de clientes
				for($i=0;$i<$cantidad_cliente;$i++)
				{
				$registro_cliente = mysql_fetch_row($fuente_cliente);
				
				$contenido= "<table><tr>
							<td> " . $registro_cliente[0]            . " </td>
							<td> " . $registro_cliente[1]            . " </td>
							<td> " . $registro_cliente[2]            . " </td>
							<td> " . $registro_cliente[3]            . " </td>
							<td> " . $registro_cliente[4]            . " </td>
                                                        <td> " . $registro_cliente[5]            . " </td>
							
							</tr></table>";
				
				echo $contenido;
				}
				//fin del ciclo
				
				
				
				
				
		
    }
    
    
    
     public function eliminar($pro_codigo)
    {
       $sql= " DELETE FROM proveedores where pk_pro_codigo=".$pro_codigo."";
        
        
        $query = $this->conexion->ejecutarQuery($sql);
    }
    
    
    
    
}
