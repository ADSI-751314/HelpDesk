
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of equipo_calss
 *
 * @author Sena
 */
class equipo_class {
    //put your code here
    private $nombre;
    private $precio;
    private $numSerie;
    function __construct($nombre, $precio, $numSerie) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->numSerie = $numSerie;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getNumSerie() {
        return $this->numSerie;
    }

    public function setNumSerie($numSerie) {
        $this->numSerie = $numSerie;
    }



}

?>
