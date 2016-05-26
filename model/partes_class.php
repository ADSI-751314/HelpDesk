<?php

include '../../HelpDesk/model/conexion_class.php';
class partes_class{
    
     private $conexion;

    public function __construct() {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
    }
    
    
    function cargarAgregar(){
 
       
            echo "<h1>Registro de Partes</h1>";
            
            echo  "<div> <label class=''>Serial</label> <input type='text' id='txtSerial' class='form-control' > </input></div>";
              
            echo  "<div> <label class=''>Marca </label> <input type='text' id='txtMarca' class='form-control'> </input></div>";
            
            echo "<div> <label class=''>Descripcion</label> <input type='text' id='txtDescripcion' class='form-control' > </input></div>";
       
            echo  "<div> <label class=''>Estado </label> <select id='txtEstado' class='form-control'>"
                    . "<option values=''>Seleccione El estado</option>"
                    . "<option values=''>Nueva</option>"
                    . "<option values=''>Nueva</option>"
                    ."<option values=''>Averiada</option>"
                    ."<option values=''>Reparada</option>"
                    ."<option values=''>Fin de vida</option>"
                    . " </select></div>";
       
            echo "<div> <label class=''>Codigo del equipo asignado </label> <input type='text' id='txtFk_equipo' class='form-control'> </input></div>";
       
            echo "<div> <label class=''>Codigo del Historial de cambios</label> <input type='text' id='txtFk_historial' class='form-control'> </input></div>";
            
            echo "<br><a onclick='guardar1();'  name='btnAgregar' value='agregar' class='btn btn-lg btn-primary  nav-justified'>Agregar</a>"  ;   

         }

    public function guardar($pte_codigo,$pte_seria, $pte_marca,$pte_descripcion,$pte_Estado,$fk_equi_codigo,$fk_htc_codigo) {
        
                $sql = " insert into PARTES_EQUIPOS values ('$pte_codigo','$pte_seria', '$pte_marca','$pte_descripcion','$pte_Estado','$fk_equi_codigo','$fk_htc_codigo')";
       
       // $query = $this->conexion->ejecutarQuery($sql);
        if(!$query = $this->conexion->ejecutarQuery($sql)){
           echo 'error';
        }
       
        if ($query == '1') {
        echo '<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Bien!</strong> Dato agregado Correctamente.
        </div>';
  
    }
    
    
    
    
    
    
    
    
    
    
    
}

}