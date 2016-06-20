<?php

include '/conexion_class.php';

class partesEquipos_class {

    private $conexion;

    public function __construct() {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
    }

    public function guardar($pk_pte_codigo, $pte_seria, $pte_marca, $pte_descripcion, $pte_Estado, $fk_equi_codigo, $fk_htc_codigo) {

        $sql = " insert into PARTES_EQUIPOS values ('$pk_pte_codigo','$pte_seria', '$pte_marca','$pte_descripcion','$pte_Estado','$fk_equi_codigo','$fk_htc_codigo')";

        // $query = $this->conexion->ejecutarQuery($sql);
        if (!$query = $this->conexion->ejecutarQuery($sql)) {
            echo 'error';
        }

        if ($query == '1') {
            echo '<p class="alert alert-success alert-dismissable alerta">
                <strong>¡Bien!</strong> Registro Insertado Correctamente.</p>';
        }
    }

    public function MostrarPartesEquipos() {


        $sql = "select pk_pte_codigo,pte_serial,pte_marca,pte_descripcion,pte_estado,fk_equ_codigo,fk_htc_codigo"
                . " from partes_equipos";

        if (!$resultado = $this->conexion->ejecutarQuery($sql)) {
            echo $conexion->error;
        }

        echo ' <div class="panel panel-default">
        <div class="panel-heading">Lista de Partes de Equipos</div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="head_table">Codigo</th>
              <th class="head_table">Serial</th>
              <th class="head_table">Marca</th>
              <th class="head_table">Descripcion</th>
              <th class="head_table">Estado</th>
              <th class="head_table">Codigo Equipo</th>
              <th class="head_table">Codigo Historial</th>
              <th class="head_table">Acciones</th>
              </tr>
          </thead>';
        while ($row = mysqli_fetch_array($resultado)) {

            $contenido = "<tr >
                             <td > " . $row[0] . "</td>
                            <td> " . $row[1] . "</td>
                            <td> " . $row[2] . "</td>
                            <td> " . $row[3] . "</td>
                            <td> " . $row[4] . "</td>
                            <td> " . $row[5] . "</td>    
                            <td> " . $row[6] . "</td>     
                            <td> <a class='btn btn-primary btn-lg btn_modificar_eliminar ' 
                                  id='btn_modificarParte' " . "data-value='" . $row[0] . "' class=''>
                                  <i class='glyphicon glyphicon-edit'></i><a/>
                                  <a class='btn btn-danger btn-lg btn_modificar_eliminar '
                                   id='btn_eliminarParte' " . "data-value='" . $row[0] . "' class=''>
                                  <i class='glyphicon glyphicon-trash'></a></td>
                   </tr>";
            echo $contenido;
        }
        '</table>';
        echo'</div>';
    }

