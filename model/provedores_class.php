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
    }

    public function modificar($pro_codigo, $pro_nombre, $pro_telefono, $pro_direccion, $pro_correo, $pro_pagina_web) {
        $sql = " UPDATE proveedores SET pro_nombre='" . $pro_nombre . "', pro_telefono='" . $pro_telefono . "',pro_direccion='" . $pro_direccion . "',pro_correo='" . $pro_correo . "',pro_pagina_web='" . $pro_pagina_web . "' where pk_pro_codigo='" . $pro_codigo . "'";


        $query = $this->conexion->ejecutarQuery($sql);
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
