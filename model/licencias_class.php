<?php


include  "conexion_class.php";

class licencias_class {
    
  
    private $pk_lic_codigo;
    private $lic_nombre;
    private $lic_fecha_compra;
    private $lic_fecha_caducidad;
    private $lic_precio;
    private $lic_cobertura;
    private $conexion;

    public function __construct() {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
    }

    public function crear($pk_lic_codigo, $lic_nombre, $lic_fecha_compra, $lic_fecha_caducidad, $lic_precio, $lic_cobertura) {
       
        $sql = "INSERT INTO licencias values('$pk_lic_codigo','$lic_nombre','$lic_fecha_compra','$lic_fecha_caducidad','$lic_precio','$lic_cobertura')";

        $query = $this->conexion->ejecutarQuery($sql);
    }

    public function actualizar($pk_lic_codigo, $lic_nombre, $lic_fecha_compra, $lic_fecha_caducidad, $lic_precio, $lic_cobertura) {
        $sql = " UPDATE licencias SET ('$pk_lic_codigo','$lic_nombre','$lic_fecha_compra','$lic_fecha_caducidad','$lic_precio','$lic_cobertura') where pk_lic_codigo='" . $lic_codigo ."'";

        $query = $this->conexion->ejecutarQuery($sql);
    }

    public function consultar($pk_lic_codigo) {

        //CONEXION CON LA BASE DE DATOS 

        include_once ("conexion.php");
        $objconex = new Conexion ();
        $conecta = $objconex->conectar();

        // CONSULTA CASE DE DATOS 

        $consulta_licencias = "select pk_lic_codigo,lic_nombre,lic_fecha_compra,lic_fecha_caducidad,lic_precio,lic_cobertura from licencias";

        //ejecucion de la consulta

        $fuente_helpdesk = mysql_query($consulta_helpdesk, $conecta);

        //obtener la cantidad de registros
        $cantidad_licencias = mysql_num_rows($fuente_licencias);


        // contruir un ciclo que recorra los registros que valla desde cero hasta las cantidad de clientes
        for ($i = 0; $i < $cantidad_licencias; $i++) {
            $registro_licencias = mysql_fetch_row($fuente_helpdesk);

            $contenido = "<tr>
                            <td> " . $registro_licencias[0] . " </td>
                            <td> " . $registro_licencias[1] . " </td>
                            <td> " . $registro_licencias[2] . " </td>
                            <td> " . $registro_licencias[3] . " </td>
                            <td> " . $registro_licencias[4] . " </td>
                            <td> " . $registro_licencias[5] . " </td>
                            <td> " . $registro_licencias[6] . " </td>
		
                        </tr>";

            echo $contenido;
        }
        //fin del ciclo
    }

    public function eliminar($pk_lic_codigo) {
        $sql = " DELETE FROM licencias where pk_lic_codigo= '" . $pk_lic_codigo."'";


        $query = $this->conexion->ejecutarQuery($sql);
    }

}