    public function ModalPartesModificar($pk_pte_codigo) {

        $sql = "select pk_pte_codigo,pte_serial,pte_marca,pte_descripcion,pte_estado,fk_equ_codigo,fk_htc_codigo"
                . " from partes_equipos where pk_pte_codigo = $pk_pte_codigo ";

        if (!$resultado = $this->conexion->ejecutarQuery($sql)) {
            echo $conexion->error;
        } else {


            while ($row = mysqli_fetch_array($resultado)) {

                echo ' <div class="form-group">
                                    <label>Codigo Partes</label>
                                    <span class="validacion"></span>
                                    <input id="txtPkCodigoModal" class="form-control" value="' . $row[0] . '" readonly="" >
                                </div>';

                echo ' <div class="form-group">
                                    <label>Serial</label>
                                    <input  type="text" id="txtSerialModal" class="form-control datepicker"
                                     value="' . $row[1] . '" required="">
                                </div>';

                echo '<div class="form-group">
                                    <label>Marca</label>
                                    <input id="txtMarcaModal" type="text" class="form-control"
                                     value="' . $row[2] . '"required="">
                                </div>';

                echo '<div class="form-group">
                                    <label for="comment">Descripcion:</label>
                                    <textarea class="form-control" rows="5" id="txtDescripcionModal"
                                     value="' . $row[3] . '" ></textarea>
                                </div>';


                echo ' <div class="form-group">
                                    <label>Estado </label>
                                    <input id="txtEstadoModal" class="form-control" required="" 
                                     value="' . $row[4] . '"title="Debe ingresar">
                                </div>';


                echo '<div class="form-group">
                                    <label>EQUIPO </label></br>
                               <label class="Validacion"></label>  
                                    <select id="sltEquipoModal" class="form-control" required="" title="Debe ingresar"
                                    >
                                        <option disabled="disabled" selected="selected"  >SELECCIONE---></option>
                                        <option value="1">PC-SAMSUNG</option>
                                        <option value="2">PC-ARGOM</option>
                                        <option value="3">PC-INTEL</option>


                                    </select>
                                    </div>';


                echo '  <div class="form-group">
                                    <label>CODIGO HISTORIAL DE CAMBIO </label>
                                    <select class="form-control" id="sltHistorialModal">
                                        <option disabled="disabled" selected="selected">SELECCIONE---></option>
                                        <option value="1">cambio de parte</option>
                                        <option value="2">cambio de equipo</option>
                                        <option value="3">cambio por daño</option>

                                    </select>
                                </div>';
                              
                echo '     <button type="submit" class="btn btn-info btn-lg btn_partesEquipos " 
                                        id="btn-pte-modificarPartes">
                                    <span class="glyphicon glyphicon-star "  
                                          aria-hidden="true"></span> Modificar
                                    
                                </button>';
            }
        }
    }
    public function ModifcarPartes($pk_pte_codigo, $pte_seria, $pte_marca, $pte_descripcion, $pte_Estado, $fk_equ_codigo, $fk_htc_codigo) {
        
         $sql="UPDATE partes_equipos SET pte_serial = '".$pte_seria."',
                                   pte_marca = '".$pte_marca."',
                                   pte_descripcion = '".$pte_descripcion."'
                                   ,pte_estado='".$pte_Estado."',fk_equ_codigo='".$fk_equ_codigo."'
                                   ,fk_htc_codigo='".$fk_htc_codigo."'                                       
                                   WHERE pk_pte_codigo = '".$pk_pte_codigo."'";
       
    $query = $this->conexion->ejecutarQuery($sql);
    
       if ($query == '1') {
        echo '<p class="alert alert-success alert-dismissable alerta">
                <strong>¡Bien!</strong> Registro Modificado Correctamente.
        </p>';
    } else {
        echo '<div class="alert alert-warning alert-dismissable alerta">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡UPS!</strong> Ha ocurrido un error.
        </div>';
    }
        
    }
    
    public function  ConsultaFiltro($pk_pte_codigo,$pte_serial){
        
        
        $sql = "SELECT pk_pte_codigo,pte_serial,pte_marca,pte_descripcion,pte_estado "
                . ",fk_equ_codigo,fk_htc_codigo FROM partes_equipos WHERE pk_pte_codigo ='$pk_pte_codigo' or pte_serial ='$pte_serial'  ";
              
        
         if (!$resultado = $this->conexion->ejecutarQuery($sql)) {
            echo $conexion->error;
        }

        echo ' <div class="panel panel-default">
        <div class="panel-heading">Lista de Partes de Equipos</div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="head_table">Codigo</th>
              <th class="head_table">Serial</th>
              <th class="head_table">Marca</th>
              <th class="head_table">Descripcion</th>
              <th class="head_table">Estado</th>
              <th class="head_table">Codigo Equipo</th>
              <th class="head_table">Codigo Historial</th>
              <th class="head_table">Acciones</th>
              </tr>
          </thead>';
        while ($row = mysqli_fetch_array($resultado)) {

            $contenido = "<tr >
                             <td > " . $row[0] . "</td>
                            <td> " . $row[1] . "</td>
                            <td> " . $row[2] . "</td>
                            <td> " . $row[3] . "</td>
                            <td> " . $row[4] . "</td>
                            <td> " . $row[5] . "</td>    
                            <td> " . $row[6] . "</td>     
                            <td> <a class='btn btn-primary btn-lg btn_modificar_eliminar ' 
                                  id='btn_modificarParte' " . "data-value='" . $row[0] . "' class=''>
                                  <i class='glyphicon glyphicon-edit'></i><a/>
                                  <a class='btn btn-danger btn-lg btn_modificar_eliminar '
                                   id='btn_eliminarParte' " . "data-value='" . $row[0] . "' class=''>
                                  <i class='glyphicon glyphicon-trash'></a></td>
                   </tr>";
            echo $contenido;
        }
        '</table>';
        echo'</div>';
        
        
        
        
    }
    
    public function  EliminarPartes($pk_pte_codigo){
        
        $sql = "DELETE FROM partes_equipos WHERE pk_pte_codigo='$pk_pte_codigo'";
        $query = $this->conexion->ejecutarQuery($sql);
        
        if ($query == '1'){
        echo '<div class="alert alert-success alert-dismissable alerta" >
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡El Registro!</strong> Fue Eliminado Correctamente.
        </div>';
    } else {
        echo '<div class="alert alert-warning alert-dismissable alerta" >
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡UPS!</strong> Ha ocurrido un error .
        </div>';
    }
    }
}
