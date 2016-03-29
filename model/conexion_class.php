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
                // se usan las constantes definidas en constants.php para establecer la conexion
                $this->conexion = (mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT)) or die(mysqli_connect_errno());

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
            $resultado = mysqli_query($this->conexion, $sql);
            if (!$resultado) {
                echo 'MySQL Error: ' . mysqli_error($this->conexion);
                exit;
            }
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        }
        mysqli_close($this->conexion);
    }

    // Metodo para obtener los resultados de una consulta en la DB.
    public function consultarQuery($sql) {
        // se valida si sucede un error al procesar la peticion
        try {
            // se ejecuta la consulta en la base de datos
            $consulta = mysqli_query($this->conexion, $sql);

            // se valida si ocurre un error en la consulta
            if (!$consulta) {
                // se retorna el error que ocurrio al realizar la consulta
                return "MYSQL Error:" . mysqli_error($this->conexion);
            } else {
                
                if (mysqli_num_rows($consulta)) {
                    //Creando array donde se almacenaran los datos.
                    $array = [];

                    //Realizando el recorrido a la matriz de resultados
                    while ($fila = mysqli_fetch_assoc($consulta)) {
                        array_push($array, $fila);
                    }
                    return $array;
                } else {
                    return false;
                }
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        mysqli_close($this->conexion);
    }
}
