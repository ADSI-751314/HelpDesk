<?php

include 'conexion_class.php';

class garantias_class1 {

    private $conexion;

    public function __construct() {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
    }
//Funcion para almacenar nuevo registro en nuestra BD en la tabla de garantias
    public function guardar($pk_gar_codigo, $gar_tipo, $gar_fecha_inicio, $gar_fecha_fin, $gar_descripcion, $fk_equ_codigo) {
        $sql = "INSERT INTO garantias VALUES('$pk_gar_codigo','$gar_tipo','$gar_fecha_inicio','$gar_fecha_fin','$gar_descripcion','$fk_equ_codigo')";
        
      
        if(!$query = $this->conexion->ejecutarQuery($sql)){
           echo 'error';
        }
       
         if ($query == '1') {
        echo '<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Bien!</strong> Dato agregado Correctamente.
        </div>';
    } else if ($query == '-1'){
        echo '<div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡UPS!</strong> Ha ocurrido un error.
        </div>';
    }
    }

    //Función con la cual modificamos los campos en nuestra base de datos
    public function modificar($pk_gar_codigo, $gar_tipo, $gar_fecha_inicio, $gar_fecha_fin, $gar_descripcion, $fk_equ_codigo) {
        $sql = " UPDATE garantias SET gar_tipo='" . $gar_tipo . "',gar_fecha_inicio='" . $gar_fecha_inicio . "',gar_fecha_fin='" . $gar_fecha_fin . "',gar_descripcion='" . $gar_descripcion . "',fk_equ_codigo='".$fk_equ_codigo."' where pk_gar_codigo='" . $pk_gar_codigo . "'";


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

    //funcion que nos sirve para consultar la información en nuestra BD
    public function consultar(){

        
        

        $sql = "SELECT pk_gar_codigo, gar_tipo, gar_fecha_inicio, gar_fecha_fin, gar_descripcion, equ_nombre FROM `garantias` INNER join equipos on garantias.fk_equ_codigo = equipos.pk_equ_codigo";

        if (!$result = $this->conexion->ejecutarQuery($sql)) {
            echo error;
        }else{ 
        echo '  <table class="table  table-striped table-resposive">
                                <tr>
                                    <td> GARANTÍA CODIGO</td>
                                    <td> GARANTÍA TIPO </td>
                                    <td> FECHA INICIO GARANTÍA</td>
                                    <td> FECHA FIN GARANTÍA </td>
                                    <td> DESCRIPCION GARANTÍA</td>
                                    <td> EQUIPO NOMBRE</td>
                                    <td>OPCIONES</td>
                            </tr>';
       
            //mostramos los datos consultados    
        while ($row = mysqli_fetch_array($result)) 
                {
            

              $contenido = "<tr>
                                                        <td> " . $row[0] . " </td>
                                                        <td> " . $row[1] . " </td>
                                                        <td> " . $row[2] . " </td>
                                                        <td> " . $row[3] . " </td>
                                                        <td> " . $row[4] . " </td>
                                                        <td> " . $row[5] . " </td>
                                                        <td> <a onclick='editar(" . $row[0] . ");' name='btnmodificar' value='modificar' class=''>Modificar</a><br><a onclick='eliminar(" . $row[0] . ");'>Eliminar</a></td>

                            </tr>";

            echo $contenido;
        
      
                }   
        }
        
        
        echo '</table>';
    }

        //Metodo que nos abre la ventana MODAL con los datos cargados para modificar el dato de la garant{ia que necesita el usuario
    function garantiasModificar($pk_gar_codigo) {
           //consulta que me trae los datos desde la BD para ser mostrados en el formulario MODAL
        $sql = "SELECT pk_gar_codigo, gar_tipo, gar_fecha_inicio, gar_fecha_fin, gar_descripcion, fk_equ_codigo from garantias WHERE pk_gar_codigo = $pk_gar_codigo ";
                 
  
        if (!$resultado = $this->conexion->ejecutarQuery($sql)) {
            echo $conexion->error;
        } else {

                 
            while ($row = mysqli_fetch_array($resultado) ) {

                        
              //Consulta para adquirir el nombre de la tabla foránea Equipos
            $sql2 = "SELECT equ_nombre FROM `equipos` where pk_equ_codigo = $row[5]";
                 $resultado2 = $this->conexion->ejecutarQuery($sql2);
                 $row2=mysqli_fetch_array($resultado2);
                 
                 
            
           
            
            
        echo   '<div class="modal fade" id="modal2" role="dialog" tabindex="-1" aria-hidden="true">
             <div class="modal-dialog">
              <div class="modal-content">
                <form role="form" action="" id="frmGarantiasM" name="frmGarantiasN" onsubmit="cargarmodificar1(); return false">
                    <div class="col-lg-12">
                    
                    <div class="form-group">
                    <p class="bg-info">Codigo de la Garantía</p>
                    <input id="codigo" class="form-control" placeHolder="Ingrese el numero de la nueva garantía" value="'.$row[0].'" disabled></input> 
                    </div>
                    
                    <div class="form-group">
                        <p class="bg-info">Tipo de Garantía</P>
                        <input id="tipo" class="form-control" value="'.$row[1].'" requiered></input>
                    </div>  
                    
                    <div class="form-group">
                        <p class="bg-info">Fecha de inicio de la garantía:</p>
                        <input type="date" id="FechaInicio" class="form-control" value="'.$row[2].'" required></input>
                    </div>
                    
                    <div class="form-group">
                        <p class="bg-info">Fecha de fin de la garantía:</p>
                        <input type="date" id="FechaFin" class="form-control" value="'.$row[3].'" required></input>
                    </div>
                    
                    <div class="form-group">
                        <p class="bg-info">Descripción de la garantía</p>
                        <input id="descripcion" class="form-control" value="'.$row[4].'" placeHolder="Ingrese la descripción de la garantía" required></input>
                    </div>
                    
                    <div class="form-group">
                        <p class="bg-info">Tipo de Equipo</p>
                       <select id="tipoEquipo" class="form-control" title="Tipo Equipo"  required>
                        <option value="'.$row[5].'"><label>'.$row2[0].'</label></option>                          
                        <option value="1">Samsung</option>
                        <option value="2">Compaq portatil</option>
                        
                     </select>                   
                    </div>
                    
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Modificar</button>
                        
                    
                   </div> 
                </form>
                
            </div>
        </div>

</div>';
        
        
            }
        }
    }

   //Metodo para eliminar la garantia que seleccionemos en el formulario

    public function eliminar($codigo) {
        $sql = " DELETE FROM garantias where pk_gar_codigo = $codigo";


        $query = $this->conexion->ejecutarQuery($sql);
                  if ($query == '1') {
        echo '<div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Bien!</strong> Registro Eliminado con exito .
        </div>';
    } else {
        echo '<div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡UPS!</strong> Ha ocurrido un error.
        </div>';
    }
    }
    
   

}
