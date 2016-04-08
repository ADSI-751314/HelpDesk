<?php

include '../../HelpDesk/model/conexion_class.php';

class provedores_class {

    private $conexion;

    public function __construct() {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
    }

    public function guardar($pro_codigo, $pro_nombre, $pro_telefono, $pro_direccion, $pro_correo, $pro_pagina_web) {
        $sql = " insert into proveedores values ('$pro_codigo','$pro_nombre', '$pro_telefono','$pro_direccion','$pro_correo','$pro_pagina_web')";
        
        if(!$query = $this->conexion->ejecutarQuery($sql)){
            echo 'error';
        }
        
             if ($query == '1') {
        echo '<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Bien!</strong> Dato agregado Correctamente.
        </div>';
    } else {
        echo '<div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡UPS!</strong> Ha ocurrido un error.
        </div>';
    }
    }

    
    function cargarModificar($id) {
  
  
    $sql = "select pk_pro_codigo,pro_nombre,pro_telefono,pro_direccion,pro_correo,pro_pagina_web from proveedores where pk_pro_codigo = $id";
   
     $query = $this->conexion->ejecutarQuery($sql);
    if (!$result = $this->conexion->ejecutarQuery($sql)) {
        echo $conexion->error;
    }else{
       
         while ($row = mysqli_fetch_array($result)) {
           $contenido = '  <table CLASS="table">
                    
                       <tr> 
                           <td colspan="2"  >  <h1> Modificar  de Proveedores<h1></td> 
     
                    </tr>
                    
                    <tr> 
                          <td colspan="2"  >   
                            
                              <a onclick="modificar();"  name="btnmodificar" value="modificar" class="btn btn-lg btn-success">Modificar</a>
                             
                          </td> 
     
                    </tr>
                    <tr> 
                        <td>   Codigo Proveedor</td> 
                        <td> <input type="text"  id="txtPro_codigo" values="'.$row[0].'"> </td> 
                    </tr>
                  
                    
                    <tr> 
                        <td>  Nombre Proveedor</td> 
                        <td> <input type="text"  id="txtPro_nombre" values="'.$row[1].'">  </td> 
                    </tr>
                    
                    <tr> 
                        <td>  Telefono Proveedor</td> 
                        <td> <input type="text"  id="txtPro_telefono" values="'.$row[2].'"> </td> 
                    </tr>
                    
                    <tr> 
                        <td>  Direccion Proveedor </td> 
                        <td> <input type="text"  id="txtPro_direccion" values="'.$row[3].'">  </td> 
                    </tr>
                    
                    <tr> 
                        <td>  Correo Proveedor</td> 
                        <td>   <input type="text"  id="txtPro_correo" values="'.$row[4].'">  </td> 
                    </tr>
                    
                    <tr> 
                        <td>  Pagina Web </td> 
                        <td>  <input type="text"  id="txtpagina_web" values="'.$row[5].'"> </td> 
                    </tr>
                    </table>';
           
           
           echo $contenido;
         }
    }
}
    
    
    
    
    
    
    public function modificar($pro_codigo, $pro_nombre, $pro_telefono, $pro_direccion, $pro_correo, $pro_pagina_web) {
        $sql = " UPDATE proveedores SET pro_nombre='" . $pro_nombre . "', pro_telefono='" . $pro_telefono . "',pro_direccion='" . $pro_direccion . "',pro_correo='" . $pro_correo . "',pro_pagina_web='" . $pro_pagina_web . "' where pk_pro_codigo='" . $pro_codigo . "'";


        $query = $this->conexion->ejecutarQuery($sql);
        
         if ($query == '1') {
        echo '<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Bien!</strong> Dato Modificado Correctamente.
        </div>';
    } else {
        echo '<div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡UPS!</strong> Ha ocurrido un error.
        </div>';
    }
    }

    public function consultar() {

        //CONEXION CON LA BASE DE DATOS 
        // CONSULTA CASE DE DATOS 

        $consulta_cliente = "select pk_pro_codigo,pro_nombre,pro_telefono,pro_direccion,pro_correo,pro_pagina_web from proveedores ";

        if (!$result = $this->conexion->ejecutarQuery($consulta_cliente)) {
            echo $conexion->error;
        } 
        echo '  <table class="table table-striped">
                                <tr>
                                    <td> CODIGO PROVEEDOR</td>
                                    <td> NOMBRE PROVEEDOR </td>
                                    <td> TELEFONO PROVEEDOR</td>
                                    <td> DIRECCION </td>
                                    <td> CORREO</td>
                                    <td>PAGINA WEB</td>
                                    <td>OPCIONES</td>
                                </tr>';
        while ($row = mysqli_fetch_array($result)) {
            $contenido = "<tr>
							<td> " . $row[0] . " </td>
							<td> " . $row[1] . " </td>
							<td> " . $row[2] . " </td>
							<td> " . $row[3] . " </td>
							<td> " . $row[4] . " </td>
                                                        <td> " . $row[5] . " </td>
							<td><a onclick='cargarModificar(' . $row[0] . ');'>Modificar</a><br><a onclick='eliminar(' . $row[0] . ');'>Eliminar</a></td>

							</tr>";

            echo $contenido;
        }
        echo '</table>';
    }

       public function consultarParametro($pro_parametro) {

        //CONEXION CON LA BASE DE DATOS 
        // CONSULTA CASE DE DATOS 

        $consulta_cliente = "select pk_pro_codigo,pro_nombre,pro_telefono,pro_direccion,pro_correo,pro_pagina_web from proveedores where pk_pro_codigo like '%".$pro_parametro."%' or  pro_nombre like '%".$pro_parametro."%' or   pro_telefono like '%".$pro_parametro."%' or   pro_direccion like '%".$pro_parametro."%' or pro_correo like '%".$pro_parametro."%' or pro_pagina_web like '%".$pro_parametro."%'";

        if (!$result = $this->conexion->ejecutarQuery($consulta_cliente)) {
            echo $conexion->error;
        } 
        
        
        
        
        
        echo '  <table class="table table-striped">
                                <tr>
                                    <td> CODIGO PROVEEDOR</td>
                                    <td> NOMBRE PROVEEDOR </td>
                                    <td> TELEFONO PROVEEDOR</td>
                                    <td> DIRECCION </td>
                                    <td> CORREO</td>
                                    <td>PAGINA WEB</td>
                                </tr>';
        while ($row = mysqli_fetch_array($result)) {
            $contenido = "<tr>
							<td> " . $row[0] . " </td>
							<td> " . $row[1] . " </td>
							<td> " . $row[2] . " </td>
							<td> " . $row[3] . " </td>
							<td> " . $row[4] . " </td>
                                                        <td> " . $row[5] . " </td>
							
							</tr>";

            echo $contenido;
        }
        echo '</table>';
    }

    //fin del ciclo

    public function eliminar($pro_codigo) {
        $sql = " DELETE FROM proveedores where pk_pro_codigo=" . $pro_codigo . "";


        $query = $this->conexion->ejecutarQuery($sql);
    }

}
