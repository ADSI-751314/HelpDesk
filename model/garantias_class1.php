<?php

include 'conexion_class.php';

class garantias_class1 {

    private $conexion;

    public function __construct() {
        $this->conexion = new conexion_class();
        $this->conexion->conexion();
    }
//aqui vamos en el video en el minuto 23:30
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

    
    function cargarModificar($id) {
  
  
    $sql = "select pk_pro_codigo,pro_nombre,pro_telefono,pro_direccion,pro_correo,pro_pagina_web from proveedores where pk_pro_codigo = $id";
   
     $query = $this->conexion->ejecutarQuery($sql);
    if (!$result = $this->conexion->ejecutarQuery($sql)) {
        echo $conexion->error;
    }else{
       
         while ($row = mysqli_fetch_array($result)) {
       
            echo "<h1> Up Date Proveedores</h1>";
            
            echo  "<div> <label class=''>Codigo Provedor</label> <input type='text' id='txtPro_codigo' value=\"$row[0]\"> </input></div>";
              
            echo  "<div> <label class=''>Nombre </label> <input type='text' id='txtPro_nombre' value=".$row[1]."> </input></div>";
            
            echo "<div> <label class=''>Telefono</label> <input type='text' id='txtPro_telefono' value=".$row[2]."> </input></div>";
       
            echo "<div> <label class=''>Direccion </label> <input type='text' id='txtPro_direccion' value=".$row[3]."> </input></div>";
       
            echo "<div> <label class=''>Correo </label> <input type='text' id='txtPro_correo' value=".$row[4]."> </input></div>";
       
            echo "<div> <label class=''>Pagina WEb</label> <input type='text' id='txtpagina_web' value=".$row[5]."> </input></div>";
            
            echo "<a onclick='editar();'  id='btnmodificar' value='modificar' class='btn btn-lg btn-success'>Modificar</a>"  ;   

         }
    }
}
    
    
    
    

    
    
    
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

    public function consultar(){

        //CONEXION CON LA BASE DE DATOS 
        // CONSULTA CASE DE DATOS 

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

    function garantiasModificar($pk_gar_codigo) {

        $sql = "SELECT pk_gar_codigo, gar_tipo, gar_fecha_inicio, gar_fecha_fin, gar_descripcion, fk_equ_codigo from garantias WHERE pk_gar_codigo = $pk_gar_codigo ";
                 
  
        if (!$resultado = $this->conexion->ejecutarQuery($sql)) {
            echo $conexion->error;
        } else {

                 
            while ($row = mysqli_fetch_array($resultado) ) {

                        

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

    //fin del ciclo

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
