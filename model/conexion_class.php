<?php

require_once 'constants.php'; // se incluye las constantes para poder establecer la conexion.

class conexion_class {
    private $conexion; // se declara la variable privada de conexion.

    /* Se crea metodo para establecer la conexion con la base de datos */
    public function conexion() {
        // se valida sin existe una conexion.
        if (!isset($this->conexion)) {
            // se valida si sucede un error al establecer la conexion, de ser asi se retorna el error dentro del catch.
            try {
                // se usar las constantes definidas en constants.php para establecer la conexion
                $this->conexion = (mysql_connect(HOST, USER, PASSWORD, PORT)) or die(mysql_error());
                mysql_select_db(DATABASE, $this->conexion) or die(mysql_error());

                // se retorna la conexion
                return $this->conexion;

                // si ocurre un error en la conexion se retorna el mensaje de error.    
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
    }
    // Metodo para insertar, actualizar, borrar datos en la DB.
    public function ejecutarQuery($sql) {
        // se valida si sucede un error al procesar la peticion
        try {
            $resultado = mysql_query($sql, $this->conexion);
            if (!$resultado) {
                echo 'MySQL Error: ' . mysql_error();
                exit;
            }
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        }
        mysql_close($this->conexion);
    }
    // Metodo para obtener los resultados de una consulta en la DB.
    public function consultarQuery($sql) {
        // se valida si sucede un error al procesar la peticion
        try {
            // se ejecuta la consulta en la base de datos
            $consulta = mysql_query($sql, $this->conexion);
            // se valida si ocurre un error en la consulta
            if (!$consulta) {
                // se retorna el error que ocurrio al realizar la consulta
                return "MYSQL Error:" . mysql_error($consulta);
            } else { 
                return mysql_fetch_assoc($consulta);
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        mysql_close($this->conexion);
    }
}
