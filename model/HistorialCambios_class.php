<?php

include 'conexion_class.php';

class HistorialCambios_class {
    //put your code here
    private $conexion;
    public function __construct()
    {
           $this->conexion = new conexion_class();
           $this->conexion->conexion();
    }
    
    //metodo que recibe los valores enviados desde la el controlador de garantias para ser guardados en la bd
    public function guardar($pk_htc_codigo,$htc_fecha,$htc_hora,$htc_descripcion)
    {
       $sql =  "INSERT INTO historial_cambios VALUES ('$pk_htc_codigo','$htc_fecha','$htc_hora','$htc_descripcion')";
       
       // $query = $this->conexion->ejecutarQuery($sql);
        if(!$query = $this->conexion->ejecutarQuery($sql)){
           echo 'error';
        }
        
//        while ($row = mysqli_fetch_array($query)) {
//            if ($row[0] >= 1){
//                   echo '<div class="alert alert-success alert-dismissable alerta">
//        <button type="button" class="close" data-dismiss="alert">&times;</button>
//        <strong>¡El Codigo!</strong> de registro ya existe.
//        </div>';
//            }
//        }
       
        if ($query == '1') {
        echo '<div class="alert alert-success alert-dismissable alerta">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Bien!</strong> Dato agregado Correctamente.
        </div>';
  
    }
    
//    else if (pk_htc_codigo >1){
//        echo 'el resgistro ya existe';
//        
//    }
 else {
     echo "Ocurrio un problema por favor vuelva a intentar o contactese con el administrador ";
        
    }
    }
     //metodo que me consulta la peticion enviada desde el formulario
    public function consultar() {

        $consultarHisotorial = "SELECT pk_htc_codigo,htc_fecha,htc_hora,htc_descripcion FROM historial_cambios";

        if (!$result = $this->conexion->ejecutarQuery($consultarHisotorial)) {
            echo $conexion->error;
        } 
        echo '<div class="panel panel-default" id="mostarFormulario2" >
             <div class="panel-heading">Lista de Historial</div>
            

            <table class="table">
                             
                                <tr>
                                    <td class="head_table"> Codigo Historial </td>
                                    <td class="head_table"> Fecha Historial </td>
                                    <td class="head_table"> Hora Historial</td>
                                    <td class="head_table"> Descripcion Historial </td>
                                
                            </tr>';
       
                
        while ($row = mysqli_fetch_array($result)) {
            

              $contenido = "<tr>
                                                        <td> " . $row[0] . " </td>
                                                        <td> " . $row[1] . " </td>
                                                        <td> " . $row[2] . " </td>
                                                        <td> " . $row[3] . " </td>                                                 
                                                         </tr>";

            echo $contenido;
        
      
            
        }
        
         '</table>';
        echo'</div>';
        

    }
    
        public function consultaFiltro($PkHtCodigo,$fecha,$htcHora,$htcDescripcion) {

        //CONEXION CON LA BASE DE DATOS 
        // CONSULTA CASE DE DATOS 
       
        $consultarHisotorial = "SELECT pk_htc_codigo,htc_fecha,htc_hora,htc_descripcion FROM historial_cambios where"
                . " pk_htc_codigo ='$PkHtCodigo' or htc_fecha='$fecha' or htc_hora='$htcHora'"
                . " or htc_descripcion ='$htcDescripcion'";
               
        
        if (!$result = $this->conexion->ejecutarQuery($consultarHisotorial)) {
            echo $conexion->error;
              
        }
             echo '<div class="panel panel-default" >
             <div class="panel-heading">Lista de Historial</div>
            

            <table class="table">
                             
                                <tr>
                                    <td class="head_table"> Codigo Historial </td>
                                    <td class="head_table"> Fecha Historial </td>
                                    <td class="head_table"> Hora Historial</td>
                                    <td class="head_table"> Descripcion Historial </td>
                                
                            </tr>';
       
                
        while ($row = mysqli_fetch_array($result)) {
            

              $contenido = "<tr>
                                                        <td> " . $row[0] . " </td>
                                                        <td> " . $row[1] . " </td>
                                                        <td> " . $row[2] . " </td>
                                                        <td> " . $row[3] . " </td>                                                 
                                                         </tr>";

            echo $contenido;
        
      
            
        }
        
         '</table>';
        echo'</div>';
        
        }
        
