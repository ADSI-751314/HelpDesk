<?php

include 'conexion_class.php';

class base_conocimiento_class {

    private $conexion;

    public function _construct() {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
    }

    public function consultar($pk_det_codigo) {


        $sql = "select * from detalles_servicios";
        $query = $this->conexion->ejecutarQuery($sql);


        //CONEXION CON LA BASE DE DATOS 
        $conecta = $this->conexion();

        // CONSULTA CASE DE DATOS 

        $consulta_detalles_servicios = "select pk_det_codigo,det_descripcion,det_fecha from detalles_servicios";

        //ejecucion de la consulta

        $fuente_helpdesk = mysql_query($consulta_helpdesk, $conecta);

        //obtener la cantidad de registros
        $cantidad_detalles_servicios = mysql_num_rows($fuente_detalles_servicios);


        // contruir un ciclo que recorra los registros que valla desde cero hasta las cantidad de clientes
        for ($i = 0; $i < $cantidad_detalles_servicios; $i++) {
            $registro_detalles_servicios = mysql_fetch_row($fuente_helpdesk);

            $contenido = "<tr>
							<td> " . $registro_detalles_servicios[0] . " </td>
							<td> " . $registro_detalles_servicios[1] . " </td>
							<td> " . $registro_detalles_servicios[2] . " </td>
							<td> " . $registro_detalles_servicios[3] . " </td>
							</tr>";

            echo $contenido;
        }
        //fin del ciclo
    }
}
    