        function  modificar($pk_htc_codigo,$htc_fecha,$htc_hora,$htc_descripcion){
            
             $sql="UPDATE historial_cambios SET htc_fecha = '".$htc_fecha."',
                                   htc_hora = '".$htc_hora."',
                                   htc_descripcion = '".$htc_descripcion."'                                   
                                   WHERE pk_htc_codigo = '".$pk_htc_codigo."'";
             
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

        

    function ModalMoficar($PkHtCodigo){
        $sql = "SELECT pk_htc_codigo,htc_fecha,htc_hora,htc_descripcion FROM historial_cambios where"
                . " pk_htc_codigo =$PkHtCodigo";
   
     $query = $this->conexion->ejecutarQuery($sql);
    if (!$result = $this->conexion->ejecutarQuery($sql)) {
        echo $conexion->error;
    }else{
       
         while ($row = mysqli_fetch_array($result)) {
             
            echo  "<div class='form-group'>
                  <label>Codigo</label>
                  <span class='validacion'></span>
                  <input id='txt_pkCodigo' class='form-control' required='' readonly='' value='".$row[0]."'>
                </div>";
              
            echo  "<div class='form-group'>
                  <label>Fecha</label>
                  <input  type='date' id='dte_fecha' class='form-control datepicker' required='' value='".$row[1]."'>
                </div>";
            
            echo "  <div class='form-group'>
                  <label>Hora</label>
                  <input id='tim_hora' type='time' class='form-control' required='' value='".$row[2]."'>
                </div>";
       
            echo " <div class='form-group'>
                  <label>Descripcion </label>
                  <input id='txta_descripcion' class='form-control' required='' title='Debe ingresar' value='".$row[3]."'>
                </div>";
       
               echo" <button type='submit' id='btn_actualizar' class='btn btn-info btn-lg btn_inventario ' 
                          data-dismiss='modal' class='btn btn-lg btn-primary nav nav-justified'>
                      <span class='glyphicon glyphicon-edit ' 
                        aria-hidden='true'></span> Actualizar
                </button>";     
             
          
        
         }
    }
}

function  ConsultarModificar(){
    
     $consultarHisotorial = "SELECT pk_htc_codigo,htc_fecha,htc_hora,htc_descripcion FROM historial_cambios";

        if (!$result = $this->conexion->ejecutarQuery($consultarHisotorial)) {
            echo $conexion->error;
        } 
         
         echo ' <div class="panel panel-default">
        <div class="panel-heading">Lista de Historial de Cambios</div>
        <table class="table">
          <thead>
            <tr>
              <th class="head_table">Codigo</th>
              <th class="head_table">Fecha</th>
              <th class="head_table">Hora</th>
              <th class="head_table">Descripcion</th>
              <th class="head_table">Acciones</th>
              </tr>
          </thead>';
       while ($row = mysqli_fetch_array($result)) {
           
             $contenido = "<tr >
                             <td > ". $row[0] . "</td>
                            <td> ". $row[1] . "</td>
                            <td> ". $row[2] . "</td>
                            <td> ". $row[3] . "</td>
                              <td> <a class='btn btn-primary btn-lg btn_modificar_eliminar col-xs-12' 
                                                       id='btn_modificar' "."data-value='".$row[0]."' class=''>
                                                           <i class='glyphicon glyphicon-edit'></i>Modificar<a/></td>
                   </tr>";
             echo $contenido;
           
       }
           '</table>';
        echo'</div>';
       }    
       
       
       function  ConsultarEliminar(){
    
     $consultarHisotorial = "SELECT pk_htc_codigo,htc_fecha,htc_hora,htc_descripcion FROM historial_cambios";

        if (!$result = $this->conexion->ejecutarQuery($consultarHisotorial)) {
            echo $conexion->error;
        } 
         
         echo ' <div class="panel panel-default">
        <div class="panel-heading">Lista de Historial de Cambios</div>
        <table class="table">
          <thead>
            <tr>
              <th class="head_table">Codigo</th>
              <th class="head_table">Fecha</th>
              <th class="head_table">Hora</th>
              <th class="head_table">Descripcion</th>
              <th class="head_table">Acciones</th>
              </tr>
          </thead>';
       while ($row = mysqli_fetch_array($result)) {
           
             $contenido = "<tr >
                             <td > ". $row[0] . "</td>
                            <td> ". $row[1] . "</td>
                            <td> ". $row[2] . "</td>
                            <td> ". $row[3] . "</td>
                              <td> <a class='btn btn-primary btn-lg btn_modificar_eliminar col-xs-12'data-target='#confirm-submit' 
                                  data-toggle='dropdown' aria-expanded='false' 
                                                       id='btn-inv-eliminar' "."data-value='".$row[0]."' class=''>Eliminar</td>
                   </tr>";
             echo $contenido;
           
       }
           '</table>';
        echo'</div>';
       }        
          
          
    
          
    
        //metodo que me elimina el campo seleccionado desde el formulario
    public function eliminar($pk_htc_codigo)
    {
        $sql="DELETE FROM historial_cambios WHERE pk_htc_codigo = '".$pk_htc_codigo."'";
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
     //metodo para modificar el campo seleccionado
   
    public function consultaFiltroEliminarModificarCrear($PkHtCodigo,$fecha) {

            
        $consultarHisotorial = "SELECT pk_htc_codigo,htc_fecha,htc_hora,htc_descripcion FROM historial_cambios where"
                . " pk_htc_codigo ='$PkHtCodigo' or htc_fecha='$fecha' ";
               
               
        
        if (!$result = $this->conexion->ejecutarQuery($consultarHisotorial)) {
            echo $conexion->error;
              
        }
             echo '<div class="panel panel-default" >
             <div class="panel-heading">Lista de Historial</div>
            

            <table class="table">
                             
                                <tr>
                                    <td class="head_table"> Codigo Historial </td>
                                    <td class="head_table"> Fecha Historial </td>
                                    <td class="head_table"> Hora Historial</td>
                                    <td class="head_table"> Descripcion Historial </td>
                                
                            </tr>';
       
                
        while ($row = mysqli_fetch_array($result)) {
            

              $contenido = "<tr>
                                                        <td> " . $row[0] . " </td>
                                                        <td> " . $row[1] . " </td>
                                                        <td> " . $row[2] . " </td>
                                                        <td> " . $row[3] . " </td>                                                 
                                                         </tr>";

            echo $contenido;
        
      
            
        }
        
         '</table>';
        echo'</div>';
        
        }
}